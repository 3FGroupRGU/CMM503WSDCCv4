<!doctype html>
<body>
<div id="content">
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
</div>
</body>

</html>
/**
 * Created by PhpStorm.
 * User: 1300427
 * Date: 16/03/2016
 * Time: 15:37
 */