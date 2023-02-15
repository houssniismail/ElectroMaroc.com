<?php
if(isset($_POST['submit'])){
    $category = categoryController::ajouterCategory();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nom">
        <input type="text" name="description">
        <input type="text" name="image">
        <button name="submit">submit</button>
    </form>
</body>
</html>