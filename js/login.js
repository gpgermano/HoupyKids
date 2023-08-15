$("#signup").click(function() {
  $("#first").fadeOut("fast", function() {
    $("#second").fadeIn("fast");
  });
});
    
$("#signin").click(function() {
  $("#second").fadeOut("fast", function() {
    $("#first").fadeIn("fast");
  });
});
    
      
$(function() {
  $("form[name='login']").validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      senha: {
        required: true,    
      }
    },
    messages: {
      email: "Por favor insira um email ou cpf",
      
      password: {
        required: "Insira sua senha",
      }
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});

$(function() {
  
  $("form[name='registration']").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
  
    submitHandler: function(form) {
      form.submit();
    }
  });
});
    