<?php require_once('connect.php'); ?>
<?php 
$sqlSelect = "select * from ListView where Id='" . $_POST["Id"] . "'";
$result = $conn->query($sqlSelect);
if(isset($result->num_rows)){
    $row = $result->fetch_assoc();
}
$id=str_pad($row["Id"],3,"0",STR_PAD_LEFT);
?>
<html>
    <head>
        <title>Add Page</title>
    </head>

    <body>
        <form action="Update.php" method="POST">
            <table>
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
                            <input  type="radio" name="sex" value="Male" checked>Male
                            <input  type="radio" name="sex" value="Female">Female
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
        
        <input type="submit" value="Edit Record" />
        </form>

        <input type ="button" onclick="javascript:location.href='index.php'" value="Home"></input> 
    </body>

</html>

<?php 

?>