document.getElementById('toggle-update-modal').addEventListener('click', function() {
    document.getElementById('update-popup').classList.toggle('hidden');
});
document.getElementById('update-popup-close').addEventListener('click', function() {
    document.getElementById('update-popup').classList.add('hidden');
});
d