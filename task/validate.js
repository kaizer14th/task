var val;
$(document).ready(function(){
  // Hide/show toggle for full text
  $(".h").hide();

    $(".g").click(function() {
      $(this).next(".h").slideToggle(600);
      $(this).toggleClass('underline');
    });

  // Validation
  val = $("#form");
  
  val.validate({
    focusCleanup: true,
    rules: {
      name1: {
        required: true,
        minlength: 2,
        maxlength: 60
      },

      sText: {
        required: true,
        minlength: 5,
        maxlength: 100
      },

      text: {
        required: true,
        minlength: 10,
        maxlength: 600
      }
    },

    messages: {

      name1: {
        required: "",
        minlength: "",
        maxlength: ""

      },

      sText: {
        required: "",
        minlength: "",
        maxlength: ""

      },

      text: {
        required: "",
        minlength: "",
        maxlength: ""
      },

      focusInvalid: false,
    }
  });
});

