<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Garage Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="login_style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>


<header>

        <img src="images/logov2.svg" class="logo" alt="Logo">

        <nav class="navbar">
            <ul class="navbar-nav d-flex flex-row nav-underline">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Service Booking</a></li>
            </ul>
        </nav>

        <div class="buttons">
            <button class="btn headerbtn" onclick="window.location='login.php'">Log in</button>
            <button class="btn headerbtn" onclick="window.location='signup.php'">Sign up</button>
        </div>

</header>

<section class = "login_block">

    <h2>Sign Up</h2>
    <br>
    <form action="scripts/signup_script.php" method = "post"class="row g-1 needs-validation login" novalidate>
        <label for="sUsername" class = "form-label">Username</label>
        <input type="text" name="sUseraname" id="sUsername" class="form-control" value required>

        <label for="sPassowrd" class = "form-label">Password</label>
        <input type="password" name="sPassword" class = "form-control"id="sPassword">

        <label for="sFirstname" class="form-label">First Name</label>
        <input type="text" name="sFirstname"class = "form-control"id="sFirstname">

        <label for="sSecondname" class="form-label">Second Name</label>
        <input type="text" name="sSecondname"class = "form-control" id="sSecondname">
        
        <label for="sEmail" class="form-label">Email Address</label>
        <input type="email" name="sEmail" id="sEmail" class = "form-control"  placeholder="name@example.com">

        <div class ="checkbox">
            <input class="form-check-input" type="checkbox" value="remember-me" id="check">
            <label for="check" class="form-check-label">Agree with <a href="">Terms and conditions</a></label>
        </div>
        <button type="submit">Sign Up</button>


    </form>

</section>

<footer>

    <span>© 2025 Car Garage</span>

</footer>

</body>
</html>