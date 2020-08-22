<?php echo $__env->make('inc.config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    $currentPage = "auth";

    if(isset($uid))
    {
        $profileUploaded = false;
    }
    else
    {
        $profileUploaded = true;
    }
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
                <h1 class="text-center">
                    <?php echo ($profileUploaded === false ? 'Ok, now a profile image' : 'Right, <span>Charmello</span>, where to next?'); ?>
                </h1>
            </header>
            <div class="row p-section">
                <div class="col-sm-8 mx-auto text-center  <?php echo ($profileUploaded === false ? '' : 'row'); ?>">
                    <?php if ($profileUploaded === false) {?>
                    <img src="/assets/img/Logo_V2_charrmello-1.png" alt="logo">

                    <div class="image-area-wrapper mb-4">
                        <div class="image-area mt-4 rounded d-flex justify-content-center align-items-center">
                            <img id="imageResult" src="/assets/img/Logo_F2F2F2_charrmello.png" alt="profile">
                        </div>
                    </div>
                    <form method="post" action="<?php echo e(action('ProfileController@store')); ?>" class="text-center d-flex upload-form justify-content-between" enctype="multipart/form-data">
                        <!-- Upload image input-->
                        <?php echo e(csrf_field()); ?>

                        <div class="upload-wrapper rounded-circle bg-white shadow-sm">
                        <input type="hidden" name="uid" value="<?php echo e($uid); ?>">
                            <input id="upload" type="file" name="profile_image" multiple accept='image/*' onchange="readURL(this);"
                                class="form-control border-0">
                            <label for="upload"><img class="img-fluid" src="/assets/img/Exit_charrmello.png"
                                    alt="add"></label>
                        </div>

                        <button id="upload-image-btn" class="btn btn-primary" type="submit" disabled=true>Done
                            that</button>
                    </form>
                    <?php } else {?>
                    <div class="col-sm-6 navigation mb-4">
                        <h2>Back to creator feed</h2>
                        <a href="/story-chiefs" class="d-block">
                            <img class="img-fluid rounded" src="/assets/img/feed 1.png" alt="feed">
                        </a>
                    </div>
                    <div class="col-sm-6 navigation mb-4">
                        <h2>Go to your profile (camp)</h2>
                        <a href="/camp" class="d-block">
                            <img class="img-fluid rounded" src="/assets/img/Social Image_charrmello 2.png" alt="feed">
                        </a>
                    </div>
                    <?php }?>
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
</html><?php /**PATH E:\clients\Charmello\charmello\resources\views/profile-update.blade.php ENDPATH**/ ?>