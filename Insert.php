<?php require_once('connect.php'); ?>
<?php 
$boo = true;
//檢查電話、生日日期、email格式是否正確
if(preg_match("/^[0-9]{4}-[0-9]{6}$/", $_POST["Phone"]) && preg_match("/^[0-9]{4}-(0([1-9]{1})|(1[0-2]))-(([0-2]([0-9]{1}))|(3[0|1]))$/", $_POST["Birthday"]) && preg_match('/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/', $_POST["Email"])){
    $name = addslashes($_POST["Name"]);
    $sex = $_POST["sex"];
    $phone = $_POST["Phone"];
    $birthday = $_POST["Birthday"];
    $address = addslashes($_POST["Address"]); //解決單引號會讓資料庫語法失敗 在特殊字元後自動增加反斜線
    $email = addslashes($_POST["Email"]);
    $sqlInsert = "Insert into ListView (Name, Gender, Phone, Birthday, Address, Email) values ('$name', '$sex', '$phone', '$birthday', '$address', '$email')";
    $conn->query($sqlInsert);
    echo "資料新增成功";
    //echo "<input type ="button" onclick="javascript:location.href='index.php'" value="Home"></input>"
}else{
    echo "資料格式錯誤";
    $boo = false;
    //echo "<input type ="button" onclick="javascript:location.href='AddRecord.php'" value="Add Record"></input>"
}
?>
<html>
<head>
    <title>Insert Page</title>
</head>

<body>
    <?php 
        if($boo){
    ?>
        <input type ="button" onclick="javascript:location.href='index.php'" value="Home"></input>
     <?php }else{ ?>
        <input type ="button" onclick="javascript:location.href='AddRecord.php'" value="Add Record">

        <?php } ?>
</body>

</html>

