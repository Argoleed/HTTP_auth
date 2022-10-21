<?php
    $user = $_GET['user'];
    if (!isset($_COOKIE[$user.'_token'])){
        header("location: login.php");
    }
    if (!isset($_COOKIE[$user.'_password_refresh'])){
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
                                    if (isset($_GET['password']) && isset($_GET['rep_password'])) {
                                        require_once "users/password_change.php";
                                    }
                                ?>
                        </p></td>
                    </tr>

                    <input type="hidden" value="<?php echo $user?>" name = "user">
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

<?php
    }
    else{
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
    <p align = "right">
        <input type="button" onclick="window.location.href = 'login.php'" value="Exit">
        <input type="button" onclick="window.location.href = 'profile_password_reset.php?user=<?php echo $user?>'" value="Change password">
    </p>
    <h2 align="center"><?php echo "Hello, $user!"?></h2>
    </body>


</html>

<?php
    }
?>
