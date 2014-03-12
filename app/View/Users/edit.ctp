             <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <?php echo $this->Html->image('http://dummyimage.com/140x140/222/fff&text=inv'); ?>
                              </a>
                              <h1><?php echo ucfirst($userInfo['User']['lastname']).' '.ucfirst($userInfo['User']['firstname']);?></h1>
                               <p><?php echo $userInfo['User']['email'];?></p>
                          </div>

                          <ul class="nav nav-pills nav-stacked" id="nav-left">
                              <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'profil')); ?>"> <i class="icon-user"></i> Profile</a>
                              </li>
                              <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'ProfilActivity')); ?>"> <i class="icon-calendar"></i> Recent Activites <span class="label label-danger pull-right r-activity"></span></a>
                              </li>
                              <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'edit',$userInfo['Profile']['id'])); ?>"> <i class="icon-edit"></i> Editer profile</a>
                              </li>
                              <li>
                                 <a href="#"><i class="icon-time"></i> Expiration du membership dans <i class="icon-level-down"></i>
                                 </a>
                              </li>
                          </ul>
                          <?php
                          //calc de la difference entre les date
                           $interval = round((strtotime($userInfo['User']['date_expire']) - strtotime(date('Y-m-d')))/(60*60*24)-1)+1;
                          ?>
                          <div class=" state-overview">
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
                          <div class="bio-graph-heading">
                              Modifier ou agrementer votre profile investisseur EiC Corporation , pour plus de visiblité
                          </div>
                          <div class="panel-body bio-graph-info">
                              <h1> Profile Info</h1>
                                 <?php echo $this->Form->create('Profile',array('class'=>'form-horizontal','role'=>'form','url'=>array('controller'=>'Users','action'=>'EditProfile')));?>
                                 <?php echo $this->Form->input('id',array('type'=>'hidden')); ?>
                                 <?php echo $this->Form->input('user_id',array('type'=>'hidden')); ?>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">A propos</label>
                                      <div class="col-lg-10">
                                        <?php echo $this->Form->input('content',array('class'=>'form-control','cols'=>30,'rows'=>'10','id'=>'profileContent','label'=>false)); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Téléphone</label>
                                      <div class="col-lg-6">
                                          <?php echo $this->Form->input('phone', array('label'=>false,'class'=>'form-control','id'=>'profilePhone','placeholder'=>'Numéro de Téléphone')); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Last Name</label>
                                      <div class="col-lg-6">
                                          <?php echo $this->Form->input('mobile', array('label'=>false,'class'=>'form-control','id'=>'profileMobile','placeholder'=>'Numéro de Mobile')); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Sexe</label>
                                      <div class="col-lg-6">
                                          <?php echo $this->Form->input('sexe',array('type'=>'select','options'=>array('Masculin','Feminin'),'empty'=>'(chosissez)','id'=>'profileSexe','label'=>false,'class'=>'form-control m-bot15')); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Occupation</label>
                                      <div class="col-lg-6">
                                      <?php echo $this->Form->input('fonction', array('label'=>false,'class'=>'form-control','id'=>'profileFonction','placeholder'=>'Votre profession')); ?>
                                       </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Site internet</label>
                                      <div class="col-lg-6">
                                      <?php echo $this->Form->input('website', array('label'=>false,'class'=>'form-control','id'=>'profileWebsite','placeholder'=>'http://www.votrewebsite.com')); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Entreprise</label>
                                      <div class="col-lg-6">
                                      <?php echo $this->Form->input('entreprise', array('label'=>false,'class'=>'form-control','id'=>'profileEntreprise','placeholder'=>'Nom de votre entreprise')); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Heritier</label>
                                      <div class="col-lg-6">
                                      <?php echo $this->Form->input('heritier', array('label'=>false,'class'=>'form-control','id'=>'profileHeritier','placeholder'=>'Nom de l\'heritier')); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">N° de registre de l'heritier</label>
                                      <div class="col-lg-6">
                                      <?php echo $this->Form->input('num_identity', array('label'=>false,'class'=>'form-control','id'=>'profileHeritier','placeholder'=>'N° de registre d\'acte de naissance de l\'heritier')); ?>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                        <?php echo $this->Form->button('Enregistrer',array('class'=>'btn btn-success')); ?>
                                        <?php echo $this->Form->button('Annuler',array('class'=>'btn btn-default','type'=>'reset')); ?>
                                      </div>
                                  </div>
                              <?php echo $this->Form->end(); ?>
                          </div>
                      </section>

                      <section>
                          <div class="panel panel-primary">
                              <div class="panel-heading"> Modifier votre mot de passe et votre photo de profile</div>
                              <div class="panel-body">
                                <?php echo $this->Form->create('User', array('type'=>'file','class'=>'form-horizontal')); ?>
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Mot de passe courant</label>
                                          <div class="col-lg-6">
                                            <?php echo $this->Form->input('password', array('label'=>false,'class'=>'form-control','id'=>'userPassword'));
                                            ?>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Nouveau mot de passe</label>
                                          <div class="col-lg-6">
                                            <?php echo $this->Form->input('pass1', array('label'=>false,'class'=>'form-control','id'=>'userPass1'));
                                            ?>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Entrez à nouveau le mot de passe</label>
                                          <div class="col-lg-6">
                                            <?php echo $this->Form->input('pass2', array('label'=>false,'class'=>'form-control','id'=>'userPass2'));
                                            ?>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Change photo de profil</label>
                                          <div class="col-lg-6">
                                              <?php echo $this->Form->input('Avatar.0.url_file', array('label'=>false,'class'=>'file-pos','id'=>'userFile','type'=>'file'));
                                              ?>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                        <?php echo $this->Form->button('Enregistrer',array('class'=>'btn btn-success')); ?>
                                        <?php echo $this->Form->button('Annuler',array('class'=>'btn btn-default','type'=>'reset')); ?>
                                          </div>
                                      </div>
                                  <?php echo $this->Form->end(); ?>
                              </div>
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->