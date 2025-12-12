<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Garage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                <li class="nav-item"><a href="contact_us.php" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="booking_online.php" class="nav-link">Service Booking</a></li>
            </ul>
        </nav>

        <div class="buttons">
            <button class="btn headerbtn" onclick="window.location='login.php'">Log in</button>
            <button class="btn headerbtn" onclick="window.location='signup.php'">Sign up</button>
        </div>

</header>

<!-- Contact Us under navbar -->

<section class="contact_info_navbar">

    <div class="phone_number">
        <img src="images/call_icon.svg" alt="call_icon">
        <span>01999 999 999</span>
    </div>

    <div class="email">
        <img src="images/email_icon.svg" alt="email_icon">
        <address>hello@cargarage.co.uk</address>
    </div>

    <div class="working_time">
        <img src="images/time_icon.svg" alt="clock_icon">
        <time>Mon-Sun: 10:00 - 18:00</time>
    </div>

</section>

<section class = "homepage_image_buttons">

    <div class="book_now_block">
        <h2>Book your MOT with Car Garage</h2>
        <button class = "btn" onclick = "window.location = 'booking_online.php'">Book Now</button>
    </div>

</section>

<section class = "container_fluid">
    <div class = "homepage_text">
        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat accumsan quam, eget consequat mauris tincidunt sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque auctor, ipsum ut lobortis rutrum, tortor nulla rhoncus enim, vitae eleifend urna purus id lacus. </p>
        <p>Duis aliquet aliquam nisl. Nulla molestie dapibus vestibulum. Nam bibendum felis in est sodales ullamcorper. Mauris facilisis dignissim purus et tempor. Quisque quis libero at justo rhoncus efficitur. Morbi mollis, nulla ut ultrices convallis, odio purus tempor sapien, sed vestibulum lacus turpis et ipsum.</p>

        <p>Vestibulum euismod volutpat enim ut elementum. Integer congue accumsan felis, pretium fringilla mi hendrerit imperdiet. Nunc cursus, nunc et dignissim finibus, velit mauris rutrum ex, id porta nisi dolor eu ipsum. Vestibulum aliquet lobortis justo sit amet cursus. Nunc vitae vehicula velit, sed porta diam. Sed mattis eget urna id hendrerit. </p>
        <p>Fusce massa velit, mattis vitae laoreet sed, cursus id nisi. Aenean mollis tellus id venenatis tempus. Sed fermentum ligula eu nibh bibendum finibus. Vestibulum tristique at enim eget viverra. Ut malesuada, lorem ac scelerisque fermentum, lorem sapien interdum risus, id ultrices dolor augue accumsan turpis. Suspendisse varius tincidunt viverra. Proin ac nisi mauris. Integer id rhoncus ligula. Nam vel orci erat.</p>
    </div>
</section>

<footer>

    <span>© 2025 Car Garage</span>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>