/*  javascript| singular @2015*/

$(document).ready(function(){

  $('form#del-odds ,form#del-types').submit(function() {
    var c = confirm("Are you sure you want to delete this odd?");
    return c;
  });

});