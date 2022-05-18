<!DOCTYPE html>
<html lang="en">
    
<head> 
<link rel="icon" href="images/add.png">
</head> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post Page</title>
    <link rel="stylesheet" href="CSS/create_post.css" type='text/css'>
</head>
<body>
<div class="container">
<form align="center"  class="Form_wrap" action="conn.php" method="post" enctype="multipart/form-data">  
<div style="border:4px 1px solid black">
    <h1>Share your exprience</h1>
    <div class="re1">
Title of your post :
    <input type="text" name="title" autocomplete="off" required >
    </div><br>
    <div class="re">
     Describe:  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="des" required > </div>
     <div class="re2"> Upload images:
        <input type="file" name="img" required><br>
        </div>
       
    <br>
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <div class="button input-box">
    <input  type="Submit" value="POST" name="btn">
   <input  type="button" value="CANCEL" name="btn1" onclick="history.back(-1)"><br>
    </div>
</div>

    </div>

    </form>
  
</div>
</body>
</html>