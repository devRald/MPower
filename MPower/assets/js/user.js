$(document).ready(function() {
    $(".button-collapse").sideNav();
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
    /*$('.post-card p').each(function(index) {
        var len = $(this).text().length;
        if (len >= 120) {
            $(this).text($(this).text().substring(0, 120) + '...');
        }
    });*/
    $('#filterModal').modal({
        show: false,
        backdrop: 'static'
    });
    $('.mdb-select').material_select();
    $('.btn-2').button('toggle').click(function(){
        alert('asd');
    });
});