<!--general newfeed content-->
<div class="row">
  <div class="col-lg-7">
     <!--start form post and image-->
     <div class="row">
        <!-- start photo connect-->
          <div class="col-lg-2">
              <section class="panel">
                  <div class="panel-body">{{Image}}</div>
              </section>
          </div>
        <!-- end photo connect-->

        <!-- start form post-->
          <div class="col-lg-10" id="form-style">
              <section class="panel">
                  <div class="panel-footer-2">
                    <p><?php echo ucfirst($this->Session->read('Auth.User.User.username')); ?> |  <i class="icon-retweet"></i> Ajouter une information</p>
                  </div>
                  <div class="panel-body">
                  <?php echo $this->Form->create('Post',array('url'=>array('controller'=>'Posts','action'=>'AddPost'),'type'=>'file')); ?>
                  <?php echo $this->Form->input('name', array('type'=>'hidden',"autocomplete"=>"off")); ?>
                  <?php echo $this->Form->input('user_id', array('type'=>'hidden',"autocomplete"=>"off")); ?>
                  <?php echo $this->Form->input('type_id', array('type'=>'hidden',"autocomplete"=>"off")); ?>
                  <?php echo $this->Form->textarea('content',array('class'=>'form-control input-lg p-text-area','rows'=>5,'placeholder'=>'Transmettez-nous une information ici...','id'=>'form-content')); ?>
                    <footer class="panel-footer" id="footer">
                    <div class="loader pull-right"><?php echo $this->Html->image('ajax-loader.gif');?></div>
                    <?php echo $this->Form->button('Partager', array('class'=>"btn btn-info pull-right")); ?>
                        <ul class="nav nav-pills">
                            <li data-original-title="Joindre une image ou un fichier" data-placement="left" class="tooltips">
                                <a href="#"><i class="icon-camera"></i></a>
                            </li>
                        </ul>
                    </footer>
                  <?php echo $this->Form->end(); ?>
                  </div>
              </section>
          </div>
        <!-- end form post-->
     </div>
     <!--end form post image-->

     <!--start post and comment feed list-->
     <div class="row">
        <!-- start photo connect-->
          <div class="col-lg-2">
              <section class="panel">
                  <div class="panel-body">{{Image}}</div>
              </section>
          </div>
        <!-- end photo connect-->

        <!-- start comment post-->
          <div class="col-lg-10">
              <section class="panel">
                  <div class="panel-body list-group">
                    <h5><strong>{{lastname+firstname}}</strong>
                     <span>
                        <div class="btn-group pull-right">
                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Tâches<span class="caret"></span></button>
                          <ul role="menu" class="dropdown-menu">
                              <li><a href="#">Modifier l'information</a></li>
                              <li><a href="#">{{S'abonner ou Se désabonner}} a l'information</a></li>
                              <li><a href="#">Cacher l'information</a></li>
                              <li><a href="#">Supprimer l'information</a></li>
                          </ul>
                        </div>
                    </span>
                    </h5>
                    <p>{{Sit lundium dapibus scelerisque cras lorem mattis sociis vut pellentesque odio, eu ac elementum, ac integer! Magnis in porttitor proin pellentesque scelerisque risus a dapibus est vel scelerisque. Enim ultricies vel pid? Nisi turpis odio parturient? Rhoncus? In, eu penatibus pulvinar pulvinar. Sit ridiculus. Eros? Urna aenean, elementum. Phasellus tristique, habitasse hac, et nunc! In risus? Elementum lectus penatibus proin. Et amet magna risus, integer pulvinar elit amet mauris lectus. Dictumst rhoncus? Risus nec. Amet natoque! Vel nisi ac elementum eros porttitor, non est egestas magna pulvinar, lorem, adipiscing risus! Mattis sit a. Facilisis aenean nascetur hac dolor, montes et ultrices, dapibus, risus turpis facilisis, eu urna magnis, eros tincidunt in auctor, mus est sit mid ut rhoncus dignissim mus.}}
                    </p>
                    <p><?php echo $this->Html->image('http://dummyimage.com/600x350/bbb/05071f.png',array('class'=>'post-img'));?></p>
                    <span class="t-info"><i class="icon-time"></i> Il y' a 20 minutes - <i class="icon-map-marker"></i>  </span>
                    <footer class="panel-footer">
                      <ul class="nav nav-pills">
                          <li data-original-title="1 de + pour cette information" data-placement="left" class="tooltips">
                              <a href="#"><span class="label label-info"><i class="icon-thumbs-up"></i> {{1000+}} Eic </span></a>
                          </li>
                          <li data-original-title="Commentez l'article" data-placement="top" class="tooltips">
                              <a href="#"><span class="label label-info"><i class="icon-comments"></i> Commentez </span></a>
                          </li>
                          <li data-original-title="Signaler l'article en cas d'abus" data-placement="right" class="tooltips">
                              <a href="#"><span class="label label-danger"><i class=" icon-warning-sign"></i> Signaler</span></a>
                          </li>
                      </ul>
                      <hr/>
                      <div>
                        <span><strong>{{4000+}}</strong> Commentaire{{s}}</span>
                        <a href="javascript:;"><span class="pull-right label label-info"><i class="icon-plus"></i> de commentaires</span></a>
                      </div>
                    </footer>
                      <div class="list-group">
                               <a class="list-group-item " href="javascript:;">
                                <strong><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?></strong>
                                <h6 class="list-group-item-heading"><strong>{{Lastname+Firstname}}</strong><span class="pull-right label label-info">+1000 Eic</span></h6>
                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.c, montes amet. Turpis in vel augue. Massa amet urna a, cursus augue in eros rhoncus integer ut. Magnis diam dapibus odio nisi hac, porttitor proin mus? Scelerisque hac nunc, placerat phasellus quis mus nascetur dignissim rhoncus mattis tincidunt phasellus cras scelerisque.
                                </p>
                               </a>
                               <a class="list-group-item " href="javascript:;">
                                <strong><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?></strong>
                               <h6 class="list-group-item-heading"><strong>{{Lastname+Firstname}}</strong><span class="pull-right label label-info">+1000 Eic</span></h6>
                               <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.c, montes amet. Turpis in vel augue. Massa amet urna a, cursus augue in eros rhoncus integer ut. Magnis diam dapibus odio nisi hac, porttitor proin mus? Scelerisque hac nunc, placerat phasellus quis mus nascetur dignissim rhoncus mattis tincidunt phasellus cras scelerisque.Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.c, montes amet. Turpis in vel augue. Massa amet urna a, cursus augue in eros rhoncus integer ut. Magnis diam dapibus odio nisi hac, porttitor proin mus? Scelerisque hac nunc, placerat phasellus quis mus nascetur dignissim rhoncus mattis tincidunt phasellus cras scelerisque.</p>
                              </a>
                              <a class="list-group-item" href="javascript:;">
                                <strong><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?></strong>
                                <h6 class="list-group-item-heading"><strong>{{Lastname+Firstname}}</strong><span class="pull-right label label-info">+1000 Eic</span></h6>
                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                              </a>
                      </div>
                        <div class="list-group">
                          <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?>
                            <p class="list-group-item-text">
                              <?php echo $this->Form->create('Comment',array('url'=>array('controller'=>'Comment','action'=>'SendComment'))); ?>
                            <?php echo $this->Form->textarea('context',array('class'=>'comment-form','id'=>'comment-form','placeholder'=>'Ecrire un commentaire')); ?>
                              <?php echo $this->Form->button('Commenter', array('class'=>"btn btn-info pull-right",'id'=>'btn-comment')); ?>
                            <?php echo $this->Form->end();?>
                            </p>
                        </div>
                </div>
              </section>
          </div>
        <!-- end comment post-->
     </div>
     <!--end post and comment feed list-->

     <!--start post and comment feed list-->
     <div class="row">
        <!-- start photo connect-->
          <div class="col-lg-2">
              <section class="panel">
                  <div class="panel-body">{{Image}}</div>
              </section>
          </div>
        <!-- end photo connect-->

        <!-- start comment post-->
          <div class="col-lg-10">
              <section class="panel">
                  <div class="panel-body list-group">
                    <h5><strong>{{lastname+firstname}}</strong>
                     <span>
                        <div class="btn-group pull-right">
                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Tâches<span class="caret"></span></button>
                          <ul role="menu" class="dropdown-menu">
                              <li><a href="#">Modifier l'information</a></li>
                              <li><a href="#">{{S'abonner ou Se désabonner}} a l'information</a></li>
                              <li><a href="#">Cacher l'information</a></li>
                              <li><a href="#">Supprimer l'information</a></li>
                          </ul>
                        </div>
                    </span>
                    </h5>
                    <p>{{Sit lundium dapibus scelerisque cras lorem mattis sociis vut pellentesque odio, eu ac elementum, ac integer! Magnis in porttitor proin pellentesque scelerisque risus a dapibus est vel scelerisque. Enim ultricies vel pid? Nisi turpis odio parturient? Rhoncus? In, eu penatibus pulvinar pulvinar. Sit ridiculus. Eros? Urna aenean, elementum. Phasellus tristique, habitasse hac, et nunc! In risus? Elementum lectus penatibus proin. Et amet magna risus, integer pulvinar elit amet mauris lectus. Dictumst rhoncus? Risus nec. Amet natoque! Vel nisi ac elementum eros porttitor, non est egestas magna pulvinar, lorem, adipiscing risus! Mattis sit a. Facilisis aenean nascetur hac dolor, montes et ultrices, dapibus, risus turpis facilisis, eu urna magnis, eros tincidunt in auctor, mus est sit mid ut rhoncus dignissim mus.}}
                    </p>
                    <p><?php echo $this->Html->image('http://dummyimage.com/400x650/bbb/05071f.png',array('class'=>'post-img'));?></p>
                    <span class="t-info"><i class="icon-time"></i> Il y' a 20 minutes - <i class="icon-map-marker"></i>  </span>
                    <footer class="panel-footer">
                      <ul class="nav nav-pills">
                          <li data-original-title="1 de + pour cette information" data-placement="left" class="tooltips">
                              <a href="#"><span class="label label-info"><i class="icon-thumbs-up"></i> {{1000+}} Eic </span></a>
                          </li>
                          <li data-original-title="Commentez l'article" data-placement="top" class="tooltips">
                              <a href="#"><span class="label label-info"><i class="icon-comments"></i> Commentez </span></a>
                          </li>
                          <li data-original-title="Signaler l'article en cas d'abus" data-placement="right" class="tooltips">
                              <a href="#"><span class="label label-danger"><i class=" icon-warning-sign"></i> Signaler</span></a>
                          </li>
                      </ul>
                      <hr/>
                      <div>
                        <span><strong>{{4000+}}</strong> Commentaire{{s}}</span>
                        <a href="javascript:;"><span class="pull-right label label-info"><i class="icon-plus"></i> de commentaires</span></a>
                      </div>
                    </footer>
                      <div class="list-group">
                               <a class="list-group-item " href="javascript:;">
                                <strong><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?></strong>
                                <h6 class="list-group-item-heading"><strong>{{Lastname+Firstname}}</strong><span class="pull-right label label-info">+1000 Eic</span></h6>
                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.c, montes amet. Turpis in vel augue. Massa amet urna a, cursus augue in eros rhoncus integer ut. Magnis diam dapibus odio nisi hac, porttitor proin mus? Scelerisque hac nunc, placerat phasellus quis mus nascetur dignissim rhoncus mattis tincidunt phasellus cras scelerisque.
                                </p>
                               </a>
                               <a class="list-group-item " href="javascript:;">
                                <strong><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?></strong>
                               <h6 class="list-group-item-heading"><strong>{{Lastname+Firstname}}</strong><span class="pull-right label label-info">+1000 Eic</span></h6>
                               <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.c, montes amet. Turpis in vel augue. Massa amet urna a, cursus augue in eros rhoncus integer ut. Magnis diam dapibus odio nisi hac, porttitor proin mus? Scelerisque hac nunc, placerat phasellus quis mus nascetur dignissim rhoncus mattis tincidunt phasellus cras scelerisque.Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.c, montes amet. Turpis in vel augue. Massa amet urna a, cursus augue in eros rhoncus integer ut. Magnis diam dapibus odio nisi hac, porttitor proin mus? Scelerisque hac nunc, placerat phasellus quis mus nascetur dignissim rhoncus mattis tincidunt phasellus cras scelerisque.</p>
                              </a>
                              <a class="list-group-item" href="javascript:;">
                                <strong><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?></strong>
                                <h6 class="list-group-item-heading"><strong>{{Lastname+Firstname}}</strong><span class="pull-right label label-info">+1000 Eic</span></h6>
                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                              </a>
                      </div>
                        <div class="list-group">
                          <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?>
                            <p class="list-group-item-text">
                              <?php echo $this->Form->create('Comment',array('url'=>array('controller'=>'Comment','action'=>'SendComment'))); ?>
                            <?php echo $this->Form->textarea('context',array('class'=>'comment-form','id'=>'comment-form','placeholder'=>'Ecrire un commentaire')); ?>
                              <?php echo $this->Form->button('Commenter', array('class'=>"btn btn-info pull-right",'id'=>'btn-comment')); ?>
                            <?php echo $this->Form->end();?>
                            </p>
                        </div>
                </div>
              </section>
          </div>
        <!-- end comment post-->
     </div>
     <!--end post and comment feed list-->

     <!--start post and comment feed list-->
     <div class="row">
        <!-- start photo connect-->
          <div class="col-lg-2">
              <section class="panel">
                  <div class="panel-body">{{Image}}</div>
              </section>
          </div>
        <!-- end photo connect-->

        <!-- start comment post-->
          <div class="col-lg-10">
              <section class="panel">
                  <div class="panel-body list-group">
                    <h5><strong>{{lastname+firstname}}</strong>
                     <span>
                        <div class="btn-group pull-right">
                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Tâches<span class="caret"></span></button>
                          <ul role="menu" class="dropdown-menu">
                              <li><a href="#">Modifier l'information</a></li>
                              <li><a href="#">{{S'abonner ou Se désabonner}} a l'information</a></li>
                              <li><a href="#">Cacher l'information</a></li>
                              <li><a href="#">Supprimer l'information</a></li>
                          </ul>
                        </div>
                    </span>
                    </h5>
                    <p>{{Sit lundium dapibus scelerisque cras lorem mattis sociis vut pellentesque odio, eu ac elementum, ac integer! Magnis in porttitor proin pellentesque scelerisque risus a dapibus est vel scelerisque. Enim ultricies vel pid? Nisi turpis odio parturient? Rhoncus? In, eu penatibus pulvinar pulvinar. Sit ridiculus. Eros? Urna aenean, elementum. Phasellus tristique, habitasse hac, et nunc! In risus? Elementum lectus penatibus proin. Et amet magna risus, integer pulvinar elit amet mauris lectus. Dictumst rhoncus? Risus nec. Amet natoque! Vel nisi ac elementum eros porttitor, non est egestas magna pulvinar, lorem, adipiscing risus! Mattis sit a. Facilisis aenean nascetur hac dolor, montes et ultrices, dapibus, risus turpis facilisis, eu urna magnis, eros tincidunt in auctor, mus est sit mid ut rhoncus dignissim mus.}}
                    </p>
                    <p><?php echo $this->Html->image('http://dummyimage.com/500x350/bbb/05071f.png',array('class'=>'post-img'));?></p>
                    <span class="t-info"><i class="icon-time"></i> Il y' a 20 minutes - <i class="icon-map-marker"></i>  </span>
                    <footer class="panel-footer">
                      <ul class="nav nav-pills">
                          <li data-original-title="1 de + pour cette information" data-placement="left" class="tooltips">
                              <a href="#"><span class="label label-info"><i class="icon-thumbs-up"></i> {{1000+}} Eic </span></a>
                          </li>
                          <li data-original-title="Commentez l'article" data-placement="top" class="tooltips">
                              <a href="#"><span class="label label-info"><i class="icon-comments"></i> Commentez </span></a>
                          </li>
                          <li data-original-title="Signaler l'article en cas d'abus" data-placement="right" class="tooltips">
                              <a href="#"><span class="label label-danger"><i class=" icon-warning-sign"></i> Signaler</span></a>
                          </li>
                      </ul>
                      <hr/>
                      <div>
                        <span><strong>{{4000+}}</strong> Commentaire{{s}}</span>
                        <a href="javascript:;"><span class="pull-right label label-info"><i class="icon-plus"></i> de commentaires</span></a>
                      </div>
                    </footer>
                      <div class="list-group">
                               <a class="list-group-item " href="javascript:;">
                                <strong><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?></strong>
                                <h6 class="list-group-item-heading"><strong>{{Lastname+Firstname}}</strong><span class="pull-right label label-info">+1000 Eic</span></h6>
                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.c, montes amet. Turpis in vel augue. Massa amet urna a, cursus augue in eros rhoncus integer ut. Magnis diam dapibus odio nisi hac, porttitor proin mus? Scelerisque hac nunc, placerat phasellus quis mus nascetur dignissim rhoncus mattis tincidunt phasellus cras scelerisque.
                                </p>
                               </a>
                               <a class="list-group-item " href="javascript:;">
                                <strong><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?></strong>
                               <h6 class="list-group-item-heading"><strong>{{Lastname+Firstname}}</strong><span class="pull-right label label-info">+1000 Eic</span></h6>
                               <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.c, montes amet. Turpis in vel augue. Massa amet urna a, cursus augue in eros rhoncus integer ut. Magnis diam dapibus odio nisi hac, porttitor proin mus? Scelerisque hac nunc, placerat phasellus quis mus nascetur dignissim rhoncus mattis tincidunt phasellus cras scelerisque.Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.c, montes amet. Turpis in vel augue. Massa amet urna a, cursus augue in eros rhoncus integer ut. Magnis diam dapibus odio nisi hac, porttitor proin mus? Scelerisque hac nunc, placerat phasellus quis mus nascetur dignissim rhoncus mattis tincidunt phasellus cras scelerisque.</p>
                              </a>
                              <a class="list-group-item" href="javascript:;">
                                <strong><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?></strong>
                                <h6 class="list-group-item-heading"><strong>{{Lastname+Firstname}}</strong><span class="pull-right label label-info">+1000 Eic</span></h6>
                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                              </a>
                      </div>
                        <div class="list-group">
                          <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar',array('class'=>'pull-left comment-img'));?>
                            <p class="list-group-item-text">
                              <?php echo $this->Form->create('Comment',array('url'=>array('controller'=>'Comment','action'=>'SendComment'))); ?>
                            <?php echo $this->Form->textarea('context',array('class'=>'comment-form','id'=>'comment-form','placeholder'=>'Ecrire un commentaire')); ?>
                              <?php echo $this->Form->button('Commenter', array('class'=>"btn btn-info pull-right",'id'=>'btn-comment')); ?>
                            <?php echo $this->Form->end();?>
                            </p>
                        </div>
                </div>
              </section>
          </div>
        <!-- end comment post-->
     </div>
     <!--end post and comment feed list-->
  </div>
  <div class="col-lg-3">
    <!--start last inscrit-->
      <section class="panel">
          <header class="panel-heading">
              <span class='title'>Derniers inscrits</span>
          </header>
          <ul class="list-group">
              <li class="list-group-item">
                  <a href="javascript:;">
                  {{<?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>}}
                   {{name inscrit}}
                  </a>
                  <a href="javascript:;"><span class="label label-primary pull-right r-activity"><i class="icon-envelope"></i></span></a>
              </li>
              <li class="list-group-item">
                  <a href="javascript:;">
                  {{<?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>}}
                   {{name inscrit}}
                  </a>
                  <a href="javascript:;"><span class="label label-primary pull-right r-activity"><i class="icon-envelope"></i></span></a>
              </li>
          </ul>
      </section>
     <!--end last inscrit-->

    <!--start information-->
     <section class="panel">
          <ul class="list-group">
              <li class="list-group-item">
                   <i class="icon-group"></i> Abonnements <a href="javascript:;"><span class="label label-danger pull-right r-activity">99+</span></a>
              </li>
              <li class="list-group-item">
                  <i class="icon-bell-alt"></i> Notifications <a href="javascript:;"><span class="label label-danger pull-right r-activity">30</span></a>
              </li>
              <li class="list-group-item">
                  <i class="icon-bookmark"></i> Posts <a href="javascript:;"><span class="label label-danger pull-right r-activity">99+</span></a>
              </li>
              <li class="list-group-item">
                  <i class="icon-comment"></i> Commentaires <a href="javascript:;"><span class="label label-danger pull-right r-activity">99+</span></a>
              </li>
              <li class="list-group-item">
                  <i class="icon-user"></i> Abonner <a href="javascript:;"><span class="label label-danger pull-right r-activity">80</span></a>
              </li>
              <li class="list-group-item">
                  <i class="icon-sitemap"></i> Filleul <a href="javascript:;"><span class="label label-danger pull-right r-activity">20</span></a>
              </li>
          </ul>
     </section>
     <!--end linformation-->

     <section class="panel">
          <header class="panel-heading">
              <span class='title'>Annonces</span> <span class="pull-right"><a href="#" class="btn btn-info">Créer</a></span>
          </header>
              <ul class="list-group" id="annonce-scroll">
                <li class="list-group-item">
                     <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?><strong> Sampan Blehoue Hermann</strong><br/> {{non elementum odio mattis, tortor? Mattis lacus hac facilisis amet adipiscing urna tincidunt duis et, ac elementum a, platea}}  <a href="javascript:;"><span class="label label-info pull-right r-activity"><i class="icon-plus"></i></span></a>
                </li>
                <li class="list-group-item">
                     <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?><strong> Sampan Blehoue Hermann</strong><br/> {{non elementum odio mattis, tortor? Mattis lacus hac facilisis amet adipiscing urna tincidunt duis et, ac elementum a, platea}}  <a href="javascript:;"><span class="label label-info pull-right r-activity"><i class="icon-plus"></i></span></a>
                </li>
                <li class="list-group-item">
                     <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?><strong> Sampan Blehoue Hermann</strong><br/> {{non elementum odio mattis, tortor? Mattis lacus hac facilisis amet adipiscing urna tincidunt duis et, ac elementum a, platea}}  <a href="javascript:;"><span class="label label-info pull-right r-activity"><i class="icon-plus"></i></span></a>
                </li>
                <li class="list-group-item">
                     <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?><strong> Sampan Blehoue Hermann</strong><br/> {{non elementum odio mattis, tortor? Mattis lacus hac facilisis amet adipiscing urna tincidunt duis et, ac elementum a, platea}}  <a href="javascript:;"><span class="label label-info pull-right r-activity"><i class="icon-plus"></i></span></a>
                </li>
                <li class="list-group-item">
                     <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?><strong> Sampan Blehoue Hermann</strong><br/> {{non elementum odio mattis, tortor? Mattis lacus hac facilisis amet adipiscing urna tincidunt duis et, ac elementum a, platea}}  <a href="javascript:;"><span class="label label-info pull-right r-activity"><i class="icon-plus"></i></span></a>
                </li>
                <li class="list-group-item">
                     <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?><strong> Sampan Blehoue Hermann</strong><br/> {{non elementum odio mattis, tortor? Mattis lacus hac facilisis amet adipiscing urna tincidunt duis et, ac elementum a, platea}}  <a href="javascript:;"><span class="label label-info pull-right r-activity"><i class="icon-plus"></i></span></a>
                </li>
                <a href="javascript:;" class="annonce-link">Afficher tous</a>
              </ul>
     </section>
  </div>
    <div class="sect-col-right">
      <section>
          <div class="section-chat" id="inline-chat">
              <p></p>
              <ul>
                 <li>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
                 </li>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}}<i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
              <ul>
                   <a href="#" class="link-chat"><?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar');?>{{name}} <i class=" icon-circle text-success"></i>
                   </a>
              </ul>
          </div>
      </section>
      <!--news actualité-->
    </div>
</div>
<!--end general newfeed  content-->