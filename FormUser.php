<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Aplikasi Sederhana!</h1>
    <div class="container">
      <!-- Awal Form -->
       <form class="row g-3" method="POST">
            <div class="col-6">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="">
            </div>
            <div class="col-md-6">
              <label for="level" class="form-label">Level</label>
              <select id="level" name="level" class="form-select">
                <option selected>Choose...</option>
                <option value="0">Administrator</option>
                <option value="1">User</option>
                <option value="2">Developer</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="dep" class="form-label">Department</label>
              <select id="dep" id="dep" class="form-select">
                <option selected>Choose...</option>
                <option value="0">Staff</option>
                <option value="1">Supervisor</option>
                <option value="2">Manager</option>
                <option value="3">Director</option>
              </select>
            </div>
            <div class="col-12">
              <button type="reset" onclick="history.back()" class="btn btn-secondary">Back</button>
              <button type="submit" name="save" id="save" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html> 