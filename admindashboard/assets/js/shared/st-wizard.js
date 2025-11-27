(function ($) {
    'use strict';
    $.fn.andSelf = function () {
        return this.addBack.apply(this, arguments);
    }
    if ($('#st-wizard-wrapper').length) {
        var stWizard = $('#st-wizard-wrapper');
        stWizard.owlCarousel({
            loop: false,
            margin: 10,
            items: 1,
            nav: false,
            autoplay: false,
            touchDrag: false,
            pullDrag: false,
            freeDrag: false,
            mouseDrag: false,
            autoHeight: true,
            URLhashListener: true,
        });
        $('.customNextBtn').click(function () {
            stWizard.trigger('next.owl.carousel');
        });
        $('.customPrevBtn').click(function () {
            stWizard.trigger('prev.owl.carousel', [300]);
        });

        stWizard.on('changed.owl.carousel', function (e) {
            var currentIndex = e.item.index;
            $(".wizard-step").removeClass("active done");
            $(".wizard-step:lt(" + (currentIndex + 1) + ")").addClass("done");
            $(".wizard-step").eq(currentIndex).addClass("active");

            if (currentIndex === stWizard.find('.owl-item').length - 1) {
                // Last slide
                $(".wizard-footer .required-text").css('display', 'none');
                $(".terms-checkbox").css('display', 'block');
            } else {
                $(".wizard-footer .required-text").css('display', 'block');
                $(".terms-checkbox").css('display', 'none');
            }
            $(".wizard-slide-count").text("STEP " + (currentIndex + 1) + "/3");
        });

        // Initial state
        $(".wizard-step").removeClass("active done");
        $(".wizard-step").eq(0).addClass("active");
    }
})(jQuery);
