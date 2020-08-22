<?php echo $__env->make('inc.config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php

    if(!(isset($_SESSION['auth_charrmello'])))
    {
        if(isset($token))
        {
             $_SESSION['timeout'] = time();
             $_SESSION['auth_charrmello'] = true;
             $_SESSION['token_charrmello'] = $token;
             $_SESSION['userId_charrmello'] = $userId;
         }
         else
         {
             header('Location: /login');
         }
         
    } 
  
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
                    <img class="img-fluid rounded" width="330" src="/storage/profile/<?php echo e($user->photoUrl); ?>" alt="social">
                </div>
                <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="hero__navigation my-5 nav-pills">
                    <nav class="nav justify-content-center">
                        <a class="nav-link text-dark" href="#Privacy">Privacy</a>
                        <a class="nav-link text-dark" href="#Settings">Settings</a>
                        <a class="nav-link text-dark" href="/logout">Log-out</a>
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

                    <?php if(isset($data)): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Album -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="album mediaClick" data-toggle="modal" data-target="#albumModel">
                                <div class="card border-0 shadow overflow-hidden">
                                    <img src="/storage/cover/<?php echo e($value['cover']); ?>" alt="Album Image">
                                </div>
                                <div class="card-caption">
                                    <h5 class="mt-4"><?php echo e($value['title']); ?></h5>
                                    <p class="mt-2 mb-4"><?php echo e($value['description']); ?></p>
                                    <input type="hidden" name="key" class="key" value="<?php echo e($key); ?>">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>

            </div>
        </section>

        <!-- Upload Section -->
        <div class="album-upload p-section pt-0">
            <div class="row">
                <div class="row col-md-8 mx-auto">
                    <div class="col-md-6">
                        <a href="/camp/create"
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
                    <?php $cover = './assets/img/man_and_tattoos 1.png'; ?>
                        <div class="rounded cover-content" id="mcover">

                            <div class="cover-content-title" id="mtitle">Hopefull</div>

                            <div
                                class="status rounded-circle d-flex flex-column justify-content-center align-items-center">
                                <p class="status-figure" id="mlistens"></p>
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
                                                
                                            </div>
                                            <div class="tab-pane fade rounded" id="description-edit" role="tabpanel"
                                                aria-labelledby="description-edit-tab">
                                                <form method="post" action="<?php echo e(action('MediaController@updateMedia')); ?>">
                                                <?php echo e(csrf_field()); ?>

                                                    <textarea name="description" cols="30" rows="10"
                                                        class="form-control" id="dedit"></textarea>
                                                <input type="hidden" name="mkey" id="mkey" value="">
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
                                                <div class="audio-text" id="maudio">
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

    <script>
        $(document).ready(function(){
        
            $('.mediaClick').click(function(){
                var id =  $(this).find('.key').val();
                console.log(id);
                
                $.get("/media/"+id, function(data, status){
                    
                    var mdata = JSON.stringify(data);
                    console.log(data);

                    $('#mtitle').html(data["title"]);
                    $('#maudio').html(data["media"]);
                    var path = "linear-gradient(90deg, #3A3735 0%, rgba(58, 55, 53, 0.47) 22.93%, rgba(58, 55, 53, 0) 69.87%), url('/storage/cover/"+data['cover']+"')";
                    console.log(path)
                    $('#mcover').css('background',path);
                    $('#description-wrapper').html(data["description"]);
                    $('#dedit').html(data["description"]);
                    $('#mlistens').html(data['listens']);
                    $('#mkey').val(id);
                });
            });

            $('#audio-delete-btn').click(function(){
                var id =  $('#mkey').val();
                location.replace(window.location.origin+"/media/delete/"+id);
            });

        });
    </script>
</body>
</html><?php /**PATH E:\clients\Charmello\charmello\resources\views/camp.blade.php ENDPATH**/ ?>