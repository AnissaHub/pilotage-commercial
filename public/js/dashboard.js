
// Créer un graphique dans l'élément HTML qui possède l'id "ca-chart"
Highcharts.chart('ca-chart', {
    chart: {
        
        type: 'column'
    },

    title: {
        text: 'Chiffre d’affaires mensuel'
    },
   plotOptions: {
    column: {
        color: '#f54949',
        dataLabels: {
            enabled: true,
            format: '{y} €'
        }
    }
},
    xAxis: {
        categories: categories
    },

  yAxis: {
    title: {
        text: 'Chiffre d’affaires (€)'
    },
    labels: {
        format: '{value} €'
    }
},

    series: [{
        name: 'Chiffre d’affaires',
        data: montants
    }],
});

