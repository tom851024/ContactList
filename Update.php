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
    $id = $_POST["Id"];

    $sqlUpdate = "Update ListView set Name='$name', Gender='$sex', Phone='$phone', Birthday='$birthday', Address='$address', Email='$email' where id='$id'";
    $conn->query($sqlUpdate);
    echo "資料更新成功";
}else{
    echo "資料格式錯誤";
    $boo=false;
}
?>


<html>
<head>
    <title>Update Page</title>
</head>

<body>
    <?php 
        if($boo){
    ?>
        <input type ="button" onclick="javascript:location.href='index.php'" value="Home"></input>
     <?php }else{ ?>
            <form action="Edit.php" method="POST" style="margin:0px; display:inline">
                    <input type="hidden" name="Id" value="<?php echo $_POST["Id"]; ?>" />
                    <input type="submit" value="Edit Record" />
            </form>

        <?php } ?>
</body>

</html>