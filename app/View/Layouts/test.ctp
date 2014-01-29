<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->Html->charset('utf-8'); ?>
    <title>PlateFotrm | EiC Corporation</title>
    <?php echo $this->fetch('css'); ?>
  <body>
  <section id="container">
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <?php echo $this->fetch('content'); ?>
            <!-- page end-->
        </section>
    </section>
      <!--main content end-->
  </section>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <?php echo $this->Html->script('mustache'); ?>
  <?php echo $this->fetch('script'); ?>
  <?php //echo $this->Html->script('main');?>
  </body>
</html>
