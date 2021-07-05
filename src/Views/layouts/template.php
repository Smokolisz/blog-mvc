<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Blog" ?? $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
    <!-- nav -->
    <?php include __DIR__."/../includes/nav.php"; ?>

    <!-- view content -->
    <?php
    $file = __DIR__.'/../'.$view.'.php';
    if (file_exists($file)) {
        include $file;
    } else {
        $notFound = __DIR__.'/../404.php';
        include $notFound;
    }
    ?>

    <!-- footer -->
    <?php include __DIR__."/../includes/footer.php"; ?>
    
</body>
</html>