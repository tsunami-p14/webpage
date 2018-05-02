<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue test</title>
    <link rel="stylesheet" href="css/app.css">
    <script>
        window.Laravel = {};
        window.Laravel.csrfToken = "{{ csrf_token() }}";
    </script>
</head>
<body>
<div id="app">
    <example-component></example-component>
    <button-counter></button-counter>
    <button-counter></button-counter>
    <button-counter></button-counter>
    <button-counter></button-counter>
</div>
<div id="testers">
    <example-test></example-test>
</div>
</body>
<script src="js/app.js"></script>
</html>