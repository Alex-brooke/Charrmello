<?php echo $__env->make('inc.config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
$currentPage = "story-chiefs";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="story-chiefs">

    <!-- Navbar -->
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <main>
        <!-- Hero -->
        <div class="hero carousel slide carousel-fade" data-interval="2500" data-pause="false" data-ride="carousel">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('./assets/img/story-chiefs-bg.png')">
                    <div class="carousel-caption px-3">
                        <h1 class="h1-responsive">story chiefs</h1>
                    </div>

                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('./assets/img/story-chiefs-bg-1.png')">
                    <div class="carousel-caption px-3">
                        <h1 class="h1-responsive">story chiefs</h1>
                    </div>
                </div>

            </div>

            <div class="hero-bottom">
                <a href="#services" class="btn" title="scroll">
                    <img src="./assets/img/arrow-down.png" alt="scroll">
                </a>
            </div>
        </div>

        <!-- Services -->
        <div id="services" class="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 mx-auto">

                        <div class="row">
                            <div class="col-6 col-md-3 mb-4">
                                <div
                                    class="service-icon rounded-circle d-flex justify-content-center align-items-center mx-auto">
                                    <img class="img-fluid" src="./assets/img/service (1).svg" alt="service">
                                </div>
                                <div class="service-caption mx-auto">
                                    <h5 class="mt-3 mb-4 text-center">Track Content</h5>
                                    <p>Ipsum dolor sit sum dolor sit</p>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 mb-4">
                                <div
                                    class="service-icon rounded-circle d-flex justify-content-center align-items-center mx-auto">
                                    <img class="img-fluid" src="./assets/img/service (2).svg" alt="service">
                                </div>
                                <div class="service-caption mx-auto">
                                    <h5 class="mt-3 mb-4 text-center">Easy Upoload</h5>
                                    <p>Ipsum dolor sit sum dolor sit</p>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 mb-4">
                                <div
                                    class="service-icon rounded-circle d-flex justify-content-center align-items-center mx-auto">
                                    <img class="img-fluid" src="./assets/img/service (3).svg" alt="service">
                                </div>
                                <div class="service-caption mx-auto">
                                    <h5 class="mt-3 mb-4 text-center">Earn Money</h5>
                                    <p>Ipsum dolor sit sum dolor sit</p>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 mb-4">
                                <div
                                    class="service-icon rounded-circle d-flex justify-content-center align-items-center mx-auto">
                                    <img class="img-fluid" src="./assets/img/service (4).svg" alt="service">
                                </div>
                                <div class="service-caption mx-auto">
                                    <h5 class="mt-3 mb-4 text-center">New Paltform</h5>
                                    <p>Ipsum dolor sit sum dolor sit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->
        <section id="story" class="about-charrmello">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 mx-auto">
                        <h2 class="mb-5">About Chiefs</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-0">
                                    Story Chiefs make up the engine behind Charrmello. They put out incredible and
                                    immersive
                                    stories.
                                    <br><br>
                                    We want to make life for creators as easy as possible. From managing your upload
                                    library, tracking your monetization, where, how and if ads appear.
                                </p>
                            </div>

                            <div class="col-md-6">
                                <p class="mb-0">
                                    A lot of updates will be happeneing, so we’d really appreciate your say when it
                                    comes to
                                    how you want Charrmello to look and work so it’s, as they say, “smooth af”.
                                    <br><br>
                                    Everything here aims for ease and clarity, so all you need to worry about is
                                    creating
                                    awesome.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="trending-chiefs">

            <h2 class="container small mb-4 text-center text-md-left">Trending Chiefs</h2>

            <!--Carousel Wrapper-->
            <div id="trending-carousel" class="carousel slide carousel-multi-item" data-ride="carousel"
                data-interval="2400">

                <!--Controls-->
                <a class="carousel-control-prev d-none d-md-flex" href="#trending-carousel" role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next d-none d-md-flex" href="#trending-carousel" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->

                <div class="container">

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="card border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/image 86.png" alt="Creative Lead">
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-0 chief">Justin Roland &amp;<br> Dan Harmon</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/image 82.png" alt="Creative Lead">
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-3 chief">Sara Cox</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/image 83.png" alt="Creative Lead">
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-3 chief">Idris Elba</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/image 85.png" alt="Creative Lead">
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-3 chief">Ashley Burch</p>
                                </div>

                            </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="card border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/image 80.png" alt="Creative Lead">
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-0 chief">Stephen Fry</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/image 90.png" alt="Creative Lead">
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-0 chief">Wanda Sykes</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/image 84.png" alt="Creative Lead">
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-0 chief">Sue Perkins</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/image 97.png" alt="Creative Lead">
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-0 chief">Keegan Michael-Key <br>&amp; Jordan Peele</p>
                                </div>

                            </div>
                        </div>
                        <!--/.Second slide-->


                    </div>
                    <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->


            </div>
        </section>

        <!-- Media -->
        <section class="media pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 mx-auto">
                        <h2 class="small mb-4 text-center text-md-left">Keys To The Content</h2>

                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Feature Video -->
                                <div class="card media-card rounded-0">
                                    <div class="card-body position-absolute">
                                        <div class="w-75">
                                            <h3 class="card-title mb-2">Making Audio Magic</h3>
                                            <p class="card-text">Stories have just become a bunch more involved. Part of
                                                our
                                                day to day. Our imaginations have had an upgrade. I love it. </p>
                                        </div>
                                        <div class="w-25">
                                            <button class="btn video-btn play p-0 d-flex ml-auto" data-toggle="modal"
                                                data-src="https://www.youtube.com/embed/IP7uGKgJL8U"
                                                data-target="#videoModal">
                                                <img class="img-fluid"
                                                    src="./assets/img/Regular_Large-Play_charrmello.png" alt="play">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <div class="row">
                                    <!-- Video -->
                                    <div class="col-6 col-md-4 col-lg-12 mb-3">
                                        <div class="card media-card media-side-card rounded-0">
                                            <div class="card-body position-absolute">
                                                <div class="h-100">
                                                    <h3 class="card-title mb-2">Editing Your Script</h3>
                                                </div>
                                                <div>
                                                    <button class="btn play p-0 d-flex position-absolute"
                                                        data-toggle="modal"
                                                        data-src="https://www.youtube.com/embed/IP7uGKgJL8U"
                                                        data-target="#videoModal">
                                                        <img class="img-fluid"
                                                            src="./assets/img/Regular_Large-Play_charrmello.png"
                                                            alt="play">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Video -->
                                    <div class="col-6 col-md-4 col-lg-12 mb-3">
                                        <div class="card media-card media-side-card rounded-0">
                                            <div class="card-body position-absolute">
                                                <div class="h-100">
                                                    <h3 class="card-title mb-2">Magic of Sound</h3>
                                                </div>
                                                <div>
                                                    <button class="btn play p-0 d-flex position-absolute"
                                                        data-toggle="modal"
                                                        data-src="https://www.youtube.com/embed/IP7uGKgJL8U"
                                                        data-target="#videoModal">
                                                        <img class="img-fluid"
                                                            src="./assets/img/Regular_Large-Play_charrmello.png"
                                                            alt="play">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Video -->
                                    <div class="col-6 col-md-4 col-lg-12 mb-3">
                                        <div class="card media-card media-side-card rounded-0">
                                            <div class="card-body position-absolute">
                                                <div class="h-100">
                                                    <h3 class="card-title mb-2">Short & Sweet</h3>
                                                </div>
                                                <div>
                                                    <button class="btn play p-0 d-flex position-absolute"
                                                        data-toggle="modal"
                                                        data-src="https://www.youtube.com/embed/IP7uGKgJL8U"
                                                        data-target="#videoModal">
                                                        <img class="img-fluid"
                                                            src="./assets/img/Regular_Large-Play_charrmello.png"
                                                            alt="play">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Slider -->
        <div class="container-fluid px-md-5">
            <section id="slider" class="slider p-0">
                <div class="carousel slide" data-ride="carousel" data-interval="2500">
                    <div class="carousel-inner">
                        <div class="carousel-item active"
                            style="background: linear-gradient(90deg, rgba(17, 17, 17, 0.072) 0%, rgba(58, 55, 53, 0) 48.46%), url('./assets/img/cyborg_helmet 1.png');">

                            <div class="carousel-caption px-5 text-dark">
                                <h2 class="h2-responsive mb-3">I Do Dream</h2>
                                <p>Story Chiefs make up the engine behind Charrmello. They put out increadbel and
                                    immersive stories. We want to make life a creators as easy as possible.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item"
                            style="background: linear-gradient(90deg, rgba(17, 17, 17, 0.072) 0%, rgba(58, 55, 53, 0) 48.46%), url('./assets/img/russiandoll_man 1.png');">

                            <div class="carousel-caption px-5">
                                <h2 class="h2-responsive  mb-3">Indipendent</h2>
                                <p>Story Chiefs make up the engine behind Charrmello. They put out increadbel and
                                    immersive stories. We want to make life a creators as easy as possible.
                                </p>
                            </div>

                        </div>
                    </div>
            </section>
        </div>

        <section class="trending-stories">

            <h2 class="container small mb-4 text-center text-md-left">Trending Chiefs</h2>

            <!--Carousel Wrapper-->
            <div id="trending-stories-carousel" class="carousel slide carousel-multi-item" data-ride="carousel"
                data-interval="2400">

                <!--Controls-->
                <a class="carousel-control-prev d-none d-md-flex" href="#trending-stories-carousel" role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next d-none d-md-flex" href="#trending-stories-carousel" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->

                <div class="container">

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="card hovereffect border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/woman_umpire.png" alt="The Umpire">
                                        <div class="overlay">
                                            <p>He’s always around. Here and ther. Sometimes as a shadow, other times a
                                                mist.
                                                <br><br>
                                                He’s always there. At the hint of trouble. Then everything suddely
                                                subsides.
                                                <br><br>
                                                He’s aways there.
                                                Who is he?</p>
                                        </div>
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-0 chief">The Umpire</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card hovereffect border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/snake_and_boy.png" alt="Rogue World">
                                        <div class="overlay">
                                            <p>Life deals tough cards. Making the most out of the deck you have is even
                                                tougher.
                                                <br><br>
                                                A boy called Beljit learns to take his life back when he comes a cross a
                                                serpent that takes to him like a fish to water.</p>
                                        </div>
                                    </div>

                                    <p class="ml-4 mt-2 mb-md-3 chief">Rogue World</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card hovereffect border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/spaceman_and_dog_closeup.png"
                                            alt="The Last Voyager">
                                        <div class="overlay">
                                            <p>People have fogoten about earth and moved on to interstellar life.
                                                <br><br>
                                                But one person chose to stay and keep finding what the Earth, our home,
                                                still has to offer.
                                                <br><br>
                                                He, is known as Caleb. This, is an account of his adventures as the last
                                                voyager.</p>
                                        </div>
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-3 chief">The Last Voyager</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card hovereffect border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/oldman_in_coat_and_hat.png"
                                            alt="Mr. Him">
                                        <div class="overlay">
                                            <p>He’s always around. Here and ther. Sometimes as a shadow, other times a
                                                mist.
                                                <br><br>
                                                He’s always there. At the hint of trouble. Then everything suddely
                                                subsides.
                                                <br><br>
                                                He’s aways there.
                                                Who is he?</p>
                                        </div>
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-3 chief">Mr. Him</p>
                                </div>

                            </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="card hovereffect border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/oldman_in_coat_and_hat.png"
                                            alt="Mr. Him">
                                        <div class="overlay">
                                            <p>He’s always around. Here and ther. Sometimes as a shadow, other times a
                                                mist.
                                                <br><br>
                                                He’s always there. At the hint of trouble. Then everything suddely
                                                subsides.
                                                <br><br>
                                                He’s aways there.
                                                Who is he?</p>
                                        </div>
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-3 chief">Mr. Him</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card hovereffect border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/woman_umpire.png" alt="The Umpire">
                                        <div class="overlay">
                                            <p>He’s always around. Here and ther. Sometimes as a shadow, other times a
                                                mist.
                                                <br><br>
                                                He’s always there. At the hint of trouble. Then everything suddely
                                                subsides.
                                                <br><br>
                                                He’s aways there.
                                                Who is he?</p>
                                        </div>
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-0 chief">The Umpire</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card hovereffect border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/snake_and_boy.png" alt="Rogue World">
                                        <div class="overlay">
                                            <p>Life deals tough cards. Making the most out of the deck you have is even
                                                tougher.
                                                <br><br>
                                                A boy called Beljit learns to take his life back when he comes a cross a
                                                serpent that takes to him like a fish to water.</p>
                                        </div>
                                    </div>

                                    <p class="ml-4 mt-2 mb-md-3 chief">Rogue World</p>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card hovereffect border-0 shadow">
                                        <img class="img-fluid" src="./assets/img/spaceman_and_dog_closeup.png"
                                            alt="The Last Voyager">
                                        <div class="overlay">
                                            <p>People have fogoten about earth and moved on to interstellar life.
                                                <br><br>
                                                But one person chose to stay and keep finding what the Earth, our home,
                                                still has to offer.
                                                <br><br>
                                                He, is known as Caleb. This, is an account of his adventures as the last
                                                voyager.</p>
                                        </div>
                                    </div>
                                    <p class="ml-4 mt-2 mb-md-3 chief">The Last Voyager</p>
                                </div>



                            </div>
                        </div>
                        <!--/.Second slide-->


                    </div>
                    <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->


            </div>
        </section>

        <section class="note pt-0">
            <div class="container text-center">
                <h2 class="mb-5">Ready to become a chief?</h2>
                <a href="/register" class="btn btn-secondary">Let's Go</a>
            </div>
        </section>

    </main>

    <!-- Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content overflow-hidden">

                <div class="modal-body">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Scripts -->
    <?php echo $__env->make('inc.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH E:\clients\Charmello\charmello\resources\views/story-chiefs.blade.php ENDPATH**/ ?>