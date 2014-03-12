<div class="row">
    <div class="col-lg-12">
      <!--content top-->
        <section class="panel">
            <div class="panel-body">
               <h3>Cashflow | <small> commissions et investissements | Eic Corporation</small></h3>
            </div>
        </section>
      <!--end contain top-->

      <!--start content widget-->
        <section class="panel">
            <div class="panel-body">
               <a href="<?php echo $this->Html->url(array('controller' => 'Ucashflows', 'action' => 'Histrory')); ?>" class="pull-right btn btn-info">Historiques des Cashflows <i class="icon-archive"></i></a>
            </div>
          <!--tab nav start-->
            <section class="panel">
                <header class="panel-heading tab-bg-dark-navy-blue">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#commission">
                                <i class="icon-bitbucket"></i> Cashflow de vos commissions
                            </a>
                        </li>
                    </ul>
                </header>
                <div class="panel-body">
                    <div class="tab-content">
                        <div id="commission" class="tab-pane active">
                             <div class="row prd-row">
                                <div class="col-md-6">
                                    <div class="prd-img">
                                      <div class="alert alert-success alert-block fade in">
                                          <h1>
                                              <i class="icon-ok-sign"></i>
                                              XOF 0.00
                                          </h1>
                                           <small>Eic Corporation | Disponible à retirer</small>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1>Montant des Commissions</h1>
                                    <p class="normal">Date de dernière mise à jour</p>
                                    <p class="terques">Taxes appliqueé</p>
                                    <div class="price">
                                        <div class="amnt label label-info"> 2% sur le montant du retrait</div>
                                    </div>
                                    <div class="col-md-10">
                                         <a href="#" class="btn btn-primary pull-right btn-add-cart"> <i class="icon-shopping-cart"></i> Effectuer un retrait</a>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
               </section>
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Histrorique des transactions effectuées
                          </header>
                          <table class="table table-striped border-top" id="sample_1">
                          <thead>
                          <tr>
                              <th>Dates</th>
                              <th># id</th>
                              <th class="hidden-phone">Reference</th>
                              <th class="hidden-phone">Pourcentage (%)</th>
                              <th class="hidden-phone">Valeurs</th>
                              <th class="hidden-phone">sur Montants de </th>
                          </tr>
                          </thead>
                          <tbody>

                          </tbody>
                          </table>
                      </section>
                  </div>
            <!--tab nav start-->
        </section>
      <!--end contenbt widget-->
    </div>
</div>
<?php echo $this->Html->script('assets/data-tables/jquery.dataTables',array('inline'=>false)); ?>
<?php echo $this->Html->script('assets/data-tables/DT_bootstrap',array('inline'=>false)); ?>
<?php echo $this->Html->script('dynamic-table',array('block'=>'script2')); ?>
