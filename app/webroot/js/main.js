jQuery(function($){
  $("#owl-demo").owlCarousel({

      navigation : true,

      slideSpeed : 300,

      paginationSpeed : 400,

      singleItem : true,

      autoPlay:true

  });

  $('#form-content').focus(function(){
    $(this).css({"height": "auto"});
    $('#footer').show();
  });

//comment effet

$("#comment-form").focus(function(){
   $(this).css({"height": "45px"});
});


  //$('select.styled').customSelect();

  /**

   * class active sur un element de menu

   * @return {[type]} [description]

   */

   var elt = $('ul#nav-left li');

    elt.click(function(){

      elt.each(function(){

        $(this).removeClass("active");

      });

        $(this).addClass("active");

    });



  /**

   * timeAgo plugin initialize

   */

    $("abbr.timeago").timeago();



  /**

   * resize image

   */

  $('.resize').nailthumb();
    var newYear = new Date(2014, 12 - 1, 31); // coorespond à la Date ('annnée,mois,jours') mois = num mois actu -1 (exemple = juin = 6 = 7-1)

     //alert(newYear);

     //newYear = new Date(newYear.getFullYear() + 1, 1 - 1, 1);

    $.countdown.setDefaults($.countdown.regional['fr']);

    $('#numbers').countdown({

      until: newYear

    });

//calcule du montant du devis
 $('#nbpart').keyup(function(){
    var vl = jQuery.trim($('#vl strong').html());
    var parts = jQuery.trim($(this).val());
    var montant = 1100 + (vl*parts) + ' FCFA';
    $('#mont').empty().text(montant).addClass('blod');
 });


   $('#fileupload').fileupload({
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#filelist');
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
              $('#progress .progress-bar').css('width',progress + '%');
              $(".text-a").empty().html(progress +'%');
        }
    });

     /* $('#uploadfile').bind({
           fileuploaddone : function (e, data){
              $.each(data.result.files, function (index, file) {
                  $('<p/>').text(file.name).appendTo('#filelist');
              });
           },
           fileuploadprogressall : function(e,data){
              var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css('width',progress + '%');
                $(".text-a").empty().html(progress +'%');
           },
           fileuploadadd:function(e,data){

           }

      });*/
});
