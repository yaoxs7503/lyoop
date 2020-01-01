$(document).ready(function () {
  $("#login").on('click',function(e){
    // alert("hello");
    var email=$("#email").val();
    // console.log(email);
    e.preventDefault();
    var password=$('#password').val();
    // console.log(password);
    if(email==""||password==""){
      alert('邮件和密码不可以为空');
    } 
    $.ajax({
      type: "POST",
      url: "login.php",
      data: {
        login:1,
        emailPHP:email,
        passwordPHP:password,
      },
      dataType: "text",
      success: function (response) {
      $("#response").html(response);
      if(response.indexOf('登录成功')>=0)
     { window.location="success.php";} 
      },
    });
  })
});