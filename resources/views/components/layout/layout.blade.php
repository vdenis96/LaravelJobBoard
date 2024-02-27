<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from thewebmax.org/jobzilla/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Feb 2024 08:30:29 GMT -->
    <head>
        <!-- META -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta name="description" content="" />

        @include('partials.header._styles')
    </head>

    <body>
        <x-layout.loading />

        <div class="page-wraper">

            <x-layout.header />

            <!-- CONTENT START -->
            <div class="page-content">
                {{ $slot }}
            </div>
            <!-- CONTENT END -->

            <x-layout.footer />

            @include('partials.footer._scrollToTop')

            <!--Model Popup Section Start-->
            <x-popups.sign-up />
            <x-popups.log-in />
            <!--Model Popup Section End-->
        </div>

        @include('partials.footer._scripts')

      
    </body>
</html>
