
document.addEventListener('DOMContentLoaded', function () {

    Highcharts.chart('salesChart', {

        chart: {
            type: 'line',
            backgroundColor: '#ffffff'
        },

        title: {
            text: null
        },

        xAxis: {
            categories: [
                'Janvier',
                'Février',
                'Mars',
                'Avril',
                'Mai',
                'Juin'
            ]
        },

        yAxis: {
            title: {
                text: 'Chiffre d\'affaires (€)'
            }
        },

        series: [{
            name: 'Chiffre d\'affaires',
            data: [15000, 18000, 22000, 19000, 25000, 26000],
            color: '#2878b5'
        }],

        credits: {
            enabled: false
        }

    });

});
