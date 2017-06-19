<?php include_once 'lib/Mysql.php'; ?>
<?php include_once 'lib/Action.php'; ?>

<?php $Action = new Action(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link href="lib/css/style.css" rel="stylesheet">
</head>
<body>


<form id="register-form" method="get" action="/">
    <label>Name</label>
    <input type="text" name="name">
    <br>

    <label>Login</label>
    <input type="text" name="login">
    <br>

    <label>Password</label>
    <input type="text" name="password">
    <br>

    <button type="submit">Submit</button>
</form>

</body>
</html>