jQuery(document).ready(function() {
    // Check for custom settings
    if (typeof ContentSliderSettings === 'undefined') {
        // Use default settings
        jQuery(".ce_slider .rslides").responsiveSlides({
            auto: true,             // Boolean: Animate automatically, true or false
            speed: 500,            // Integer: Speed of the transition, in milliseconds
            timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
            nav: true,             // Boolean: Show navigation, true or false
            pause: true,           // Boolean: Pause on hover, true or false
            pauseControls: true,    // Boolean: Pause when hovering controls, true or false
            prevText: "Previous",   // String: Text for the "previous" button
            nextText: "Next"       // String: Text for the "next" button
        });
    } else {
        // Try using custom settings
        jQuery(".ce_slider .rslides").responsiveSlides(ContentSliderSettings);
    }
});