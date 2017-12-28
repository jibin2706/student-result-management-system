<?php
    include("init.php");
    $db = mysqli_select_db($conn,'srms');

    $class=$_GET['class'];
    $rn=$_GET['rn'];
    $name_sql=mysqli_query($conn,"SELECT `name` FROM `students` WHERE `rno`='$rn' and `class_name`='$class'");
    while($row = mysqli_fetch_assoc($name_sql))
    {
      $name = $row['name'];
    }

    $result_sql=mysqli_query($conn,"SELECT `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage` FROM `result` WHERE `rno`='$rn' and `class`='$class'");
    while($row = mysqli_fetch_assoc($result_sql))
    {
        $p1 = $row['p1'];
        $p2 = $row['p2'];
        $p3 = $row['p3'];
        $p4 = $row['p4'];
        $p5 = $row['p5'];
        $mark = $row['marks'];
        $percentage = $row['percentage'];
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/student.css">
    <title>Result</title>
</head>
<body>
    <div class="details">
        <span>Name:</span> <?php echo $name ?> <br>
        <span>Class:</span> <?php echo $class; ?> <br>
        <span>Roll No:</span> <?php echo $rn; ?> <br>
    </div>

    <div class="main">
        <div class="s1">
            <p>Subjects</p>
            <p>Paper 1</p>
            <p>Paper 2</p>
            <p>Paper 3</p>
            <p>Paper 4</p>
            <p>Paper 5</p>
        </div>
        <div class="s2">
            <p>Marks</p>
            <?php echo '<p>'.$p1.'</p>';?>
            <?php echo '<p>'.$p2.'</p>';?>
            <?php echo '<p>'.$p3.'</p>';?>
            <?php echo '<p>'.$p4.'</p>';?>
            <?php echo '<p>'.$p5.'</p>';?>
        </div>
    </div>

    <div class="button">
        <button onclick="window.print()">Print Result</button>
    </div>
</body>
</html>