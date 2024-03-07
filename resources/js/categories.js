document.getElementById('create-category-toggler').addEventListener('click', function() {
    document.getElementById('create-category-popup').classList.toggle('hidden');
});
document.getElementById('creation-popup-close').addEventListener('click', function() {
    document.getElementById('create-category-popup').classList.add('hidden');
});
d