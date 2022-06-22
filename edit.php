<?php


session_start();


require 'config.php';


if (isset($_GET['id'])) {
   $user = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}


if(isset($_POST['submit'])){


   $collection->updateOne(
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
       ['$set' => ['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password'],]]
   );


   $_SESSION['success'] = "User updated successfully";
   header("Location: index.php");
}


?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Add a User</title>
  
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">

  
</head>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 0;
  padding: 0;
}

.AddSection {
  background-repeat: no-repeat;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 800px;
  height: 450px;
  text-align: center;
  display: flex;
  color: white;
}

.info {
  width: 15%;
}
.info h2 {
  padding-top: 30px;
  font-weight: 300;
}
.info p {
  font-size: 18px;
}
.info .icon {
  font-size: 8em;
  padding: 20px 0;
  color: #0ab4b4;
}

.AddForm {
  width: 200%;
  height: 100%;
  padding: 30px 0;
  background:  #16a085;
  transition: .2s;
  margin-left: -10%;
  margin-right: auto;
  border-radius: 10px;
}
.AddForm h2 {
  font-weight: bold;
  font-size: 30px;
}

.inputFields {
  margin: 3% 0;
  font-size: 16px;
  padding: 10px;
  width: 60%;
  border: 1px solid #0ab4b4;
  border-top: none;
  border-left: none;
  border-right: none;
  background: white;
  outline: none;
  border-radius: 10px;
}

.noBullet {
  list-style-type: none;
  padding: 0;
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
}
.back-btn{
  margin-left: 19.4%;
  text-decoration: none;
  border-radius: 10px;
  background: #ff8e47;
  font-size: 18px;
  color: white;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
}

.back-btn:hover {
  background: #f0782e;
}

</style>

<body>
  <br/>
  <br/>
  <a href="about.html" class="back-btn">Back</a>
  <div class="AddSection">
  <div class="info">
    
  </div>
  
  <form  method="POST" class="AddForm" name="AddForm">
    <h2>Update a user</h2>
    <ul class="noBullet">
      <li>
        <label for="name"></label>
        <input type="text" class="inputFields" id="name" value="<?php echo $user->name; ?>" name="name" placeholder="Name" required=""/>
      </li>
  
      <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" value="<?php echo $user->email; ?>" name="email" placeholder="Email" required=""/>
      </li>

      <li>
        <label for="password"></label>
        <input type="text" class="inputFields" id="password" value="<?php echo $user->password; ?>" name="password" placeholder="Password" required=""/>
      </li>

      <li id="center-btn">
        <input type="submit" name="submit" id="submit-btn" value="Submit">
      </li>
    </ul>
  </form>
</div>
  
    <script src="js/index.js"></script>

</body>
</html>

<?php





require 'config.php';


if (isset($_GET['id'])) {
   $book = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}


if(isset($_POST['submit'])){


   $collection->updateOne(
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
       ['$set' => ['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password'],]]
   );


   $_SESSION['success'] = "User updated successfully";
   header("Location: index.php");
}


?>

