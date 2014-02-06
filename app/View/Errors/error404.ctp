<section class="error-wrapper">
          <i class="icon-404"></i>
          <h1><?php echo $code; ?></h1>
          <h2><?php echo $message; ?></h2>
          <p class="page-404"><?php echo $message; ?> <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'index')); ?>">Retouner sur la plateform</a></p>
</section>