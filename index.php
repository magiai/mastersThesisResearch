<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
<!--    <script src="script.js"></script>-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php require_once('form.php') ?>


<form class="form" action="form.php" method="post">

<?php include ('questionsPICS.php')?>

<?php include('questionsRI.php')?>

<?php include('questionsPERSON.php')?>

</form>



</body>
</html>
