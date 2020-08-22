<?php echo $__env->make('inc.config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
$currentPage = "auth";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="auth">

    <!-- Navbar -->
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <div class="container">
            <header mb-1>
                <h1 class="text-center">Enter your camp, Cheif</h1>
            </header>
            <div class="row p-section">
                <div class="col-sm-8 mx-auto">
                    <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form method="post" class="text-center row needs-validation" action="<?php echo e(action('FirebaseAuthController@login_user')); ?>" novalidate>
                        <?php echo e(csrf_field()); ?>    
                        <div class="col-12 mb-3">
                            <input placeholder="Username" name="email" type="email" class="form-control" required>
                        </div>

                        <div class="col-12 mb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enter</button>
                            <small class="form-text">Or <a href="/register">Sign up</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <footer class="footer-blank">
    </footer>


    <!-- Scripts -->
    <?php echo $__env->make('inc.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html><?php /**PATH E:\clients\Charmello\charmello\resources\views/auth/login.blade.php ENDPATH**/ ?>