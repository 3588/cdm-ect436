<!--
Name:  Junjun Huang
URL: http://ectweb.cs.depaul.edu/jhuang50/ect436/hw2.php
Assignment #2:
Develop a PHP page that uses at least two of the following control structures: if-else, switch, for loop, and while loop.
-->
<!-- file: hw1.php -->

<html>
<head>
    <title>Assignment # 1 – File # 1</title>
</head>
<body>
<?php
if(isset($_POST['name'])) {
    echo "Hello " . $_POST['name']. "<br> You are ";
    switch ($_POST['sex']) {
        case 'Male':
            echo "Male :)";
            break;
        case 'Female':
            echo "Female :):)";
            break;
        case 'Secret':
            echo "Un......-_-";
            break;
    }
    echo "<br> you love it that much :" ;
    for ($i = 1; $i <= $_POST['love']; $i++) {
        echo "<img src=\"hw2.jpg\" width=\"50\">";
    }
    echo "<br/><a href=\"hw2.php\">try again</a>";
}
else{
?>
<form action="" method="post">
    Name: <input type="text" name="name" />
    <!--for switch-->
    <br />
    Male:
    <input type="radio" name="sex" value="Male" checked="checked">
    <br />
    Female:
    <input type="radio" name="sex" value="Female">
    <br />
    Secret:
    <input type="radio" name="sex" value="Secret">
    <br />
    <!--for loop-->
    How many you love it
    <select name="love">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br />
    <input type="submit" value="Submit" />
    <input type="reset" value="Reset" />
</form>
<?php } ?>
</body>
</html>
