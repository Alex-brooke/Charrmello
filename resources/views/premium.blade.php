@include('inc.config')

<?php

$currentPage = "premium";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.header')

</head>

<body class="premium">

    <!-- Navbar -->
    @include('inc.navbar')



    <main>
        <div class="container">
            <header mb-1>
                <h2>Premium mello</h2>
            </header>
            <div class="row">

                <!-- Col Card -->
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body py-5">
                            <h5 class="card-title mb-5">Standard</h5>
                            <ul class="card-text pl-2 mb-5">
                                <li>Single User Account</li>
                            </ul>
                            <p class="card-price mb-0"><span>£</span> Free</p>
                        </div>
                    </div>
                </div>

                <!-- Col Card -->
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body py-5">
                            <h5 class="card-title mb-5">Premium</h5>
                            <ul class="card-text pl-2 mb-5">
                                <li>Single User Account</li>
                                <li>HD aduio</li>
                                <li><b>Ad free</b></li>
                                <li>Offline playback</li>
                            </ul>
                            <p class="card-price mb-0"><span>£</span> 7.99</p>
                        </div>
                    </div>
                </div>

                <!-- Col Card -->
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body py-5">
                            <h5 class="card-title mb-5">Family</h5>
                            <ul class="card-text pl-2 mb-5">
                                <li><b>Up to 4 user accounts</b></li>
                                <li>Ad free</li>
                                <li>Offline playback</li>
                                <li>HD audio</li>
                            </ul>
                            <p class="card-price mb-0"><span>£</span> 14.99</p>
                        </div>
                    </div>
                </div>

                <!-- Col Card -->
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card text-center bg-dark">
                        <div class="card-body py-5">
                            <h5 class="card-title mb-3">Business</h5>
                            <p class="card-text">
                                Coming Soon
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper text-center mt-5">
                <a class="d-inline-block" href="#">
                    <img src="./assets/img/image 98.png" alt="Google Play Store">
                </a>
                <a class="d-inline-block" href="#">
                    <img src="./assets/img/image 99.png" alt="Apple Store">
                </a>
            </div>
        </div>
    </main>

    <footer class="footer-blank" >
    </footer>


    <!-- Scripts -->
    @include('inc.scripts')
</body>

</html>