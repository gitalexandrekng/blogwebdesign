jQuery(function ($) {
    $('.tabs a[tabid=1]').click(function () {
        $('.tabs a[tabid=101]').click();
    });

    $('.tabs a[tabid=4]').click(function () {
        $('.tabs a[tabid=401]').click();
    });

    $('.tabs a').on('click', function(){
        $('#sett_tabid').val($(this).attr('tabid'));
        location.hash = $(this).attr('tabid');
    });

    // Remove the # from the hash, as different browsers may or may not include it
    var hash = location.hash.replace('#','');

    if(hash != ''){
        hash = parseInt(hash);
        $('.tabs a[tabid=' + Math.floor( hash / 100 ) + ']').click();
        $('.tabs a[tabid=' + hash + ']').click();
    } else {
        $('.tabs a[tabid=1]').click();
    }
});