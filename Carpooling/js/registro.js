/* Handles the data driver visibility */

/* 
   this function runs before the document is loaded to keep  
   the data driver hidden 
*/
$('#conductorDiv').hide();    

/*
  All internal functions are waiting for the document to load first.
  This prevents any of them from activating earlier 
*/
$(function() {

  // sets only one of the checkboxes avoiding checking more than one
  $('.check-btn').click(function(e) {
    
    $('.check-btn').not(this).prop('checked', false); 

  });  

  // When the driver checkbox is selected, two things can happen    
  $('#conductorCheck').on('click', function() {

      var answer = $('#conductorCheck').is(':checked');
      if(answer)
        $('#conductorDiv').show();  // Show the conductor data 
      else
        $('#conductorDiv').hide();  // If it is unfocussed, it is hidden  
 
  });
  
  $('#pasajero').click(function() {  

      $('#conductorDiv').hide();  // Conductor driver is also hidden if passenger checkbox is selected        

  });
 
});
