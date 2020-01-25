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

<body leftmargin="40px">
<!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="index.html" class="navbar-brand">Glozzom</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item active">
                        <a href="about.html" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.html" class="nav-link">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a href="chat.php" class="nav-link">CHATROOM</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">REGISTER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<br>
<header>
<p id="ex1">Long Term Investments</p>
</header>

<form  class="profile" action="getlevel.php" method="GET">
    <section class="boxes">
        <div class="sub-box" id="c1">
        <p class="text-left">
        <label for="q1"><b>Mutual Funds</b></label>
        <br>
        A mutual fund is a professionally managed investment fund that pools money from many investors to purchase securities.
        <div class="card-body">
             <iframe width="250" height="115" src=" https://www.youtube.com/embed/S7VL6XceRXc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

</section>
</form>
</body>
</html>
