<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'/>
<body class="bg-info">
 <div class="container">
   <div class="row">
     <div class="col-md-8 offset-md-2 bg-light p-4 mt-3">
      <h4 class="text-center">
       自动查找 
      </h4>
      <form action="details.php" class="form-inline p-3">
        <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0" placeholder="查找" style="width:80%;">
        <input type="submit" name="submit" value="查找" class="btn btn-info btn-lg rounded-0" style="width:20%;">   
      </form>
     </div>
     <div class="col-md-5" style="position:relative;margin-top:-50px;margin-left:210px">
       <div class="list-group" id="show-list">
       </div>
      
     </div>
   </div>
 </div> 
 <p id="test"></p>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
<script src="autoSearch.js"></script>
</html>