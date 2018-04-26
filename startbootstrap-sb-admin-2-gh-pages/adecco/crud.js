$("#privacy").on("change", privacyChange);

function privacyChange(event) {
  toggleSubmit(this.checked)
}

function toggleSubmit(enable) {
  var submitBtn = $("#submitBtn")
  if (enable) {
    submitBtn.attr("disabled", null)
  } else {
    submitBtn.attr("disabled", "disabled")
  }
}

$("form").on("submit", function(e) {
  e.preventDefault()

  resetError("nome")
  resetError("sede")
  resetError("programmatori")
  resetError("pubblicati")
  resetError("date")

  var submittable = true
  submittable = checkField($('#nome')) && submittable
  submittable = checkField($('#sede')) && submittable
  submittable = checkField($('#programmatori')) && submittable
  submittable = checkField($('#pubblicati')) && submittable
  submittable = checkField($('#date')) && submittable


  if (submittable) {
    $("form").submit()
  }
})

$("form").on("reset", function(e) {
  resetField($("#nome"))
  resetField($("#sede"))
  resetField($("#pubblicati"))
})

function resetField(field) {
  field.value() = ""
}

function resetError(id) {
  $("#" + id).parent().removeClass('has-error')
}

function checkField(input) {
    var value = input.val()
    if (value == "") {
        input.parent().addClass('has-error')
        return true
    }
    return false
}

$('#event_period').datepicker({
    inputs: $('.actual_range')
});

$(document).ready(function(){
  var date_input = $('input[name="date"]'); //our date input has the name "date"
  var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
  var options = {
    format: 'dd/mm/yyyy',
    container: container,
    todayHighlight: true,
    autoclose: true,
  };
  date_input.datepicker(options);
})
