<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SATOTO.ai</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/logo192.png" rel="Logo react">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .chat-container {
            display: flex;
            flex-direction: column;
            height: 400px;
            overflow-y: scroll;
            padding: 10px;
            margin-top: 100px;
        }

        .message {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-bottom: 10px;
        }

        .message.assistant {
            align-items: flex-start;
        }

        .message .message-content {
            background-color: #dcf8c6;
            border-radius: 10px;
            padding: 10px;
            align-self: flex-end;
        }

        .message.assistant .message-content {
            background-color: #f2f2f2;
            align-self: flex-start;
        }

        .message h3 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .message p {
            margin: 0;
        }

        .input-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .input-container input {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px;
        }

        .input-container a {
            background-color: #333;
            color: #fff;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
        }

        .input-container a:hover {
            background-color: #555;
        }

        .btn {
            background-color: #0bc041;
        }
    </style>


</head>

<body>

    @include('layouts.navbar')
        @yield('container')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

   
</body>

</html>
