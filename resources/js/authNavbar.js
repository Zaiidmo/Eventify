document.getElementById('user-menu-button').addEventListener('click', function() {
    document.getElementById('user-dropdown').classList.toggle('hidden');
});
document.addEventListener('click', function(event) {
    const userMenuButton = document.getElementById('user-menu-button');
    const userDropdown = document.getElementById('user-dropdown');
    
    // Check if the clicked element is the user menu button or its descendant
    const isUserMenuButtonClicked = event.target === userMenuButton || userMenuButton.contains(event.target);

    if (!isUserMenuButtonClicked) {
        // Check if the dropdown is visible before hiding it
        if (!userDropdown.classList.contains('hidden')) {
            userDropdown.classList.add('hidden');
        }
    }
});
