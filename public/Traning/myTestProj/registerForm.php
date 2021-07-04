


<form action="register.php" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Password: <input type="password" name="pass"><br>
<input type="submit">
</form>
<?php
include 'PersonCls.php';
if(isset($_GET["name"])){
$name = $_GET["name"];
$email = $_GET["email"];
$pass =$_GET["pass"];
$id = "5";}
$test=new Person($name,$pass,$email,$id);
//$sanea = new Person($name, $pass,$email,$id);
//$calu = new Person($name, $pass,$email,$id);

//echo ($sanea->makeDB() . "\n");
 ($test->makeDB() . "\n");?>
print_r($name);


