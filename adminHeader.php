<?php
$_SESSION['admin'] = 'valid';
$userid = $_SESSION['admin'];

$sql = "SELECT * FROM a1_users WHERE ID = " .(int) $userid;
$result = mysqli_query($dbConn, $sql);

$row = mysqli_fetch_assoc($result);

$a = $b = $c = $d = $e = " ";

switch (basename($_SERVER['SCRIPT_NAME'])) {
    case 'admin.php' :
        $a = " class='active' ";
        break;
    case "addq.php":
        $c = " class='active' ";
        break;
    case "viewResult.php":
        $d = " class='active' ";
        break;
    case "addStudent.php":
        $e = " class='active' ";
        break;
} 

?>

<div class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">QUIZ</a>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav">
                        <li <?php echo $a;?>><a href="admin.php">Home</a></li>
                        <li <?php echo $c;?>><a href="addq.php">Add Question</a></li>
                        <li <?php echo $d;?>><a href="viewResult.php">View Results</a></li>
                        <li <?php echo $e;?>><a href="addStudent.php">Add Student</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="profile.php"><?php echo "Welcome " .$row['name'];?></a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>