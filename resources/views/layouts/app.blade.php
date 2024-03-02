<!DOCTYPE html> <!-- Document type declaration -->
<html lang="pt-br"> <!-- HTML root element with language attribute -->
<head> <!-- Head section -->
    <meta charset="UTF-8"> <!-- Character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Viewport meta tag -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Compatibility meta tag -->
    <title>@yield('title')</title> <!-- Title of the page -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
</head>
<body> <!-- Body section -->
    <div class="container"> <!-- Container for content -->
        @yield('content') <!-- Include content -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JavaScript -->
    @yield('scripts') <!-- Include custom scripts -->
</body>
</html>
