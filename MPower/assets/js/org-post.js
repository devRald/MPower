$(document).ready(function() {
    $(".button-collapse").sideNav();
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
    $('.mdb-select').material_select();
    $(".button-collapse").sideNav();
    $('.datepicker').pickadate({
    	format: 'yyyy-mm-dd',
		formatSubmit: 'yyyy mm dd',
    });
});
//title, desc, venue, region, category, sdate, edate
$('#submit-post').click(function() {
    var title = $('#title').val();
    var desc = $('#desc').val();
    var venue = $('#venue').val();
    var region = $('#region').val();
    var category = $('#category').val();
    var sdate = $('#sdate').val();
    var edate = $('#edate').val();
    var payment = $('#payment').val();
    $.ajax({
            type: 'POST',
            data: { title: title, desc: desc, venue: venue, region: region, category: category, payment:payment, sdate: sdate, edate: edate },
            url: "http://localhost/MPower/organizer/post_event",
            success: function(data) {
                if(data==1){
                	window.location.href = "http://localhost/MPower/organizer/post";
                }
            }
        })
        //console.log(title, desc, venue, region, category, sdate, edate);
});
