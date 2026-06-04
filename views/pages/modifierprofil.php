<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier - profil</title>
</head>
<?php

session_start();
$firstname   = $_SESSION['first_name'];
$lastname    = $_SESSION['last_name'];
$number      = $_SESSION['number'];
$email       = $_SESSION['email'];
$password    = $_SESSION['password'];

?>

<body>
    <form action="../../controllers/modifierprofil-controller.php" method="POST" class="forms">
            <h1>modifier</h1>
                <label for="firstname">firstname</label>
                <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" required>
        
                <label for="lastname">lastname</label>
                <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" required>
         
                <label for="number">number</label>
                <input type="text" id="number" name="number" value="<?php echo htmlspecialchars($number); ?>" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
           
                <label for="password">password</label>
                <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" required>

            
            <input type="submit" value="enregistrer">
        </form>
     
</body>
</html>


