
$(document).ready(function() 
{
	var color = Chart.helpers.color;
    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            type: 'bar',
            label: 'Dataset 1',
            backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
            borderColor: window.chartColors.red,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }, {
            type: 'line',
            label: 'Dataset 2',
            backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
            borderColor: window.chartColors.blue,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }, {
            type: 'bar',
            label: 'Dataset 3',
            backgroundColor: color(window.chartColors.green).alpha(0.2).rgbString(),
            borderColor: window.chartColors.green,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }]
    };

        var ctx = document.getElementById("canvas1").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'HOSPITAL ANNUAL REPORT'
                },
            }
        });


});