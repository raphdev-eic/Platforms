$(function(){

/**
 * [Add Post form ]
 * @param  {[type]} e [description]
 * @return {[type]}   [description]
 */
    $('#PostNewsfeedForm').submit(function(e){
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
        e.preventDefault();
    });


/**
 * get post list
 */
   $.get("/Posts/getNewfeedContent",{},function(data){
        if(!data.reponse){
            var Tpl = $("#newfeed-c").html();
                var output =  Mustache.to_html(Tpl,data);
                $('#allcontent').prepend(output);
            }
   },"json");

});
