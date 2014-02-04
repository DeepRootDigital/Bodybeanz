$(function () {
    $('#slideFrame ul li:last').css({
        'left': '595px'
    });
    $('#slideFrame ul li:first').before($('#slideFrame ul li:last'));
    setInterval(
        function () {
$('#slideFrame ul li:first').css({
                   'display' : 'block'
                });
$('#slideFrame ul li:last').css({
                   'display' : 'block'
                });
            $('#slideFrame ul').find('li:last').animate({
                "left":  "595px"
            }, 700, function () {
                $('#slideFrame ul li:first').css({
                    'left': '0px','z-index' : '0'
                });
                $('#slideFrame ul li:first').before($('#slideFrame ul li:last'));
$('#slideFrame ul li:first').css({
                   'display' : 'none'
                });
            });
        },4000
        );
});