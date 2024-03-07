<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:manager');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countCategories = Category::count();
        $categories = Category::paginate(8);
        $authUser = auth()->user();
        return view('dashboard.categories', [
            'categories' => $categories,
            'authUser' => $authUser,
            'countCategories' => $countCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $validatedData = $request->validated();
        $fileName = $request->name . '.' . $request->file('image')->getClientOriginalName();
        $request->image->storeAs('public/uploads/categories', $fileName);
        $validatedData['image'] = $fileName;
        Category::create($validatedData);
        return redirect()->route('categories')->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validatedUpdatedData = `$request->validated();
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
