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
    <title>FinTech - Home</title>

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
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="chat.php" class="nav-link">CHATROOM</a>
                    </li>                                    
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">REGISTER</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Image Slider -->
    <section id="showcase">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block  mb-5 text-light">
                            <h1 class="display-3">Learn With Us</h1>
                            <p class="lead">Financial planning is the task of determining how a business or an individual will afford to achieve its strategic goals and objectives.</p>
                            <a href="#" class="btn btn-danger btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5 text-right text-dark">
                            <h1 class="display-3">Take Fun Quizzes</h1>
                            <p class="lead">Free financial quiz to test your financial knowledge.</p>
                            <a href="#" class="btn btn-primary btn-lg">Take the quiz</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5 text-dark">
                            <h1 class="display-3">Become A Financial Pro</h1>
                            <p class="lead">Financial planning is a big concept that includes things like budgeting, retirement planning, saving, insurance and getting out of debt.Learn more</p>
                            <a href="#" class="btn btn-success btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <!-- HOME ICON -->
    <section id="home-icons" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 text-center">
                    <i class="fas fa-school fa-3x mb-2"></i>
                    <h3>Learn With Us</h3>
                    <p>Financial planning is the task of determining how a business or an individual will afford to achieve its strategic goals and objectives. </p>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <i class="fas fa-cogs fa-3x mb-2"></i>
                    <h3>Take Fun Quizzes</h3>
                    <p>Free financial quiz to test your financial knowledge with our interactive Google Assistant Action</p>
                    <a href="https://console.actions.google.com/u/0/project/fintech-d25ac/simulator"><img src="images/google.png" width="80" height="80" style="border-radius:50%; border: black solid 1px; padding:2px"></a>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <i class="fas fa-graduation-cap fa-3x mb-2"></i>
                    <h3>Become A Financial Pro</h3>
                    <p>Financial planning is a big concept that includes things like budgeting, retirement planning, saving, insurance and getting out of debt.Learn more</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- HOME HEADING -->
    <section id="home-heading" class="p-5">
        <div class="dark-overlay">
            <div class="row">
                <div class="col">
                    <div class="container p-5">
                        <h1>Are You Ready To Get Started?</h1>
                        <p class="d-none d-md-block">Challenge your financial intellect and know interesting facts about investment and banking.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    <!-- PHOTO GALLERY -->
    <section id="gallery" class="py-5">
        <div class="container">
            <h1 class="text-center">Our Financial Partners</h1>            
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="images/hdfc.png" alt="">
                    </a>
                </div>
                <div class="col-md-4">
                    <img src="images/uti.jpg" alt="">
                </div>
                <div class="col-md-4">
                    <img src="images/reliance.jpg" alt="">
                </div>
            </div>
            
        </div>
    </section>

    <!-- NEWSLETTER -->
    <section id="newsletter" class="text-center p-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Sign Up For Our Newsletter</h1>
                    <p>Get regular updated information on finance, investment and much more! </p>
                    <form action="" class="form-inline justify-content-center">
                        <input type="text" placeholder="Enter Name" class="form-control mb-2 mr-2">
                        <input type="text" placeholder="Enter Email" class="form-control mb-2 mr-2">
                        <button class="btn btn-primary mb-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

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

    <!--MODAL-->
    <div class="modal" id="mymodel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <iframe src="" height="350px" width="100%" allowfullscreen frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Tag -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

    <script>
        // Get current year for copyright
        $('#year').text(new Date().getFullYear());

        // Configure Slider
        $('.carousel').carousel({
            interval: 5000,
            pause: 'hover'
        });

        $('#mymodel').on('show.bs.modal', function (e) {
            var loadurl = e.relatedTarget.data('load-url');
            $(this).find('.modal-body').load(loadurl);
        });

         // Lightbox Init
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
        });
    </script>

</body>
</html>