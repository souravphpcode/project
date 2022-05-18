
<?php
error_reporting(0);

if(isset($_POST['Submit']))
{
   
        echo "welcome";
       $n=$_POST['name'];
    $m=$_POST['email'];
    $p=$_POST['pass'];
    $cp=$_POST['cpass'];
   
    echo $n."<br>";
    echo $m."<br>";
    echo $p."<br>";
    echo $cp."<br>";
    
   

}
?>
