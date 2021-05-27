<?php

session_start();

if(!isset($_SESSION['username'])){

	header('location:login.php');
}

?>

<html>

.myDiv {
  background-color: #b5d51d;
  height: 285px;
  width: 100%;
  
}


<body>




<h3> WELCOME <?php echo $_SESSION['username'] ?> !!!</h3>
<form action="logout.php">

<button type="submit" class="button" style="" name="logout">LOGOUT</a></button>

</form>

</body>
</html>