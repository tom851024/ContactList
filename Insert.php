<?php require_once('connect.php'); ?>
<?php 
$boo = true;
if(preg_match("/^[0-9]{4}-[0-9]{6}$/", $_POST["Phone"]) && preg_match("/^[0-9]{4}-(0([1-9]{1})|(1[1|2]))-(([0-2]([0-9]{1}))|(3[0|1]))$/", $_POST["Birthday"]) && preg_match('/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/', $_POST["Email"])){
    $name = $_POST["Name"];
    $sex = $_POST["sex"];
    $phone = $_POST["Phone"];
    $birthday = $_POST["Birthday"];
    $address = $_POST["Address"];
    $email = $_POST["Email"];
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

