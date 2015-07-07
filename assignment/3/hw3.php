<?php
error_reporting (E_ALL & ~E_NOTICE);
class Access
{
    var $conn;
    function Access()
    {
        $dsn="DRIVER=Microsoft Access Driver (*.mdb);DBQ=".realpath("hw3.mdb");
        $this->conn=odbc_connect($dsn,"","",SQL_CUR_USE_ODBC );
    }
    function query($sql)
    {
        return odbc_exec($this->conn,$sql);

    }
    function num_fields($query)
    {
        return odbc_num_fields($query);
    }
    function fetch_row($query)
    {
        return odbc_fetch_row($query);
    }
    function result($query,$field)
    {
        return odbc_result($query,$field);
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="hw3.php" method="post">
    Last Name<input type="text" name="l_name"><br/>
    Frist Name<input type="text" name="f_name"><br/>
    <button type="submit" name="submit">Search</button> | <a href="?view">View All</a>
    <?php
    if(isset($_GET["view"])){
        echo "<hr>";
        $sql="select * from meetings";
        $access = new Access();
        $query=$access->query($sql);
        while($access->fetch_row($query))
        {
            for($i=2;$i<=$access->num_fields($query);$i++)
                echo $access->result($query,$i)."  ";
            echo "<hr>";
        }
    }
    if(isset($_POST["submit"])&&!isset($_GET["view"])){
        $l_name=strtoupper($_POST["l_name"]);
        $f_name=strtoupper($_POST["f_name"]);
        $sql="select * from meetings where [l_name] = '$l_name' or [f_name] = '$f_name'";
		$access = new Access();
		
        $query=$access->query($sql);
			
			echo "<hr>";
		while($access->fetch_row($query))
        {
            for($i=2;$i<=$access->num_fields($query);$i++)
                echo $access->result($query,$i)."  ";
            echo "<hr>";
        }	
    }
    ?>
</form>
</body>
</html>