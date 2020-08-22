@include('inc.config')
<?php
$currentPage = "auth";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.header')
</head>

<body class="auth">

    <!-- Navbar -->
    @include('inc.navbar')

    <main>
        <div class="container">
            <header mb-1>
                <h1 class="text-center">Add user details</h1>
            </header>
            <div class="row p-section">
                
                <div class="col-sm-8 mx-auto">
                @include('inc.messages')
                    <div id="tab" class="nav nav-tabs justify-content-center mb-4" role="tablist">
                        <div class="custom-control custom-radio">

                            <input class="custom-control-input" id="optDaily" checked name="usertype" type="radio"
                                data-target="#individualForm">
                            <label class="custom-control-label" for="optDaily">Individual</label>
                        </div>
                        <div class="custom-control custom-radio">

                            <input class="custom-control-input" id="optWeekly" name="usertype" type="radio"
                                data-target="#studioForm">
                            <label class="custom-control-label" for="optWeekly">Studio</label>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="individualForm" class="tab-pane active">
                            <form method="post" class="text-center row needs-validation" action="{{ action('FirebaseAuthController@store') }}" novalidate>
                            {{csrf_field()}}
                                <input type="hidden" name="utype" value="Individual" class="form-control">
                                <div class="col-12 mb-3">
                                    <input required placeholder="User name" name="username" type="text" class="form-control">
                                </div>
                                <div class="col-12 mb-3">
                                    <input required placeholder="Full Name" name="fname" type="text" class="form-control">
                                </div>

                                <div class="col-12 mb-3">
                                    <input required placeholder="Email" type="email" name="email" class="form-control">
                                </div>

                                <div class="col-12 mb-3">
                                    <input required name="p1" placeholder="Password" type="password"
                                        class="form-control">
                                </div>

                                <div class="col-12 mb-4">
                                    <input required name="p2" placeholder="Password Sanity Check" type="password"
                                        class="form-control">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">No what?</button>
                                    <small class="form-text">Or <a href="/login">Sign in</a></small>
                                </div>
                            </form>
                        </div>
                        <div id="studioForm" class="tab-pane">
                            <form method="post" class="text-center row needs-validation" action="{{ action('FirebaseAuthController@store') }}" novalidate>
                            {{csrf_field()}}
                                <input type="hidden" name="utype" value="Studio" class="form-control">
                                <div class="col-12 mb-3">
                                    <input required placeholder="User name" name="username" type="text" class="form-control"
                                        value="Charrmello">
                                </div>
                                <div class="col-12 mb-3">
                                    <input required placeholder="Full Name" name="fname" type="text" class="form-control"
                                        value="Charrmello Inc">
                                </div>

                                <div class="col-12 mb-3">
                                    <input required placeholder="Email" type="email" name="email" class="form-control"
                                        value="info@charrmello.com">
                                </div>

                                <div class="col-12 mb-3">
                                    <input required placeholder="Password" type="password" name="p1" class="form-control"
                                        value="somepasss">
                                </div>

                                <div class="col-12 mb-4">
                                    <input required placeholder="Password Sanity Check" type="password"
                                        value="somepasss" name="p2" class="form-control">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">No what?</button>
                                    <small class="form-text">Or <a href="/login">Sign in</a></small>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
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