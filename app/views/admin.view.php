<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a26b51a86d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= ROOT ?>assets/css/style.css">


</head>

<body>
    <?php require_once 'components/nav.php' ?>
    
    <div class="flex fixed top-0 pt-14 h-screen  w-full bg-worange">
        <div class="sticky top-0 w-64 py-4 h-full text-dgray shadow-md bg-white">
            <?php require_once 'components/sidebar.php' ?>
            <?php require_once $componentfile  ?>

            <!-- table -->
        
        </div>
    </div>
    </div>

</body>

</html>