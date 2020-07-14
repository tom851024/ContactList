<?php require_once('connect.php'); ?>
<?php 
if(isset($_POST["Id"])){
    $sqlSelect = "select * from ListView where Id='" . $_POST["Id"] . "'";
}
if(isset($_GET["Id"])){
    $sqlSelect = "select * from ListView where Id='" . $_GET["Id"] . "'";
}

$result = $conn->query($sqlSelect);
if(isset($result->num_rows)){
    $row = $result->fetch_assoc();
}
$id=str_pad($row["Id"],3,"0",STR_PAD_LEFT);
?>
<html>
<!-- 編輯資料頁面-->
    <head>
        <title>Edit Page</title>
    </head>

    <body>
    <h1 style="text-align:center;">Contact List</h1><br />
    <h3 style="text-align:center;">Edit Record</h3>
    <hr size="2px" align="center" width="100%">
        <form action="Update.php" method="POST" style="text-align:center;">
            <table border="1" align="center">
                <tr>
                    <td>Id</td>
                    <td><input type="text" disabled="disabled" maxLength="15" value="<?php echo $id ?>" /></td>
                    <input type="hidden" name="Id" value="<?php echo $row["Id"]; ?>" />
                </tr>

                <tr>
                    <td>Name</td>
                    <td><input type="text" name="Name" required="required" maxLength="15" value="<?php echo $row["Name"] ?>" /></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>
                        <?php if($row["Gender"] == "Male"){ ?>
                            <input type="radio" name="sex" value="Male" checked>Male
                            <input type="radio" name="sex" value="Female">Female
                        <?php } ?>

                        <?php if($row["Gender"] == "Female"){ ?>
                            <input  type="radio" name="sex" value="Male">Male
                            <input  type="radio" name="sex" value="Female" checked>Female
                        <?php } ?>
                        
                    </td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="Phone" required="required" maxLength="11" value="<?php echo $row["Phone"] ?>" /></td>
                </tr>

                <tr>
                    <td>Birthday</td>
                    <td><input type="text" name="Birthday" required="required" maxLength="10" value="<?php echo $row["Birthday"] ?>" /></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><input type="text" name="Address" required="required" maxLength="45" value="<?php echo $row["Address"] ?>" /></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="text" name="Email" required="required" maxLength="25" value="<?php echo $row["Email"] ?>" /></td>
                </tr>
            </table>
            <hr size="2px" align="center" width="100%">
        
        <input type="submit" value="Edit Record" />
        </form>
        
        <p style="text-align:center;">
        <input type ="button" onclick="javascript:location.href='index.php'" value="Home"></input> 
        </p>
    </body>

    <script>
        var getUrlString = location.href; //取得get參數
        var url = new URL(getUrlString);
        var phone = url.searchParams.get('phone');
        var birthday = url.searchParams.get('birthday');
        var email = url.searchParams.get('email');
        if(phone == '1'){
            alert('電話格式輸入錯誤');
        }else if(birthday == '1'){
            alert('生日格式輸入錯誤');
        }else if(email == '1'){
            alert('電子郵件格式輸入錯誤');
        }
    </script>

</html>

<?php 

?>