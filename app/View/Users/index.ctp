<div class="row panel-body">
      <div class="col-lg-12 white-bg"><i class="icon-info-sign"></i> Bienvenue <?php echo $this->Session->read('Auth.User.User.username'); ?>| <strong class="corpus">Flash infos</strong> 
        <marquee behavior="" direction=""> <span>Lancement de la plateforme</span></marquee>
      </div> 
</div>
<div class="row">
  <div class="col-lg-8">
    <section class="panel">
      <?php echo $this->Form->create('Post',array('url'=>array('controller'=>'Posts','action'=>'AddPost'),'type'=>'file')); ?>
      <?php echo $this->Form->input('name', array('type'=>'hidden',"autocomplete"=>"off")); ?>
      <?php echo $this->Form->input('user_id', array('type'=>'hidden',"autocomplete"=>"off")); ?>
      <?php echo $this->Form->input('type_id', array('type'=>'hidden',"autocomplete"=>"off")); ?>
      <?php echo $this->Form->textarea('content',array('class'=>'form-control input-lg p-text-area','rows'=>5,'placeholder'=>' Qu\'est ce que vous avez à dire maintenant ?')); ?>
        <footer class="panel-footer">
        <?php echo $this->Form->button('Post', array('class'=>"btn btn-danger pull-right")); ?>
            <!--<ul class="nav nav-pills">
                <li>
                    <a href="#"><i class="icon-camera"></i></a>
                </li>
                <li>
                   <a href="#"><i class=" icon-paper-clip"></i></a>
                </li>
            </ul>-->
        </footer>
      <?php echo $this->Form->end(); ?>
    </section>
  </div>
  <div class="col-lg-4">
    <!--work progress start-->
    <section class="panel">
      <div class="panel-body progress-panel">
          <div class="task-progress">
              <h1>Derniers adhesions</h1>
              <p>Nouveaux Investisseur EiC | Félicitez-les</p>
          </div>
          <!--<div class="task-option">
              <select class="styled">
                  <option>Anjelina Joli</option>
                  <option>Tom Crouse</option>
                  <option>Jhon Due</option>
              </select>
          </div>-->
      </div>
      <table class="table table-hover personal-task">
        <tbody>
          <?php foreach ($lastSign as $k => $l): ?>
            <tr>
                <td><?php echo $this->Html->image('http://dummyimage.com/32x32/222/fff&text=inv'); ?></td>
                <td><?php echo $l['User']['lastname'].'  '.$l['User']['firstname']; ?></td>
                <td><span class="badge bg-important"><?php echo $l['Rank']['name'] ?></span></td>
                <td><a href="javascript:;" class="btn mini btn-success"><i class="icon-plus icon-white"></i></a></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
  </section>
  <!--work progress end-->
  </div>
</div>
<!--les aquire-->
    <!--state overview start - 1-->
    <div class="row state-overview">
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol terques">
                    <i class="icon-briefcase"></i>
                </div>
                <div class="value">
                    <h4 class="count" id="part2">
                       <?php echo $parts['User']['parts'];?>
                    </h4>
                    <p>Nombre de parts</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol blue">
                    <i class="icon-sitemap"></i>
                </div>
                <div class="value">
                    <h4>
                       <?php echo $count; ?>
                    </h4>
                    <p>Nombre de filleul(s)</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol green">
                    <i class="icon-signal"></i>
                </div>
                <div class="value">
                    <h4>
                        <?php echo $vl['Value']['current']; ?>
                    </h4>
                    <p>Valeur liquidative</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol blue">
                    <i class="icon-bar-chart"></i>
                </div>
                <div class="value">
                  <?php $FundValue = (int)$vl['Value']['current'] * (int)$parts['User']['parts']; ?>
                    <h4>
                       <?php echo $FundValue; ?> 
                    </h4>
                    <p>Portefeuille en (FCFA)</p>
                </div>
            </section>
        </div>
    </div>
    <!--state overview end -1-->

    <!--state overview start - 2-->
    <div class="row state-overview">
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol google-blue">
                    <i class="icon-star"></i>
                </div>
                <div class="value">
                    <h4>
                      <?php echo $this->Session->read('Auth.User.Rank.name'); ?>
                    </h4>
                    <p>Niveau d'investissement</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol red">
                    <i class="icon-flag"></i>
                </div>
                <div class="value">
                    <h4>
                        <?php echo $this->Session->read('Auth.User.Team.name'); ?>
                    </h4>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol yellow">
                    <i class="icon-trophy"></i>
                </div>
                <div class="value">
                    <h4 class=" count3">
                        0
                    </h4>
                    <p>Dernier badges</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol google-green">
                    <i class=" icon-stackexchange"></i>
                </div>
                <div class="value">
                    <h4 class=" count4">
                        0
                    </h4>
                    <p>Votre Cashflow</p>
                </div>
            </section>
        </div>
    </div>
    <!--state overview end -2-->
