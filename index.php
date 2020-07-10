
<?php

  if (isset($_POST["lessons"])){
  	$var=$_POST["lessons"];

  }
  else{
  	$var=array("jay","veeru","gullu");
  }
  


  $a="<html><head><title>facebook</title></head>
  <body><h1>Welcome to Facebook</h1><br>
  <form action='http://localhost/lessons/index.php' method='POST'>
  <b>Enter your name</b><br>
  <input type='name' name='name'></input><br>
  <b>select the number of lessons</b><br>
  <select name='lessons[]' size='6' multiple>
  <option value='mysql'>MY SQL</option>
  <option value='css'>CSS</option>
  <option value='MONGODB'>MONGODB</option>
  <option value='PHP'>PHP</option>
  <option value='HTML'>HTML</option>
  </select><br>

  <input type='Submit' value='Submit'></input>
  </form></body></html>";

  foreach($var as $index)
  {
  	echo $index;
  	echo "<br>";
  }

  
  echo $a;

?> 