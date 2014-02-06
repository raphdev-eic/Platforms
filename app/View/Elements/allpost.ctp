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
                        <div class="btn-group pull-right">
                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Tâches<span class="caret"></span></button>
                          <ul role="menu" class="dropdown-menu">
                              <li><a href="#"> Modifier </a></li>
                              <li><a href="#"> Abonner </a></li>
                              <li><a href="#"> Cacher </a></li>
                              <li><a href="#"> Supprimer </a></li>
                          </ul>
                        </div>
                    </span>
                    </h5>
                      <p>{{content}}</p>
                    <p></p>
                    <span class="t-info"><i class="icon-time"></i> Il a 20 minutes <i class="icon-map-marker"></i></span>
                    <footer class="panel-footer">
                        <ul class="nav nav-pills">
                            <li data-original-title="1 de + pour cette information" data-placement="left" class="tooltips">
                                <a href="#"><span class="label label-info"><i class="icon-thumbs-up"></i>  4000+Eic </span></a>
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
                          <span><strong></strong> Commentaire</span>
                          <a href="#comment{{postid}}"  id="Post{{id}}" class="like"><span class="pull-right label label-info"><i class="icon-plus"></i> de commentaires</span></a>
                        </div>
                    </footer>
                      <div class="list-group">
                        {{#Comment}}
                        <a class="list-group-item" href="javascript:;">
                                <strong>
                                  {{#User}}
                                      {{#Avatar}}
                                           <img src="{{url}}" alt="" width="52",height="52" class="pull-left comment-img">
                                      {{/Avatar}}
                                      {{^Avatar}}
                                       <img src="http://dummyimage.com/45x45/bbb/05071f.png&text=avatar" alt="" class="pull-left comment-img" />
                                      {{/Avatar}}
                                   {{/User}}
                                </strong>
                               <h6 class="list-group-item-heading"><strong></strong><span class="pull-right label label-info">+1000 Eic</span></h6>
                               <p class="list-group-item-text">{{content}}</p>
                        </a>
                        {{/Comment}}
                      </div>
                        <div class="list-group hidden" id="comment{{id}}">
                          <?php echo $this->Html->image($this->Session->read('Auth.User.Avatar.0.url'),array('class'=>'pull-left comment-img','width'=>35,'height'=>35));?>
                            <p class="list-group-item-text">
                              <?php echo $this->Form->create('Comment',array('url'=>array('controller'=>'Comments','action'=>'SendComment'))); ?>
                               <?php echo $this->Form->input('user_id', array('type'=>'hidden')); ?>
                               <?php echo $this->Form->input('post_id',array('type'=>'hidden','label'=>false,"autocomplete"=>"off")); ?>
                            <?php echo $this->Form->textarea('context',array('class'=>'comment-form','id'=>'comment-form{{id}}','placeholder'=>'Ecrire un commentaire')); ?>
                              <?php echo $this->Form->button('Commenter', array('class'=>"btn btn-info pull-right btn-comment",'id'=>'1')); ?>
                            <?php echo $this->Form->end();?>
                            </p>
                        </div>
                </div>
              </section>
          </div>
        <!-- end comment post-->
     </div>
 {{/Post}}
{{/feed}}
</div>