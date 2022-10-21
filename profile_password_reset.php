<?php
$user = $_GET['user'];
if (!isset($_COOKIE[$user.'_token'])){
    header("location: login.php");
}
?>

<html>
<head>
    <meta charset="utf-8">
</head>

<body>
<form action="" method="get" name="change_password">
    <fieldset><table>
            <legend>Change password</legend>

            <tr>
                <td colspan="2"><p align="center">
                        <?php
                        if (isset($_GET['password']) && isset($_GET['rep_password']) && isset($_GET['old_password'])) {
                            require_once "users/password_change.php";
                        }
                        ?>
                    </p></td>
            </tr>

            <input type="hidden" value="<?php echo $user?>" name = "user">

            <tr><label>
                    <th>
                        <p align = "left">Old password:</p>
                    </th>
                    <th>
                        <input type="password" name="old_password">
                    </th>
                </label></tr>

            <tr><label>
                    <th>
                        <p align = "left">Password:</p>
                    </th>
                    <th>
                        <input type="password" name="password">
                    </th>
                </label></tr>

            <tr><label>
                    <th>
                        <p align = "left">Repeat password:</p>
                    </th>
                    <th>
                        <input type="password" name="rep_password">
                    </th>
                </label></tr>

            <tr>
                <th>
                    <p align = "center"><input type="submit" value="Change"></p>
                </th>
            </tr>

        </table></fieldset>
</form>
</body>
</html>

