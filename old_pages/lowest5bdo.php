<?php 

// Radialize the colors
echo "<script>


Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});


Highcharts.chart('lowest', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Lowsest 5 BDO'
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
                },
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Brands',
        data: [           
            
            { name: 'Firefox', y: 20 },
            { name: 'Safari', y: 10 },
            { name: 'Opera', y: 10 },
            {
                name: 'Chrome',
                y: 50,
                sliced: true,
                selected: true
            },
            { name: 'Other', y: 10 }
        ]
    }]
});
</script>";

?>