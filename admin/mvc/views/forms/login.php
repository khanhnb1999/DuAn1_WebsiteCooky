
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/sass/style.css">
    <title>Admin - Login</title>
</head>

<body>
    <div class="grid">
        <div class="form__login">
            <div class="form__sign--in">
                <div class="form__sign--in--title">
                    <h4>Welcome back</h4>
                    <p>Please sign in to your account below</p>
                </div>
                <form action="<?php echo SITE_URL; ?>/login" method="post">
                    <div class="form__sign--in--account">
                        <div class="form__sign--in--account--user">
                            <input type="text" name="username" class="form-control" placeholder="Enter username">
                        </div>
                        <div class="form__sign--in--account--user">
                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                            <!-- <span>
                                <?= $data['error'] ?>
                            </span> -->
                        </div>
                        <div class="form__sign--in--account--user">
                            <input class="form-check-input" type="checkbox" name="remember" value="1">
                            <label class="form-check-label">Keep me logged in</label>
                        </div>
                        <div class="form__sign--in--account--user">
                            <p>No account? <a href="./registration.php">Sign up now</a></p>
                        </div>
                        <div class="form__sign--in--account--user--button">
                            <div class="form__sign--in--account--user--password">
                                <button class="btn btn__danger"><a href="./forgot_password.php">Recover
                                        password</a></button>
                            </div>
                            <div class="form__sign--in--account--user--dashboard">
                                <button class="btn btn__info" type="submit" name="btn-submit">Sign in</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>