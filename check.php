<?php
if(!isset($_SESSION["username"]))
{
    header("Location:./loginform.php?flag=loginfirst");
}
?>