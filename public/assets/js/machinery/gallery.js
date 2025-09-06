$(document).ready(function () {
    $(".slider-owl").owlCarousel({
        items: 1,
        // autoplay: true,
        // autoplayTimeout: 3000,
        // autoplayHoverPause: true,
        dots: false,
        nav: true,
        // loop: true,
        responsive: {
            0: {
                items: 1 // Number of items to display on small screens (width less than 600px)
            },
            600: {
                items: 2 // Number of items to display on screens with width 600px or more
            },
            1000: {
                items: 4 // Number of items to display on screens with width 1000px or more
            },
            1600: {
                items: 5 // Number of items to display on screens with width 1000px or more
            }
        }
    });
});
$(document).keydown(function(e) {
    if (e.keyCode === 39) { // Right arrow key
        $('.owl-carousel').trigger('next.owl.carousel');
    }
});
$(document).keydown(function(e) {
    if (e.keyCode === 37) { // Left arrow key
        $('.owl-carousel').trigger('prev.owl.carousel');
    }
});

// View Gallery
$(document).on('click', '.gallery_modal_img', function () {
    var glyid = $(this).data('id');
    var id;
    var owlCarouselHtml = '<div class="owl-carousel owl-theme carousel-main">';
    
    $('.gallery_modal_img').each(function (index) {
        if ($(this).data('id') == glyid) {
            id = index;
        }
        var url = $(this).find('img').attr('src');
        owlCarouselHtml += '<div class="item" data-id="' + index + '">';
        owlCarouselHtml += '<img src="' + url + '">';
        owlCarouselHtml += '</div>';
    });
    
    owlCarouselHtml += '</div>';

    // Remove the existing carousel if it exists
    $('#previewgallery .carousel-main').remove();

    // Append the new carousel HTML to the container with id 'previewgallery'
    $('#previewgallery').append(owlCarouselHtml);

    var totalItems = $(".carousel-main .item").length;
    var loopEnabled = totalItems > 1;

    // Initialize Owl Carousel on the newly added HTML
    var owl = $('#previewgallery .owl-carousel').owlCarousel({
        items: 1,
        dots: false,
        loop: loopEnabled,
        nav: true,
        startPosition: id,
    });

    // Set the initial background image
    var initialUrl = $('.gallery_modal_img').eq(id).find('img').attr('src');
    var style = $('<style>#exampleModal .modal-content::before { background-image: url(' + initialUrl + '); transition: background-image 0.3s; }</style>');
    $('head').append(style);
    // Update the background image when the carousel changes
    owl.on('changed.owl.carousel', function(event) {
        var currentIndex = event.item.index;
        var current_Url = $('.owl-item').eq(currentIndex).find('img').attr('src');
        var style = $('<style>#exampleModal .modal-content::before { background-image: url(' + current_Url + '); transition: background-image 0.3s; }</style>');
        $('head').append(style);
    });

    owl.trigger('refresh.owl.carousel');
    $('#exampleModal').modal('show');
});

