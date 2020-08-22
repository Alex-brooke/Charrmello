<b class="screen-overlay"></b>
<nav id="main-navbar" class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Logo</a>
        <?php 

            if(isset($user))
            {
                $is_login = true;
            }
            else
            {
                $is_login= false;
            }
        ?>
        <?php if ($currentPage !== 'auth' && $currentPage !== 'upload') {?>

        <button class="navbar-toggler" type="button" data-trigger="#navbarMenu" aria-controls="navbarMenu"
            aria-expanded="false" aria-label="Toggle navigation">
            <img class="img-fluid" src="/assets/img/Burger_Right_charrmello.png" alt="menu">
        </button>

        <div class="mobile-offcanvas d-md-flex justify-content-md-between align-items-md-center w-100" id="navbarMenu">
            <div class="offcanvas-header">
                <button class="nav-close btn"> &times </button>
                <div class="py-2 text-center">
                    <img class="img-fluid" src="/assets/img/Logo_FFFFFF_charrmello.png" alt="Charrmello">
                </div>
            </div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'story-chiefs' ? ' active' : ''); ?>" href="/story-chiefs">Story chiefs</a>
                </li>

                <?php if ($currentPage === 'landing' || $currentPage === 'about' || $currentPage === 'premium' || $currentPage === 'story-chiefs') {?>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'premium' ? ' active' : ''); ?>" href="/premium">Premium</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'about' ? ' active' : ''); ?>" href="/about">About</a>
                </li>
                <?php }?>

                <?php if ($currentPage !== 'landing' && $currentPage !== 'premium' && $is_login === false) {?>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'login' ? ' active' : ''); ?>" href="/login">Log-in</a>
                </li>
                <?php }?>

                <?php if ($currentPage !== 'landing' && $currentPage !== 'premium' && $is_login === true) {?>
                    <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'camp' ? ' active' : ''); ?>" href="/camp">Camp</a>
                </li>
                <?php }?>
            </ul>

            <?php if ($currentPage !== 'landing' && $currentPage !== 'premium' && $is_login === false) {?>

                <a href="/register" class="btn btn-primary my-2 my-sm-0" ><span>Sign-up</span></a>

            <?php }?>

            <?php if ($currentPage !== 'landing' && $currentPage !== 'premium' && $currentPage !== 'camp' && $is_login === true) {?>
                <a href="/camp/create" class="btn btn-primary my-2 my-sm-0" ><span>Upload</span></a>
            <?php }?>
        </div>
        <?php }?>
    </div>
</nav>
<?php /**PATH E:\clients\Charmello\charmello\resources\views/inc/navbar.blade.php ENDPATH**/ ?>