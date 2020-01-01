$(document).ready(function () {
  $("#search").keyup(function () { 
   var searchText=$(this).val(); 
  //  console.log(searchText);
  // e.preventDefault();
   if(searchText!=''){
     $.ajax({
       type: "post",
       url: "action.php",
       data: {query: searchText},
       dataType: "text",
       success: function(response) {
        $('#show-list').html(response);
        // console.log($('#test').html(response));
        // $("#response").html(response);
       }
     });
   }else{
     $('#show-list').html('');
   }
  });
  $(document).on('click','a',function(){
    $("#search").val($(this).text());
    $('#show-list').html('');
  });
});