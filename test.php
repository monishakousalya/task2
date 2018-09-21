<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <span class="navbar-text">
 <a href="#" class="display-5 text-white"> <b>LEADERBOARD</B></a>
      
    </span>
    
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
		  <a class=" nav-link" href="login.html"><b>HOME</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://mycaptain-web.herokuapp.com/tasks"><B>TASKS</b></a>
            </li>
		<li class="nav-item">
               <a class="nav-link" href="https://mycaptain-web.herokuapp.com/add"><b>REGISTER</b></a>
            </li>
		<li class="nav-item">
                   <a class="nav-link" href="login.html"><b>LOGOUT</b></a>
            </li>
        </ul>
    </div>
</nav>
<div class="row">

  <div class="col-sm-8">
<div class="jumbotron jumbotron-fluid">
  <div class="container">


    <div class="container">
  <div class="row">
<div align="center">

    <div class="col-sm">
     <div class="card">
  <img class="card-img-top" src="2.svg" alt="Card image cap">
  <div class="card-body">
   <br>
<center><b>1.Kartheek</b></center><br>
<center><b>score</b></center>
<center><b>50</b></center>
  </div>
</div>
    </div></div>
<div align="center">

    <div class="col-sm">
      <div class="card">
  <img class="card-img-top" src="1.svg" alt="Card image cap">
  <div class="card-body">
 <br>
<center><b>2.Anila</b></center><br>
<center><b>score</b></center>
<center><b>40</b></center>
  </div>
</div>
    </div></div>

<div align="center">

    <div class="col-sm" "shadow-lg p-3 mb-5 bg-white rounded">
      <div class="card">
  <img class="card-img-top" src="3.svg" alt="Card image cap">
  <div class="card-body">
     <br>
<center><b>3.Ram</b></center><br>
<center><b>score</b></center>
<center><b>30</b></center>
  </div>
</div>
    </div></div>


<div align="center">
<div class="col-sm">
<center><p class="h1">Winners<br>
are here!!!!</p></center><br><br>
<h1>CONGO.......</h1>
</div>
</div>

  </div>
</div>
  </div>
</div></div>
  <div class="col-sm-4">
 
<div align="center"  style="background-color:#000000;">><br><br>
 <a class=" nav-link" href="login.html"><font color="white">Personal information</font><br><br></a>
<font color="white">News</font><br><br>
<font color="white">Transaction history</font><br><br>
<font color="white">Reporting statictics</font><br><br>
<font color="white">Setting</font><br><br>
<font color="white">Guide</font><br><br>
<font color="white">Contact</font><br><br>
<font color="white">Log out</font><br><br>
</div>
</div>
</div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME</th>
     
      <th scope="col">SCORE</th>
    </tr>
  </thead>
	<?php
	
	$username = $_POST['username'];

$password = $_POST['password'];
$servername = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname = "account";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "INSERT INTO form (username,password)
			values('$username','$password')";
			$conn->query($sql);


  $sql1 = "SELECT id, name, score FROM scores";
$result1 = $conn->query($sql1);
$sql2 = "SELECT * FROM scores
	 ORDER BY score DESC" ;
	 $result2 = $conn->query($sql2);
  
  if ($result1->num_rows > 0) {
	  
 while($row = $result1->fetch_assoc()){
  echo '<tr>
      <td>'.$row["id"].'</td>
      <td>'.$row["name"].'</td>
     
      <td>'.$row["score"].'</td>
    </tr>';
 }

	echo '</table>';
	
 
  }
  else  {
    echo "0 results";
}
  

$conn->close();
?>

</body>
</html>