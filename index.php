<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mailblaze Tools</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Bootstrap JS Bundle (including Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Global CSS overrides -->
    <link rel="stylesheet" href="css/global.css">

    <!-- Icons Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>

    <!-- Navbar and Container Div start -->
    <nav class="navbar navbar-dark bg-dark sticky-top">
        <div class="container">
    
          <!-- Logo left + Brand -->
          <a class="navbar-brand" href="#"><i class="bi bi-tools"></i> Mailblaze Tools</a>
    
          <!-- Main ul start -->
          <ul class="nav">
            <!--
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tools
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Check Spam Words</a></li>
                <li><a class="dropdown-item" href="#">Delist Helper</a></li>
                <li><a class="dropdown-item" href="#">Bulk Email Checker</a></li>
              </ul>
            </li>

    
            <li class="nav-item">
              <button type="button" class="btn btn-primary">Sign Up</button>
            </li>

            &nbsp;&nbsp;

            <li class="nav-item">
              <button type="button" class="btn btn-secondary">Login</button>
            </li>
            -->
        </ul>
        <!-- Main ul end -->
    </div>
    </nav>
    <!-- Navbar and Container div ends -->

    <br><br><br>

    <div class="container text-center">
      <div class="row justify-content-md-center">
        <h3>
          Spam Words Checker<br>
          <small class="text-muted">Copy all the text from the top (after the header) down to the bottom (before the footer).<br>Paste it in the text box below and click Analyze, see the results on the right.</small>
        </h3>
      </div>
      <br>
      <div class="row justify-content-md-center">
        <div class="col-7">
          <textarea id="w3review" name="w3review" rows="12" cols="100%"></textarea>
          <input type="button" value="Analyze">
        </div>

        <div class="col-1"></div>

        <div class="col-4">col-4</div>
      </div>
    </div>

    
 

</body>
</html>