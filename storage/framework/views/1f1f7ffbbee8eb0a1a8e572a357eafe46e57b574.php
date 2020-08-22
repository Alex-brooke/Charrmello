<?php echo $__env->make('inc.config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
<?php
$currentPage = "landing";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="landing">
    <!-- Navbar -->
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <?php echo $__env->make('inc.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH E:\clients\Charmello\charmello\resources\views/welcome.blade.php ENDPATH**/ ?>