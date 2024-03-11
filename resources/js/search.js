$(document).ready(function() {
    // Search by keyword
    $('#search').on('keyup', function() {
        fetchProducts(1);
    });

    // Filter by category
    $('#categories').on('change', function() {
        fetchProducts(1);
    });

    // Pagination
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetchProducts(page);
    });

    function fetchProducts(page) {
        var keyword = $('#search').val().trim();
        var category = $('#categories').val();
        $.ajax({
            url: '/search',
            data: {
                page: page,
                keyword: keyword,
                category: category // Include category filter
            },
            success: function(data) {
                $('#event_container').html(data);
            }
        });
    }
});
