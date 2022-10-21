<html>
  <head>
    <meta charset="utf-8">
  </head>

  <body>
    <form action="" method="get" name="registration">
      <fieldset><table>
        <legend>Registration</legend>

              <tr>
                  <td colspan="2"><p align="center">
                      <?php
                        if(isset($_GET['login']) && isset($_GET['password']) && isset($_GET['rep_password']) && isset($_GET['mail'])){
                            require_once "users/create_user.php";
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
            <p align = "center"><input type="submit" value="Log up"></p>
          </th>
          <th> 
            <p align = "right"><input type="button" onclick="window.location.href = 'login.php';" value="Log in"></p>
          </th>
        </tr>
        
      </table></fieldset>
    </form>


  </body>

</html>