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

    <div class="container">

    <?php
    $page = file_get_contents('https://requests.mailblaze.com/customer/index.php/campaigns/jb901yvm2e602/reports-export/bounce');

    /*
    $cert = fopen("https://chi.mailblaze.com/backend/index.php/customers/impersonate/id/1750","r");
    $file = fopen("https://requests.mailblaze.com/customer/index.php/campaigns/jb901yvm2e602/reports-export/bounce","r");
    while(! feof($file))
    {
    print_r(fgetcsv($file));
    }
    fclose($file);
    */
    ?>
        
    </div>
 
</body>
</html>