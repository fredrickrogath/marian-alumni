<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">     

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script>
        if (localStorage.getItem('dark-mode') == 'true' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.add('dark');
        } else {
            document.querySelector('html').classList.remove('dark');
        }        
        </script>

    <!-- Theme CSS -->
    {{-- <link rel="stylesheet" href="assets/css/theme.bundle.css" /> --}}

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>
        /* width */
        ::-webkit-scrollbar {
          width: 10px;
        }
        
        /* Track */
        ::-webkit-scrollbar-track {
          background: #f1f1f1; 
        }
         
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #888; 
        }
        
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #555; 
        }
        </style>
</head>

<body class="font-sans antialiased">
    @inertia

    @env('local')
    <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
    @endenv
</body>


<!-- JAVASCRIPT -->
<!-- Vendor JS -->
<script src="assets/js/vendor.bundle.js"></script>

<!-- Theme JS -->
<script src="assets/js/theme.bundle.js"></script>

<script src="main.bff24adf2375a62a4452.js"></script>



</html>
