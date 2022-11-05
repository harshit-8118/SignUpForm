<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up | Olcademy</title>
        <link rel="stylesheet" href="bootstrap\dist\css\bootstrap.min.css">
        <link rel="stylesheet" href="CSS/styles.css">
    </head>
<body>
    <div class="container">
        <form action="signup.php" method="post" class="signupform">
            <div class="row">
                <h1>SIGN UP</h1>
            </div>
            <div class="row">
                <label name="fullname" class="col-md-2 col-form-label">First Name</label>
                <div class="col-md-10">
                    <input type="text" name="fullname" class="form-control"
                        placeholder="Full Name">
                </div>
            </div>
            <div class="row">
                <label name="Email" class="col-md-2 col-form-label">Email</label>
                <div class="col-md-10">
                    <input type="email" name="email" class="form-control"
                        placeholder="abc@gmail.com">
                </div>
            </div>
            <div class="row">
                <label name="password" class="col-md-2 col-form-label">Password</label>
                <div class="col-md-10">
                    <input type="password" name="password" class="form-control"
                        placeholder="********">
                </div>
            </div>
            <div class="row">
                <label name="dob" class="col-md-2 col-form-label">Date of Birth</label>
                <div class="col-md-10">
                    <input type="date" name="dateofbirth" class="form-control"
                        placeholder="">
                </div>
            </div>
            <div class="row gender-row">
                <label name="gender" class="col-md-2 col-form-label">Gender</label>
                <div class="form-check gender-input">
                    <input class="form-check-input" type="radio" name="gender" value="Male">
                    <label class="form-check-label" for="gender">
                        male
                    </label>
                </div>
                <div class="form-check gender-input">
                    <input class="form-check-input" type="radio" name="gender" value="Male">
                    <label class="form-check-label" for="gender">
                        female
                    </label>
                </div>
                <div class="form-check gender-input">
                    <input class="form-check-input" type="radio" name="gender" value="Male">
                    <label class="form-check-label" for="gender">
                        other
                    </label>
                </div>
            </div>
            <input type="submit" value="submit" class="btn btn-primary btn-lg btn-block" name="submit">
        </form>
        <br>
        <br>
        <div class="card">
            <h3 class="card-header bg-primary text-white">
                Olcademy Task 1
            </h3>
            <div class="card-body">
                <dl>
                    <dt class="col-6">1.You need to create a sign up form where the user will enter</dt>
                    <dd class="col-6">Full name</dd>
                    <dd class="col-6">Email</dd>
                    <dd class="col-6">Password</dd>
                    <dd class="col-6">Dob</dd>
                    <dd class="col-6">Gender</dd>
                </dl>
                <p>When the user submits the form, all the entries should be validated and the data should be stored into the database with the timestamp, at which the user registered.
Once the user has registered they should be redirect to the Welcome Page.</p>
            </div>
        </div>
    </div>
</body>
</html>