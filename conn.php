<?php
include 'dao.php'; 
if(isset($_POST['Submit'])){

    $n=$_POST['name'];
    $m=$_POST['email'];
    $p=$_POST['pass'];
    $e_p=md5($p);
    $cp=$_POST['cpass'];
    // echo $n."<br>".$m."<br>".$p."<br>".$cp."<br>";
    adduser($n,$m,$e_p,$cp);
    header("location:page-login.php");


}

if(isset($_POST['Submit1'])){
  $m=$_POST['email'];
  $pass=$_POST['pass'];
  $users=array("email"=>$m,"pass"=>$pass);
  $id=login($users);
  if($id>0){
  session_start();
  $_SESSION['i']=$id;
  $_SESSION['e']=$m;
    header("location:profile.php");
}
else{
 
  // echo "Try again.....please check email id & Password";
  header("location:404.php");
}
}




if(isset($_POST['btn']) && $_FILES['img']){
  $t=$_POST['title'];
  $d=$_POST['des'];
  $id=$_POST['id'];
  // $d=$_POST['fdept'];
  $file=$_FILES['img'];
  $name=$file['name'];
  $type=$file['type'];
  $size=$file['size'];
  $error=$file['error'];
  $tmp_name=$file['tmp_name'];
  if($error == 0){
    if($size<125000000){
      $ext=pathinfo($name,PATHINFO_EXTENSION);
      $ext_l=strtolower($ext);
      $n_name=uniqid("IMG-",true).".".$ext_l;
      $path='upload/'.$n_name;
    }
    else{
       echo "it exist maximum file size";
    }
  }
  else{
     echo "something went wrong!!";
  }
  $user=array("title"=>$t,"des"=>$d,"img"=>$n_name,"id"=>$id);
  $re=blogadd($user);
  if($re){
    // session_start();
    // $_SESSION['n']=$t;
    move_uploaded_file($tmp_name,$path);/*Save To folder */
    header("Location:profile.php");
  }
  else{
    echo "Failed!!!";
  }
}
$us= getUser();

function getIMG($id){
  $i=getFiles($id);
  return $i;
}
function getoneIMG($id){
  $i=getFile($id);
  return $i;
}
if(isset($_POST['Submit1'])){
  $m=$_POST['email'];
  $pass=$_POST['pass'];
  $users=array("email"=>$m,"pass"=>$pass);
  if(login($users)){
  session_start();
  $_SESSION['e']=$m;
    header("location:profile.php");
}
else{
 
  // echo "Try again.....please check email id & Password";
  header("location:404.php");
}
}



if(isset($_POST['btn2']) && $_FILES['img']){
  $t=$_POST['title'];
  $d=$_POST['des'];
  $id=$_POST['id'];
  // $d=$_POST['fdept'];
  $file=$_FILES['img'];
  $name=$file['name'];
  $type=$file['type'];
  $size=$file['size'];
  $error=$file['error'];
  $tmp_name=$file['tmp_name'];
  if($error == 0){
    if($size<125000000){
      $ext=pathinfo($name,PATHINFO_EXTENSION);
      $ext_l=strtolower($ext);
      $n_name=uniqid("IMG-",true).".".$ext_l;
      $path='upload/'.$n_name;
    }
    else{
       echo "it exist maximum file size";
    }
  }
  else{
     echo "something went wrong!!";
  }
  $user=array("title"=>$t,"des"=>$d,"img"=>$n_name,"id"=>$id);
  if(update($user)){
    move_uploaded_file($tmp_name,$path);/*Save To folder */
    header("location:profile.php?id=$id");
    }else{
      echo "try again";
      header("location:edit.php");
  
    }
}
if(isset($_POST['dele'])){
  $id=$_POST['id'];
  deladmin($id);
  header("Location:profile.php");
}



if(isset($_POST['cont'])){

  $n=$_POST['name'];
  $m=$_POST['email'];


  contactus($n,$m);


}


?>