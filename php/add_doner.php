<?php
// print_r($_GET);
extract($_GET);
$conn=mysqli_connect('localhost','root','','login');
$q="insert into user(name,mobile,address,health_issue,email,aadhar,blood_group) values('$name','$mobile','$address','$health_issue','$email','$aadhar','$blood_group')";
$res=mysqli_query($conn,$q);
if($res){
    echo "Done";
}
else{
    echo "error";
}
?>
