<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />    
        <link rel="stylesheet" href="css/style.css">
        <title>FinTech - Psychometric Text</title>

        <script>
            var score=0;
            function check () {
                if (document.getElementById('q1').value=="1") {
                    score +=1;
                    }
                if (document.getElementById('q2').value=="1") {
                    score +=1;
                    }
                    if (document.getElementById('q3').value=="1") {
                    score +=1;
                    }
                    if (document.getElementById('q4').value=="1") {
                    score +=1;
                    }
                    if (document.getElementById('q5').value=="1") {
                    score +=1;
                    }
                document.getElementById('bill-text').textContent = "FINAL SCORE =  " + score;	
                return false;
            }
        </script>

        <style>
            .boxes{
                margin: 0 100px;
            }

            .sub-box{
                box-sizing: border-box;
                float: left;
                width: 80%;
                padding: 20px; 
                margin: 20px;
                text-align: center;
                font-family: 'Crimson Pro', serif;
                font-weight: normal;
                color: black;
                height: 250px;
            }

            #c1{
                background-color: rgb(230, 230, 230);
            }
            #ex1 {
            margin-left: 110px;
            font-weight: bold;
            font-size: 30px;
            }

            #bank {
                float:left;
                box-sizing: border-box;
                width:150px;
                height:100px;
            }

        </style>
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
                        <li class="nav-item active">
                            <a href="plan.html" class="nav-link">SERVICES</a>
                        </li>                
                        <li class="nav-item">
                            <a href="chat.php" class="nav-link">CHATROOM</a>
                        </li>                   
                    </ul>
                </div>
            </div>
        </nav>

        <!-- PAGE HEADER -->
        <header id="page-header">
            <div class="container">
                <div class="row">
                    <div class="col md-6 m-auto text-center">
                        <h1>Time For Quiz!</h1>  
                        <h5><a class="text-light" href="financialplanningb.php">(Skip The Test?)</a></h5>
                    </div>
                </div>
            </div>
        </header>

        <!-- QUIZ -->

        <form action="include/getlevel.php" method="GET">
            <section class="boxes">
                <div class="container p-5 text-dark">
                    <div class="form-group border border-dark p-2">
                        <label for="q1">1. Where do you think money is safer?</label>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/bank.jpeg" id="bank">
                            </div>
                            <div class="col-md-3">
                                <img src="images/home1.jpg" id="bank">
                            </div>
                        </div>                    
                        <div class="row">                            
                            <div class="col-md-3">
                                <label><input type="radio" name="q1" value="bank"></label>
                            </div>
                            <div class="col-md-3">
                                <label><input type="radio" name="q1" value="home"></label>
                            </div>
                        </div>               
                    </div>

                    <div class="form-group border border-dark p-2">
                        <label for="q1">2. Do you invest your money anywhere?</label>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/bank.jpeg" id="bank">
                            </div>
                            <div class="col-md-3">
                                <img src="images/gold.jpg" id="bank">
                            </div>
                            <div class="col-md-3">
                                <img src="images/mutual.jpg" id="bank">
                            </div>
                        </div>                    
                        <div class="row">                            
                            <div class="col-md-3">
                                <label><input type="radio" name="q2" value="0"></label>
                            </div>
                            <div class="col-md-3">
                                <label><input type="radio" name="q2" value="0"></label>
                            </div>
                            <div class="col-md-3">
                                <label><input type="radio" name="q2" value="1"></label>
                            </div>
                        </div>               
                    </div>

                    <div class="form-group border border-dark p-2">
                        <label for="q1">3. Do you know how much money you earn and spend each year</label>
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fas fa-check fa-3x mb-2"></i>
                            </div>
                            <div class="col-md-3">
                                <i class="fas fa-times fa-3x mb-2"></i>
                            </div>
                        </div>                    
                        <div class="row">                            
                            <div class="col-md-3">
                                <label><input type="radio" name="q3" value="0"></label>
                            </div>
                            <div class="col-md-3">
                                <label><input type="radio" name="q3" value="1"></label>
                            </div>
                        </div>               
                    </div>

                    <div class="form-group border border-dark p-2">
                        <label for="q1">4. Do you have any savings for emergency?</label>
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fas fa-check fa-3x mb-2"></i>
                            </div>
                            <div class="col-md-3">
                                <i class="fas fa-times fa-3x mb-2"></i>
                            </div>
                        </div>                    
                        <div class="row">                            
                            <div class="col-md-3">
                                <label><input type="radio" name="q4" value="1"></label>
                            </div>
                            <div class="col-md-3">
                                <label><input type="radio" name="q4" value="0"></label>
                            </div>
                        </div>               
                    </div>

                    <div class="form-group border border-dark p-2">
                        <label for="q1">5. Do you know all about the latest investment methods</label>
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fas fa-check fa-3x mb-2"></i>
                            </div>
                            <div class="col-md-3">
                                <i class="fas fa-times fa-3x mb-2"></i>
                            </div>
                        </div>                    
                        <div class="row">                            
                            <div class="col-md-3">
                                <label><input type="radio" name="q5" value="1"></label>
                            </div>
                            <div class="col-md-3">
                                <label><input type="radio" name="q5" value="0"></label>
                            </div>
                        </div>               
                    </div>

                    <div class="form-group">
                        <input type="submit" onclick="return check()" value="SUBMIT" class="btn btn-primary">
                    </div>
                </div>
            </section>
        </form>      
    
        
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

        <script>
            // Get current year for copyright
            $('#year').text(new Date().getFullYear());
        </script>

    </body>
</html>
