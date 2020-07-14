<?php require_once('connect.php'); ?>
<?php 
    echo "<table border="1" width="80%">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>E-mail</th>
        <th>Edit/Delete</th>
    </tr>";
    
    if(isset($_GET['s'])){
        $sqlSelect = "Select * from ListView where " . $_GET['c'] . " Like '%" . $_GET['s'] . "%'";
        $result = $conn->query($sqlSelect);
        if(!$result){
            echo "錯誤：" . $conn->mysqli_error();
            exit;
        }
        if($result->num_rows <= 0){
            echo "<tr><td>查無資料</td></tr>"
        }else{
            while($row = $result->fetch_assoc()){
                echo "<tr>
                            <td>"; 
                            $id=str_pad($row["Id"],3,"0",STR_PAD_LEFT);
                            echo $id;
                            echo "</td>
                            <td>" . $row["Name"] . "</td>";
                            <td> <?php echo $row["Gender"]; ?></td>
                            <td> <?php echo $row["Phone"]; ?></td>
                            <td> <?php echo $row["Birthday"]; ?></td>
                            <td> <?php echo $row["Address"]; ?></td>
                            <td> <?php echo $row["Email"]; ?></td>
                            <td>
                                <form action="Edit.php" method="POST" style="margin:0px; display:inline">
                                    <input type="hidden" name="Id" value="<?php echo $row["Id"]; ?>" />
                                    <input type="submit" value="Edit" />
                                </form>
                                <form action="Delete.php" method="POST" style="margin:0px; display:inline">
                                    <input type="hidden" name="Id" value="<?php echo $row["Id"]; ?>" />
                                    <input type="submit" value="Delete" />
                                </form>
                            </td>
                        </tr>
            }
        }
    }

?>