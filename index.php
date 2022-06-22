<!DOCTYPE html>
<html>
<head>
    <title>All Users</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<style type="text/css">
   body {
        background-image: linear-gradient(to bottom right, #F5F5F5, #F5F5F5);
   }
.table-bordered {
    margin-top: 2%;
    margin-right: auto;
    margin-left: auto;
    width: 100%;
}
th, td {
    color: white;
    background: #16a085;
    width: 280px;
    height: 50px;
    border-radius: 5px;
    outline: none;
    border: none;
    text-decoration: none;
    text-align: center;
    transition: all 0.2s linear;
    letter-spacing: 0.05em;
}
th {
    background:  #2f2f2f;
    color: white;
}
.edit-btn{
  color: white;
  text-decoration: none;  
  border-radius: 5px;
  background: #ff8e47;
  padding: 7px;
  cursor: pointer;
  transition: .4s;
}
.edit-btn:hover{
  background: #f0782e;
  color: white;
  text-decoration: none;
}
.delete-btn{
  margin-left: 5%;
  color: white;
  text-decoration: none;  
  border-radius: 5px;
  background: #f44e6f;
  padding: 7px;
  cursor: pointer;
  transition: .4s;
}
.delete-btn:hover{
  background: #f0782e;
  color: white;
  text-decoration: none;
}


p {
   color: whitesmoke;
}

#submit-btn {
  border: 1px solid #0ab4b4;
  border-radius: 10px;
  background: #ff8e47;
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
}

#submit-btn:hover {
  background: #f0782e;
  text-decoration: none;
}
</style>
<body>


<div class="container">

<p>akjkjbebsavruvaerubv</p>
<a href="about.html" id="submit-btn" class="submit-btn">Back</a>



<?php


   if(isset($_SESSION['success'])){
      echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
   }


?>

<table class="table-bordered">
   <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Action</th>
      
   </tr>
   <?php


      require 'config.php';
      



      $users = $collection->find([]);


      foreach($users as $user) {
         echo "<tr>";
         echo "<td>".$user->name."</td>";
         echo "<td>".$user->email."</td>";
          echo "<td>".$user->password."</td>";
         echo "<td>";
         echo "<a href='edit.php?id=".$user->_id."' class='edit-btn'>Edit</a>";
         echo "<a href='delete.php?id=".$user->_id."' class='delete-btn'>Delete</a>";

         echo "</td>";
         echo "</tr>";
      };




   ?>
</table>
</div>
<br/>
<br/>

</body>
</html>