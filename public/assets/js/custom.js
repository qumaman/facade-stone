/* Write here your custom javascript codes */

$( document ).ready(function() {
    $('.stamp-image').on('mouseover', function(){
        var images = $(this).attr('src');
        $(this).attr('src-old', images);
        $(this).attr('src', $(this).parent().attr('href'));

       //console.log('Ok');
    });
    $('.stamp-image').on('mouseout', function(){
        var images = $(this).attr('src-old');
        $(this).attr('src', images);
    });
});
