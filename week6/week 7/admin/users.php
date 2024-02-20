<?php
include('includes/functions.php');
include('includes/connect.php');

    if( isset ($_POST['addUser'])){
        $query = 'INSERT INTO users (name, email, `password`) 
        VALUES(
            "' . mysqli_real_escape_string($connect, $_POST['name']) . '",
            "' . mysqli_real_escape_string($connect, $_POST['email']) . '",
            "' . md5($_POST['password']) . '"
        )';

        mysqli_query($connect, $query);
        set_message('User has been created');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<?php include("reusables/nav.php") ?>
<div class="container">
        <div class="row">
            <div class="col">
                <?php echo get_message(); ?>
            </div>
        </div>
            <h1 class="display-5 mt-4 mb-4">Manage Users</h1>
        </div>
    </div>
</div>
<div class = "row">
  <div class = "col">

<form action="" method="POST">
  <div class="mb-3">
    <label for="name" class="from-label">Name</label>
    <input type="text" class="form-content" id="name" name="name" aria-describedby="Name">
  </div>
  
  <div class="mb-3">
    <label for="email" class="from-label">Email</label>
    <input type="text" class="form-content" id="email" name="email" aria-describedby="Email">
  </div>

  <div class="mb-3">
    <label for="Password" class="from-label">Password</label>
    <input type="password" class="form-content" id="password" name="password" aria-describedby="Password">
  </div>

  <button type="submit" class="btn btn-primary" name="addUser" >Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>