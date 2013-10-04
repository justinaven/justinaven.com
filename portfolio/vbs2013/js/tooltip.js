// Popups
// Build popup boxes
$('.popup').one('click', function(e) {
    e.preventDefault();

    var link = $(this).attr("href");
    $(this).after('<div class="popup_message"></div>');
    // Look to see if the link is to a box in this page or not
    if (link.match(/^#/i)) {
        var message = $(link).html();
        $(this).next('.popup_message').html(message).append('<p class="close"><a href="#">Close</a></p>').bgiframe();
    } else {
        var message = $(this).attr('rel');
        // See if a target box ID is specified in the rel attribute of the link, and only load that box if it is
        if (message) {
            $(this).next('.popup_message').load(link+' #'+message, function() {
                $(this).append('<p class="close"><a href="#">Close</a></p>');
            }).bgiframe();
        } else {
            $(this).next('.popup_message').load(link, function() {
                $(this).append('<p class="close"><a href="#">Close</a></p>');
            }).bgiframe();
        }
    }
});

// Build popup boxes for help messages
$('.form_input p.help').each(function(index) {
    $(this).before('<a href="#" class="popup help_indicator">?</a>').addClass('popup_message').append('<span class="close"><a href="#">Close</a></span>').bgiframe();
    var visibility = $(this).parents('form .view_toggle').css('display');
    // if the element is hidden, the dimensions will not be calculated properly, so we need to show them first
    if (visibility == 'none') {
        $(this).parents('form .view_toggle').show();
    }
    var position = $(this).parent().find('input, select, textarea').position();
    var label_width = $(this).parent().find('label').outerWidth(true);
    var input_width = $(this).parent().find('input, select, textarea').outerWidth();
    // if the element was hidden, let's hide it again so things are back to normal
    if (visibility == 'none') {
        $(this).parents('form .view_toggle').hide();
    }
    if (position.left == 0) {
        var left = label_width + input_width + 12;
    } else {
        var left = position.left + input_width + 12;
    }
    $(this).prev().css({
        left: left
    });
});

// Popup functionality
$('.popup').click(popupPlacer).parent().addClass('popup_container');

function popupPlacer(e) {
    e.preventDefault();

    var offset = $(this).parent().offset();
    var height = $(this).next('.popup_message').outerHeight();
    var width = $(this).next('.popup_message').outerWidth();
    var pageWidth = $(document).width();
    var scrollHeight = e.pageY - $(document).scrollTop();
    var headerHeight = $('#header').outerHeight() - $(document).scrollTop();
    if (headerHeight < 0) {
        headerHeight = 0;
    }
    var left, top;

    // make sure the popup will not go beyond the left or right edges of the page, and center it above the click location if not
    if ((e.pageX + (width/2) + 15) > pageWidth) {
        left = pageWidth - width - offset.left - 15;
    } else if ((e.pageX - (width/2) - 15) < 0) {
        left = 0;
    } else {
        left = e.pageX - offset.left - (width/2);
    }

    // the popup should show up above the click location unless there isn't enough room in the window
    if (scrollHeight - headerHeight - height - 20 < 0) {
        top = e.pageY - offset.top + 20;
    } else {
        top = e.pageY - offset.top - height - 20;
    }

    $(this).next('.popup_message').css({
        left: left,
        top: top
    }).toggle();
}

$(".popup_message .close a").live('click', function(e) {
    e.preventDefault();
    $(this).parent().parent().toggle();
});


// tooltips
$('[rel="tooltip"]').tooltip({
    animation: true
})
// disable click functionality as needed
.filter('.disabled').click(function(e) {
    e.preventDefault();
});
