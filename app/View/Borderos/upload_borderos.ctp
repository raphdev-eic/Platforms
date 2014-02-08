<div class="row">
       <!--Stats Form-->
    <div class="col-lg-12">
      <section class="panel">
        <div class="panel-body">
           <a href="<?php echo $this->Html->url(array('controller' => 'Transactions', 'action' => 'PassOrder')); ?>" class="btn btn-info" id='endbtn'>Terminer</a>
           <div id="uploading" class='uploadfile'>
            <h4 class="lead">Importer votre bordereau depuis votre ordinateur</h4>
            <div id="droparea">
              <!--<span>Glisser Deposer votre fichier ici (jpg, png, gif)</span>-->
             <a href="#" id="browse" class="dragbtn btn btn-info">Pacourir</a>
            </div>
             <div id="fileList"></div>
           </div>
        </div>
      </section>
    </div>
     <!--end form-->
<!-- end  -->
</div>
<!-- The template to display files available for upload -->
<?php echo $this->Html->script('plupload/js/plupload', array('inline'=>false)); ?>
<?php echo $this->Html->script('plupload/js/plupload.flash', array('inline'=>false)); ?>
<?php echo $this->Html->script('plupload/js/plupload.html5', array('inline'=>false)); ?>
<?php echo $this->Html->scriptStart(array('inline'=>false)); ?>

var uploader = new plupload.Uploader({
        runtimes      :'html5, flash',
        containes     :'plupload',
        browse_button :'browse',
        max_file_size : '5mb',
        drop_element  :'droparea',
        url           :'<?php echo Router::url(array('controller'=>'Borderos','action'=>'UploadBorderos')); ?>',
        flash_swf_url :'<?php echo Router::url('/js/plupload/js/plupload.flash.swf'); ?>',
        multipart        : true,
        urlstream_upload : true,
        multi_selection : false,
        max_file_count  : 1,
        filters         : [
              {
               title      : "Image files",
               extensions : "jpg,gif,png"
              },
          ]
        });

      uploader.init();

      uploader.bind('FilesAdded',function(up, files){
        console.log(files);
         var fileList = $('#fileList');
         var file = files[0];
         fileList.prepend('<div id="'+ file.id +'" class="file">'+file.name+' ('+plupload.formatSize(file.size)+')'+'<div class="progress-b progress-striped active progress-sm"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"><span class="sr-only"></span></div></div></div>');
         $('#droparea').removeClass('dropping');
         $('#endbtn').hide();
         uploader.start();
         uploader.refresh();
      });

      uploader.bind('Error',function(up, err){
        alert(err.message);
        $('#droparea').removeClass('dropping');
        uploader.refresh();
      });

      uploader.bind('FileUploaded', function(up, file, response){
        var response = jQuery.parseJSON(response.response);
        if(response.error){
          alert(response.error)
        }else{
            $('#'+file.id).before(response.content);
            $('#'+files.id).find('.progress-bar').fadeOut();
            $('.sr-only').empty();
        }
        $('#endbtn').show();
        $('#'+file.id).remove();
        uploader.refresh();
      });

      uploader.bind('UploadComplete',function(up, files){
         $('#endbtn').show();
      });


      uploader.bind('UploadProgress',function(up, files){
         $('#'+files.id).find('.progress-bar').css('width',files.percent+'%');
         $('.sr-only').empty().html(files.percent+'%');
      });


        $('#droparea').bind({
             dragover : function(e){
                 $(this).addClass('dropping');
             },
             dragleave : function(e){
                 $(this).removeClass('dropping');
             }
        });
<?php echo $this->Html->scriptEnd(); ?>