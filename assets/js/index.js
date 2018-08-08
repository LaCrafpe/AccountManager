// assets/js/app.js

// loads the jquery package from node_modules
var $ = require('jquery');

$(document).ready(function() {
    var request = $.ajax({
        url: "chart",
        method: "GET",
        data: {
            type : 'yearly',
            value : '2018'
        },
        dataType: "json"
    }).done(function( response ) {
        console.log(response);
    }).fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
    });
});