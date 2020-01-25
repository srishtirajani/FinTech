<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>FinTech - Register</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">FinTech</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="plan.html" class="nav-link">SERVICES</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="chat.php" class="nav-link">CHATROOM</a>
                    </li>
                    <li class="nav-item active">
                        <a href="register.php" class="nav-link">REGISTER</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="home-section">
        <div class="home-inner container text-dark">
            <div class="row">
                <div class="col-lg-8 d-none d-lg-block">
                    <h1 class="display-4">Build
                        <strong>financial literacy</strong> and gain revenue
                        <strong>profits</strong>
                    </h1>
                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4">
                            <h3>Learn more about financial investment </h3>
                        </div>
                    </div>
        
                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            <h3>Get your personalized financial plan </h3>
                        </div>
                    </div>
        
                    <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <div class="p-4 align-self-end">
                        <h3>Become a pro at investing!</h3>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
            <div class="card bg-primary text-center card-form">
              <div class="card-body">
                <h3>Sign Up Today</h3>                
                <form action="include/signup.php" method="POST">
                  <div class="form-group">
                    <input type="text" name="userName" class="form-control form-control-lg" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="phone" class="form-control form-control-lg" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <input type="password" name="userPassword" class="form-control form-control-lg" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="number" name="age" class="form-control form-control-lg" placeholder="Age">
                  </div>
                  <div class="form-group">
                    <input type="text" name="area" class="form-control form-control-lg" placeholder="Area">
                  </div>
                  <div class="form-group">
                    <input type="text" name="income" class="form-control form-control-lg" placeholder="Yearly Income">
                  </div>
                  <input type="submit" value="Submit" class="btn btn-outline-light btn-block">
                </form>
              </div>
            </div>
            </div>
        </div>
    </header>
    
       <!-- FOOTER -->
    <footer id="main-footer" class="text-center p-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Copyright &copy; <span id="year"></span> FinTech</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script Tag -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

    <script>
        // Get current year for copyright
        $('#year').text(new Date().getFullYear());
    </script>

</body>
</html>