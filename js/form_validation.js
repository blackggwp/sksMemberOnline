// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"


  $("form[name='login_form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      login_emaili: "required",
      login_password: "required",
      login_email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      login_password: {
        required: true,
        minlength: 6
      }
    },
    // Specify validation error messages
    messages: {
      // login_email: "กรุณากรอกอีเมล์",
      login_password: {
        required: "กรุณากรอกรหัสผ่าน",
        minlength: "กรุณากรอกรหัสผ่านอย่างน้อย 6 ตัวอักษร"
      },
      login_email: {
      	required: "กรุณากรอกอีเมล์",
      	email: "กรุณากรอกอีเมล์ให้ถูกต้อง"

      } 
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });


  $("form[id='form_register']").validate({
    rules: {
    	//refer accord to name element
      registerEmail: "required",
      registerPassword: "required",
      tel: "required",
      birthdate: "required",

      registerEmail: {
        required: true,
        email: true
      },
      registerPassword: {
        required: true,
        minlength: 6
      },
      tel: {
      	required: true,
      	digits:true,
        minlength: 10,
        maxlength: 10
      },
      perid: {
        digits:true,
        minlength: 13,
        maxlength: 13
      }
    },
    // Specify validation error messages
    messages: {
    	registerEmail: {
      		required: "กรุณากรอกอีเมล์",
      		email: "กรุณากรอกอีเมล์ให้ถูกต้อง"
      	},
      	registerPassword: {
        	required: "กรุณากรอกรหัสผ่าน",
        	minlength: "กรุณากรอกรหัสผ่านอย่างน้อย 6 ตัวอักษร"
      	},
        tel: {
          required: "กรุณากรอกเบอร์โทรศัพท์"
        },
        birthdate: {
          required: "กรุณากรอกวันเดือนปีเกิด"
        }
      
    },
    submitHandler: function(form) {
      form.submit();
    }
  });


});