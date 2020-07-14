<html>
    <head>
        <title>Index Page</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>

    <body>
    <?php require_once('connect.php'); ?>
    <?php 
        if(isset($_POST["col"]) && isset($_POST["search"])){
            $sqlSelect = "select * from ListView where " . $_POST["col"] . " Like '%" . $_POST["search"] . "%'";
            $result = $conn->query($sqlSelect);
        }else{
            $sqlSelect = "select * from ListView";
            $result = $conn->query($sqlSelect);
        }    
    ?>
        <p >         
            <form action="index.php" method="POST" style="text-align:center;">
            Search:
                <select name="col" id="col">
                    <option value="Name">Name</option>
                    <option value="Gender">Gender</option>
                    <option value="Phone">Phone</option>
                    <option value="Birthday">Birthday</option>
                    <option value="Address">Address</option>
                    <option value="Email">Email</option>
                </select>
                <input name="search" id="search" type="text" required="required" maxLength="50" />
                <input type="submit" value="Search" />
            </form>
            </p>
            
            <table border="1" width="80%">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Birthday</th>
                    <th>Address</th>
                    <th>E-mail</th>
                    <th>Edit/Delete</th>
                </tr>
                <?php 
                     if(isset($result->num_rows)){
                        while($row = $result->fetch_assoc()){
                ?>
                        <tr>
                            <td> <?php 
                            $id=str_pad($row["Id"],3,"0",STR_PAD_LEFT);
                            echo $id;
                            ?></td>
                            <td> <?php echo $row["Name"]; ?></td>
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

                        <?php }} ?>
            </table>
            
            <p style="text-align:center;">
                <input type ="button" onclick="javascript:location.href='AddRecord.php'" value="Add Record"></input>
                <?php if(isset($_POST["col"]) && isset($_POST["search"])){ ?>
                    <input type ="button" onclick="javascript:location.href='index.php'" value="Home"></input>
                <?php } ?>
            </p>
        
    </body>

   

</html>


<?php 


?>