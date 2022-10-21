<html>
<head>
    <meta charset="utf-8">
</head>

<body>
<form action="" method="get" name="Password recovery">
    <fieldset><table>
            <legend>Password recovery</legend>

            <tr>
                <td colspan="2"><p align="center">
                        <?php
                        if(isset($_GET['login']) && isset($_GET['mail'])){
                            require_once "users/send_mail.php";
                        }
                        ?>
                    </p></td>
            </tr>

            <tr><label>
                    <th>
                        <p align = "left">Login:</p>
                    </th>
                    <th>
                        <input type="text" name="login">
                    </th>
                </label></tr>

            <tr><label>
                    <th>
                        <p align = "left">E-mail:</p>
                    </th>
                    <th>
                        <input type="email" name="mail">
                    </th>
                </label></tr>

            <tr>
                <th></th>
                <th>
                    <p align = "center"><input type="submit" value="Send"></p>
                </th>
            </tr>

        </table></fieldset>
</form>

</body>

</html>
