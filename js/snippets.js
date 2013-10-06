Jquery Dynamic Loader

$(document).ready(function() {
                           
    var hash = window.location.hash.substr(1);
    var href = $('.panel-body button').each(function(){
        var href = $(this).attr('href');
        if(hash==href.substr(0,href.length-5)){
            var toLoad = hash+'.php #content';
            $('#content').load(toLoad)
        }                                           
    });


    $('.panel-body button').on('click', function(){

                                  
        var toLoad = $(this).attr('href')+' #content';
        $('#content').hide('fast',loadContent);
        // $('#load').remove();
        // $('#wrapper').append('<span id="load">LOADING...</span>');
        $('#load').fadeIn('normal');
        window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);
        function loadContent() {
            $('#content').load(toLoad,'',showNewContent())
        }
        function showNewContent() {
            $('#content').show('normal',hideLoader());
        }
        function hideLoader() {
            $('#load').fadeOut('normal');
        }
        return false;
        
    });

});
