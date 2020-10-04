<?php
    include("../connect.php");
    if(isset($_GET["idTL"])){
        $key = $_GET["idTL"];
    }
    $sl = "delete from where idTL=".$_GET["idTL"];
    // if(mysql_query($sl)\
    if(mysqli_query($connect,$sl)){
        echo "<scrip language='javascript'>alert('Xóa Thành Công');";
        echo "location.href='theloai.php';</scrip>";
    }
?>
