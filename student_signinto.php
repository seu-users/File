<?php
$stu_num=$_REQUEST["ID"];
$stu_passwd=$_REQUEST["pw"];
if(empty($stu_num))
{
    echo "You must write your student number.";
}
if(empty($stu_passwd))
{
    echo "You must write your password.";
}
$con=mysqli_connect('localhost','root','20166788hq');
if(!$con)
{
    die('Could not connect:'.mysqli_error($con));
}
mysqli_select_db($con,"seu");
mysqli_set_charset($con,"utf-8");
$sql="SELECT * FROM student WHERE StudentNum ='".$stu_num."' ";
$result=mysqli_query($con,$sql);
while($row=$result->fetch_object())
{
    $row->Passwd;
    if ($row->Passwd!=$stu_passwd)
    {
        echo "$stu_num" . " doesn't exist.";
    }
    else
    {
        echo " Dear student: $stu_num";
        echo ", you have successfully signed into our system.";
        echo "<br>";
        echo "welcome to our test system.";
    }
}





/*$row=$result->fetch_fields();
foreach($row as $val)
{
    if (strcasecmp(($val->Passwd,$stu_passwd))!=0)
    {
        echo "$stu_num" . " doesn't exist.";
    }
    else
    {
        echo " Dear student: $stu_num";
        echo ", you have successfully signed into our system.";
        echo "<br>";
        echo "welcome to our test system.";
    }
}*/

?>
<?php
/**
 * Created by PhpStorm.
 * User: liuruiqi
 * Date: 2017/7/17
 * Time: 16:35
 */