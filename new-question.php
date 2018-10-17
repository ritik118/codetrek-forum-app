<html>
<head>
	<title> Codetrek</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



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
    <a class="dropdown-item" href="#">Ritik</a>
    <a class="dropdown-item" href="#">Settings</a>
    <a class="dropdown-item" href="#">My profile</a>
  </div>
      </li>
    
   
  </div>
</nav>

<div class="container" style="margin-top: 50px; overflow: auto;font-family: arial;">
  <h3>Ask Question</h3>
</div>
<div class="container border">
<form action="thank-you.php" method="POST">
  <div class="form-group mt-4">
    <label for="title"><strong>Title</strong><sup style="color: red;">*</sup></label>
    <input type="text" class="form-control" id="titleq" placeholder="Enter a short and proper title for your question" name="title">
  </div>
  <div class="form-group">
    <label for="description"><strong>Description</strong><sup style="color: red;">*</sup></label>
    <textarea class="form-control" id="descriptionq" placeholder="Enter a detailed description of what problems you're facing and steps to replicate" rows="10"style="resize: none;" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="Tags"><strong>Add Tags</strong></label>
    <input type="text" class="form-control"placeholder="tag1,tag2,tag3" name="tags">
    <small id="emailHelp" class="form-text text-muted">Tags will help to find your question faster.Add comma seprated tags.For ex:codetrek,bootstrap,frontend</small>
  </div>
  <br>
  <button type="submit" class="btn btn-primary" onclick="showAlert();">Post Your Question</button>
</form>
</div>
<footer class="my-4 py-2 text-center"style="color: #5495ff; font-size: 14px; background-color:rgb(250,250,250);">
   <strong> 
    <i class="fas fa-code"></i>
    Developed at Codetrek Tehri 2018
  </strong>
  </footer>
  <script src=assets/js/main.js></script>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>