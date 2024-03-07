// Display Create Modal
document.getElementById('create-category-toggler').addEventListener('click', function() {
    document.getElementById('create-category-popup').classList.toggle('hidden');
});

document.getElementById('creation-popup-close').addEventListener('click', function() {
    document.getElementById('create-category-popup').classList.add('hidden');
});

// Display Edit Modal
var editButtons = document.querySelectorAll('.edit-category');
editButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        var id = button.getAttribute('data-category-id');
        var modal = document.getElementById('update-category-popup-' + id);
        if (modal) {
            modal.classList.toggle('hidden');
        }
    });
});

// Close Modals
var closeButtons = document.querySelectorAll('.update-popup-close');
closeButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        var modal = button.closest('.update-category-popup');
        if (modal) {
            modal.classList.add('hidden');
        }
    });
});
