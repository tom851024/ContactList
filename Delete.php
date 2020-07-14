<?php require_once('connect.php'); ?>
<?php 
    $sqlDelete = "Delete from ListView where Id='" . $_POST["Id"] . "'";
    $conn->query($sqlDelete);
    echo "資料已刪除";

?>

<html>
<head>
    <title>Delete Page</title>
</head>

<body>
        <input type ="button" onclick="javascript:location.href='index.php'" value="Home"></input>   
</body>

</html>