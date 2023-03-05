
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://kit.fontawesome.com/113ae45b91.css" crossorigin="anonymous" />
  </head>

  <body>
    <h1 class="bg-dark text-light text-center py-2">PHP ADVANCED CRUD</h1>

    <div class="container">
      <!-- input search and button section -->
      <div class="row mb-5 mt-3">
        <div class="col-10">
          <div class="input-group">
            <span class="input-group-text bg-dark">
              <i class="fa-regular fa-magnifying-glass text-light"></i>
            </span>

            <input type="text" class="form-control" placeholder="search user" />
          </div>
        </div>

        <div class="col-2">
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#usermodal">Add User</button>
        </div>
      </div>

      <!-- table -->
      <?php require_once('./table_data.php')?>

      <!-- pagination -->
      <nav aria-label="Page navigation example" id="pagination">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>

    <!-- form modal -->
    <?php require_once('./form.php')?>

    <!-- profile modal -->
    <?php require_once('./profile.php')?>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- js file -->
    <script src="js/script.js?v=1.2.34.34"></script>
  </body>
</html>

