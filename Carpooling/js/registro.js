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

  // When the driver checkbox is selected, two things can happen    
  $('#conductorCheck').on('click', function() {

      var answer = $('#conductorCheck').is(':checked');
      if(answer)
        $('#conductorDiv').show();  // Show the conductor data 
      else
        $('#conductorDiv').hide();  // If it is unfocussed, it is hidden  
 
  });
	
  // Verifies 
  // limit of nine numbers
  $('#matricula').on('keydown keypress',function(e){
        if(e.key.length === 1){
            if($(this).val().length < 9 && !isNaN(parseFloat(e.key))) {
                $(this).val($(this).val() + e.key);
            }
            return false;
        }
  });
  // Only text
  $(".text").keypress(function (key) {
        if ((key.charCode < 97 || key.charCode > 122)
            && (key.charCode < 65 || key.charCode > 90)
            && (key.charCode != 45)
            && (key.charCode != 241)
            && (key.charCode != 209)
            && (key.charCode != 32)
        )
        return false;
    });	
 
});


// To take the user´s photo
var localstream, canvas, video,  ctx; 
 
  function turnOnCamera() {
  
    // defined spacign for the canvas element
    canvas = document.getElementById("canvas");
    ctx = canvas.getContext("2d"); 
    // getting our media channel 
    video = document.getElementById("video");

    /*
      Aks if the public instance variable getUserMedia is setted.
      If don´t, then proceeds to set it up with the following 
      same variable that provides the navigator
    */
     if(!navigator.getUserMedia)
       navigator.getUserMedia = ( navigator.webkitGetUserMedia ||
		                            navigator.mozGetUserMedia ||
			                         navigator.msGetUSerMedia);  
       
    // Getting the camera element
    if(!window.URL)
       window.URL = window.webkitURL;

      if(navigator.getUserMedia) {
          
        /*
         Configure out the camera only video and the photo
         taken is inserted into the input video all this through
         stream
        */
        navigator.getUserMedia({video: true, audio: false}, 
          function(stream) { 
            try {
                  localstream = stream;
                  video.srcObject = stream;
                  video.play();
                } catch(error) {
                    video.srcObject = null; 
                }
		  }, function(){
			swal("Cámara bloqueda", "da click en permitir para usar la cámara", "warning");
		}); } else {  
                  swal("Mensaje", "Cámara no disponible", "error");    
          }   	         
 
      }; // End turnOnCamera
 
      // the camera turns off closing the stream 
      function turnOffCamera() {
        video.pause();
        video.srcObject = null;
        localstream.getTracks()[0].stop();
      }

     // Select image
    $("#radiophoto").click(function() {
       $(" #uploadphoto").addClass("none");
       $("#video").removeClass("none");
       $("#btn-save").removeClass("none");
       turnOnCamera();
       document.getElementById("uploadphoto").value = null; 
    }); 

   $("#radiosphoto").click(function() {
       $("#uploadphoto").removeClass("none");
       $("#video").addClass("none");
       $("#btn-save").addClass("none");
       turnOffCamera();
    });

function captura() {

  video.pause();
  ctx.drawImage(video, 0, 0,  canvas.width, canvas.height);
  let photo = canvas.toDataURL();
  video.play();

}

