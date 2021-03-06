
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <style>
    .field {
        margin-bottom: 20px;
         border: 1px solid blue;
          outline: none; 
          border-radius: 5px;
          padding: 5px;
    }

    .submit {
           color: #ffffff; 
           background-color: blue;
    }


    nav ul {
        display: flex;
        justify-content: flex-end;
    }

    nav ul a > li {
        list-style-type: none;
        padding: 3px;
    }
    </style>
</head>
<body>
<nav>
<ul>
<a href="./signup.php"><li>Sign up</li></a>
<a href="./login.php"><li>Login</li></a>
</ul>
</nav>
<div style="margin: 0 auto; width: 50%">
    <form action="login.php" method="post">
   <div style="display: flex; flex-direction: column; margin: 3em"> 
   <input type="email" placeholder="email" name="email" required class="field" />
    <input type="password" placeholder="********" name="password" required class="field" />
    <input type="submit" value="Submit" class="field submit">
    </div>
    <p style="text-align: center">You haven't signed up? please <a href='./signup.php'>sign up</a></p>
    </form>
    
    <?php
    session_start();
        if(isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // session storage
            $userData = $_SESSION['user-data'];
            if($userData['email'] === $email && $userData['password'] === $password) {
                echo '<b>Login successful</b>';
            }
            else {
                echo '<b>Your credentials are not recorded, kindly sign up</b>';
            }
            

            
        }
    ?>
    </div>
    
</body>
</html>

