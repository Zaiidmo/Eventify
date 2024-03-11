
@foreach ($events as $event)
    <div
        class="bg-gray-500 mb-6  cursor-pointer rounded-xl overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
        <a href="{{ route('events.show', $event->id) }}">
            <img src="{{ asset('storage/uploads/events/' . $event->poster) }}" alt="Event Poster"
                class="w-full h-96 object-cover" />
        </a>

        <div class="p-6 absolute bottom-0 left-0 right-0 bg-white opacity-90">
            <span class="text-sm block text-gray-600 mb-2">{{ \Carbon\Carbon::parse($event->date)->diffForHumans() }}
                | BY
                {{ $event->user->name }}</span>
            <h3 class="text-xl font-bold text-[#333]">{{ $event->title }}</h3>
            <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                <p class="text-gray-600 text-sm">{{ $event->category->name }}</p>
            </div>
        </div>
    </div>
@endforeach