<!--end aquire-->
<div class="row">  
                  <div class="col-lg-8">
                    <section class="panel">
                      <div class="panel-body">
                      <!--custom chart start-->
                      <div class="border-head">
                          <h3>Graphe de Variation Indicé Des Entreprises Cotée Par Secteur</h3>
                      </div>
                     <!-- <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>100</span></li>
                              <li><span>80</span></li>
                              <li><span>60</span></li>
                              <li><span>40</span></li>
                              <li><span>20</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">AUG</div>
                              <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">SEP</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">OCT</div>
                              <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">NOV</div>
                              <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">DEC</div>
                              <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
                          </div>
                      </div>-->
                      <!--custom chart end-->
                      </div>
                     </section>
                  </div>
                  <div class="col-lg-4">
                      <!--new earning start-->
                      <div class="panel terques-chart">
                          <div class="panel-body chart-texture">
                              <!--<div class="chart">
                                  <div class="heading">
                                      <span>Novembre</span>
                                      <strong>$ 57,00 | 15%</strong>
                                  </div>
                                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                              </div>
                          </div>-->
                          <div class="chart-tittle">
                              <span class="title">Graph de Variation de la VL</span>
                          </div>
                      </div>
                      <!--new earning end-->

                      <!--total earning start-->
                      <div class="panel green-chart">
                          <!--<div class="panel-body">
                              <div class="chart">
                                  <div class="heading">
                                      <span>November</span>
                                      <strong>23 Days | 65%</strong>
                                  </div>
                                  <div id="barchart"></div>
                              </div>
                          </div>-->
                          <div class="chart-tittle">
                              <span class="title">Variation De Votre Portefeuille</span>
                              <span class="value">0</span>
                          </div>
                      </div>
                      <!--total earning end-->
                  </div>
              </div>
            <!--google agenda integration start-->
              <div class="row">
                  <div class="col-lg-12" id="calendar">
                    <button id="authorize-button" style="visibility: hidden">Authorize</button>
                  </div>
              </div>
            <!--google agenda end integration-->
            <!--l'investisserur le plus actif-->
            <div class="row">
             <div class="col-lg-4"><h3> <i class='icon-star-empty'></i> Investisseur Actif</h3></div>
            </div>
              <div class="row">
                  <div class="col-lg-4">
                      <!--user info table start-->
                      <section class="panel">
                          <div class="panel-body">
                              <a href="#" class="task-thumb">
                                  <?php echo $this->Html->image('http://dummyimage.com/90x83/bbb/05071f.png&text=julien'); ?>
                              </a>
                              <div class="task-thumb-details">
                                  <h1>Agbe Julien</h1>
                                  <p>Envoyer un Message</p>
                              </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                                <tr>
                                    <td>
                                        <i class="icon-group"></i>
                                    </td>
                                    <td>Nombre d'abonnée</td>
                                    <td> 0</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon-briefcase"></i>
                                    </td>
                                    <td>Financer son projet</td>
                                    <td> 0</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon-trophy"></i>
                                    </td>
                                    <td>Derniers Badges Obtenu</td>
                                    <td> 0</td>
                                </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--user info table end-->
                  </div>
                  <div class="col-lg-8">
                      <!--work progress start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Progression Chiffrée sur le temps</h1>
                                  <p>Agbe Julien</p>
                              </div>
                              <!--<div class="task-option">
                                  <select class="styled">
                                      <option>Anjelina Joli</option>
                                      <option>Tom Crouse</option>
                                      <option>Jhon Due</option>
                                  </select>
                              </div>-->
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>
                                      Nombred'article poster
                                  </td>
                                  <td>
                                      <span class="badge bg-important">0</span>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>
                                      Nombre de Sujets Creer
                                  </td>
                                  <td>
                                      <span class="badge bg-success">0</span>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>
                                      Nombre de Commentaires
                                  </td>
                                  <td>
                                      <span class="badge bg-info">0</span>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>
                                      Nombre d'abonner
                                  </td>
                                  <td>
                                      <span class="badge bg-warning">0</span>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--work progress end-->
                  </div>
              </div>
