<!DOCTYPE html>
<html>
    <head>
        <title>Sparkling Windows</title>
	    <meta name="description" content="Test Website">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b15a8855ee.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/assets/css/stylesheet.css?php echo time(); ?>">
    </head>
    <body class="container-fluid p-0">
        <nav style="background-color: #5085e5;" class="navbar navbar-expand-lg navbar-light sticky-top">
            <a class="navbar-brand ms-2" href="/">
                <img src="/assets/img/logo.png" alt="Logo" style="height: 5vh; width: 4vw;">
                <h5 style="display: inline;">Sparking Windows</h5> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav ms-auto me-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="/"><span class="fa-solid fa-house"></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about"><span class="fa-solid fa-address-card"></span> About Us</a>
                     </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa-solid fa-screwdriver-wrench"></span> Services</a>
                        <div class="dropdown-menu" style="background-color: rgb(122, 178, 211);">
                            <a class="dropdown-item" href="/services">View All</a>
                            <a class="dropdown-item" href="/booking/1">Book Now</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
