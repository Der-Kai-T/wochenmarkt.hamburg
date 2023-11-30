<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield("title")Wochenmärkte in Hamburg</title>


    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="/assets/css/template.css">
    <script src="/assets/js/bootstrap.bundle.min.js" ></script>

    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js" ></script>



    <!-- Leaflet (interactive JavaScript Map -->
    <!-- load js after css! -->
    <link rel="stylesheet" href="/plugins/leaflet/leaflet.css">
    <script src="/plugins/leaflet/leaflet.js"></script>


    <!-- custom js -->
    @vite("resources/js/app.js")
    <script src="/assets/js/userjs_preload.js" ></script>


</head>
<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <!-- Navigation-->
<x-wm.navigation />
    @yield("content")
</main>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2023</div></div>
            <div class="col-auto">
                <a class="link-light small" href="#!">Privacy</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Terms</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Contact</a>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="/assets/js/bootstrap.bundle.min.js" />

<!-- Core theme JS-->
<script src="/assets/js/template.js" />




</body>
</html>
