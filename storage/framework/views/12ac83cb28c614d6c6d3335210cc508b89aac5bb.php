<?php
$currentPage = "about";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="about">

    <!-- Navbar -->
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>
        <div class="container">

            <!-- Hero -->
            <section class="hero">
                <header>
                    <nav class="nav justify-content-center">
                        <a class="nav-link text-dark" href="#charrmello">Charrmello</a>
                        <a class="nav-link text-dark" href="#team">Team</a>
                        <a class="nav-link text-dark" href="#story">Story chiefs</a>
                        <a class="nav-link text-dark" href="#contact">Contact</a>
                    </nav>
                </header>

                <div class="hero__image text-center mt-3">
                    <div>
                        <img class="rounded" src="/assets/img/about-hero.png" alt="hero">
                        <h2 class="text-left">About<br>charrmello</h2>
                    </div>
                </div>
            </section>
        </div>

        <!-- Charrmello Section -->
        <section id="charrmello" class="charrmello">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 mx-auto">
                        <h2 class="mb-5">Charrmello</h2>
                        <p class="mb-0">is a stroy telling app that aims for full emmersion into content, breaking the
                            current
                            boundries of audio books, and bringing a new medium for learning.
                            <br><br>
                            If you want to learn about space, why not feel as if you’re actually there, or even if
                            you’re listening to your latest adventure novel, get absorbed by the stakes.
                            <br><br>
                            It’s all about bringing stroytelling and learing to life.
                            <br><br>
                            Enjoy.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="team">
            <div class="container">
                <h2 class="mb-5">Team Mello</h2>

                <div class="row">
                    <!-- Team Member -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow hovereffect">
                            <img class="img-fluid" src="/assets/img/team-member (7).png" alt="Creative Lead">
                            <div class="overlay">
                                <p>Creative Lead</p>
                            </div>
                        </div>
                        <p class="ml-2 mt-2">Ayo</p>
                    </div>

                    <!-- Team Member -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow hovereffect">
                            <img class="img-fluid" src="/assets/img/team-member (6).png" alt="Business Lead">
                            <div class="overlay">
                                <p>Business Lead</p>
                            </div>
                        </div>
                        <p class="ml-2 mt-2">Philip</p>
                    </div>

                    <!-- Team Member -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow hovereffect">
                            <img class="img-fluid" src="/assets/img/team-member (5).png" alt="Developer">
                            <div class="overlay">
                                <p>Developer</p>
                            </div>
                        </div>
                        <p class="ml-2 mt-2">Sam</p>
                    </div>

                    <!-- Team Member -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow hovereffect">
                            <img class="img-fluid" src="/assets/img/team-member (4).png" alt="Strategy & Design">
                            <div class="overlay">
                                <p>Strategy & Design</p>
                            </div>
                        </div>
                        <p class="ml-2 mt-2">Ben</p>
                    </div>

                    <!-- Team Member -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow hovereffect">
                            <img class="img-fluid" src="/assets/img/team-member (1).png" alt="Developer">
                            <div class="overlay">
                                <p>Developer</p>
                            </div>
                        </div>
                        <p class="ml-2 mt-2">Iler</p>
                    </div>

                    <!-- Team Member -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow hovereffect">
                            <img class="img-fluid" src="/assets/img/team-member (2).png" alt="Finance Officer">
                            <div class="overlay">
                                <p>Finance Officer</p>
                            </div>
                        </div>
                        <p class="ml-2 mt-2">Brook</p>
                    </div>

                    <!-- Team Member -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow hovereffect">
                            <img class="img-fluid" src="/assets/img/team-member (3).png" alt="Lead Developer">
                            <div class="overlay">
                                <p>Lead Developer</p>
                            </div>
                        </div>
                        <p class="ml-2 mt-2">Batel</p>
                    </div>

                    <!-- Team Member -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow hovereffect">
                            <img class="img-fluid" src="/assets/img/team-member (8).png" alt="Lead Design">
                            <div class="overlay">
                                <p>Lead Design</p>
                            </div>
                        </div>
                        <p class="ml-2 mt-2">Jonathan</p>
                    </div>

                </div>
            </div>

        </section>

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

        <!-- Contact -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 mx-auto">
                        <h2>Get in touch</h2>
                        <p>Any questions, ideas, want to join, whatever. It’s all good, simply drop us a line.</p>

                        <form method="post" action="<?php echo e(action('ContactController@store')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <input type="text" name="name" class="form-control" placeholder="Glen Quagmire">
                                </div>
                                <div class="col-md-6 mt-4">
                                    <input type="email" name="email" class="form-control" placeholder="quagmire@familyguy.com">
                                </div>
                                <div class="col-12 mt-4">
                                    <textarea class="form-control" name="msg" rows="6" placeholder="Your Idea"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Scripts -->
    <?php echo $__env->make('inc.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH E:\clients\Charmello\charmello\resources\views/about.blade.php ENDPATH**/ ?>