<?php echo $__env->make('inc.config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php 

  unset($_SESSION["auth_charrmello"]);
  unset($_SESSION["token_charrmello"]);
  unset($_SESSION["userId_charrmello"]);

  echo 'You have logged out!';
  header( "refresh:0;url=/login" );
  
?><?php /**PATH E:\clients\Charmello\charmello\resources\views/auth/logout.blade.php ENDPATH**/ ?>