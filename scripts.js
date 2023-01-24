$(document).ready(function(){

    function showModel(){
        $('#model-container').show();
        $('html body').css('overflow','hidden');
    }

    function closeModel(){
        $('#model-container').hide();
    }

    setTimeout(showModel,6000);

    $('#close1').click(function(){
        closeModel();
        clearTimeout();
    })

});
