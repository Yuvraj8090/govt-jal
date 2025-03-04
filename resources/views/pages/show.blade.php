<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $page->meta_description }}">
    <meta name="keywords" content="{{ $page->meta_keywords }}">
    <title>{{ $page->title }}</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/keyframe-animation.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Theme Switching Script -->
    <style>
        .leading-loose .col-span-3 ul li{
            list-style: circle !important;
            font-size: 13px !important;
        }
    </style>
    <script>
        function applyTheme(theme) {
            if (theme === 'orange') {
                document.documentElement.style.setProperty('--ed-color-text-body', 'white');
                document.documentElement.style.setProperty('--text-color', 'black');
                document.documentElement.style.setProperty('--primary-color', '#BD6716');
            } else if (theme === 'blue') {
                document.documentElement.style.setProperty('--ed-color-text-body', '#e0f7fa');
                document.documentElement.style.setProperty('--text-color', '#004d40');
                document.documentElement.style.setProperty('--primary-color', 'rgb(22, 47, 106)');
            }
        }
        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = sessionStorage.getItem('selectedTheme') || 'orange';
            applyTheme(savedTheme);
        });
    </script>
</head>
<x-navbar />
   
   
        @if($page->image)
            <div class="mb-6">
                <img src="{{ asset('storage/' . $page->image) }}" alt="{{ $page->title }}" class="w-full rounded-xl shadow-lg">
            </div>
        @endif
        
        
        <div class="text-xl text-gray-700 leading-loose mb-6">{!! $page->body !!}</div>
    <x-footer-for/>
  <!-- JS here -->
  <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/bootstrap-bundle.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/jquery.isotope.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/daterangepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/venobox.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/odometer.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/countdown.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/meanmenu.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/smooth-scroll.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/imagesloaded-pkgd.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/nice-select.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/swiper.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  
  </body>
  
  </html>
  