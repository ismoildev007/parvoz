<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Log In | Parvoz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
{{--    <link rel="shortcut icon" href="/front/wp-content/uploads/2023/02/logo.png">--}}
{{--    <img src="wp-content/uploads/2023/02/logo.png" alt="imkon-plast" data-eio="l">--}}
    <link rel="apple-touch-icon" sizes="180x180" href="/front/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/front/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/front/favicon-16x16.png">
    <!-- App css -->
    <link href="/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="/assets/js/config.js"></script>
</head>

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
<div class="container">
    <div class="row justify-content-center">
        {{ $slot }}
    </div>
    <!-- end row -->
</div>

<!-- App js -->
<script src="/assets/js/vendor.min.js"></script>
<script src="/assets/js/app.js"></script>

</body>

</html>