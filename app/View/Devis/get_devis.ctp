<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="text-center corporate-id">
                  <?php echo $this->Session->flash(); ?>
                	<h2>Devis en attente</h2>
                </div>
                 <div class="col-sm-8 col-sm-offset-2">
                      <section class="panel">
                          <header class="panel-heading">
                             Votre dévis expire dans : <strong><?php
                              echo $datetime['day'].' Jour :'. $datetime['hour'].' Heure(s) : '.$datetime['minute'].' Minute(s)';
                              ?></strong>
                          </header>
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>Valeur Liquidative de commande</th>
                                  <th>Quantité</th>
                                  <th>Montant du devis</th>
                                  <th>Terminer mon Action</th>
                              </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td><strong><?php echo $list['Devi']['price']; ?></strong></td>
                                    <td><strong><?php echo $list['Devi']['quantity']; ?></strong></td>
                                    <td><strong><?php echo $montant = ($list['Devi']['price'] * $list['Devi']['quantity']) + 1100 .' XOF';?></strong></td>
                                    <?php if($list['Devi']['status'] == 0): ?>
                                    <td><a href="<?php echo $this->Html->url(array('controller' => 'Transactions', 'action' =>'SetTransction')); ?>" class="btn btn-info btn-small">Suivant</a></td>
                                     <?php else: ?>
                                      <td><a href="#" class="btn btn-success btn-small">Valider</a></td>
                                    <?php endif; ?>
                                </tr>
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
                  <h4>Compte ECOBANK</h4>
                  <p>
                      Entreprise: EAGLE INVESTMENT CAPITAL<br>
                      Numero de Compte: <strong>0010121200321802 </strong><br>
                      Code Agence: <br>
                      Tel: +225 00225 22437577
                  </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <h4>Compte GTBANK</h4>
                  <p>
                      Entreprise: EAGLE INVESTMENT CAPITAL <br>
                      Numero de Compte: <strong>000000021836</strong><br>
                      Code d'agence: 01202<br>
                      Tel: +225 00225 22437577
                  </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <h4>EiC Corporation - Contacts</h4>
                  <p>
                      Abidjan Côte d'ivoire <br>
                      Rivera II <br>
                      Attoban ST Bernard<br>
                      Tel: +225 00225 22437577
                  </p>
                </div>
            </div>
        </section>
    </div>
</div>