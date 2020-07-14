<html>
    <head>
        <title>Add Page</title>
    </head>
<!-- 新增資料頁面 -->
    <body>
        <form action="Insert.php" method="POST">
            <table border="1">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="Name" required="required" maxLength="15" /></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td><input  type="radio" name="sex" value="Male" checked>Male
                        <input  type="radio" name="sex" value="Female">Female</td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="Phone" required="required" maxLength="11" /></td>
                </tr>

                <tr>
                    <td>Birthday</td>
                    <td><input type="text" name="Birthday" required="required" maxLength="10" /></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><input type="text" name="Address" required="required" maxLength="45" /></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="text" name="Email" required="required" maxLength="25" /></td>
                </tr>
            </table>
        
        <input type="submit" value="Add Record" />
        </form>
        <input type ="button" onclick="javascript:location.href='index.php'" value="Home"></input> 
    </body>

</html>
