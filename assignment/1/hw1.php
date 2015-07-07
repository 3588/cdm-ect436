<!--
Name:  Junjun Huang
URL: http://ectweb.cs.depaul.edu/jhuang50/ect436/hw1.php
Assignment #1:
Assignment requirement description goes here.
-->
<!-- file: hw1.php -->

<html>
<head>
    <title>Assignment # 1 – File # 1</title>
</head>
<body>
<?php
if(isset($_POST['name']))
echo "Hello ".$_POST['name']."<br/><a href=\"hw1.php\">try again</a>";
else{
?>
<form action="" method="post">
    <p>name: <input type="text" name="name" /></p>
    <input type="submit" value="Submit" />
    <input type="reset" value="Reset" />
</form>
<?php } ?>
</body>
</html>
