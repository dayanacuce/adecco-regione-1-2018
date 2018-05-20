function animeChecked(event) {
  if($("#anime")[0].checked){
    $("#slide_vote").slideDown();
    $("#slide_date").slideDown();
    $("#vote_anime").attr('disabled', null);
    $("#released_date_anime").attr('disabled', null);
  }else{
    $("#slide_vote").slideUp();
    $("#slide_date").slideUp();
    $("#vote_anime").attr('disabled', 'disabled');
    $("#released_date_anime").attr('disabled', 'disabled');
  }
}

animeChecked();

$("#anime").on("change",animeChecked);

$("form").on('submit', function(e){
  e.preventDefault();   // previene la spedizione del form previene quello che di default fa il determinato evento
                        // e nome dela funzione - preventDefault metodo della funzione
  var submitable = true;

  if(submitable){
    $("form")[0].submit();
  }

});
