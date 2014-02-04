$(function () {
    $(".replylink").click(
        function () {
       $(this).find('img').attr('src','http://bodybeanz.com/wp-content/themes/BodyBeanz/images/leave-comment.png');			
            $(this).parent().parent().parent().find('#commentform').toggle('slow');
			$(this).parent().parent().parent().find('.posted-comments').toggle('slow');
        });
});     

