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
<div class="container">
        <div class="row">
            <div class="col">
            <h1 class="display-5 mt-4 mb-4">Add Grades</h1>
        </div>
    </div>
</div>
<div class = "row">
  <div class = "col">

<form action="includes/addGrades.php" method="POST">
  <div class="mb-3">
    <label for="fname" class="from-label">First Name</label>
    <input type="text" class="form-content" id="fname" name="fname" aria-describedby="First Name">
  </div>
  
  <div class="mb-3">
    <label for="lname" class="from-label">Last Name</label>
    <input type="text" class="form-content" id="lname" name="lname" aria-describedby="Last Name">
  </div>

  <div class="mb-3">
    <label for="marks" class="from-label">Marks</label>
    <input type="text" class="form-content" id="marks" name="marks" aria-describedby="Marks">
  </div>

  <div class="mb-3">
    <label for="imageURL" class="from-label">imageURL</label>
    <input type="text" class="form-content" id="imageURL" name="imageURL" aria-describedby="ImageURL">
  </div>

  <button type="submit" class="btn btn-primary" name="../admin/grades" >Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>