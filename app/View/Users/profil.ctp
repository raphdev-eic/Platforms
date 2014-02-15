             <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                        <div class="user-heading round">
                            <a href="#" class="square resize">
                              <?php if(empty($avatar['Avatar']['url'])): ?>
                                <?php echo $this->Html->image('http://dummyimage.com/140x140/222/fff&text=inv'); ?>
                              <?php else: ?>
                                   <?php echo $this->Html->image($avatar['Avatar']['url']); ?>
                              <?php endif; ?>
                            </a>
                          <h1><?php echo ucfirst($userInfo['User']['lastname']).' '.ucfirst($userInfo['User']['firstname']);?></h1>
                          <p><?php echo $userInfo['User']['email'];?></p>
                          <a href="#file" class="btn btn-danger" data-toggle="modal"><i class="icon-cloud-upload"></i> Ajouter une photo</a>
                        </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li><a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'profil')); ?>"> <i class="icon-user"></i> Profile</a></li>
                              <li><a href="#"> <i class="icon-calendar"></i>Activités récentes<span class="label label-danger pull-right r-activity"></span></a></li>
                              <li><a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'edit',$userInfo['Profile']['id'])); ?>"> <i class="icon-edit"></i> Editer mon profile</a></li>
                              <li><a href="#"><i class="icon-time"></i> Expiration du membership dans <i class="icon-level-down"></i></a></li>
                          </ul>
                          <?php
                          //calc de la difference entre les date
                           $interval = round((strtotime($userInfo['User']['date_expire']) - strtotime(date('Y-m-d')))/(60*60*24)-1)+1;
                          ?>
                          <div class="state-overview">
                          <section class="panel">
                                <div class="symbol red">
                                    <i class="icon-time"></i>
                                </div>
                                <div class="value">
                                    <h1><?php echo $interval; ?></h1>
                                    <p><strong><?php echo ($interval > 1) ? 'Jours'  : 'Jour' ;?></strong></p>
                                </div>
                          </section>
                          <ul class="nav nav-pills">
                           <a href="#" class='btn btn-info pull-right'><i class="icon-shopping-cart"></i> Renouveler</a>
                          </ul>
                          </div>
                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                        <?php echo $this->Form->create('Post',array('url'=>array('controller'=>'Posts','action'=>'AddPost'),'type'=>'file')); ?>
                        <?php echo $this->Form->input('name', array('type'=>'hidden',"autocomplete"=>"off")); ?>
                        <?php echo $this->Form->input('user_id', array('type'=>'hidden',"autocomplete"=>"off")); ?>
                        <?php echo $this->Form->input('type_id', array('type'=>'hidden',"autocomplete"=>"off")); ?>
                        <?php echo $this->Form->textarea('content',array('class'=>'form-control input-lg p-text-area','rows'=>5,'placeholder'=>' Qu\'est ce que vous avez à dire maintenant ?')); ?>
                          <footer class="panel-footer">
                          <?php echo $this->Form->button('Post', array('class'=>"btn btn-danger pull-right")); ?>
                          <p></p>
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
                      <section class="panel">
                          <div class="bio-graph-heading">
                             Votre Profil utilisateur vous permet de modifier , voir vos informations , vous pouvez y poster des informations de la vielle economique!
                          </div>
                          <div class="panel-body bio-graph-info">
                              <h1>Informations personnelles</h1>
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>Nom </span>:  <?php echo (!empty($userInfo['User']['firstname'])) ? ucfirst($userInfo['User']['firstname']) : 'Aucun nom renseignez';?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Prénom</span>:  <?php echo (!empty($userInfo['User']['lastname'])) ? ucfirst($userInfo['User']['lastname']) : 'Aucun prenom renseignez';?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Pays </span>:  <?php echo (!empty($userInfo['Country']['name'])) ? ucfirst($userInfo['Country']['name']) : 'Aucun pays';?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Programme</span>:  <?php echo (!empty($userInfo['Program']['name'])) ?
                                       $userInfo['Program']['name'] : 'Aucune programme'; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Profession </span>: <?php echo (!empty($userInfo['Profile']['fonction'])) ? $userInfo['Profile']['fonction'] : 'Aucune fonction'; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Email </span>:  <?php echo (!empty($userInfo['User']['email'])) ? $userInfo['User']['email'] : 'Aucune adresse mail';?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Mobile </span>: <?php echo (!empty($userInfo['Profile']['mobile'])) ? $userInfo['Profile']['mobile'] : 'Aucun numero';?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Téléphone </span>:  <?php echo (!empty($userInfo['Profile']['phone'])) ? $userInfo['Profile']['phone'] : 'Aucun numero';?></p>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1>Coordonnées confidentielles</h1>
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>Type de profil </span>: <?php echo (!empty($userInfo['Role']['name'])) ? ucfirst($userInfo['Role']['name']) : 'Aucun profile';?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>N° de compte </span>: <?php echo (!empty($userInfo['Compte']['number'])) ? $userInfo['Compte']['number'] : 'Compte en attente';?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Date de naissance</span>: <?php echo (!empty($userInfo['User']['date_nais'])) ? date('d F Y',strtotime($userInfo['User']['date_nais'])) : 'Aucune date de naissance'; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Code investisseur </span>: <strong class='label label-info'><?php echo (!empty($userInfo['User']['key_auth'])) ? $userInfo['User']['key_auth'] : 'Code en attente' ?></strong></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Banque :</span>: <strong><?php echo (!empty($userInfo['Compte']['bank'])) ? $userInfo['Compte']['bank'] : 'Banque en attente' ?></strong></p>
                                  </div>                                  <div class="bio-row">
                                      <p><span>Inscription</span>: <strong><?php echo date('d F Y',strtotime($userInfo['User']['created'])); ?></strong></p>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1>Informations EiC</h1>
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>Niveau </span>: <?php echo (!empty($userInfo['Rank']['name'])) ? ucfirst($userInfo['Rank']['name']) : 'Aucun Niveau';?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Parts </span>: <strong class="label label-primary"><?php echo (!empty($userInfo['User']['parts'])) ? ucfirst($userInfo['User']['parts']) : 'Aucun parts';?> <?php echo ($userInfo['User']['parts'] > 1) ? 'Actions'  : 'Action' ;?></strong></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Membership </span>: <strong class="label label-danger"><?php echo (!empty($userInfo['Rank']['membership'])) ? substr($userInfo['Rank']['membership'],0,-2).' '.'FCFA' : 'Aucun membership';?></strong></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Expiration </span>: <?php echo date('d F Y',strtotime($userInfo['User']['date_expire'])); ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Début </span>:   <?php echo date('d F Y',strtotime($userInfo['User']['date_debut'])); ?></span></p>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </aside>
              </div>
              <div class="row">
                  <div class="col-lg-3">
                      <!--user info table start-->
                      <section class="panel">
                          <table class="table table-hover personal-task">
                              <tbody>
                                <tr>
                                    <td>
                                        <i class="icon-tasks"></i>
                                    </td>
                                    <td>Nombre de sujets crées</td>
                                    <td> 0</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon-group"></i>
                                    </td>
                                    <td>Nombre d'abonnés</td>
                                    <td> 0</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon-envelope"></i>
                                    </td>
                                    <td>Messages</td>
                                    <td> 0</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon-bell-alt"></i>
                                    </td>
                                    <td>Nouvelles notifications</td>
                                    <td> 0</td>
                                </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--user info table end-->
                  </div>
                  <div class="col-lg-9">
                      <!--work progress start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Progression Chiffrée dans le temps</h1>
                                  <p><?php echo ucfirst($this->Session->read('Auth.User.User.lastname')); ?>   
                                    <?php echo ucfirst($this->Session->read('Auth.User.User.firstname')); ?>
                                   </p>
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
                                      Total des opérations effectuées
                                  </td>
                                  <td>
                                      <span class="badge bg-important">0</span>
                                  </td>
                                  <td>
                                    <div id="work-progress1"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>
                                      Nombre de badges Obtenus
                                  </td>
                                  <td>
                                      <span class="badge bg-success">0</span>
                                  </td>
                                  <td>
                                      <div id="work-progress2"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>
                                      Nombre de filleul(s)
                                  </td>
                                  <td>
                                      <span class="badge bg-info"><?php //echo $count; ?></span>
                                  </td>
                                  <td>
                                      <div id="work-progress3"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>
                                     Total des publications
                                  </td>
                                  <td>
                                      <span class="badge bg-warning">0</span>
                                  </td>
                                  <td>
                                      <div id="work-progress4"></div>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--work progress end-->
                  </div>
              </div> 
              <!-- page end-->
                <!-- Modal -->
                <div class="modal fade" id="file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Télécharger une photo</h4>
                      </div>
                      <div class="modal-body">
                        <strong id="info">Cliquez sur "Enregister" pour joindre la photo que vous venez de sélectionner</strong>
                        <div class="content-progress" id="imgs"></div>
                        <a href="#" class="btn-file" id="btn-file">Choisissez une photo à télécharger</a>
                        <?php echo $this->Html->image('ajaxloader.gif',array('id'=>'loader')); ?>
                        <div class="upload">
                          <!--upload form-->
                          <?php echo $this->Form->create('Avatar',array('url'=>array('controller'=>'Avatars','action'=>'ajaxUpload'),'class'=>'model_upload','id'=>'model_upload','type'=>'file')); ?>
                          <?php echo $this->Form->input('user_id',array('type'=>'hidden')); ?>
                          <?php echo $this->Form->input('url_file',array('id'=>'inputUploadfile','type'=>'file','class'=>'file-select','label'=>false));?>
                          <!--end upload form-->
                        </div>
                      </div>
                      <div class="modal-footer">
                        <?php echo $this->Form->button('Annuler',array("data-dismiss"=>"modal","class"=>"btn btn-default pull-left","type"=>"button")); ?>
                        <?php echo $this->Form->button("Enregister",array("class"=>"btn btn-success",'type'=>"submit",'id'=>'upload')); ?>
                        <?php echo $this->Form->end(); ?>
                      </div>
                    </div>
                </div>
                </div>
              <!-- modal -->