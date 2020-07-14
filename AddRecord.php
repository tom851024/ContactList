<html>
    <head>
        <title>Add Page</title>
    </head>
<!-- 新增資料頁面 -->
    <body>
    <h1 style="text-align:center;">Contact List</h1><br />
    <h3 style="text-align:center;">Add Record</h3>
    <hr size="2px" align="center" width="100%">
        <form action="Insert.php" method="POST" style="text-align:center;">
            <table border="1" align="center">
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
            <hr size="2px" align="center" width="100%">
        <input type="submit" value="Add Record" />
        </form>

        <p style="text-align:center;">
        <input style="text-align:center;" type ="button" onclick="javascript:location.href='index.php'" value="Home"></input> 
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
