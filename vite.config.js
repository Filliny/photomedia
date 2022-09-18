import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                'resources/sass/app.scss',
                'resources/js/app.js',
                // 'resources/css/bootstrap.min.css',
                // 'resources/css/owl.carousel.min.css',
                // 'resources/css/magnific-popup.css',
                // 'resources/css/font-awesome.min.css',
                // 'resources/css/themify-icons.css',
                // 'resources/css/nice-select.css',
                // 'resources/css/flaticon.css',
                // 'resources/css/animate.css',
                // 'resources/css/slicknav.css',
                // 'resources/css/style.css',
                //
                // 'resources/js/vendor/modernizr-3.5.0.min.js',
                // 'resources/js/vendor/jquery-1.12.4.min.js',
                // 'resources/js/popper.min.js',
                // 'resources/js/bootstrap.min.js',
                // 'resources/js/owl.carousel.min.js',
                // 'resources/js/isotope.pkgd.min.js',
                // 'resources/js/ajax-form.js',
                // 'resources/js/waypoints.min.js',
                // 'resources/js/jquery.counterup.min.js',
                // 'resources/js/imagesloaded.pkgd.min.js',
                // 'resources/js/scrollIt.js',
                // 'resources/js/jquery.scrollUp.min.js',
                // 'resources/js/wow.min.js',
                // 'resources/js/nice-select.min.js',
                // 'resources/js/jquery.slicknav.min.js',
                // 'resources/js/jquery.magnific-popup.min.js',
                // 'resources/js/plugins.js',
                //
                // 'resources/js/contact.js',
                // 'resources/js/jquery.ajaxchimp.min.js',
                // 'resources/js/jquery.form.js',
                // 'resources/js/jquery.validate.min.js',
                // 'resources/js/mail-script.js',
                //
                // 'resources/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
