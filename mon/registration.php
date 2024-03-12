<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>De-chef</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <div class="page-header">
                    <h2>De-Chef</h2>
                </div>
                <p>Please fill all fields in the form</p>
                <form action="register_process.php" method="post">

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger">

                        </span>
                    </div>

                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
                        <span class="text-danger">

                        </span>
                    </div>



                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger">

                        </span>
                    </div>



                    <input type="submit" class="btn btn-primary" name="signup" value="submit">
                    Already have a account?<a href="login.php" class="btn btn-default">Login</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>