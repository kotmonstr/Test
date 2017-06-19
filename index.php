<?php include_once 'lib/Mysql.php'; ?>
<?php include_once 'lib/Action.php'; ?>

<?php $Action = new Action(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link href="/lib/css/bootstrap.css" rel="stylesheet">

    <script src="/lib/js/jquery.js"></script>
    <script src="/lib/js/bootstrap.min.js"></script>
    <script src="/lib/js/jquery.validate.min.js"></script>
    <script src="/lib/js/custom.js"></script>

</head>
<body>

<div class="row" style="margin-top: 200px">
    <div class="col-md-3 col-lg-offset-4 well">

        <form id="register-form" method="post" action="/">
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="name" name="name" class="form-control" required value="<?= isset($_POST['name']) ? $_POST['name'] : ''; ?>">
            </div>

            <div class="form-group">
                <label>Login</label>
                <input type="text" id="login" name="login" class="form-control" required value="<?= isset($_POST['login']) ? $_POST['login'] : ''  ?>">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" id="password" name="password" class="form-control" required value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>