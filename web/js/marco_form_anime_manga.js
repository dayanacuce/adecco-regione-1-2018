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

  /*var fields = [        //dichiarazione del vettore con all'interno stringhe
    'manga',
    'author',
    'genre_id',
    'released_date',
    'frequency',
    'anime'
  ];

  for (var i = 0; i < fields.length; i++) {
    var input_id = fields[i];

    if(input_id == 'anime' && $("#anime")[0].checked){
      var input_field = $("#vote_anime");
      var input_value = input_field.val();  //.val prende il valore del campo

      var input_error = !checkRequiredField(input_value);

      if (input_error) {
        submitable = false;
        input_field.parent().addClass('has-error');
      }
    }

    resetErrors(input_id);

    var input_field = $("#"+input_id);
    var input_value = input_field.val();

    var input_error = !checkRequiredField(input_value);

    if (input_id == 'manga' || input_id == 'author') {
      input_error = !checkOnlyLetter(input_value);
    }

    if (input_error) {
      submitable = false;
      input_field.parent().addClass('has-error');
    }
  }
  /*resetErrors("manga");
  resetErrors("author");
  resetErrors("released_date");
  resetErrors("frequency");
  resetErrors("vote_anime");

  var submitable = true;

  submitable = checkRequiredField($("#manga")) && submitable;
  submitable = checkRequiredField($("#author")) && submitable;
  submitable = checkRequiredField($("#released_date")) && submitable;
  submitable = checkRequiredField($("#frequency")) && submitable;

  if ($("#anime")[0].checked) {
    submitable = checkRequiredField($("#vote_anime")) && submitable;
  }*/

  if(submitable){
    $("form")[0].submit();
  }

});

function resetErrors(id){
  $("#"+id).parent().removeClass('has-error')
}

function checkRequiredField(input_value){
  return input_value != '';
}

function checkOnlyLetter(str){
  var re =  /^[A-Za-zÀ-ÖØ-öø-žぁ-ゞ\s]+$/;
  return re.test(str);
}

/*function checkRequiredField(input_field){
  var input_value = input_field.val();              // la variabile interna alla funzione input_value prende il valore di input_field
  if(input_value == ''){                            // se il valore è uguale alla stringa vuota
    input_field.parent().addClass('has-error');     // .parent() va a prendere la classe in cui è contenuto il tag e va aggiungere l'attributo has-error
    return false;
  }
  return true;
}*/
