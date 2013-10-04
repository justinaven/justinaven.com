$(document).ready(function() {
    var win_width = $(window).width();
    var is_mobile = false;


// add div for moving clouds on home page
    var home_body = $('body#home');
    home_body.prepend('<div id="home-bg"></div>');


// duplicate navigation for mobile nav
    var nav = $('#navigation');
    var navigation_copy = '<div id="mobile_navigation">'+nav.html()+'</div>';

    $('body').prepend(navigation_copy);
    $('#head').prepend('<div id="menu"><h3>Menu</h3></div>');
    var menu = $('#menu');
    $('.js.ie8 #menu, .js.ie7 #menu').css('display','none');
    $('#mobile_navigation').find('#nav').attr('id','mobile_nav');

    $('#mobile_nav .sub').each(function() {
        var a_text = $(this).find('a').html();
        var a_href = $(this).find('a').attr('href');
        $(this).find('ul').prepend('<li><a href="'+a_href+'">'+a_text+'</a></li>');
        $(this).find('a').addClass('disabled');
        $(this).find('ul a').removeClass('disabled');
    });

    $('#mobile_nav .sub').find('a.disabled').on('click', function(e) {
            e.preventDefault();
        });
    $('#mobile_nav .sub').find('a').on('click', function() {
            $(this).parent().find('ul').slideToggle('slow');
            $(this).parent().toggleClass('open');
        });


// Junlgle Jaunt: Add box border & corner spans
    var spans_created = false;
    function jungle_spans(){
        if(spans_created === false){
            var container1 = $('.jungle').find('.outer1');
            container1.prepend('<span id="ltc" class="corners"></span><span id="rtc" class="corners"></span><span id="rbc" class="corners"></span><span id="lbc" class="corners"></span>');
            container1.find('.outer2').prepend('<span id="b-bar" class="bar"></span><span id="t-bar" class="bar"></span><span id="l-bar" class="bar"></span><span id="r-bar" class="bar"></span>');
            spans_created = true;
        }
    }


// Is the window mobile on pageload
    if(win_width < 600){
            menu.css('display','block');
            $('.js.ie8 #menu, .js.ie7 #menu').css('display','none');
            nav.css('display','none');
            is_mobile = true;
    }
    else {
       jungle_spans();
    }


    $(window).resize(function() {
        win_width = $(window).width();
        if(win_width < 600)
        {
            menu.css('display','block');
            nav.css('display','none');
            is_mobile = true;
        }
        else
        {
            menu.css('display','none');
            nav.css('display','block');
            is_mobile = false;
            $('#mobile_navigation').css('display', 'none');
            jungle_spans();
        }

    });



    // Is the window <768 on pageload
    var cif = $('.catalog_embed .iframe-block');
    var catalog_iframe = cif.html()
    var init_win_width = $(window).width();
    var iframe_shown = true;

    if(init_win_width < 768)
    {   cif.css('display','none'); iframe_shown=false;  }


    $(window).resize(function() {
        win_width = $(window).width();

        if(win_width < 768)
        {  cif.css('display','none'); iframe_shown=false; }
        else
        {
            if(iframe_shown==false)
            {
                cif.css('display','block');
                $('.catalog_embed .iframe-block iframe').remove();
                $('.catalog_embed .iframe-block').append(catalog_iframe);
                iframe_shown=true;

            }
        }
    });



    $('#menu h3').on('click', function() {
       $('#mobile_navigation').slideToggle('slow', function() {
       });
    });


    // Day-At-A-Glance Toggle/accordion
    var sub_nav = $('.day-glance .sub-nav');
    sub_nav.find('.sub').css('display','none');
    sub_nav.find('h5').append('<span></span>');

    sub_nav.find('h5').on('click', function() {
        $(this).parent().find('h5 span').toggleClass('open');
        $(this).parent().find('.sub').slideToggle('slow');
    });

    // Which VBS Background Color
    $('.table-wrap').append('<div class="table-bg"><div class="col"></div><div class="col ccw"></div><div class="col jj"></div><div class="col bkc"></div></div>');


// Decorating Videos - Prevent link action if the clicked playlist is already showing
    $('.target-links li').find('a.active').on('click', function(e) {
        e.preventDefault();
    });


// Toggle Content Sections
    var tab_block = $('.toggle');
    var toggle_exist = tab_block.length;
    if(toggle_exist){
    //code below doesn't fire unless it has toggle content on the page

        // hides col-narrow when only one content section is present
        var number_of_sections = $('.target-links li').length;
        if(number_of_sections < 2)
        {   $('.toggle .inner-1 .col-head').css('display','block');
            $('.toggle .col-narrow').css('display','none');
            $('.toggle .col-wide').css('width','100%');
        }

        // Pulls hashtag from URL to targest content section
        var url_spliced = document.URL.split( '#' );
        var target_hash = "#"+url_spliced[1];
        var test_target = $(target_hash).length;

        // if the target exits
        if(test_target){
            $(target_hash).addClass('active');
            $('.target-links li').find('a[href='+target_hash+']').addClass('active');
        }else{
            // if the target doesn't exist, choose the first section
            var first_tab = tab_block.find('.target-links li:first-child a');
            first_tab.addClass('active');
            var first_target = first_tab.attr('href');
            $(first_target).addClass('active');
        }

        // show section when toggle button is clicked
        tab_block.find('.target-links li a').on('click', function(e) {
            e.preventDefault();
            var temp = $(this);
            $('.active').removeClass('active');
            temp.addClass('active');
            var target = temp.attr('href');
            $(target).addClass('active');
        });

    } //end if(tab_block)


// popover for question marks

    // move to left at smaller viewports
    $('a[rel="popover"]').popover({
        animation: true,
        placement: "top",
        trigger:   "hover"
    });

    // check to see if waypoints loaded
    if(typeof ($.fn.waypoint) === 'function') {
        $('#page-bottom').waypoint({ offset: 'bottom-in-view' });

        // The same for all waypoints
        $('body').delegate('#page-bottom', 'waypoint.reached', function(event, direction) {
            $(this).find('#coaster-move').addClass('coaster');
        });
    }


// Event Details List
var event_list = $('.assn-event-list').length;
if(event_list > 0) {
    $('dt').remove();
    $('dd:even').addClass('field_name');
    $('dd:odd').addClass('field_data');
    $('.field_name').append(':');
}


// responsive table
    var switched = false;
    var updateTables = function() {
        if (($(window).width() < 767) && !switched ){
            switched = true;
            $("table.responsive").each(function(i, element) {
                splitTable($(element));
            });

            // get the tallest cell in each row
            var tr_heights = [];


            $('.scrollable tr').each(function(){
                if($(this).outerHeight() !== 1){
                    tr_heights.push($(this).outerHeight());
                }
            });

            $('.pinned th:first-child').css("height", tr_heights.shift());

            $('.pinned tr td:first-child').each(function() {
                $(this).height(tr_heights.shift());
            });

            return true;

        } else if (switched && ($(window).width() > 767)) {
            switched = false;
            $("table.responsive").each(function(i, element) {
                unsplitTable($(element));
            });
        }
    };

    $(window).load(updateTables);
    $(window).bind("resize", updateTables);

    function splitTable(original) {
        original.wrap("<div class='table-wrapper' />");

        var copy = original.clone();
        copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
        copy.removeClass("responsive");

        original.closest(".table-wrapper").append(copy);
        copy.wrap("<div class='pinned' />");
        original.wrap("<div class='scrollable' />");
    }

    function unsplitTable(original) {
        original.closest(".table-wrapper").find(".pinned").remove();
        original.unwrap();
        original.unwrap();
    }

});
