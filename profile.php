<?php 
include 'conn.php';
session_start();
$e=$_SESSION['e'];
// $l=$_SESSION['n'];
$W=getIMG($_SESSION['i']);
$q=getoneIMG($_SESSION['i']);
if(empty($e)){

     header("location:page-login.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<link rel="icon" href="images/team.png">
</head> 
<head> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
      body{
       
    background: #d3e3e7;
}
      
      .content{
 margin-right: 100px;
  margin-left: 100px;
      }
      </style>
</head>
<body>  
  <div class="button" >
   

     
</div>
<div class="container">
  <br>

	<div class="text-right">

    <a class="btn btn-primary"   href="create_post.php?id=<?=$_SESSION['i']?>">Create Post</a>
    <a class="btn btn-dark"  href="page-login.php">Log Out</a>
	</div>
</div>
<div class="content">

<form align="center" style="margin-left:10pc"><br>
<h2>Your Blogs</h2>
</form>
<div class="row row-cols-1 row-cols-md-3 g-3">
  <?php foreach ($q as $p){?>
  <div class="col">
    <div class="card h-100">
      <img src="upload/<?=$p['img']?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title"> <b style="color:black"><?=$p['title']?></b></h4>
         <p class="card-text"><h6><br> <?=$p['des']?> </h6><br> </p>
        <form action="conn.php" method="POST">
                <input type="hidden" name="id" value="<?=$p['id']?>">
                &nbsp; &nbsp; &nbsp; &nbsp; <input  type="submit" class="btn btn-primary" value="Delete" name="dele">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; <a class="btn btn-primary" href="edit.php?id=<?=$p['id']?>">Edit</a>
        </form>
      </div>
    </div>
  </div>
<?php } ?>
</div><br>
<form align="center" >
<h2>Others People Blogs</h2>
<br>
</form>
<div class="row row-cols-1 row-cols-md-3 g-3">
  <?php foreach ($W as $u){?>
  <div class="col">
    <div class="card h-100">
      <img src="upload/<?=$u['img']?>" class="card-img-top" alt="...">
      <div class="card-body">
      
     <h4 class="card-title"><b style="color:blue"><?=$u['title']?></b></h4>
        <p class="card-text"  style="color:blue"><br><h6><?=$u['des']?></h6><br></p>
        
        <!-- <a class="btn btn-info" href="">Delete</a> -->
      </div>
    </div>
    </div>
    <?php } ?>
</div>
</div>
 </body>
 <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
 </html>
 <?php } 
//  session_destroy();
//  header("profile.php");
 ?>

 