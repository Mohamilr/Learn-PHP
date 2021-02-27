
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
    </style>
</head>
<body>
<div style="margin: 2em">
    <form action="formHandling.php" method="post">
   <div style="display: flex; flex-direction: column;"> 
    <input type="text" placeholder="first name" name="firstname" required class="field" />
    <input type="text" placeholder="last name" name="lastname" required class="field" />
    <input type="email" placeholder="email" name="email" required class="field" />
    <input type="username" placeholder="user name" name="username" required class="field" />
    <input type="submit" value="Submit" class="field submit">
    </div>
    
    </form>
    
    <?php
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['username'])) {
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $userName = $_POST['username'];


            echo "<b>First Name:</b> $firstName". "<br>";
            echo "<b>Last Name:</b> $lastName". "<br>";
            echo "<b>Email:</b> $email". "<br>";
            echo "<b>User Name:</b> $userName". "<br>";
        }
    ?>
    </div>
    
</body>
</html>

