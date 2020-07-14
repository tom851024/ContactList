<?php require_once('connect.php'); ?>

<?php
$boo = false;
//檢查電話、生日日期、email格式是否正確
if(preg_match("/^[0-9]{4}-[0-9]{6}$/", $_POST["Phone"])){
    if(preg_match("/^[0-9]{4}-(0([1-9]{1})|(1[0-2]))-(([0-2]([0-9]{1}))|(3[0|1]))$/", $_POST["Birthday"])){
        if(preg_match('/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/', $_POST["Email"])){
            $name = addslashes($_POST["Name"]);
            $sex = $_POST["sex"];
            $phone = $_POST["Phone"];
            $birthday = $_POST["Birthday"];
            $address = addslashes($_POST["Address"]); //解決單引號會讓資料庫語法失敗 在特殊字元後自動增加反斜線
            $email = addslashes($_POST["Email"]);
            $id = $_POST["Id"];

            $sqlUpdate = "Update ListView set Name='$name', Gender='$sex', Phone='$phone', Birthday='$birthday', Address='$address', Email='$email' where id='$id'";
            $conn->query($sqlUpdate);
            $boo = true;
            //echo "資料更新成功";
        }else{
            header('Location: Edit.php?email=1&Id='.$_POST["Id"]);
        }
    }else{
        header('Location: Edit.php?birthday=1&Id='.$_POST["Id"]);
    }
    
}else{
    //echo "資料格式錯誤";
    header('Location: Edit.php?phone=1&Id='.$_POST["Id"]);
    //$boo=false;
}
?>


<html>
<head>
    <title>Update Page</title>
</head>

<body>
    <?php 
        if($boo){
            header('Location: index.php'); 
    ?>
     <?php }else{ ?>
            <form action="Edit.php" method="POST" style="margin:0px; display:inline">
                    <input type="hidden" name="Id" value="<?php echo $_POST["Id"]; ?>" />
                    <input type="submit" value="Edit Record" />
            </form>

        <?php } ?>
</body>

</html>