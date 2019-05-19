$(document).ready(function(){
    viewSurveys();
    getMailsNotResponded();
    
    setInterval(function(){  
      viewSurveys();
      getMailsNotResponded();
    }, 10000);
    
    $("[data-survey]").click( function(){
        $.ajax({
            type: "POST",
            url: '../php/cambiarEstatusEncuesta',
            data: {idencuesta: $(this).data("survey")},
            success: function(data)
            {
              getMailsNotResponded();
              console.log(data);
              alert('Cambios guardados');
            }
        });
    });
});

function viewSurveys() {
  $.ajax({
      type: "GET",
      url: '../php/verEncuestas',
      success: function(data)
      {
        $("#statuses").append(data);
        console.log('encuestas en su estado actual');
      }
  }); 
}

function getMailsNotResponded() {
  $.ajax({
      type: "GET",
      url: '../php/obtenerCorreosEncuestas',
      success: function(data)
      {
        $("#faltantesEncuesta").html(data);
      }
  });
}