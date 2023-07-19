jQuery(document).ready(function($) {
    // Find all instances of your custom widget
    $('.ashraf-team-widget').each(function() {
        var $widget = $(this);
        var unique_id = $widget.find('img').attr('id');

        // Store the original image URL
        var originalImageUrl = $widget.find('img').attr('src');

        // Store the hover image URL (if provided in the data-hover-image attribute)
        var hoverImageUrl = $widget.find('img').attr('data-hover-image');

        // Set the hover image URL if it's available
        if (hoverImageUrl) {
            $widget.on('mouseenter', function() {
                $('#' + unique_id).attr('src', hoverImageUrl);
            }).on('mouseleave', function() {
                $('#' + unique_id).attr('src', originalImageUrl);
            });
        }
    });
});
