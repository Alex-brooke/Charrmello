@include('inc.config')    
<?php
$currentPage = "landing";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('inc.header')
</head>
<body class="landing">
    <!-- Navbar -->
    @include('inc.navbar')
    <main class="hero">
        <div class="container">
            <!-- Hero Section -->
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="hero--content mb-5">
                        <img class="image-fluid" src="/assets/img/Logo_Full Colour_charrmello.svg" alt="">
                        <p class="mt-3">bringing storytelling and learining to life</p>
                    </div>
                    <div class="hero--buttons-wrapper">
                        <a href="#">
                            <img src="/assets/img/image 98.png" alt="Google Play Store">
                        </a>
                        <a href="#">
                            <img src="/assets/img/image 99.png" alt="Apple Store">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Scripts -->
    @include('inc.scripts')
</body>
</html>