<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glamour Electronics</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="icon" type="image/x-icon" href="{{ asset('upload/logo/' . $setting->logo) }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">

</head>

<body>

    @include('frontend.layouts.header')

    @yield('frontend_content')

    <!-- footer start -->
    @include('frontend.layouts.footer')
    <!-- footer end -->

    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <!-- <script src="js/jquery.scrollUp.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    <script>
        function downloadFile(fileName) {
            const link = document.createElement('a');
            link.href = fileName;
            link.download = fileName;
            link.click();
        }
    </script>



</body>

</html>
