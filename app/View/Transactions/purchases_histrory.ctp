              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Histrorique de vos Achats
                          </header>
                          <div class="panel-body">
                              <section id="flip-scroll">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th>Dates de dépôts</th>
                                          <th>Operations</th>
                                          <th class="numeric">Nombres de parts Commandés</th>
                                          <th class="numeric">Valeurs liquidatifs de depôts</th>
                                          <th class="numeric">Montants versés</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php foreach ($history as $k => $v): $transaction = $v['Transaction']; ?>
                                          <tr>
                                            <th scope="row" colspan="5" text-align="center">Année: <?php echo $v['Year']['year']; ?></th>
                                          </tr>
                                          <?php $sub_total = array(); ?>
                                          <?php foreach ($transaction as $i => $t): ?>
                                          <?php $sub_total[] = $t['quantity'] * $t['price']; ?>
                                           <tr>
                                              <td><?php echo $t['created']; ?></td>
                                              <td>Dépôt</td>
                                              <td><span class="badge bg-important"><?php echo $t['quantity']; ?></span></td>
                                              <td><?php echo $t['price']; ?></td>
                                              <td><?php echo $montant = $t['quantity'] * $t['price']; ?></td>
                                            </tr>
                                          <?php endforeach ?>
                                          <tr>
                                            <th scope="row" colspan="4" text-align="center">Total dépot Année: <?php echo $v['Year']['year']; ?></th>
                                            <th scope="row" colspan="1"><span class="label label-inverse"><?php echo 'XOF '. array_sum($sub_total); ?></span></th>
                                          </tr>
                                        <?php endforeach ?>
                                      </tbody>
                                        <tfoot>
                                          <th scope="row" colspan="4">Total des Dépôts </th>
                                          <th scope="row" colspan="1"> <span class="label label-primary"><?php  echo 'XOF '.$total; ?></span></th>
                                        </tfoot>
                                  </table>
                              </section>
                          </div>
                      </section>
                  </div>
              </div>