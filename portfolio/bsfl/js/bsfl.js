$(document).ready(function() {
    var options_page = $('.bsfl.options').length;
    if(options_page>0)
    {
        var win_width = $(window).width();
        var is_mobile = false;
        var mm = $('.mm');
        // Is the window mobile on pageload
        if(win_width < 600)
            { mm.find('.double-cell').attr('colspan','3'); }
            else
            { mm.find('.double-cell').attr('colspan','2'); }
        $(window).resize(function() {
            win_width = $(window).width();
            if(win_width < 600)
            { mm.find('.double-cell').attr('colspan','3'); }
            else
            { mm.find('.double-cell').attr('colspan','2'); }
        });
    } // END if(options_page>0)

});