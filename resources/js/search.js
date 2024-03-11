$(document).ready(function() {
    $('#search').on('keyup', function() {
        fetchProducts(1);
    });

    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetchProducts(page);
    });

    function fetchProducts(page) {
        var keyword = $('#search').val().trim();
        $.ajax({
            url: '/search',
            data: {
                page: page,
                keyword: keyword
            },
            success: function(data) {
                $('#event_container').html(data);
            }
        });
    }
});