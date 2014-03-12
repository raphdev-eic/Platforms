var lastid;
var i = 10;
$(function() {
    /**
     * [Add Post form ]
     * @param  {[type]} e [description]
     * @return {[type]}   [description]
     */
        $('#PostNewsfeedForm').submit(function(e){
        e.preventDefault();
        var formPost = $('#PostNewsfeedForm');
        var formPostUrl = formPost.attr('action');
        var formPostData = formPost.serialize();
        var fcontent = $('#form-content');
        var loader = $('.loader');
            loader.show();
            $.post(formPostUrl, formPostData, function(data){
            loader.hide();
             //mise en place du template
             if(data.reponse == 1){
                 var Tpl = $("#NewPostTpl").html();
                 var output =  Mustache.render(Tpl, data);
                 $('#newpost').prepend(output);
                 fcontent.val('');
                 fcontent.css({"height": "45px"});
                 $('#footer').hide();
             }
            },"json");
        });

        /**
         * recuperation des data d'un url 
         */
        $('#form-content').keyup(function(e){
           /* var content = $(this).val();
            var urlRegex = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
            // Filtering URL from the content using regular expressions
            var url = content.match(urlRegex);
            if(url.length > 0){
                $("#linkbox").slideDown('show');
                $("#linkbox").html("<img src='/img/ajax-loader.gif'>");
                // Getting cross domain data
                 $.get("/Posts/UrlGet?url="+url, function(response){
                    // Loading <title></title>data
                    var title=(/<title>(.*?)<\/title>/m).exec(response)[1];
                    // Loading first .png image src='' data
                    var logo = (/src='(.*?).png'/m).exec(response)[1];
                    $("#linkbox").html("<img src='"+logo+".png' class='imglinkbox'/><div><b>"+title+"</b><br/>"+url);
                 });
            } 
            e.preventDefault();*/
        });


    /**
     * get post list : charge les premieres données
     */
    //quand la page a charger
    $(window).load(function(){
        //avant lancement de la requete ajax afficher le load
        var load = $('#loading');
            load.show();
        $.get("/Posts/getNewfeedContent",{},function(htmls){
            //quand nous avons un call back cache le load
            load.hide();
            //si dans htmls la variable= reponse n'existe pas
            if(!htmls.reponse){
                var template = $("#newfeed-c").html();
                    var outputs = Mustache.render(template,htmls);
                    $('#allcontent').prepend(outputs);
                }else{
                 //au cas ou il n'y a accune donnée
                 $('#allcontent').empty().append('<div class="alert alert-block alert-danger"><p> '+htmls.errors+ '</p></div>');
                }
        },"json");
    });


    //Event pour afficher les commentaire
    $('.com').livequery('click', function(event){
            event.preventDefault();
            var elt = $(this).attr('id');
            var id = elt.split('/eic');
            $('#comment'+id[1]).fadeToggle( "slow",function(){
               $(this).removeClass('hidden');
            });
        });

    /**
     * scroll infini du news feed
     */
        // cette variable contient notre item
        // par défaut à 10 puisqu'on a d'office les 10 premiers éléments au chargement de la page

        // vérifie si c'est un iPhone, iPod ou iPad
        // on initialise ajaxready à true au premier chargement de la fonction
       /* $(window).data('ajaxready', true);
        var deviceAgent = navigator.userAgent.toLowerCase();
        var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);
            // on déclence une fonction lorsque l'utilisateur utilise sa molette
            $(window).scroll(function(){
                // cette condition vaut true lorsque le visiteur atteint le bas de page
                // si c'est un iDevice, l'évènement est déclenché 150px avant le bas de page
                if(($(window).scrollTop() + $(window).height()) == $(document).height()|| agentID && ($(window).scrollTop() + $(window).height()) + 150 > $(document).height())
                {
                    // lorsqu'on commence un traitement, on met ajaxready à false
                    $(window).data('ajaxready', false);
                    //affichage du loader
                    load.show();
                    //on lance la requete
                    $.get("/Posts/infinieScrolling?item="+item , function(htmls){
                        //on cache le loader quelque soit le resultat
                         load.hide();
                        //on verifie si y'a des données cela suppose que reponse n'existe pas
                        if(!htmls.reponse){
                         //insertion de mustache.js : recuperation du template
                            var template = $("#newfeed-c").html();
                            //ajout des données dans le template mustache
                            var dataoutputs = Mustache.to_html(template,htmls);
                            $('#allcontent').append(dataoutputs);
                            /* enfin on incrémente notre item de 10
                             * afin que la fois d'après il corresponde toujours
                            */
                           /* item+=10;
                        }else{
                            $('#allcontent').empty().append('<div class="alert alert-block alert-danger"><p> '+htmls.errors+ '</p></div>');
                        }

                    });
                }
            });*/

/**
 * function infiniteScroll
 */

    // cette variable contient notre item
    // par défaut à 10 puisqu'on a d'office les 10 premiers éléments au chargement de la page
    var item = 10;
    var load = $('#loading');
    // on initialise ajaxready à true au premier chargement de la fonction
    $(window).data('ajaxready', true);
    $(window).scroll(function(){
        if($(window).scrollTop() == $(document).height() - $(window).height()){
        //afficher le loader et attendre le callback de  la requete ajax
            var load = $('#loading');
            load.show();
            // lorsqu'on commence un traitement, on met ajaxready à false
            $(window).data('ajaxready', false);
           // console.log(lastid);
                 $.get("/Posts/infinieScrolling?item="+item , function(htmls){
                //quand nous avons un call back cache le load
                load.hide();
                //si dans htmls la variable= reponse n'existe pas
                if(!htmls.reponse){
                    var template = $("#newfeed-c").html();
                        var outputs = Mustache.render(template,htmls);
                        $('#allcontent').append(outputs);
                        item+=10;
                    }else{
                     //au cas ou il n'y a accune donnée
                     $('#allcontent').empty().append('<div class="alert alert-block alert-danger"><p> '+htmls.errors+ '</p></div>');
                    }
            },"json");
        }
    });

   /**
    * comment autoresize
    */
        $('.comment-form').livequery('focus', function(event){
           $('textarea').autosize();
        });

    /**
     * @Send comment data
     */
        $('.btn-comment').livequery('click',function(e){
            e.preventDefault();
            var elts = $(this);
            var btnId = elts.attr('id');
            var Ids = btnId.split('-');
            var Id = Ids[1];

            //recuperation des element de formulaire
            var fComment = $('#formCom-'+Id);
            var furl = $("#formCom-"+Id).attr('action');
            var fdata = $("#formCom-"+Id).serialize();
            var ftextarea = $('#commentform'+Id);
            var fbtn = $('#btncomment-'+Id);
                fbtn.addClass('disabled');
                if(ftextarea.val().length < 1){
                  alert("Vous n'avez écrit aucun commentaires");
                }

            $.ajax({
                    type: "POST",
                    url: furl,
                    data: fdata,
                    cache: false,
                    dataType: "json",
                    success: function(htmls){
                       fbtn.removeClass('disabled');
                       if(htmls.reponse == 1){
                         var templ = $('#TplComment').html();
                         var outputs = Mustache.render(templ,htmls);
                        // $('#newcom'+Id).oembed(htmls.contentcom,{maxWidth: 400, maxHeight: 300});
                         $('#newcom'+Id).append(outputs);
                         ftextarea.val('');
                         ftextarea.focus();
                         ftextarea.css({"height": "36px"});
                       }
                    }

            });
        });

});

function text_to_link(text){
var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
return text.replace(exp,"<a href='$1' target='_blank'>$1</a>");
}