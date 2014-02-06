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
                 var output =  Mustache.to_html(Tpl, data);
                 $('#newpost').prepend(output);
                 fcontent.val('');
                 fcontent.css({"height": "45px"});
                 $('#footer').hide();
             }
            },"json");
        });


    /**
     * get post list
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
                    var outputs = Mustache.to_html(template,htmls);
                    $('#allcontent').prepend(outputs);
                     lastid = $('.postitem').attr("id");
                     lastid -=i;
                     i+=10;
                }else{
                 //au cas ou il n'y a accune donnée
                 $('#allcontent').empty().append('<div class="alert alert-block alert-danger"><p> '+htmls.errors+ '</p></div>');
                }
        },"json");
    });


    //event for sur les elements ajax
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
    //quand on commence a scroller
    $(window).scroll(function(){
        if($(window).scrollTop() == $(document).height() - $(window).height()){
        //afficher le loader et attendre le callback de  la requete ajax
        var load = $('#loading');
            load.show();
            console.log(lastid);
                 $.get("/Posts/infinieScrolling?item="+lastid , function(htmls){
                //quand nous avons un call back cache le load
                load.hide();
                //si dans htmls la variable= reponse n'existe pas
                if(!htmls.reponse){
                    var template = $("#newfeed-c").html();
                        var outputs = Mustache.to_html(template,htmls);
                        $('#allcontent').prepend(outputs);
                         lastid = $('.postitem').attr("id");
                         lastid = lastid - i;
                         i+=10;
                    }else{
                     //au cas ou il n'y a accune donnée
                     $('#allcontent').empty().append('<div class="alert alert-block alert-danger"><p> '+htmls.errors+ '</p></div>');
                    }
            },"json");
        }
    });

  });
