<?php
include 'db.php';

function adduser($n,$m,$p,$cp) {
    $con=$GLOBALS['con'];

$sql="insert into sign values(null,?,?,?,?)";
    $st=$con->prepare($sql);
    $st->bind_param("ssss",$n,$m,$p,$cp);
    //ss=string string si=string int sd=string double
     if($st->execute()){
         echo "<br>"."success";
       
        return true;

     }
     else
     {
        echo $con ->error; 
        }
    }
    function login($users){
        $con=$GLOBALS ['con'];
        $m=$users['email'];
        $pass=$users['pass'];
        $e_p=md5($pass);
        $sql="select userid,email,pass from sign where email=? and pass=?";
        $st=$con->prepare($sql);
            $st->bind_param("ss",$m,$e_p);
            if($st->execute()){
                $rs=$st->get_result();
                if($rs->num_rows>0){
                    
                       // return true;
                       return $rs->fetch_assoc()['userid'];
             }
             else
             {
                    return false;
        
                }
            }
        }
        function blogadd($user) {
        $con=$GLOBALS['con'];
        $t=$user['title'];
        $d=$user['des'];
        $p=$user['img'];
        //$e=$user['userid'];
            $id=$user['id'];
        $sql="insert into blog values(null,?,?,?,?)";
            $st=$con->prepare($sql);
            $st->bind_param("sssi",$t,$d,$p,$id);
             if($st->execute()){
                
                return true;
        
             }
             else
             {
                echo $con ->error; 
                }
            }
      
            
            
            /*Fatch Image Form Database */
            function getFiles($id){
                $con=$GLOBALS['con'];
                $sql="select * from blog where userid <> $id";
                $result=$con->query($sql);
                $img=array();
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        $img[]=$row;
                    }
                }
                return  $img;
            }
                 
            /*Fatch Image Form Database */
            function getOneBlog($id){
                $con=$GLOBALS['con'];
                $sql="select * from blog where id=$id";
                $result=$con->query($sql);
                if($result->num_rows>0){
                   return  $result->fetch_assoc();
                }
               
            }
            
             /*Fatch Image Form Database */
             function getFile($id){
                $con=$GLOBALS['con'];
                $sql="select * from blog where userid=$id";
                $result=$con->query($sql);
                $img=array();
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        $img[]=$row;
                    }
                }
                return  $img;
            }
            function getUser(){
                $con=$GLOBALS['con'];
                $sql="select * from blog";
                $res=$con->query($sql);
                $users=array();
                if($res->num_rows>0){
                    while($row=$res->fetch_assoc()){
                    $users[]=$row;
                    }
                }
                return $users;
            }
            function getuserdata($id){
                $con=$GLOBALS['con'];
                $sql="select * from blog where id=?";
                $st=$con->prepare($sql);
                $st->bind_param("i",$id);
                if($st->execute()){
                    $result=$st->get_result();
                    if($result->num_rows > 0){
                        if($row=$result->fetch_assoc()){
                            return $row;
                        }
                    }
                }
                else{
                    echo $con->error;
                }
            
            } 

            function update($users){
                $con=$GLOBALS ['con'];
                $name=$users['title'];
                $email=$users['des'];
                $img=$users['img'];
                $id=$users['id'];
                $sql="update blog set title=?,des=?,img=?  where id=?";
                $st=$con->prepare($sql);
                $st->bind_param("sssi",$name,$email,$img,$id);
                if($st->execute()){
        
                   return true;
                        }
                        else{
                            echo $con ->error;
        
                        }  
            }

    
            function deladmin($id){
                $con=$GLOBALS['con'];
                $sql="delete from blog where id=?";
                $st=$con->prepare($sql);
                $st->bind_param("i",$id);
                if($st->execute()){
                    return true;
                }
                else{
                    return false;
                }
            }



            function contactus($n,$m) {
                $con=$GLOBALS['con'];
            
            $sql="insert into contact values(null,?,?)";
                $st=$con->prepare($sql);
                $st->bind_param("ss",$n,$m);
                //ss=string string si=string int sd=string double
                 if($st->execute()){
                     echo "<br>"."success";
                   
                    return true;
            
                 }
                 else
                 {
                    echo $con ->error; 
                    }
                }
    ?>