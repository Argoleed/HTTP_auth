<html>
  <head>
    <meta charset="utf-8">
  </head>

  <body>
    <form action="" method="get" name="login">
      <fieldset><table>
        <legend>Log in</legend>

              <tr>
                  <td colspan="2"><p align="center">
                      <?php
                        if(isset($_GET['password']) && isset($_GET['login'])){
                            require_once "users/authorization.php";
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
            <p align = "left">Password:</p>
          </th> 
          <th>
            <input type="password" name="password">
          </th>
        </label></tr>

        <tr>
          <th>
            <p align = "center"><input type="submit" value="Sign in"></p>
          </th>
            <th>
                <p align = "center"> <a href="password_recovery.php">Forgot password</p>
            </th>
        </tr>
        
      </table></fieldset>
    </form>

    
  </body>

</html>