
<?php
include('includes/functions.php');
include('includes/connect.php');

    if( isset())
    $query = 'SELECT *
              FROM users
              WHERE email = "' . $_POST['email'] . '"
              AND password = "' .md5($_POST['password']) . '"
              LIMIT 1';
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result)){
        $record = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $record['id'];
        header('Location: admin/index.php');
        die();
    }else{
        set_message('Incorrect username/password');
        header('Location: index.php');
        die();
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
            <h1 class="display-5 mt-4 mb-4">Login</h1>
        </div>
    </div>
</div>
<form>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</form>
</div>
</div>
</div>
</body>
</html>