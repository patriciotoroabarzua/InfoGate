jQuery(document).ready(function($) {
    // replace these default settings with your own
    $.querySort = {
        path_to_template: 'http://www.infogate.cl/wp-content/themes/infogate/',
        number_of_posts: 5,
        default_category: ''
    }
 
    // do the initial load.
    $("#querySort").load($.querySort.path_to_template + 'querySort.php' + '?query=showposts%3D' + $.querySort.number_of_posts + '%26category_name%3D' + $.querySort.default_category);
	$('#desplegable').hide();
	$("#querySort").css({opacity: 0});
	$('#cargando').hide();
    //functions for the sorter
    $("#menu-menu-1 li:not(#menu-item-189)").hover(function(){
    	$('#desplegable').slideDown(200);
        var thecat = $(this).attr("class");
        if (thecat == 'reset') {
            var query = '?query=showposts%3D' + $.querySort.number_of_posts + '%26category_name%3D' + $.querySort.default_category;
        } else {
            var query = '?query=showposts%3D' + $.querySort.number_of_posts + '%26category_name%3D' + thecat;
        }
        $("#querySort").animate({opacity: 0}, function() {
        	$('#cargando').show();
            $("#querySort").load($.querySort.path_to_template + 'querySort.php' + query, function() {
                height = $("#queryContainer").height() + 'px';
                $("#querySort").animate({opacity: 1, height:height});
                $('#cargando').hide();
            });
        });
        return false;
    }, function() {
	    
    });
    $('#nav').mouseleave(function(){
	    $('#desplegable').slideUp(300);
    });
    
    $("#menu-menu-1 li#menu-item-189").hover(function(){
	    $('#desplegable').slideUp(200);
    });
});