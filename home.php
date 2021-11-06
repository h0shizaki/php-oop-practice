<?php
require('userValidation.php');

    if(isset($_POST['submit'])){
        $validation = new UserValidation($_POST);
        $errors = $validation->validateForm();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" style='margin:5em;text-align:center;'>
        <h2>Create User</h2>
            <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
                <label>Username</label>
                <input type= 'text' name = 'username' value="<?php echo htmlspecialchars($_POST['username'] ?? '')?>">
                <div><?php echo $errors['username'] ?? '' ;?></div>
                <br> <br>
                <label>Email</label>
                <input type= 'text' name = 'email'  value="<?php echo htmlspecialchars($_POST['email'] ?? '')?>" >
                <div><?php echo $errors['email'] ?? '' ;?></div>

                <br><br><input type='submit' value="submit" name='submit'>
            </form>
    </div>

    <div style="text-align:center; margin:5em;">
        <?php
        echo $_POST['username']. '<br>' ?? '' ;
        echo $_POST['email']. '<br>' ?? '' ;

        ?>
    </div>

</body>
</html>