<!--fin de l'investisseur le plus active--> 
  <div class="row">
      <div class="col-lg-8">
          <!--timeline start-->
          <section class="panel">
              <div class="panel-body">
                      <div class="text-center mbot30">
                          <h3 class="timeline-title">Timeline</h3>
                          <p class="t-info">Derniers actualités par catégories</p>
                      </div>
                      <!--<div class="timeline">
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon red"></span>
                                        <span class="timeline-date">08:25 am</span>
                                        <h1 class="red">12 July | Sunday</h1>
                                        <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item alt">
                            <div class="timeline-desk">
                                <div class="panel">
                                  <div class="panel-body">
                                      <span class="arrow-alt"></span>
                                      <span class="timeline-icon green"></span>
                                      <span class="timeline-date">10:00 am</span>
                                      <h1 class="green">10 July | Wednesday</h1>
                                      <p><a href="#">Jonathan Smith</a> added new milestone <span><a href="#" class="green">ERP</a></span></p>
                                  </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item">
                          <div class="timeline-desk">
                              <div class="panel">
                                <div class="panel-body">
                                <span class="arrow"></span>
                                <span class="timeline-icon blue"></span>
                                <span class="timeline-date">11:35 am</span>
                                <h1 class="blue">05 July | Monday</h1>
                                <p><a href="#">Anjelina Joli</a> added new album <span><a href="#" class="blue">PARTY TIME</a></span></p>
                               </div>
                             </div>
                           </div>
                        </article>
                        <article class="timeline-item alt">
                          <div class="timeline-desk">
                              <div class="panel">
                                  <div class="panel-body">
                                      <span class="arrow-alt"></span>
                                      <span class="timeline-icon purple"></span>
                                      <span class="timeline-date">3:20 pm</span>
                                      <h1 class="purple">29 June | Saturday</h1>
                                      <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                      <div class="notification">
                                     <i class=" icon-exclamation-sign"></i> New task added for <a href="#">Denial Collins</a>
                                      </div>
                                  </div>
                               </div>
                          </div>
                        </article>
                        <article class="timeline-item">
                          <div class="timeline-desk">
                            <div class="panel">
                              <div class="panel-body">
                                <span class="arrow"></span>
                                <span class="timeline-icon light-green"></span>
                                <span class="timeline-date">07:49 pm</span>
                                <h1 class="light-green">10 June | Friday</h1>
                                 <p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                              </div>
                            </div>
                          </div>
                        </article>
                       </div>
                      <div class="clearfix">&nbsp;</div>
                     </div>-->
                    </section>
                      <!--timeline end-->
                  </div>
                  <div class="col-lg-4">
                      <!--revenue start-->
                      <section class="panel">
                          <div class="revenue-head">
                              <span>
                                  <i class="icon-bar-chart"></i>
                              </span>
                              <h3>Projets - Objectif personel</h3>
                              <span class="rev-combo pull-right">
                                 Année 2014
                              </span>
                          </div>
                          <div class="panel-body">
                              <div class="row">
                                  <!--<div class="col-lg-6 col-sm-6 text-center">
                                      <div class="easy-pie-chart">
                                          <div class="percentage" data-percent="35"><span>35</span>%</div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-sm-6">
                                      <div class="chart-info chart-position">
                                          <span class="increase"></span>
                                          <span>Revenue Increase</span>
                                      </div>
                                      <div class="chart-info">
                                          <span class="decrease"></span>
                                          <span>Revenue Decrease</span>
                                      </div>
                                  </div>-->
                              </div>
                          </div>
                      </section>
                      <!--revenue end-->
                      <!--features categorie start-->
                              <section class="panel">
                                  <header class="panel-heading tab-bg-dark-navy-blue">
                                      <ul class="nav nav-tabs nav-justified ">
                                          <li class="active">
                                              <a href="#popular" data-toggle="tab">
                                                  Populaire
                                              </a>
                                          </li>
                                          <li>
                                              <a href="#comments" data-toggle="tab">
                                                  Comments
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="#recent" data-toggle="tab">
                                                  Recents
                                              </a>
                                          </li>
                                      </ul>
                                  </header>
                                  <div class="panel-body">
                                      <div class="tab-content tasi-tab">
                                          <div class="tab-pane active" id="popular">
                                              <!--<article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                  <?php echo $this->Html->image('http://dummyimage.com/50x50/bbb/05071f.png&text=imh'); ?>                                
                                                </a>
                                                  <div class="media-body">
                                                      <a class=" p-head" href="#">Item One Tittle</a>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                  </div>
                                              </article>
                                              <article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                      <?php echo $this->Html->image('http://dummyimage.com/50x50/bbb/05071f.png&text=imh'); ?> 
                                                  </a>
                                                  <div class="media-body">
                                                      <a class=" p-head" href="#">Item Two Tittle</a>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                  </div>
                                              </article>
                                              <article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                      <?php echo $this->Html->image('http://dummyimage.com/50x50/bbb/05071f.png&text=imh'); ?> 
                                                  </a>
                                                  <div class="media-body">
                                                      <a class=" p-head" href="#">Item Three Tittle</a>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                  </div>
                                              </article>-->
                                          </div>
                                          <div class="tab-pane" id="comments">
                                              <!--<article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                      <?php echo $this->Html->image('http://dummyimage.com/50x50/bbb/05071f.png&text=imh'); ?> 
                                                  </a>
                                                  <div class="media-body">
                                                      <a class="cmt-head" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                      <p> <i class="icon-time"></i> 1 hours ago</p>
                                                  </div>
                                              </article>
                                              <article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                      <?php echo $this->Html->image('http://dummyimage.com/50x50/bbb/05071f.png&text=imh'); ?> 
                                                  </a>
                                                  <div class="media-body">
                                                      <a class="cmt-head" href="#">Nulla vel metus scelerisque ante sollicitudin commodo</a>
                                                      <p> <i class="icon-time"></i> 23 mins ago</p>
                                                  </div>
                                              </article>
                                              <article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                      <?php echo $this->Html->image('http://dummyimage.com/50x50/bbb/05071f.png&text=imh'); ?> 
                                                  </a>
                                                  <div class="media-body">
                                                      <a class="cmt-head" href="#">Donec lacinia congue felis in faucibus. </a>
                                                      <p> <i class="icon-time"></i> 15 mins ago</p>
                                                  </div>
                                              </article>-->
                                          </div>
                                          <div class="tab-pane " id="recent">
                                          </div>
                                      </div>
                                  </div>
                              </section>
                              <!--widget end-->
                      <!--features carousel end-->
                  </div>
              </div>
