<?php require_once('connect.php'); ?>
<?php 
//刪除通訊錄資料
    if(preg_match("/^[0-9]+$/", $_POST["Id"])){
        $sqlDelete = "Delete from ListView where Id='" . $_POST["Id"] . "'";
        $conn->query($sqlDelete);
        //echo "資料已刪除";
        header('Location: index.php'); 
    }else{
        echo "<script>alert('資料輸入有誤 刪除失敗')</script>";
        header('Location: index.php'); 
    }
    
?>

<html>
<head>
    <title>Delete Page</title>
</head>

<body>
</body>

</html>