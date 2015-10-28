	$(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#pageTop').fadeIn();
        } else {
            $('#pageTop').fadeOut();
        }
    });

    $('#pageTop').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    //--- menu bar
    //mobile
    new Swiper('.mobile_menu_bar',{
    	freeMode: true,
    	freeModeFluid: true,
    	slidesPerView: 3.5,
    });
    //tablet
    new Swiper('.tablet_menu_bar',{
    	freeMode: true,
    	freeModeFluid: true,
    	slidesPerView: 4.5,
    });
    //pc
    new Swiper('.pc_menu_bar',{
    	freeMode: true,
    	freeModeFluid: true,
    	slidesPerView: 9,
    });

    //--- featured_content
    //mobile
    new Swiper('#mobile_featured .featured-content',{
    	pagination: '#mobile_featured .featured-content .pagination',
    	loop:true,
    	autoplay: 3000,
    	grabCursor: true,
    	paginationClickable: true,
    	slidesPerView: 1,
    });
    mobile_featured_height = $("#mobile_featured article").height();
    $("#mobile_featured .featured-content").height(mobile_featured_height);

    //--- mobile side menu
    $("#mobile_menu_button").slideMenu({main_contents: "#page"});
    $("#footer_mobile_menu_button").slideMenu({main_contents: "#page"});

    //--- footer search button
    $("#footer_search_button").click(function() {
    	if ($('#mobile-search-container').is(':visible')) {
    		$("#mobile-search-container").hide();
    	} else {
    		$("#mobile-search-container").show();
    		$("#mobile-search-container input").focus();
    	}
    });

    var imglink = $(".imglink").val();
    var trend     = '<a href=""><img src=" ' + imglink + 'icon_trend.png">' + '</a>' ;
    var travel    = '<a href=""><img src=" ' + imglink + 'icon_travel.png">' + '</a>' ;
    var culture   = '<a href=""><img src=" ' + imglink + 'icon_culture.png">' + '</a>' ;
    var lifestyle = '<a href=""><img src=" ' + imglink + 'icon_lifestyle.png">' + '</a>' ;
    var edge      = '<a href=""><img src=" ' + imglink + 'icon_edge-runner.png">' + '</a>' ;
    var tech      = '<a href=""><img src=" ' + imglink + 'icon_technology.png">' + '</a>' ;
    var beauty    = '<a href=""><img src=" ' + imglink + 'icon_beauty.png">' + '</a>' ;
    var sports    = '<a href=""><img src=" ' + imglink + 'icon_sports.png">' + '</a>' ;
    var feature   = '<a href=""><img src=" ' + imglink + 'icon_feature.png">' + '</a>' ;
    var issue     = '<a href=""><img src=" ' + imglink + 'icon_issue.png">' + '</a>' ;
    var food      = '<a href=""><img src=" ' + imglink + 'icon_food.png">' + '</a>' ;
    
    $(".li_trend").prepend(trend);
    $(".li_travel").prepend(travel);
    $(".li_culture").prepend(culture);
    $(".li_lifestyle").prepend(lifestyle);
    $(".li_edge").prepend(edge);
    $(".li_technology").prepend(tech);
    $(".li_beauty").prepend(beauty);
    $(".li_sports").prepend(sports);
    $(".li_feature").prepend(feature);
    $(".li_issue").prepend(issue);
    $(".li_food").prepend(food);

    $('.nav-links a[rel=next]').addClass( "next" );

    var ias = jQuery.ias({
        container:  '.site-content',
        item:       'article.post',
        pagination: 'nav.navigation',
        next:       'a.next'
    });

    ias.extension(new IASSpinnerExtension());            // shows a spinner (a.k.a. loader)
    //ias.extension(new IASTriggerExtension({offset: 3})); // shows a trigger after page 3
    ias.extension(new IASNoneLeftExtension({
        text: ''      // override text when no pages left
    }));

    



// .nav-links a.next