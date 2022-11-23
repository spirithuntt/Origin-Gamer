<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
 <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <script defer src="https://parsleyjs.org/dist/parsley.js"></script>
    <link rel="stylesheet" href="../../css/style.css"> 
    <title>Origin Gamer></title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bgg-dark sticky-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Origin Gamer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              username
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Edit Profile</a></li>
              <li><a class="dropdown-item" href="#">Inbox</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../../logout.php">logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" id="myInput" onkeyup="myFunction()">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row flex-nowrap">
        <!-- ***********side bar************ -->
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bbg-dark position-fixed shadow">
            <div class=" d-flex flex-column align-items-center align-items-sm-start my-5 px-3 pt-2 text-white vh-100">
               
                    <span class="fs-4 d-none d-sm-inline my-3 text-light"> WELCOME name</span>
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="profile.php" class="nav-link align-middle px-0">
                          <i class="bi bi-house me-3 text-white"></i> <span class="ms-1 d-none d-sm-inline text-light">Home</span>
                        </a>
                    </li>
                    <li >
                        <a href="dashboard.php" class="nav-link px-0 align-middle ">
                          <i class="bi bi-speedometer2 me-3 text-white"></i> <span class="ms-1 d-none d-sm-inline text-light ">Dashboard</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                          <i class="bi bi-person me-3 text-white"></i> <span class="ms-1 d-none d-sm-inline text-light">Profile</span> </a>
                    </li>
                </ul>
            </div>
        </div>