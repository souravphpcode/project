<?php 
include 'dao.php';
$id=$_GET['id'];
// echo $id;
$p=getOneBlog($id);


?>
<!DOCTYPE html>
<html lang="en">
    
<head> 
<link rel="icon" href="images/writer.png">
</head> 
<head> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post Page</title>
    <link rel="stylesheet" href="CSS/edit.css" type='text/css'>
    <!-- <link rel="stylesheet" href="CSS/del.css" type='text/css'> -->
   
</head>
<body>
<div id="navbar">
  <a href="profile.php">< Back</a>
  
</div>
<div class="container">
<form align="center"  class="Form_wrap" action="conn.php" method="post" enctype="multipart/form-data">  
<div style="border:4px 1px solid black">
    <h1>Edit Your Post</h1><br>
    <div class="re1">
    Title of your post :
    <input type="text" name="title" value="<?=$p['title']?>" >
    
    </div><br>
    <div class="re">
     Describe:  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="des" value="<?=$p['des']?>" > </div>
 
</div>
<div class="re2"> Upload images:
        <input type="file" name="img"><br>
        </div>
    <br>
    <div class="button input-box">
    <input type="hidden" name="id" value="<?=$id?>">
    <input  type="Submit" value="Update" name="btn2">
    <input  type="button" value="CANCEL" name="btn1" onclick="history.back(-1)"><br>
    
   
    </div>
</div>

    </div>

    </form>
  
</div>
</body>
</html>