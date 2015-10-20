$("#btn_search").on('click', function() {
    $("#search_container").toggleClass("hide");
    $(".search-toggle").toggleClass("active");
});

$(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

(function($) {
    var $window = $(window),
        $toSwipperContainer = $('nav.nav'),
        $toSwipperWrapper = $('nav.nav ul.navigation'),
        $toSwipperSlider = $('nav.nav ul.navigation > li'),
        $viewSwipperContainer = $('div.view-container'),
        $viewSwipperWrapper = $('div.view-container div.article-wrapper'),
        $viewSwipperSlider = $('div.article-container');

    function resize() {
        if ($window.width() < minWidth()) {
        	getAddClassObjects();
        }else{
        	getRemoveClassObjects();
        } 

        if ($window.width() < minWidthView()) {
            getAddClassObjectsView();
        }else{
            getRemoveClassObjectsView();
        } 
    }
    function getAddClassObjects(){
    	var addClasses = {
        		'container' : $toSwipperContainer.addClass('swiper-container'),
        		'wrapper' : $toSwipperWrapper.addClass('swiper-wrapper'),
        		'slide' : $toSwipperSlider.addClass('swiper-slide')
        	}
        return(addClasses);
    }
    function getRemoveClassObjects(){
    	var removeClasses = {
        		'container' : $toSwipperContainer.removeClass('swiper-container'),
        		'wrapper' : $toSwipperWrapper.removeClass('swiper-wrapper'),
        		'slide' : $toSwipperSlider.removeClass('swiper-slide'),
                'styleRemove' : $toSwipperSlider.removeAttr( 'style' )
        	}
        return(removeClasses);
    }
    function getAddClassObjectsView(){
        var addClasses = {
                'viewContainer' : $viewSwipperContainer.addClass('swiper-container'),
                'viewWrapper' : $viewSwipperWrapper.addClass('swiper-wrapper'),
                'viewSlide' : $viewSwipperSlider.addClass('swiper-slide')
            }
        return(addClasses);
    }
    function getRemoveClassObjectsView(){
        var removeClasses = {
                'viewContainer' : $viewSwipperContainer.removeClass('swiper-container'),
                'viewWrapper' : $viewSwipperWrapper.removeClass('swiper-wrapper'),
                'viewSlide' : $viewSwipperSlider.removeClass('swiper-slide'),
                'viewStyleRemove' : $viewSwipperSlider.removeAttr( 'style' )
            }
        return(removeClasses);
    }
    function minWidth(){
    	var defaulScreenSize = 769,
    		minWidth = defaulScreenSize;

    	return minWidth-15;
    }
    function minWidthView(){
        var defaulScreenSize = 673,
            minWidth = defaulScreenSize;

        return minWidth-15;
    }
    $window
        .resize(resize)
        .trigger('resize');
    $window
        .load(resize)
        .trigger('resize');

})(jQuery);

  // For Sidebar images
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