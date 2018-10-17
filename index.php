<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codetrek-forum";


// Create connection
$conn =mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>


<html>
<head>
	<title> Codetrek</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script type="text/javascript" src=assets/js/main.js></script>
</head>
	<body>
		

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	<a class="navbar-brand" href="#"style="color: white; margin-left: 90px;">CODETREK FORUM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#"style="color: grey;">Questions <span class="sr-only">(current)</span></a>
      </li>
      </ul>
      <li class="nav-item dropdown"style="list-style-type: none;">

  <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="margin-right: 70px;color: white;">
    <i class="fas fa-cog"></i>
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
      </li>
    
   
  </div>
</nav>

<div class="container" style="margin-top: 50px; overflow: auto;">
	<h2 style="float: left;">Questions</h2>
	<form class="form-inline my-2 my-lg-0 float-right" action="index.php" method="POST">
		
      <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search">
      
      <button class="btn btn-primary mr-2"style="padding:10px;" type="submit"><i class="fas fa-search"></i></button>
  	
      <a class="btn btn-outline-primary my-2 my-sm-0" href="new-question.php">Ask Questions</a>
    </form>

</div>
		<?php
		
		$sql="select * from questions";
		$result=mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) > 0) {
    // output data of each row
			if(isset($_POST['search'])){
		$search= $_POST['search'];
	
    while($row = mysqli_fetch_assoc($result)) {
    		if (stripos($row['Title'],$search) !== false) {?>
    	<div class='container border' style='margin-top: 20px;'>
        <a href="answers.php?title=<?php echo $row['id']?>" style="color: black;"><h2 class='mt-2'><?php echo $row["Title"]?></h2></a>
        <p style='font-size:18px;color:grey;font-family:fontawesome;' class='mt-3'><?php echo $row["Description"]?><br>
        		<?php $badge=$row["Tags"];
        		$b=explode(",",$badge);
        		foreach ($b as $value){
        echo "<span class='badge badge-primary'>$value</span> &nbsp";
    		}?>
    	</p>
        <p> <a href =''>Ritik Kumar</a>    asked on September 27,2018</p>
       <p>
				
				<span><i class='far fa-thumbs-up'></i>
				<?php echo $row['likes']; ?></span> &nbsp &nbsp
		
				<span><i class='far fa-thumbs-down'></i>
				<?php echo $row['dislikes']; ?> </span>&nbsp &nbsp
				<span><i class='far fa-comments'></i>
				10 answers</span>
			</p>
			</div>
			
		<?php } 

    
}
}
else{
	while($row = mysqli_fetch_assoc($result)) {
    		?>
    	<div class='container border' style='margin-top: 20px;'>
        <a href="answers.php?title=<?php echo $row['id'] ?>" style="color: black;"><h2 class='mt-2'><?php echo $row["Title"]?></h2></a>
        <p style='font-size:18px;color:grey;font-family:fontawesome;' class='mt-3'><?php echo $row["Description"]?><br>
        	<?php	$badge=$row["Tags"];
        		$b=explode(",",$badge);
        		foreach ($b as $value){
        echo "<span class='badge badge-primary'>$value</span> &nbsp";
    		}?>
    	</p>
        <p> <a href =''>Ritik Kumar</a>    asked on September 27,2018</p>
       <p>
				
				<span><i class='far fa-thumbs-up'></i><?php echo $row['likes']; ?>
				</span> &nbsp &nbsp
		
				<span><i class='far fa-thumbs-down'></i>
				<?php echo $row['dislikes']; ?> </span>&nbsp &nbsp
				<span><i class='far fa-comments'></i>
				10 answers</span>
			</p>
			</div>
			
<?php
    
}
}
}
 else {
    echo "0 results";
}
		?>
	

	<footer class="my-2 text-center"style="color: #5495ff; font-size: 14px; background-color:rgb(250,250,250);">
		
		<i class="fas fa-code"></i>
		Developed at Codetrek
	</footer>

	</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>