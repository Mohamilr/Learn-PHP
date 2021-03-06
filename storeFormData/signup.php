
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
    <form action="signup.php" method="post">
   <div style="display: flex; flex-direction: column; margin: 3em"> 
    <input type="text" placeholder="first name" name="firstname" required class="field" />
    <input type="text" placeholder="last name" name="lastname" required class="field" />
    <input type="email" placeholder="email" name="email" required class="field" />
    <input type="password" placeholder="********" name="password" required class="field" />
    <input type="submit" value="Submit" class="field submit">


    </div>
    <p style="text-align: center">You already signed up? please <a href='./login.php'>login</a></p>

    </form>
    
    <?php
    session_start();

        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])) {
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $crendentials = array("firstname" => $firstName,"lastname" =>  $lastName,"email" => $email, "password" => $password);

            
           $_SESSION['user-data'] = $crendentials;
           $_SESSION['in'] = true;


           $userData = $_SESSION['user-data'];

           $accessGranted = $_SESSION['in'];
           if($accessGranted) {
            echo '<b>Sign up successful.</b>';
        }

        }
    ?>
    </div>
    
</body>
</html>

