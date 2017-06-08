$(document).ready(function() {
    $(".button-collapse").sideNav();
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);

    var data = {
        labels: [
            "Red",
            "Blue",
            "Yellow",
            "Green",
            "Pink"
        ],
        datasets: [{
            data: [300, 50, 100, 60, 20],
            backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ],
            hoverBackgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ]
        }]
    };
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: data
    });
});