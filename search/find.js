$(document).ready(function () {
console.log($("#search_text"));
 $("#search_text").keyup(function(){
  var search=$(this).val();
  $.ajax({
    url:"action.php",
    method:'post',
    data:{query:search},
    success:function(response){
      $("#table-data").html(response);
    }
  });
 });
});