<?php echo $this->Html->css('table-responsive',null,array('inline'=>false)); ?>
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                       <?php echo ucfirst($this->Session->read('Auth.User.User.lastname').' '.$this->Session->read('Auth.User.User.firstname')); ?> - Tableau de rendement de vos investissements
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                       <div class="alert alert-info fade in">
                            <button data-dismiss="alert" class="close close-sm" type="button">
                                <i class="icon-remove"></i>
                            </button>
                            <span>(*) VL de dépôts : valeur liquidative de la date de votre dépôt</span><br/>
                            <span>(*) VL réel : valeur liquidative actuelle </span>
                        </div>
                        <section id="flip-scroll">
                            <table class="table table-bordered table-striped table-condensed cf">
                                <thead class="cf">
                                <tr>
                                <tr>
                                    <th>Dates de dépôts</th>
                                    <th>Montants</th>
                                    <th class="numeric">Parts</th>
                                    <th class="numeric">VL de dépôts (*)</th>
                                    <th class="numeric">VL réel (*)</th>
                                    <th class="numeric">Valorisation (FCFA)</th>
                                    <th class="numeric">Valorisation (%)</th>
                                    <th class="numeric">Action</th>
                                </tr>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($rendement as $k => $v): $operation = $v['Transaction']; ?>
                                    <tr>
                                       <th scope="row" colspan="8" text-align="center"> Année: <?php echo $v['Year']['year']; ?></th>
                                    </tr>
                                    <?php $sub_total = array(); ?>
                                    <?php foreach ($operation as $j => $r): ?>
                                      <?php $sub_total[] = $r['quantity'] * $vl; ?>
                                        <tr>
                                            <td><?php echo $r['created'] ?></td>
                                            <td><?php echo $emont = $r['quantity'] * $r['price'] ;  ?></td>
                                            <td class="numeric"><?php echo $pr = $r['quantity']; ?></td>
                                            <td class="numeric"><?php echo $vi = $r['price']; ?></td>
                                            <td class="numeric"><?php echo $vl; ?></td>
                                            <td class="numeric"><?php echo $vfcfa = $vl * $pr ; ?></td>
                                            <td class="numeric"><?php $valt = ((-(int)$emont + (int)$vfcfa) / (int)$emont) * 100 ;?> <span class='badge <?php echo (($valt > 0) ? "bg-info" : "bg-important"); ?>'><?php echo round($valt,2); ?></span></td>

                                            <td class="numeric"><a class="btn btn-success" href="<?php echo $this->Html->url(array('controller' => 'Transaction', 'action' => 'callingoff',$r['id'],$this->Session->read('Auth.User.User.id'))); ?>"> Retrait</a></td>
                                        </tr>
                                    <?php endforeach ?>
                                    <tr>
                                      <th scope="row" colspan="7">Total valorisation Année : <?php echo $v['Year']['year']; ?> </th>
                                      <th scope="row" colspan="1"><span class="label label-inverse"> <?php echo 'XOF '. array_sum($sub_total); ?></span></th>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                  <th scope="row" colspan="7">valorisation du portefeuille</th>
                                  <th scope="row" colspan="1"> <span class='label label-primary'>XOF <?php echo $fund; ?></span></th>
                                </tfoot>
                            </table>
                        </section>
                    </div>
                </section>
            </div>
        </div>