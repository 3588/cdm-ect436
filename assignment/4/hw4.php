<html>
<head>
    <title>Assignment # 4 – File # 1</title>
</head>
<body>
<?php
if(isset($_GET['act'])){
    if($_GET['act']==1){
        echo "ECT424 Meeting time: M 5:45PM - 9:00PM";
        echo "<br>";

    }
    elseif($_GET['act']==2){
        echo "ECT436 Meeting time: TH 5:45PM - 9:00PM";
        echo "<br>";
    }
    elseif($_GET['act']==3){
        echo "ECT589 Meeting time: M 2:45PM - 5:00PM";
        echo "<br>";
    }}?>

        <a href="hw4.php?act=1">ect424</a><br>
        <a href="hw4.php?act=2">ect436</a><br>
        <a href="hw4.php?act=3">ect589</a><br>
<a href="hw4.php">Index</a><br>
</body>
</html>
