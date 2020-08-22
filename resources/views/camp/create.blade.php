@include('inc.config')
<?php
$currentPage = "upload";

$formSubmitted = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.header')
</head>

<body class="upload-page">

    <!-- Navbar -->
    @include('inc.navbar')

    <main>
        <div class="container position-relative">
            <header>
                <h2 class="form-title">
                    <?php echo ($formSubmitted === false ? 'Let’s start with a title' : 'Charmello, we’re done here. Where to next?'); ?>
                </h2>
                <a href="/camp">
                    <img class="img-fluid" src="/assets/img/close-white.png" alt="exit">
                </a>
            </header>
            
            <div class="p-section">
                @include('inc.messages')
                <?php if ($formSubmitted === false) {?>
                <form id="mediaUploadForm" method="POST" action="{{ action('MediaController@store') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="progress form-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>

                    <!-- One "tab" for each step in the form: -->
                    <div class="formTab" data-title="Let’s start with a title">
                        <p class="position-relative"><input class="form-control" placeholder="Enter Title" name="title">
                        </p>
                    </div>
                    <div class="formTab"
                        data-title="Upload a new audio file <span>(Psst! Check the requiremnts if you need.)</span>">

                        <div class="image-area-wrapper mb-4">
                            <div class="image-area mt-4 rounded d-flex justify-content-center align-items-center">
                                <img src="/assets/img/Regular_Large-Play_charrmello.png" alt="profile">
                            </div>
                        </div>

                        <!-- Upload image input-->
                        <div class="upload-buttons-group d-flex justify-content-between">
                            <div class="upload-wrapper rounded-circle bg-white shadow-sm">
                                <input id="upload-audio" type="file" name="uploadAudio" multiple
                                    class="form-control border-0">
                                <label for="upload-audio"><img class="img-fluid" src="/assets/img/Exit_charrmello.png"
                                        alt="add"></label>
                            </div>
                        </div>

                    </div>
                    <div class="formTab" data-title="Right, add your Cover Image">
                        <div class="image-area-wrapper mb-4">
                            <div class="image-area mt-4 rounded d-flex justify-content-center align-items-center">
                                <img id="imageResult" src="/assets/img/Logo_F2F2F2_charrmello.png" alt="profile">
                            </div>
                        </div>

                        <!-- Upload image input-->
                        <div class="cover-upload-buttons-group d-flex justify-content-between">
                            <div class="upload-wrapper rounded-circle bg-white shadow-sm">
                                <input id="upload" type="file" name="cover" multiple accept='image/*'
                                    onchange="readURL(this);" class="form-control border-0">
                                <label for="upload"><img class="img-fluid" src="/assets/img/Exit_charrmello.png"
                                        alt="add"></label>
                            </div>
                        </div>
                    </div>
                    <div class="formTab" data-title="Ok, tell us a little about it">
                        <p><textarea rows="9" class="form-control" placeholder="Description..."
                                name="description"></textarea></p>
                    </div>
                    <div class="formTab" data-title="Charmello, we’re done here. Where to next?">

                    </div>
                    <div class="button-group">
                        <div class="mt-1 text-center">
                            <!-- <button class="btn btn-primary previous" type="button">Previous</button> -->
                            <button class="btn btn-secondary next" type="button">All good here</button>
                            <button class="btn btn-secondary submit" type="submit">Finished</button>
                        </div>
                    </div>


                </form>
                <?php } else {?>
                <div class="progress form-progress">
                    <div class="progress-bar" style="width: 100%;" role="progressbar" aria-valuenow="100"
                        aria-valuemin="100" aria-valuemax="100"></div>
                </div>
                <div class="row col-sm-8 mx-auto mt-5 text-center">
                    <div class="col-sm-6 navigation mb-4">
                        <h2>Go to your profile (camp)</h2>
                        <a href="/camp" class="d-block">
                            <img class="img-fluid rounded" src="/assets/img/Social Image_charrmello 2.png" alt="feed">
                        </a>
                    </div>
                    <div class="col-sm-6 navigation mb-4">
                        <h2>Review upload</h2>
                        <a href="/camp" class="d-block">
                            <img class="img-fluid rounded" src="/assets/img/mars.png" alt="feed">
                        </a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </main>


    <footer class="footer-blank">
    </footer>


    <!-- Scripts -->
    @include('inc.scripts')


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
</html>