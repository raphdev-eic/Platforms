 <!-- invoice start-->
              <section>
                  <div class="panel panel-primary">
                      <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                      <div class="panel-body">
                        <!--flash messsage-->
                            <div class="alert alert-info alert-block fade in">
                                   <button data-dismiss="alert" class="close close-sm" type="button">
                                       <i class="icon-remove"></i>
                                   </button>
                                   <h4>
                                       <i class="icon-ok-sign"></i>
                                       Félicitation!
                                   </h4>
                                   <p>Vous etes sur le point de finaliser votre achat de parts. Veuillez cliquer sur le bouton "Passer l'ordre" pour joindre votre bordereau et terminer le processus</p>
                            </div>
                        <!--end flash message-->
                          <div class="row invoice-list">
                              <div class="corporate-id pull-left">
                                  <?php echo $this->Html->image('logo_png.png'); ?>
                              </div>
                              <div class="clearfix"></div>
                              <div class="col-lg-4 col-sm-4">
                                  <h4>Informations personelles</h4>
                                  <p>
                                     Nom : <?php echo $this->Session->read('transaction.User.firstname').' '.$this->Session->read('transaction.User.lastname'); ?> <br>
                                     Signature : <?php echo $this->Session->read('transaction.User.key_auth'); ?> <br>
                                     Email : <?php echo $this->Session->read('transaction.User.email'); ?><br>
                                  </p>
                              </div>
				                <div class="col-lg-4 col-sm-4">
				                  <h4>Compte ECOBANK</h4>
				                  <p>
				                      Entreprise: EAGLE INVESTMENT CAPITAL<br>
				                      Numéro de Compte: <strong>0010121200321802 </strong><br>
				                      Code Agence: <br>
				                      Tel: +225 00225 22437577
				                  </p>
				                </div>
                              <div class="col-lg-4 col-sm-4">
                                  <h4>Facture</h4>
                                  <ul class="unstyled">
                                      <li> Numéro facture : <strong><?php echo $num; ?></strong></li>
                                      <li> Date		: <?php echo date('Y-m-d'); ?></li>
                                      <li> Status		: <span class="label label-danger"> Non Payé</span></li>
                                  </ul>
                              </div>
                          </div>
                          <table class="table table-striped table-hover">
                              <thead>
                              <tr>
                                  <th>Item</th>
                                  <th class="hidden-phone">Description</th>
                                  <th class="">Prix unitaire</th>
                                  <th class="">Quantité</th>
                                  <th>Total</th>
                              </tr>
                              </thead>
                              <tbody>
	                              <tr>
	                                  <td>Parts social</td>
	                                  <td class="hidden-phone"> Titre de propriété sur le capital du fonds d'investisssement des clubs comportant plusieurs investisseurs</td>
	                                  <td class=""><?php echo $this->Session->read('transaction.Devi.price').' XOF'; ?></td>
	                                  <td class=""><?php echo $this->Session->read('transaction.Devi.quantity'); ?></td>
	                                  <td><?php echo $total  = $this->Session->read('transaction.Devi.quantity') * $this->Session->read('transaction.Devi.price').' XOF'; ?></td>
	                              </tr>
                              </tbody>
                          </table>
                          <div class="row">
                              <div class="col-lg-4 invoice-block pull-right">
                                  <ul class="unstyled amounts">
                                      <li><strong>Sub - Total amount : </strong> <?php echo $total; ?></li>
                                      <li><strong>Taxe : </strong> 1100 XOF</li>
                                      <li><strong>VAT : </strong> -----</li>
                                      <li><strong>Grand Total : </strong> <span class="label label-danger"> <?php echo ($total + 1100).'  XOF'; ?> </span></li>
                                  </ul>
                              </div>
                          </div>
                          <?php echo $this->Form->create('Transaction'); ?>
                          <?php echo $this->Form->input('desc',array('value'=>"Titre de propriété sur le capital du fonds d'investisssement des clubs comportant plusieurs investisseurs",'type'=>'hidden')); ?>
                          <div class="text-center invoice-btn">
                          	  <?php echo $this->Form->button("Passer l'ordre",array('class'=>'btn btn-danger btn-lg')); ?>
                              <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="icon-print"></i> Print </a>
                          </div>
                          <?php echo $this->Form->end(); ?>
                      </div>
                  </div>
              </section>
              <!-- invoice end-->