<?php
include_once "User.php";

$user= new User("Ninh Văn Tuấn Đạt", "datnvt139@gmail.com",2);

echo $user->getInfo();
echo "<br>";
echo $user->isAdmin();

?>