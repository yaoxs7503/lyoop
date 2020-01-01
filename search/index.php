<!DOCTYPE html>
<?php 
require_once("config.php");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'/>
<body class="bg-secondary">

 <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
     <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
         aria-expanded="false" aria-label="Toggle navigation"></button>
     <div class="collapse navbar-collapse" id="collapsibleNavId">
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
             <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                 <div class="dropdown-menu" aria-labelledby="dropdownId">
                     <a class="dropdown-item" href="#">Action 1</a>
                     <a class="dropdown-item" href="#">Action 2</a>
                 </div>
             </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="text" placeholder="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
     </div>
 </nav> 
 <div class="container-fluid">
   <div class="row justify-content-center">
     <div class="col-md-10 bg-light mt-2 rounded pb-3">
       <h1 class="text-primary p-2">PHP+MySQLI+AJAX</h1>
       <div class="form-inline">
         <label for="search" class="font-weight-bold lead text-dark m-2 ">查找</label>
         <input type="text" name="search" id="search_text" class="form-control form-control-lg rounded-0 border-primary">
       </div>
       <hr>
       <table class="table table-hover table-light" id="table-data">
         <thead class="thead-light">
           <tr>
             <th>#</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Email</th>
             <th>Gender</th>
           </tr>
         </thead>
         <tbody>
            <?php
             $result=fetch_all();
             while($row=$result->fetch_assoc()): ?>
             <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['first_name'] ?></td>
              <td><?= $row['last_name'] ?></td>
              <td><?= $row['email'] ?></td>
              <td><?= $row['gender'] ?></td>
             </tr>
            <?php endwhile ?>
         </tbody>
                </table>
     </div>
   </div>
 </div>
</body>
</html>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
<script src="find.js"></script>