$(document).on('click', '.video_modal_img', function () {
    var videoSrc = $(this).find("video source").attr("src"); // get video URL

    // Build video player HTML
    var videoHtml = `
        <video class="w-100" controls autoplay playsinline>
            <source src="` + videoSrc + `" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    `;

    // Inject into modal
    $('#previewgallery').html(videoHtml);

    // Show modal
    $('#exampleModal').modal('show');
});

// Stop video on modal close
$('#exampleModal').on('hidden.bs.modal', function () {
    $('#previewgallery').html('');
});
