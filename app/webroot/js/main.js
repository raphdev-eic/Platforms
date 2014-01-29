$(function(){
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

});