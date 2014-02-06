<div class="row">
       <!--Stats Form-->
    <div class="col-lg-12">
      <section class="panel">
        <div class="panel-body">
            <div class="alert alert-info alert-block fade in">
                   <button data-dismiss="alert" class="close close-sm" type="button">
                       <i class="icon-remove"></i>
                   </button>
                   <h4>
                       <i class="icon-ok-sign"></i>
                       Information!
                   </h4>
                   <p>Merci de joindre votre Bordereau de versement , afin de finaliser votre ordre d'achat , si vous en possédez pas cliquez directement sur terminer une verification sera faite apres cette etape. En cas de success votre portefeuil sera credité dans les 48h à compter de la date de dêpot.</p>
            </div>
          <h2 class="lead">Importer votre borderos</h2>
          <br>
          <!-- The file upload form used as target for the file upload widget -->
          <?php echo $this->Form->create('Bordero',array('type'=>'file','id'=>'fileupload')); ?>
              <!-- Redirect browsers with JavaScript disabled to the origin page -->
              <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
              <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
              <div class="row fileupload-buttonbar">
                  <div class="col-lg-10">
                      <!-- The fileinput-button span is used to style the file input field as button -->
                      <span class="btn btn-success fileinput-button">
                          <i class="icon-cloud-download"></i>
                          <span>Ajouter de le fichier...</span>
                            <?php echo $this->Form->input('f_url',array('type'=>'file','label'=>false)); ?>
                      </span>
                      <?php echo $this->Form->button('Terminer',array('class'=>'btn btn-success start')); ?>
                      <!-- The global file processing state -->
                      <span class="fileupload-process"></span>
                  </div>
                  <!-- The global progress state -->
                  <div class="col-lg-10 fileupload-progress fade">
                      <!-- The global progress bar -->
                      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                      </div>
                      <!-- The extended global progress state -->
                      <div class="progress-extended">&nbsp;</div>
                  </div>
              </div>
              <!-- The table listing the files available for upload/download -->
              <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
            <?php echo $this->Form->end(); ?>
              <div class="progress-b progress-striped active progress-sm" id="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                <span class="text-a"></span>
                </div>
              </div>
        </div>
      </section>
    </div>
     <!--end form-->
<!-- end  -->
</div>
<!-- The template to display files available for upload -->
<?php echo $this->Html->script('jquery.ui.widget', array('inline'=>false)); ?>
<?php echo $this->Html->script('tmpl.min', array('inline'=>false)); ?>
<?php echo $this->Html->script('jquery.iframe-transport', array('inline'=>false)); ?>
<?php echo $this->Html->script('jquery.fileupload', array('inline'=>false)); ?>
<?php $this->Html->scriptStart(array('inline'=>false)); ?>
$(function(){
 $('#fileupload').fileupload({
          formData: {example: 'test'}
    });
});

<?php $this->Html->scriptEnd(); ?>
