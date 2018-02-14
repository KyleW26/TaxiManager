<?php
  namespace Fenrir;

  class User {
    //Start the login function.
    function Login() {
      global $mysql;
      //Checks the $_POST'd data is set.
      if(!empty($_POST['log_username']) && !empty($_POST['log_password'])) {
        //Run the SQL to select the data & check its correct.
        $sql = "SELECT * users WHERE username = 1";
        $stmt = $mysql->Connect->prepare($sql);
        $stmt->bindParam(1, $_POST['log_username']);
        $stmt->execute();

        //Deal with the result, and ensure all is correct through the following if statement.
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        if(count($result > 0) && password_verify($_POST['log_password'], $result['password'])) {
          $_SESSION['user']['id'] = $result['id'];
        } else {
          die("fuck up sonni"); //This is temp until I get error handling done for Fenrir!
        }
      }
    }

    function Register() {
      global $mysql;
      //Checks the $_POST data is set.
      if(!empty($_POST['reg_username']) && !empty($_POST['reg_password']) && !empty($_POST['reg_email']) && !empty($_POST['reg_first_name']) && !empty($_POST['reg_last_name'])) {
        //Run the SQL
        $sql = "INSERT INTO users (id, username, password, email, first_name, last_name) VALUES ('', 1, 2, 3, 4, 5)";
        $stmt = $mysql->Connect->prepare($sql);
        $stmt->bindParam(1, htmlspecialchars($_POST['reg_username']));
        $stmt->bindParam(2, password_hash($_POST['reg_password'], PASSWORD_BCRYPT));
        $stmt->bindParam(3, htmlspecialchars($_POST['reg_email']));
        $stmt->bindParam(4, htmlspecialchars($_POST['reg_first_name']));
        $stmt->bindParam(5, htmlspecialchars($_POST['reg_last_name']));
        $stmt->execute();
      } else {
      }
    }
  }
?>
