<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->Html->charset('utf-8'); ?>
    <?php echo $this->Html->meta('viewport','width=device-width, initial-scale=1.0'); ?>
    <?php echo $this->Html->meta('description','eic corporation app , service eic, platform eic , ivoire invest'); ?>
    <?php echo $this->Html->meta('author','eic corporation'); ?>
    <?php echo $this->Html->meta('keyword','dashboard eic corporation, platform'); ?>
    <?php echo $this->Html->meta('favicon.ico','/img/favicon.png',array('type' => 'icon')); ?> 
    <title>PlateFotrm | EiC Corporation</title>

    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <?php echo $this->Html->css('bootstrap-reset'); ?>
     <!--external css-->
    <?php echo $this->Html->css('assets/font-awesome/css/font-awesome'); ?>
    <?php echo $this->Html->css('assets/jquery-easy-pie-chart/jquery.easy-pie-chart'); ?>
    <?php echo $this->Html->css('owl.carousel'); ?>
    <?php echo $this->Html->css('jquery.countdown');?>
    <?php echo $this->Html->css('jquery.nailthumb.1.1.min'); ?>
    <?php echo $this->fetch('css'); ?>

    <!-- Custom styles for this template -->
    <?php echo $this->Html->css('style'); ?>
    <?php echo $this->Html->css('style-responsive'); ?>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <?php echo $this->Html->script('respond.min'); ?>
    <![endif]-->

  <body>

  <section id="container">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'index')); ?>" class="logo"> PlatForm <span>EiC</span ></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
              <!-- settings start -->
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class=" icon-trophy"></i>
                      <!--<span class="badge bg-success">6</span>-->
                  </a>
                  <ul class="dropdown-menu extended tasks-bar">
                      <div class="notify-arrow notify-arrow-green"></div>
                      <li>
                          <p class="green">Vous avez 0 badge(s)</p>
                      </li>
                     <!-- <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Dashboard v1.3</div>
                                  <div class="percent">40%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                      <span class="sr-only">40% Complete (success)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Database Update</div>
                                  <div class="percent">60%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                      <span class="sr-only">60% Complete (warning)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Iphone Development</div>
                                  <div class="percent">87%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                      <span class="sr-only">87% Complete</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Mobile App</div>
                                  <div class="percent">33%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                      <span class="sr-only">33% Complete (danger)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Dashboard v1.3</div>
                                  <div class="percent">45%</div>
                              </div>
                              <div class="progress progress-striped active">
                                  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                      <span class="sr-only">45% Complete</span>
                                  </div>
                              </div>

                          </a>
                      </li>-->
                      <li class="external">
                          <a href="#">Afficher tous vos badges</a>
                      </li>
                  </ul>
              </li>
              <!-- settings end -->
              <!-- inbox dropdown start-->
              <li id="header_inbox_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class="icon-envelope-alt"></i>
                      <!--<span class="badge bg-important">5</span>-->
                  </a>
                  <ul class="dropdown-menu extended inbox">
                      <div class="notify-arrow notify-arrow-red"></div>
                      <li>
                          <p class="red">Vous avez 0  message(s)</p>
                      </li>
                      <!--<li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="img/avatar-mini4.jpg"></span>
                              <span class="subject">
                              <span class="from">Jondi Rose</span>
                              <span class="time">Just now</span>
                              </span>
                              <span class="message">
                                  Hello, this is metrolab
                              </span>
                          </a>
                      </li>-->
                      <li>
                          <a href="#">Afficher tous les messages</a>
                      </li>
                  </ul>
              </li>
              <!-- inbox dropdown end -->
              <!-- notification dropdown start-->
              <li id="header_notification_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                      <i class="icon-bell-alt"></i>
                      <!--<span class="badge bg-warning">7</span>-->
                  </a>
                  <ul class="dropdown-menu extended notification">
                      <div class="notify-arrow notify-arrow-yellow"></div>
                      <li>
                          <p class="yellow">Vous avez 0 notification(s)</p>
                      </li>
                      <!--<li>
                          <a href="#">
                              <span class="label label-danger"><i class="icon-bolt"></i></span>
                              Server #3 overloaded.
                              <span class="small italic">34 mins</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-warning"><i class="icon-bell"></i></span>
                              Server #10 not respoding.
                              <span class="small italic">1 Hours</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-danger"><i class="icon-bolt"></i></span>
                              Database overloaded 24%.
                              <span class="small italic">4 hrs</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-success"><i class="icon-plus"></i></span>
                              New user registered.
                              <span class="small italic">Just now</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-info"><i class="icon-bullhorn"></i></span>
                              Application error.
                              <span class="small italic">10 mins</span>
                          </a>
                      </li>-->
                      <li>
                          <a href="#">Afficher les notifications</a>
                      </li>
                  </ul>
              </li>
              <strong class="pull-right"> Objetif 2014 : 1000 Investisseurs</strong>
              <a href="#" class="pull-right obje">
                  <span class="numbers" id="numbers"></span
              </a>
              <a href="<?php echo $this->Html->url(array('controller' => 'Transactions', 'action' => 'PassOrder')); ?>" class='btn btn-danger pull-right'><i class="icon-shopping-cart"></i> Achat de parts</a>
              <!-- notification dropdown end -->
          </ul>
          </div>
          <div class="top-nav">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <?php if (!$this->Session->check('Auth.User.Avatar.0.url')): ?>
                             <?php echo $this->Html->image('http://dummyimage.com/29x29/bbb/05071f.png&text=avatar'); ?>
                          <?php else: ?>
                             <?php echo $this->Html->image($this->Session->read('Auth.User.Avatar.0.url'),array('width'=>29,'height'=>29)); ?>
                         <?php endif; ?>
                          <span class="username"><?php echo $this->Session->read('Auth.User.User.username'); ?></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'profil')); ?>"><i class=" icon-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                          <li><a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'logout')); ?>"><i class="icon-key"></i>Deconnexion</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'index')); ?>">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-user"></i>
                          <span>Compte</span>
                      </a>
                      <ul class="sub">
                          <li>
                            <a  href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'profil'));?>">Afficher son profil</a>
                        </li>
                          <li><a  href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'ListFeuil')); ?>">Affiliations</a></li>
                          <li><a  href="#">Cashflow</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-tasks"></i>
                          <span>Tests</span>
                      </a>
                        <ul class="sub">
                          <li><a  href="#">Investisseurs</a></li>
                          <li><a  href="#">Premium</a></li>
                          <li><a  href="#">Forex</a></li>
                          <li><a  href="#">Capital market</a></li>
                          <li><a  href="#">E-business</a></li>
                          <li><a  href="#">Investment club</a></li>
                        </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="#" >
                          <i class="icon-envelope"></i>
                          <span>Messages</span>
                          <!--<span class="label label-danger pull-right mail-info">2</span>-->
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php //echo $this->Html->url(array('controller' => 'Posts', 'action' => 'newsfeed')); ?>">
                          <i class="icon-info"></i>
                          <span>Fil d'actualités</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-shopping-cart"></i>
                          <span>Opérations</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo $this->Html->url(array('controller' => 'Transactions', 'action' => 'PassOrder')); ?>">Passer un Ordre</a></li>
                          <li><a href="<?php echo $this->Html->url(array('controller' => 'Transactions', 'action' => 'PurchasesHistrory')); ?>">Historiques Achats</a></li>
                          <!--<li><a  href="#">Retrait</a></li>
                          <li><a  href="#">Historique retrait</a></li>-->
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-bar-chart"></i>
                          <span>Variations</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo $this->Html->url(array('controller' => 'Transactions', 'action' => 'Rendement')); ?>">Rendements</a></li>
                          <!--<li><a  href="#">Analyses</a></li>
                          <li><a  href="#">Economiques</a></li>
                          <li><a  href="#">Statistiques</a></li>-->
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-suitcase"></i>
                          <span>Projets</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">Projets Privés</a></li>
                          <li><a  href="#">Objectif Personnel</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="#" >
                          <i class="icon-group"></i>
                          <span>Forum</span>
                      </a>
                  </li>
                 <li class="sub-menu">
                      <a href="#" >
                          <i class="icon-archive"></i>
                          <span>Ressources</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <?php echo $this->fetch('content'); ?>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <!-- js placed at the end of the document so the pages load faster -->
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->Html->script('jquery.dcjqaccordion.2.7'); ?>
<?php echo $this->Html->script('jquery.scrollTo.min'); ?>
<?php echo $this->Html->script('jquery.nicescroll'); ?>
<?php echo $this->Html->script('jquery.sparkline'); ?>
<?php echo $this->Html->script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart'); ?>
<?php echo $this->Html->script('owl.carousel'); ?>
<?php echo $this->Html->script('jquery.customSelect.min'); ?>
<?php echo $this->Html->script('respond.min'); ?>
<?php echo $this->Html->script('mustache'); ?>
<?php echo $this->Html->script('time.ago'); ?>
<?php echo $this->Html->script('jquery.countdown'); ?>
<?php echo $this->Html->script('jquery.countdown-fr'); ?>
<?php echo $this->fetch('script'); ?>
<?php echo $this->Html->script('common-scripts'); ?>
<?php echo $this->Html->script('sparkline-chart'); ?>
<?php echo $this->Html->script('easy-pie-chart'); ?>
<?php echo $this->Html->script('main');?>
<?php echo $this->Html->script('nailthumb/jquery.nailthumb.1.1.min'); ?>
    <!--<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-46080775-1', 'eic-corporation.com');
      ga('send', 'pageview');
    </script>-->
     <script>
          //owl carousel
          $(document).ready(function() {
              $("#owl-demo").owlCarousel({
                  navigation : true,
                  slideSpeed : 300,
                  paginationSpeed : 400,
                  singleItem : true,
                  autoPlay:true
              });
          });
          //custom select box
          $(function(){
              $('select.styled').customSelect();
          });
      </script>
  </body>
</html>
