<?php
SESSION_START();
$id=$_SESSION['id'];
include("connect.php");
if(isset($_POST["submit"]))
{
    $one=$_POST["one"];
    $two=$_POST["two"];
    $three=$_POST["three"];
    $four=$_POST["four"];
    $five=$_POST["five"];
    $six=$_POST["six"];
    $seven=$_POST["seven"];
    $eight=$_POST["eight"];
    $nine=$_POST["nine"];
    $ten=$_POST["ten"];
    $eleven=$_POST["eleven"];
    $twelve=$_POST["twelve"];
    $thirteen=$_POST["thirteen"];
    $fourteen=$_POST["fourteen"];
    $fifteen=$_POST["fifteen"];
    $query="UPDATE power set one='$one',two='$two',three='$three',four='$four',five='$five',six='$six',seven='$seven',eight='$eight',nine='$nine',ten='$ten',eleven='$eleven',twelve='$twelve',thirteen='$thirteen',fourteen='$fourteen',fifteen='$fifteen' where id='$id'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        header("location:power.php");
    }
}
if(isset($_POST["submit1"]))
{
    $date=$_POST["date"];
   
    $query="UPDATE power_date set date='$date' where id='$id'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        header("location:power.php");
    }
}
?>