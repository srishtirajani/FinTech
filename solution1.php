<?php

?>
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
    <title>BootStrap Theme</title>


<style>
.boxes{
    margin: 0 100px;
}

.sub-box{
    box-sizing: border-box;    
    width: 80%;
    padding: 10px; 
    margin: 10px;
    text-align: center;
    font-family: 'Crimson Pro', serif;
    font-weight: normal;
    
}

.contain{
    width: 1000px;
    margin: 20px 100px;
    padding: 10px;
}

</style>
</head>

<body leftmargin="40px">
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
                        <h1>Let's See The Results!</h1>                
                    </div>
                </div>
            </div>
        </header>


        <section>
    <div class="contain">
        <h3>RESULT</h3>
        <?php
        $score = $_GET['score'];
        if($score==0)
        echo "<div class='progress'><div class='progress-bar progress-bar-success progress-bar-striped bg-danger' role='progressbar' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100' style='width:0%''>00% Sorry Better Luck Next Time</div></div>";
        else if($score==1)
        echo "<div class='progress'><div class='progress-bar progress-bar-success progress-bar-striped  bg-danger' role='progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style='width:20%''>20% You Can Do Better</div></div>";
        else if($score==2)
        echo "<div class='progress'><div class='progress-bar progress-bar-success progress-bar-striped  bg-warning' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:40%''>40% Good Attempt</div></div>";
        else if($score==3)
        echo "<div class='progress'><div class='progress-bar progress-bar-success progress-bar-striped  bg-info' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:60%''>60% Good Work</div></div>";
        else if($score==4)
        echo "<div class='progress'><div class='progress-bar progress-bar-success progress-bar-striped bg-success' role='progressbar' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100' style='width:80%''>80% Great Work</div></div>";
        else if($score==5)
        echo "<div class='progress'><div class='progress-bar progress-bar-success progress-bar-striped bg-success   ' role='progressbar' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width:100%''>100% Woho You Did It!</div></div>";
        ?>
    </div>
</section>


<br>
<form class="profile">
<section class="boxes">
	<div class="sub-box" id="c1">
        <label for="q1"><b>1. Which of the following is most likely missing from your financial plan if you are not prepared for an emergency?</b></label>
        <br>
        <!--p class="text-left" style="left-margin:30;"-->
        A) Investments
        </p>
        <div class="card-body">
            <iframe width="250" height="115" src=" https://www.youtube.com/embed/LLdKcFpHgM8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
        <br><br>
	</div>

	<div class="sub-box" id="c1">
        <label for="q2"><b>2. Planning for the possibility that your home might get struck by lightning and catch on fire is part of a plan for _____.</b></label>
        <br>
        <label for=""> A) Protecting Assets </label>
        <div class="card-body">
            <iframe width="250" height="115" src=" https://www.youtube.com/embed/XPe5rY7VqmA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <br><br>
    </div>
    
	<div class="sub-box" id="c1">
        <label for="q3"><b>3. Which of the following is a liability?</b></label>
        <br>

        <label for="">A) Credit card balance</label>
        <div class="card-body">
            <iframe width="250" height="115" src=" https://www.youtube.com/embed/7-2dKzOG1pM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <br><br>
    </div>
    
	<div class="sub-box" id="c1">
        <label for="q4"><b>4. Which of the following increases liabilities but not assets?</b></label>
        <br>
        <label for="">A) Paying off a student loan</label>

        <div class="card-body">
            <iframe width="250" height="115" src=" https://www.youtube.com/embed/ZFbH98DVZJY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <br><br>
    </div>
    
	<div class="sub-box" id="c1">
        <label for="q5"><b>5. Tony works 22 hours per week. His take home pay is $15.80 per hour. If Tony is able to save all of his earnings, how long will it take him to save at least $4,800?</b></label>
        <br>
        <label for="">A) 14 weeks</label>

        <div class="card-body">
            <iframe width="250" height="115" src=" https://www.youtube.com/embed/LLdKcFpHgM8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
        
    <div class="sub-box">
        <div class="form-group">
            <a href="financialplanningb.php" class="btn btn-outline-primary">GoTo Financial Planning</a>
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
