<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="booking_style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>

<header>

        <img src="images/logov2.svg" class="logo" alt="Logo">

        <nav class="navbar">
            <ul class="navbar-nav d-flex flex-row nav-underline">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="booking_online.php" class="nav-link">Service Booking</a></li>
            </ul>
        </nav>

        <div class="buttons">
            <button class="btn headerbtn" onclick="window.location='login.php'">Log in</button>
            <button class="btn headerbtn" onclick="window.location='signup.php'">Sign up</button>
        </div>

</header>

<section class="main_block">
    
    <img src="images/booking_image.svg" alt="">

    <div class = "booking_block">

        <h1>Booking</h1>

        <form action="" class="row g-1 needs-validation login" novalidate>
        <label for="sFirstname" class = "form-label">First Name</label>
        <input type="text" name="sFirstaname" id="sFirstname" class="form-control" value required>

        <label for="iNumber" class = "form-label">Telephone Number</label>
        <input type="tel" name="iNumber" id="iNumber" class = "form-control">

        <label for="sDate" class="form-label">Choose Date</label>
        <input type="date" name="sDate" id="sDate" class = "form-control">

        <label for="sTime" class="form-label">Choose Time</label>
        <input type="time" name="sTime" id="sTime" class="form-control">
        
        <label for="sEmail" class="form-label">Email Address</label>
        <input type="email" name="sEmail" id="sEmail" class = "form-control"  placeholder="name@example.com">

        <button type="submit">Submit Booking</button>

    </div>
</section>

<footer>

    <span>© 2025 Car Garage</span>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>