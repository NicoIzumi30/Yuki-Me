<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - '.config('app.name', 'Yuki Me') : config('app.name', 'Yuki Me') }}</title>
    <link rel="icon" type="image/png" href="{{asset('images')}}/favicon.png" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="{{asset('css')}}/remixicon.css">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/bootstrap.min.css">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/apexcharts.css">
    <!-- Data Table css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/dataTables.min.css">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/editor-katex.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/lib/editor.atom-one-dark.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/lib/editor.quill.snow.css">
    <!-- Date picker css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/flatpickr.min.css">
    <!-- Calendar css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/full-calendar.css">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/jquery-jvectormap-2.0.5.css">
    <!-- Popup css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/magnific-popup.css">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/slick.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
</head>

<body>
    {{ $slot }}
    <!-- jQuery library js -->
    <script src="{{asset('js')}}/lib/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js')}}/lib/bootstrap.bundle.min.js"></script>
    <!-- Apex Chart js -->
    <script src="{{asset('js')}}/lib/apexcharts.min.js"></script>
    <!-- Data Table js -->
    <script src="{{asset('js')}}/lib/dataTables.min.js"></script>
    <!-- Iconify Font js -->
    <script src="{{asset('js')}}/lib/iconify-icon.min.js"></script>
    <!-- jQuery UI js -->
    <script src="{{asset('js')}}/lib/jquery-ui.min.js"></script>
    <!-- Vector Map js -->
    <script src="{{asset('js')}}/lib/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="{{asset('js')}}/lib/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Popup js -->
    <script src="{{asset('js')}}/lib/magnifc-popup.min.js"></script>
    <!-- Slick Slider js -->
    <script src="{{asset('js')}}/lib/slick.min.js"></script>
    <!-- main js -->
    <script src="{{asset('js')}}/app.js"></script>

    <script>
        // ================== Password Show Hide Js Start ==========
        function initializePasswordToggle(toggleSelector) {
            $(toggleSelector).on('click', function () {
                $(this).toggleClass("ri-eye-off-line");
                var input = $($(this).attr("data-toggle"));
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        }
        // Call the function
        initializePasswordToggle('.toggle-password');
        // ========================= Password Show Hide Js End ===========================
    </script>

</body>

</html>