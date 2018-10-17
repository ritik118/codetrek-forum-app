<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codetrek-forum";

$search=$_GET['title'];
// Create connection
$conn =mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql1="select * from questions where id = '$search'";
$result1=mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
if ($result1) {
  
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

if(isset($_POST['answer'])){
  $answer=$_POST['answer'];
  $sql2="INSERT INTO answers(question_id,answer_text,created_at,updated_at) values($search,'$answer',NOW(),NOW())";
$result2=mysqli_query($conn,$sql2);
if ($result2) {
  
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
}
else{
  $answer="";
}
  $sql3="SELECT * FROM answers where question_id=$search";
      $result3=mysqli_query($conn,$sql3);
      

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
  <a class="navbar-brand" href="index.php"style="color: white; margin-left: 90px;">CODETREK FORUM</a>
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
<?php if(isset($_POST['answer'])){ ?>
<div class="alert alert-success" role="alert">
  <strong>Thank you!</strong> Your answer has been successfully posted!!
</div>
<?php } ?>
<div class="container" style="margin-top: 40px;">
    <h3><?php echo $row1["Title"]; ?></h3>
      <p style="font-size:18px;font-family:fontawesome;color: grey;"><?php echo $row1['Description']; ?><br>
      <?php $badge=$row1["Tags"];
            $b=explode(",",$badge);
            foreach ($b as $value){
        echo "<span class='badge badge-primary'>$value</span> &nbsp";
        }?>
      </p>
      <p> <a href="#">Ritik Kumar</a>    asked on September 27,2018</p>
      <p>
        <i class="far fa-thumbs-up" id="likes" onclick="like()"><span id="lclicks">14</span></i>
         &nbsp &nbsp
        <i class="far fa-thumbs-down" id="dislikes" onclick="dislike()"><span id="dclicks">2</span></i>
        &nbsp &nbsp
        <i class="far fa-comments"></i>
        <?php echo mysqli_num_rows($result3); ?> answers
      </p>
  </div>
  <?php
    while($row=mysqli_fetch_assoc($result3)){
     ?>
  <div class="container border shadow-sm  bg-white rounded"style="margin-top: 40px;">
    <p class="mt-4"style="font-family:fontawesome;color: grey;"> <a href="#">Ritik Kumar</a>  answered on September 27,2018
      <span class="badge badge-success float-lg-right"><i class="fas fa-check"></i> Correct Answer</span>
    </p>  

      <p style="font-size:14px;font-family:arial;font-weight:540;"> <?php echo $row['answer_text']; ?>
      </p>
  </div>
  <?php } ?>
  <div class="container border shadow-sm  bg-white rounded"style="margin-top: 30px;">
    <h2 class="mt-4">Your answer</h2>
      <form action="answers.php?title=<?php echo $row1['id'] ?>" method="POST">
        <div class="form-group">
    <textarea class="form-control" id="descriptionq" placeholder="Please provide with a suitable answer" name="answer" rows="10"style="resize: none;"></textarea>
  </div>
  <button type="submit" class="btn btn-primary"">Post Your Answer</button>
      </form>
  </div>
  <footer class="my-4 py-2 text-center"style="color: #5495ff; font-size: 14px; background-color:rgb(250,250,250);">
   <strong> 
    <i class="fas fa-code"></i>
    Developed at Codetrek Tehri 2018
  </strong>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>