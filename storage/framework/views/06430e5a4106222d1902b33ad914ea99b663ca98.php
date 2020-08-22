
<?php
$is_login = false;
$currentPage = "camp";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="camp">

    <!-- Navbar -->
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <main>
        <div class="container">

            <!-- Hero -->
            <section class="hero pb-5">


                <div class="hero__image text-center">
                    <img class="img-fluid rounded" src="/assets/img/Social Image_charrmello 2.png" alt="social">
                </div>

                <div class="hero__navigation my-5 nav-pills">
                    <nav class="nav justify-content-center">
                        <a class="nav-link text-dark" href="#Privacy">Privacy</a>
                        <a class="nav-link text-dark" href="#Settings">Settings</a>
                        <a class="nav-link text-dark" href="#Log-out">Log-out</a>
                        <a class="nav-link active" href="/camp/create">Upload New</a>
                    </nav>
                </div>

            </section>
        </div>

        <!-- Cover -->
        <div class="cover">
            <div class="container">
                <h2 class="small mb-4 text-center text-md-left">Latest</h2>

                <div class="rounded cover-content"
                    style="background: linear-gradient(90deg, #3A3735 0%, rgba(58, 55, 53, 0.47) 22.93%, rgba(58, 55, 53, 0) 69.87%), url('./assets/img/mars.png');">

                    <div class="cover-content-title">Mars III</div>
                    <a class="cover-content-edit-btn btn" href="#">Edit Cover</a>
                </div>

            </div>
        </div>

        <!-- Albums -->
        <section class="albums">
            <div class="container">

                <header class="d-flex mb-4 justify-content-between align-items-center">
                    <h2 class="small text-left mb-0">Published shelf</h2>
                    <div class="dropdown dropleft">
                        <button class="btn" type="button" id="sortMenu" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Sort By
                        </button>
                        <div class="dropdown-menu" aria-labelledby="sortMenu">
                            <h6 class="dropdown-header">Select Filter</h6>
                            <a class="dropdown-item" href="#">Recent</a>
                            <a class="dropdown-item" href="#">Trending</a>
                        </div>
                    </div>
                </header>

                <div class="row">
                    <!-- Album -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="album" data-toggle="modal" data-target="#albumModel">
                            <div class="card border-0 shadow overflow-hidden">
                                <img src="./assets/img/bearded_men.png" alt="Album Image">
                            </div>
                            <div class="card-caption">
                                <h5 class="mt-4">Bearded Duo </h5>
                                <p class="mt-2 mb-4">Ipsum dolor sit sum dolor sit Ipsum dr sit Iplor sit sum dolor sit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Album-->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="album" data-toggle="modal" data-target="#albumModel">
                            <div class="card border-0 shadow overflow-hidden">
                                <img src="./assets/img/boy_and_bear.png" alt="Album Image">
                            </div>
                            <div class="card-caption">
                                <h5 class="mt-4">The Boy & The Bear</h5>
                                <p class="mt-2 mb-4">Ipsum dolor sit sum dolor sit Ipsum dr sit Iplor sit sum dolor sit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Album-->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="album" data-toggle="modal" data-target="#albumModel">
                            <div class="card border-0 shadow overflow-hidden">
                                <img src="./assets/img/man_and_tattoos.png" alt="Album Image">
                            </div>
                            <div class="card-caption">
                                <h5 class="mt-4">Hopefull</h5>
                                <p class="mt-2 mb-4">Ipsum dolor sit sum dolor sit Ipsum dr sit Iplor sit sum dolor sit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Album-->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="album" data-toggle="modal" data-target="#albumModel">
                            <div class="card border-0 shadow overflow-hidden">
                                <img src="./assets/img/spaceship_man.png" alt="Album Image">
                            </div>
                            <div class="card-caption">
                                <h5 class="mt-4">8th Zone</h5>
                                <p class="mt-2 mb-4">Ipsum dolor sit sum dolor sit Ipsum dr sit Iplor sit sum dolor sit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Album-->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="album" data-toggle="modal" data-target="#albumModel">
                            <div class="card border-0 shadow overflow-hidden">
                                <img src="./assets/img/mars.png" alt="Album Image">
                            </div>
                            <div class="card-caption">
                                <h5 class="mt-4">Mars III <span class="badge badge-primary">New</span></h5>
                                <p class="mt-2 mb-4">Ipsum dolor sit sum dolor sit Ipsum dr sit Iplor sit sum dolor sit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Album-->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="album" data-toggle="modal" data-target="#albumModel">
                            <div class="card border-0 shadow overflow-hidden">
                                <img src="./assets/img/future_sailor.png" alt="Album Image">
                            </div>
                            <div class="card-caption">
                                <h5 class="mt-4">Future Sailor</h5>
                                <p class="mt-2 mb-4">Ipsum dolor sit sum dolor sit Ipsum dr sit Iplor sit sum dolor sit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Album-->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="album" data-toggle="modal" data-target="#albumModel">
                            <div class="card border-0 shadow overflow-hidden">
                                <img src="./assets/img/sam_and_the_spider_alt 1.png" alt="Album Image">
                            </div>
                            <div class="card-caption">
                                <h5 class="mt-4">Sam The Spider</h5>
                                <p class="mt-2 mb-4">Ipsum dolor sit sum dolor sit Ipsum dr sit Iplor sit sum dolor sit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Album-->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="album" data-toggle="modal" data-target="#albumModel">
                            <div class="card border-0 shadow overflow-hidden">
                                <img src="./assets/img/spaceman_and_dog_closeup.png" alt="Album Image">
                            </div>
                            <div class="card-caption">
                                <h5 class="mt-4">The Last Voyager<span class="badge-icon"><img
                                            src="./assets/img/Favicon_charrmello.png" alt="fire"></span></h5>
                                <p class="mt-2 mb-4">Ipsum dolor sit sum dolor sit Ipsum dr sit Iplor sit sum dolor sit.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Upload Section -->
        <div class="album-upload p-section pt-0">
            <div class="row">
                <div class="row col-md-8 mx-auto">
                    <div class="col-md-6">
                        <a href="#"
                            class="rounded d-flex flex-column justify-content-center align-items-center album-upload-wrapper">
                            <img class="img-fluid" src="./assets/img/Logo_FFFFFF_charrmello.png" alt="logo">
                            <span>Upload New</span>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="rounded d-flex flex-column justify-content-center align-items-center album-upload-wrapper">
                            <h3 class="text-primary mb-1">Coming Soon</h3>
                            <img class="img-fluid my-5" src="./assets/img/searchbar.png" alt="icon">
                            <span>Join / Start New Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <!-- Album Modal -->
    <div class="modal fade p-0" id="albumModel" tabindex="-1" aria-labelledby="albumModelLabel" aria-hidden="true">
        <div class="modal-dialog modal-full modal-dialog-scrollable">
            <div class="modal-content rounded-0">
                <div class="modal-header justify-content-start border-0">
                    <button type="button" class="back btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <img src="./assets/img/arrow-left.png" alt="left">
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="rounded cover-content"
                            style="background: linear-gradient(90deg, #3A3735 0%, rgba(58, 55, 53, 0.47) 22.93%, rgba(58, 55, 53, 0) 69.87%), url('./assets/img/man_and_tattoos 1.png');">

                            <div class="cover-content-title">Hopefull</div>

                            <div
                                class="status rounded-circle d-flex flex-column justify-content-center align-items-center">
                                <p class="status-figure">18k</p>
                                <p>Listens</p>
                            </div>

                            <a class="cover-content-edit-btn btn" href="#">Edit Cover</a>
                        </div>

                        <div class="row">
                            <div class="col-sm-11 mx-auto">
                                <div class="row p-section">
                                    <div class="col-md-6 description ">
                                        <ul class="nav nav-pills mb-3 justify-content-center" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="description-wrapper-tab"
                                                    data-toggle="pill" href="#description-wrapper" role="tab"
                                                    aria-controls="description-wrapper" aria-selected="true">About</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="description-edit-tab" data-toggle="pill"
                                                    href="#description-edit" role="tab" aria-controls="description-edit"
                                                    aria-selected="false">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content rounded">
                                            <div class="tab-pane fade show active rounded" id="description-wrapper"
                                                role="tabpanel" aria-labelledby="description-wrapper-tab">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu
                                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                sunt in
                                                culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                            <div class="tab-pane fade rounded" id="description-edit" role="tabpanel"
                                                aria-labelledby="description-edit-tab">
                                                <form>
                                                    <textarea name="description" cols="30" rows="10"
                                                        class="form-control"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum.</textarea>
                                                    <button type="submit"
                                                        class="btn btn-primary ml-auto mt-3 d-flex">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="audio text-center">
                                            <h5 class=" mb-3">Audio</h5>

                                            <div class="audio-content rounded">
                                                <div class="audio-icon mb-4">
                                                    <img class="img-fluid"
                                                        src="./assets/img/Regular_Large-Play_charrmello.png" alt="play">
                                                </div>
                                                <div class="audio-text">
                                                    audio_title_like_this.WAV
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div
                    class="modal-footer border-0 bg-primary text-white text-center rounded-0 justify-content-center p-0">
                    <button type="button" data-toggle="modal" data-target="#albumDeleteModel"
                        class="btn btn-primary">Delete From List</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Popup -->
    <div class="modal fade p-0" id="albumDeleteModel" tabindex="-1" aria-labelledby="albumDeleteModelLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content rounded-0">
                <div class="modal-header bg-primary text-white text-center rounded-0">
                    <h5 class="modal-title ">DANGEROUS AREA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center py-4">
                    <p>This can’t be undone!<br>Let’s make sure it was deliberate</p>
                    <button class="btn btn-info btn-sm" data-dismiss="modal" aria-label="Close">CANCEL</button>
                </div>
                <div class="modal-footer rounded-0 border-0 justify-content-center">
                    <form class="d-flex align-items-center">
                        <input id="audio-delete-input" type="text" class="form-control mr-3"
                            placeholder="Type “delete now” ">
                        <button id="audio-delete-btn" type="button" class="btn btn-primary btn-sm"
                            disabled=true>Delete</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Scripts -->
    <?php echo $__env->make('inc.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH E:\clients\Charmello\charmello\resources\views//camp.blade.php ENDPATH**/ ?>