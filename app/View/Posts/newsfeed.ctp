<!--general newfeed content-->
<div class="row">
  <div class="col-lg-7">
     <!--start form post and image-->
     <div class="row">
        <!-- start photo connect-->
          <div class="col-lg-1">
              <section>
                <?php $avatars = $this->Session->read('Auth.User.Avatar');?>
                <?php if (!empty($avatars)): ?>
                <?php
                    $av = end($avatars);
                    echo $this->Image->resize($av['url'],52,52);
                ?>
                <?php else: ?>
                    <?php echo $this->Html->image('http://dummyimage.com/52x52/bbb/05071f.png&text=avatar'); ?>
                <?php endif; ?>
              </section>
          </div>
        <!-- end photo connect-->

        <!-- start form post-->
          <div class="col-lg-11" id="form-style">
              <section class="panel">
                  <div class="panel-footer-2">
                    <p><?php echo ucfirst($this->Session->read('Auth.User.User.username')); ?> |  <i class="icon-retweet"></i> Ajouter une information</p>
                  </div>
                  <div class="panel-body">
                  <?php echo $this->Form->create('Post',array('url'=>array('controller'=>'Posts','action'=>'SendPosts'),'type'=>'file')); ?>
                  <?php echo $this->Form->input('name', array('type'=>'hidden',"autocomplete"=>"off")); ?>
                  <?php echo $this->Form->input('user_id', array('type'=>'hidden',"autocomplete"=>"off")); ?>
                  <?php echo $this->Form->input('type_id', array('type'=>'hidden',"autocomplete"=>"off")); ?>
                  <?php echo $this->Form->input('content',array('class'=>'form-control input-lg p-text-area','rows'=>5,'placeholder'=>'Transmettez-nous une information ici...','id'=>'form-content','label'=>false)); ?>
                    <div id="linkbox">test</div>
                    <footer class="panel-footer" id="footer">
                    <div class="loader pull-right"><?php echo $this->Html->image('ajax-loader.gif');?></div>
                    <?php echo $this->Form->button('Partager', array('class'=>"btn btn-info pull-right")); ?>
                        <ul class="nav nav-pills">
                            <li data-original-title="Joindre une image ou un fichier" data-placement="left" class="tooltips">
                                <!--<a href="#"><i class="icon-camera"></i></a>-->
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

     <!--section de creation du post template mustache et ajout visuel-->
     <div id="newpost"></div>
       <?php echo $this->element('newpost'); ?>
     <!-- fin de la section de creation du post-->

     <!--start post and comment feed list-->
       <div id="allcontent" class="allcontent">
        <span class="contentloading" id="contentloading">
            <?php echo $this->Html->image('loading.gif',array('id'=>'loading','class'=>'loading')); ?>
        </span>
       </div>
       <?php echo $this->element('allpost'); ?>
     <!--end post and comment feed list-->
  </div>
  <div class="col-lg-3">
    <!--start last inscrit-->
      <section class="panel">
          <header class="panel-heading">
              <span class='title'>Derniers inscrits</span>
          </header>
          <ul class="list-group">
            <?php foreach ($last as $key => $value): ?>
              <li class="list-group-item">
                  <a href="javascript:;">
                    <?php $avatars = $value['Avatar'];?>
                    <?php if (!empty($avatars)): ?>
                    <?php
                        $avs = end($avatars);
                        echo $this->Image->resize($avs['url'],35,35);
                    ?>
                    <?php else: ?>
                        <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar'); ?>
                    <?php endif; ?>
                  </a>
                  <?php echo $value['User']['lastname'].' '.$value['User']['firstname']; ?>
                  <a href="javascript:;"><span class="label label-primary pull-right r-activity"><i class="icon-envelope"></i></span></a>
              </li>
            <?php endforeach; ?>
          </ul>
      </section>
     <!--end last inscrit-->

    <!--start information-->
     <section class="panel">
          <ul class="list-group">
              <li class="list-group-item">
                   <i class="icon-group"></i> Abonnements <a href="javascript:;"><span class="label label-danger pull-right r-activity">0</span></a>
              </li>
              <li class="list-group-item">
                  <i class="icon-bell-alt"></i> Notifications <a href="javascript:;"><span class="label label-danger pull-right r-activity">0</span></a>
              </li>
              <li class="list-group-item">
                  <i class="icon-bookmark"></i> Posts <a href="javascript:;"><span class="label label-danger pull-right r-activity">0</span></a>
              </li>
              <li class="list-group-item">
                  <i class="icon-comment"></i> Commentaires <a href="javascript:;"><span class="label label-danger pull-right r-activity">0</span></a>
              </li>
              <li class="list-group-item">
                  <i class="icon-user"></i> Abonner <a href="javascript:;"><span class="label label-danger pull-right r-activity">0</span></a>
              </li>
              <li class="list-group-item">
                  <i class="icon-sitemap"></i> Filleul <a href="javascript:;"><span class="label label-danger pull-right r-activity">0</span></a>
              </li>
          </ul>
     </section>
     <!--end linformation-->

     <section class="panel">
          <header class="panel-heading">
              <span class='title'>Annonces</span> <span class="pull-right"><a href="#" class="btn btn-info">Créer</a></span>
          </header>
              <ul class="list-group" id="annonce-scroll">
                <div><h5>Positionnez votre business ici</h5></div>
                <!--<li class="list-group-item">
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
                <a href="javascript:;" class="annonce-link">Afficher tous</a>-->
              </ul>
     </section>
  </div>
    <div class="sect-col-right">
      <section>
          <div class="section-chat" id="inline-chat">
              <p></p>
              <ul>Bientôt disponible</ul>
              <!--<ul>
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
              </ul>-->
          </div>
      </section>
      <!--news actualité-->
    </div>
</div>
<?php echo $this->Html->script('jquery.livequery',array('inline'=>false)); ?>
<?php echo $this->Html->script('jquery.autosize.min',array('inline'=>false)); ?>
<?php echo $this->Html->script('ajax/jquery.postInfo',array('inline'=>false)); ?>
<?php echo $this->Html->script('jquery.timeago',array('inline'=>false)); ?>

<?php echo $this->Html->scriptStart(array('inline'=>false)); ?>
$(document).ready(function(){
    $(".timeago").livequery(function(){
    jQuery.timeago.settings.strings = {
       // environ ~= about, it's optional
       prefixAgo: "il y a",
       prefixFromNow: "d'ici",
       seconds: "moins d'une minute",
       minute: "environ une minute",
       minutes: "environ %d minutes",
       hour: "environ une heure",
       hours: "environ %d heures",
       day: "environ un jour",
       days: "environ %d jours",
       month: "environ un mois",
       months: "environ %d mois",
       year: "un an",
       years: "%d ans"
    };
       $(this).timeago();
    });
});
<?php echo $this->Html->scriptEnd(); ?>