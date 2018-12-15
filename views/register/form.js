$('.registration_form').validate({
  rules: {
    first_name: {
    required: true,
  },
  last_name: {
    required: true,
  },
  password: {
    required: true,
  },
  passdConfirm: {
    required: true,
    equalTo: "#password"
  },
  email: {
    required: true,
    email: true
  }
  },

  messages: {
    first_name: {
      required: "Please enter your first name",
  },
    last_name: {
      required: "Please enter your last name",
  },
    password: {
      required: "Please enter an arrival date",
  },
    passConfirm: {
      required: "Please confirm your chosen password",
      equalTo: "Password is case sensitive"
  },
    email: {
      required: "Please enter an email address",
      email: "Please enter a valid email address"
  }
  },
  submitHandler: function (form) {
  $(".registration_form").submit();
  }
});
