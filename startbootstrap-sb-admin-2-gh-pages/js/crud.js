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

// $("form").on("submit", function(e) {
//   e.preventDefault()
//   console.log("Hello from submit");
//   //
//   // var fields = ["name", "office", "published", "date"]
//   //
//    var submittable = true
//   // for (var i = 0; i < fields.length; i++) {
//   //   var input = fields[i]
//   //   resetError(input)
//   //
//   //   var field = $("#" + input)
//   //   var value = field.val()
//   //   var input_error = !checkField(value)
//   //
//   //   if (input == "name" || input == "office") {
//   //     input_error = !checkOnlyLetter(value)
//   //   }
//   //
//   //   if (input_error) {
//   //     submittable = false
//   //     field.parent().addClass("has-error")
//   //   }
//   // }
//
//   if (submittable) {
//     $("form")[0].submit()
//   }
//
// })

// $("form").on("reset", function(e) {
//   resetField($("#name"))
//   resetField($("#office"))
//   resetField($("#published"))
// })
//
// function resetField(field) {
//   field.value() = ""
// }
//
// function resetError(id) {
//   $("#" + id).parent().removeClass('has-error')
// }
//
// function checkField(input) {
//     return input != ""
// }
//
// function checkOnlyLetter(str) {
//   var re = /^[A-Za-zÀ-ÖØ-öø-žぁ-ゞ0-9\s]+$/
//   return re.test(str)
// }

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
