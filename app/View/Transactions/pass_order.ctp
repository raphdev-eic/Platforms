<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                 <div class="pull-right"><a href="<?php echo $this->Html->url(array('controller' => 'Devis', 'action' => 'GetDevis'));?>" class="btn btn-success"> <i class="icon-shopping-cart"></i> Afficher mon devis</a></div>
                <div class="text-center corporate-id">
                  <?php echo $this->Session->flash(); ?>
                	<h2>Devis d'achat de parts</h2>
                </div>
                 <div class="col-sm-8 col-sm-offset-2">
                      <section class="panel">
                          <header class="panel-heading">
                             Créer votre devis
                          </header>
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>Valeur Liquidative</th>
                                  <th>Quantité</th>
                                  <th>Montant du devis</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php echo $this->Form->create('Devi',array('url'=>array('controller'=>'Devis','action'=>'AddDevis'),'id'=>'formdevis','class'=>'form-horizontal','role'=>'form',));?>
                              <tr>
                                  <td id="vl" class="blod2"><strong><?php echo $vl['Value']['current']; ?></strong></td>
                                  <td><?php echo $this->Form->input('quantity',array('label'=>false,'placeholder'=>'Quantité de parts',"id"=>"nbpart",'type'=>'text','class'=>'form-control')); ?></td>
                                  <td id="mont" class="blod"><strong>0 FCFA</strong></td>
                                  <td><?php echo $this->Form->button("Créer Le Devis",array('class'=>'btn btn-danger')); ?></td>
                              </tr>
                              <?php echo $this->Form->end(); ?>
                              </tbody>
                          </table>
                      </section>
                  </div>
            </div>
        </section>
        <section class="panel">
            <div class="panel-body">
                <div class="text-center corporate-id">
                  <h2>Virement Bancaire</h2>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <h4>ECOBANK CÔTE D'IVOIRE</h4>
                  <p>
                      Intitulé: EIC<br>
                      Numero de Compte: <strong>0010121200321802 </strong>
                  </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <h4>ECOBANK BURKINA FASO</h4>
                  <p>
                      Intitulé: EIC<br>
                      Numero de Compte: <strong>101678801012</strong><br>
                      Code Guichet : 01001 <br/>
                      Cle RIB: 82
                  </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <h4>ECOBANK SENEGAL</h4>
                  <p>
                      Intitulé: EDC Investment Corporation<br>
                      Numero de Compte: <strong> 0010611000899901 </strong><br>
                  </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <h4>ECOBANK BENIN</h4>
                  <p>
                      Intitulé: EIC<br>
                      Numero de Compte: <strong>0019211111950701 </strong><br>
                  </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <h4>ECOBANK MALI</h4>
                  <p>
                      CODE BANQUE: D 0090B<br>
                      CODE GUICHET: 01001<br>
                      Numero de Compte: <strong>199905604016</strong><br>
                      Code RIB:09 <br>
                      Intitulé: EIC
                  </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <h4> ECOBANK NIGER</h4>
                      Intitulé: EDC Investment Corporation<br>
                      Numero de Compte: <strong> 001921160234601 </strong><br>
                  </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <h4> ECOBANK TOGO</h4>
                  <p>
                      Intitulé: EIC<br>
                      Numero de Compte: <strong> 7010121402977001</strong><br/>
                      Numero de Compte: <strong> 0019211602034601</strong>
                  </p>
                </div>
            </div>
        </section>
    </div>
</div>