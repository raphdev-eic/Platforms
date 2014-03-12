<div id="newfeed-c" class="hidden">
{{#feed}}
  {{#Post}}
   <div id="{{id}}" class="row postitem">
        <!-- start photo connect-->
          <div class="col-lg-1">
              <section>
                  {{#User}}
                      {{#Avatar}}
                           <img src="{{url}}" alt="" width="52",height="52">
                      {{/Avatar}}
                      {{^Avatar}}
                       <img src="http://dummyimage.com/45x45/bbb/05071f.png&text=avatar" alt=""/>
                      {{/Avatar}}
                   {{/User}}
              </section>
          </div>
        <!-- end photo connect-->

        <!-- start comment post-->
          <div class="col-lg-11">
              <section class="panel">
                  <div class="panel-body list-group">
                    <h5><strong>{{name}}</strong>
                     <span>
                        <!--<div class="btn-group pull-right">
                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Tâches<span class="caret"></span></button>
                          <ul role="menu" class="dropdown-menu">
                              <li><a href="#"> Modifier </a></li>
                              <li><a href="#"> Abonner </a></li>
                              <li><a href="#"> Cacher </a></li>
                              <li><a href="#"> Supprimer </a></li>
                          </ul>
                        </div>-->
                    </span>
                    </h5>
                      <p>{{content}}</p>
                    <p></p>
                    <span class="t-info"><i class="icon-time"></i> Il a 20 minutes <i class="icon-map-marker"></i></span>
                    <div class="comcolor">
                    <footer class="panel-footer">
                        <ul class="nav nav-pills">
                            <li data-original-title="1 de + pour cette information" data-placement="left" class="tooltips">
                                <!--<a href="#"><span class="label label-info"><i class="icon-thumbs-up"></i>  4000+Eic </span></a>-->
                            </li>
                            <li data-original-title="Commentez article" data-placement="top" class="tooltips">
                                <a href="#comment{{id}}" class="com" id="com/eic{{id}}"><span class="label label-info"><i class="icon-comments"></i> Commentez </span></a>
                            </li>
                            <li data-original-title="Signaler article en cas abus" data-placement="right" class="tooltips">
                                <a href="#"><span class="label label-danger"><i class=" icon-warning-sign"></i> Signaler</span></a>
                            </li>
                        </ul>
                        <hr/>
                        <div>
                          <span><strong></strong> Commentaires</span>
                          <a href="#comment{{postid}}"  id="Post{{id}}" class="like"><span class="pull-right label label-info"><i class="icon-plus"></i> de commentaires</span></a>
                        </div>
                    </footer>
                        <div class="col-lg-12 comcolor">
                            <section class="panel comcolor">
                                  <div class="list-group">
                                    {{#Comment}}
                                      <li class="list-group-item comcolor UiCommentBotton" href="javascript:;">
                                        <div class="col-lg-1">
                                          {{#User}}
                                              {{#Avatar}}
                                                   <img src="{{url}}" alt="" width="35",height="35" class="pull-left comment-img">
                                              {{/Avatar}}
                                              {{^Avatar}}
                                               <img src="http://dummyimage.com/35x35/bbb/05071f.png&text=avatar" alt="" class="pull-left comment-img" />
                                              {{/Avatar}}
                                           {{/User}}
                                        </div>
                                        <div class="col-lg-11 comt">
                                            <span>{{#User}}<a href="#" class="usern"> {{username}} </a>{{/User}} {{contentcom}} </span><br/>
                                        </div>
                                        <abbr class="livetimestamp timeago" title="{{updated}}">{{updated}}</abbr>
                                        <!--<a href="#" class="linkComment pull-right"><span class="label label-info"><i class="icon-thumbs-up"></i> +Eic </span></a>-->
                                      </li>
                                    {{/Comment}}
                                    <!--new comment-->
                                    <div id="newcom{{id}}"></div>
                                    <!--end comment-->
                                      <!--form comment-->
                                      <li class="list-group-item comcolor UiFormBotton" href="javascript:;">
                                        <div class="col-lg-1">
                                          <?php $avats = $this->Session->read('Auth.User.Avatar');?>
                                          <?php if (!empty($avats)): ?>
                                          <?php
                                              $avs = end($avats);
                                              echo $this->Image->resize($avs['url'],35,35);
                                          ?>
                                          <?php else: ?>
                                              <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar'); ?>
                                          <?php endif; ?>
                                        </div>
                                        <div class="col-lg-11">
                                          <?php echo $this->Form->create('Comment',array('url'=>array('controller'=>'Comments','action'=>'SendComment'),'id'=>'formCom-{{id}}','class'=>'formCom')); ?>
                                                 <?php echo $this->Form->input('user_id', array('type'=>'hidden')); ?>
                                                 <?php echo $this->Form->input('post_id',array('type'=>'hidden','label'=>false,"autocomplete"=>"off",'value'=>'KeyUiPost_/#{{id}}')); ?>
                                                <?php echo $this->Form->input('contentcom',array('class'=>'comment-form','id'=>'commentform{{id}}','placeholder'=>'Ecrire un commentaire','label'=>false,'autofocus')); ?>
                                                <?php echo $this->Form->button('Publier', array('class'=>"btn btn-info pull-right btn-comment",'id'=>'btncomment-{{id}}','style'=>'margin-right:2.5em')); ?>
                                          <?php echo $this->Form->end();?>
                                        </div>
                                      </li>
                                      <!--end form comment-->
                                      <div class="clearfix"></div>
                                  </div>
                            </section>
                        </div>
                    </div>
                </div>
              </section>
          </div>
        <!-- end comment post-->
     </div>
 {{/Post}}
{{/feed}}
</div>
<?php echo $this->element('TplComment'); ?>
