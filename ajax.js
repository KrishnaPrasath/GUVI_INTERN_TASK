$(document).ready(function() {
  // register data

  $("#register").click(function() {
    let email = $("#email").val();
    let password_1 = $("#password_1").val();
    let password_2 = $("#password_2").val();

    $.ajax({
      url: "jPost.php",
      method: "POST",
      data: {
        email: email,
        password_1: password_1,
        password_2: password_2
      }
    }).done(function(data) {
      console.log(data);
    });
  });

  $("#login").click(function() {
    let email = $("#email").val();
    let password = $("#password").val();
    console.log("login clicked");

    $.ajax({
      url: "jGet.php",
      method: "POST",
      data: {
        email: email,
        password_1: password
      }
    }).done(function(data) {
      console.log(data);
    });
  });
});
