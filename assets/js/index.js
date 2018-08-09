// assets/js/app.js

// loads the jquery package from node_modules
var $ = require('jquery');
var Chart = require('chart.js');

$(document).ready(function() {
    var request = $.ajax({
        url: "accounting/chart",
        method: "GET",
        data: {
            type : 'yearly',
            value : '2018'
        },
        dataType: "json"
    }).done(function( response ) {
        new Chart($("#myChart"), {
            type: 'line',
            data: {
                labels: response.labels,
                datasets: [
                    {
                        label: 'Solde',
                        data: response.solde,
                        lineTension: 0,
                        borderColor: 'rgba(255, 193, 7, 1)',
                        fill: false
                    },
                    {
                        label: 'Dépenses',
                        data: response.depenses,
                        lineTension: 0,
                        borderColor: 'rgba(220, 53, 69, 1)',
                        fill: false
                    },
                    {
                        label: 'Revenus',
                        data: response.revenus,
                        lineTension: 0,
                        borderColor: 'rgba(40, 167, 69, 1)',
                        fill: false
                    }
                ]
            },
            options: {
                responsive: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    }).fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
    });

});