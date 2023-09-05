<?php
$a=$_POST['Full_name'];
$b=$_POST['E_mail_ID'];
$c=$_POST['Message'];
$connect=mysqli_connect("localhost","mysite","","mysitedata");
$query="INSERT INTO `contact`(`Full_name`, `E_mail_ID`, `Message`) VALUES ('$a','$b','$c')";
$Run=mysqli_query($connect,$query);
if ($Run==True)
{
echo "inserted";
}
else
{
echo"not inserted";
}
 ?>