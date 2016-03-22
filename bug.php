<?php
include("connect.php");
$sql="SELECT * FROM bugs WHERE bugs.ID=".$_GET["id"];
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
$bugTitle=$row['title'];
$bugID=$row['ID'];
$bugDesc=$row['desc'];

echo"<h2>".$bugTitle."</h2>";
echo"<p>".$bugDesc."</p>";

$sql="SELECT * FROM comments WHERE bugID=".$_GET["id"];
$result=mysqli_query($db,$sql);
while ($row=mysqli_fetch_assoc($result)){
    $commentTitle=$row['title'];
    $commetn=$row['comment'];

    echo'<h3>'.$title.'</h3>';
    echo'<p>'.$comment.'</p>';
}
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Ginger Bugginess</title>
    <link rel="stylesheet" href="layout.css" type="text/css" />
    <link rel="stylesheet" href="menu.css" type="text/css" />
</head>
<body>
<div id="content">
    <form class="bugInfo">
   <label>Bug Title:</label>
    <input type="text" name="BugTitle" placeholder="Bug Title"><br>
    <label>Bug Description</label>
    <input type="text" name="BugDesc" placeholder="Bug Description"><br>
        <label>User ID</label>
        <input type="text" name="$userID" placeholder="User ID"><br>
        <label>Date Bug Raised</label>
        <input type="date" name="date" placeholder="Date Of Bug"><br>
        <label>Date Bug Fixed</label>
        <input type="date" name="date" placeholder="Date Fixed"><br>
        <?php
            if (isset($_POST['SUBMIT1'])) {

            }
        if (isset($ch1=='Fixed')) {
            $ch1='checked';
        }
        ?>
        <input type="Checkbox" name="ch1" value="Fixed">
        <?php
            print $ch1;
        ?>
    </form>
</div>
</body>

</html>
