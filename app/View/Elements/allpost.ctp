      {{#data}}
     <div class="row hidden" id="ListPostTpl">
        <!-- start photo connect-->
          <div class="col-lg-1">
              <section>
                {{#avatar}}
                   <img src="{{.}}" alt=""/>
                {{/avatar}}
              </section>
          </div>
        <!-- end photo connect-->

        <!-- start comment post-->
          <div class="col-lg-11">
              <section class="panel">
                  <div class="panel-body list-group">
                    <h5><strong>{{name}}</strong>
                     <span>
                        <div class="btn-group pull-right">
                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Tâches<span class="caret"></span></button>
                          <ul role="menu" class="dropdown-menu">
                              <li><a href="#">Modifier l'information</a></li>
                              <li><a href="#"> Abonner</a></li>
                              <li><a href="#">Cacher </a></li>
                              <li><a href="#">Supprimer/a></li>
                          </ul>
                        </div>
                    </span>
                    </h5>
                    <p>{{id}}</p>
                    <p>{{#img}} {{.}} {{/img}}</p>
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
                              <?php echo $this->Form->create('Comment',array('url'=>array('controller'=>'Comments','action'=>'SendComment'))); ?>
                               <?php echo $this->Form->input('user_id', array('type'=>'hidden')); ?>
                               <?php echo $this->Form->input('post_id',array('type'=>'hidden','label'=>false,"autocomplete"=>"off")); ?>
                            <?php echo $this->Form->textarea('context',array('class'=>'comment-form','id'=>'comment-form','placeholder'=>'Ecrire un commentaire')); ?>
                              <?php echo $this->Form->button('Commenter', array('class'=>"btn btn-info pull-right btn-comment",'id'=>'1')); ?>
                            <?php echo $this->Form->end();?>
                            </p>
                        </div>
                </div>
              </section>
          </div>
        <!-- end comment post-->
     </div>
     {{/data}}