jQuery(document).ready(function () {

    jQuery(function ($) {
        var $grid = $('.grid').masonry({
            itemSelector: '.grid-item',
            columnWidth: '.grid-item'
        });
        $grid.imagesLoaded().progress(function () {
            $grid.masonry('layout');
        });

        $(".load-more").each(function () {
            $(this).click(function () {

                var perPage = $(this).data('per-page');
                var currentPage = $(this).data('current-page');
                var layout = $(this).data('layout');
                var button = $(this),
                    data = {
                        'action': 'loadmore_news',
                        'per-page': perPage,
                        'current-page': currentPage,
                        'layout': layout
                    };

                $.ajax({
                    url: bekey_loadmore_params.ajaxurl,
                    data: data,
                    type: 'POST',
                    beforeSend: function (xhr) {
                        button.text('Loading...');
                    },
                    success: function (data) {

                        if (data) {
                            var $items = $(data.content),
                                $container = $('.grid');
                            $container.append($items).imagesLoaded(function () {
                                $container.masonry("appended", $items).masonry("layout")
                            })


                            if (data.max_pages === data.paged) {
                                button.remove();
                            } else {
                                button.text('Load More');
                                button.data('current-page', data.paged);
                            }

                        } else {
                            button.remove();
                        }
                    }
                });

                var scrollBottom = $(window).scrollTop() + $('footer').offset().top + $(document).height() ;
                $('html, body').animate({scrollTop: scrollBottom}, 2000);
            });
        });
    });

});