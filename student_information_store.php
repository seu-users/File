<?php
/*   Readme!!!!!!!!!!!!!!!!!!!!!!!!!
 * This php file is compiled for 3 goals:
 * create a database "Seu"
 * create a table "student"
 * insert 5 detailed pieces of information
*/
 $servername="localhost";
 $username="root";
 $password="20166788hq";
 $dbname="Seu";
 try{
     $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     $sql="CREATE DATABASE SeuPDO";
     $conn->exec($sql);
     echo "Database being built successfully!.";

     $sql="CREATE TABLE Student(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
StudentNum VARCHAR(10),
Passwd VARCHAR(10),
Status bool,
Score DOUBLE ,
used_Time TIME 
)";
     $conn->exec($sql);
     echo "Table Student has been created successfully.";

     $stmt=$conn->prepare("INSERT INTO student
(StudentNum,Passwd,Status,Score)
VALUES(:StudentNum,:Passwd,:Status,:Score)");
     $stmt->bindParam(':StudentNum',$StudentNum);
     $stmt->bindParam(':Passwd',$Passwd);
     $stmt->bindParam(':Status',$Status);
     $stmt->bindParam(':Score',$Score);
     //$stmt->bindParam(':used_Time',$used_Time);

     $StudentNum="71117101";
     $Passwd="213170001";
     $Status=false;
     $Score=-1;
     //$used_Time=;
     $stmt->execute();

     $StudentNum="71117102";
     $Passwd="213170002";
     $Status=false;
     $Score=-1;
     //$used_Time=000000;
     $stmt->execute();

     $StudentNum="71117103";
     $Passwd="213170003";
     $Status=false;
     $Score=-1;
     //$used_Time=000000;
     $stmt->execute();

     $StudentNum="71117104";
     $Passwd="213170004";
     $Status=false;
     $Score=-1;
     //$used_Time=000000;
     $stmt->execute();

     $StudentNum="71117105";
     $Passwd="213170005";
     $Status=false;
     $Score=-1;
     //$used_Time=000000;
     $stmt->execute();

     echo "Insert information successfully.";
 }
 catch(PDOException $e)
 {
     echo $sql."<br>".$e->getMessage();
 }
 ?>
<?php
/**
 * Created by PhpStorm.
 * User: liuruiqi
 * Date: 2017/7/17
 * Time: 10:49
 */