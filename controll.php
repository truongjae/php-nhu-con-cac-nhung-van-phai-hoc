<?php
include('connect.php');
class AbstractQuery{
    public function INSERT($name,$email,$subject,$note){
        global $conn;
        $sql="insert into tb_contact(name,email,subject,note) values ('$name','$email','$subject','$note')";
        $run = mysqli_query($conn,$sql);
        return $run;
    }
    public function REGISTER($email,$username,$password){
        global $conn;
        $sql="insert into register(email,username,password) values ('$email','$username','$password')";
        $run = mysqli_query($conn,$sql);
        return $run;
    }
}
?>
