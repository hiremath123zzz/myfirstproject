<form action="" method="post">
<input type="text" name="name"/>
<input type="submit" name="submit"/>
</form>
<?php
if (isset($_POST['submit']))
{
$x = $_POST['name'];
echo $x;
}

?>