<?php

echo "<script>
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'TOP 5 BDO'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'IE',
            y: 45
        }, {
            name: 'Chrome',
            y: 10,
            sliced: true,
            selected: true
        }, {
            name: 'Firefox',
            y: 20
        }, {
            name: 'Safari',
            y: 10
        }, {
            name: 'Opera',
            y: 15
        }]
    }]
});
</script>";

?>