$(document).ready(function(){
  $("#date").datepicker();
});

$("#privacy").on("change", privacyChanged);

function privacyChanged(event){
  toggleSubmit(this.checked);
}

function toggleSubmit(enable){
  var submit_btn = $("#submitBtn");
  if(enable){
    submit_btn.attr('disabled', null);
  }else{
    submit_btn.attr('disabled', 'disabled');
  }
}

$("form").on('submit', function(e){
  e.preventDefault();

  var fields = [
    'firstname',
    'lastname',
    'email',
    'message'
  ];

  var submittable = true;
  for(var i=0; i<fields.length; i++){
    var input_id = fields[i];

    resetError(input_id);

    var input_field = $("#"+input_id);
    var input_value = input_field.val();

    var input_error = !checkRequiredField(value);

    if(input_id == 'firstname' || input_id == 'lastname'){
      input_error = !checkOnlyLetter(value);
    }

    if(input_error){
      submittable = false;
      input_field.parent().addClass('has-error');
    }
  }

  if(submittable){
    $("form")[0].submit();
  }
});

function resetError(id){
  $("#"+id).parent().removeClass('has-error');
}

function checkRequiredField(input_value){
  return input_value != '';
}

function checkOnlyLetter(str){
  var re =  /^[A-Za-zÀ-ÿ\s]+$/;
  return re.test(str);
}
