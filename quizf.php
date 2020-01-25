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
    <title>FinTech - Quiz</title>

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
    margin: 0px 100px;    
}

.sub-box{
    box-sizing: border-box;    
    width: 80%;
    padding: 20px; 
    margin: 20px;
    text-align: center;
    font-family: 'Crimson Pro', serif;
    font-weight: normal;    
    height: 200px;

;
}
#ex1 {
  margin-left: 110px;
  font-weight: bold;
  font-size: 30px;
  
}
#btn-inp{
    padding: 20px 50px;
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
                        <h1>Time For Quiz!</h1>                
                    </div>
                </div>
            </div>
        </header>

        <!-- QUIZ -->
        <form class="profile" action="getscore1.php" method="GET">
        <section class="boxes text-dark">
            <div class="sub-box" id="c1">
            <p class="text-left">
        <label for="q1"><b>1. Which of the following is most likely missing from your financial plan if you are not prepared for an emergency?</b></label>
        <br>
        <input type="radio" id="rd" name="q1" value="0"> financing
        <br>
        <input type="radio" id="rd" name="q1" value="0"> budget
        <br>
        <input type="radio" id="rd" name="q1" value="1"> investments
        <br>
        <input type="radio" id="rd" name="q1" value="0"> savings
        </p>
        <br>
        <br><br>
            </div>

            <div class="sub-box" id="c1">
            <p class="text-left">
        <label for="q2"><b>2. Planning for the possibility that your home might get struck by lightning and catch on fire is part of a plan for _____.</b></label>
        <br>
        <input type="radio" id="rd" name="q2" value="0"> financing
        <br>
<input type="radio" id="rd" name="q2" value="0"> managing income
<br>
<input type="radio" id="rd" name="q2" value="0"> managing liquidity
<br>
<input type="radio" id="rd" name="q2" value="1"> protecting assets
</p>
<br><br>
	</div>
	<div class="sub-box" id="c1">
	<p class="text-left">
<label for="q3"><b>3. Which of the following is a liability?</b></label>
<br>
<input type="radio" id="rd" name="q3" value="0"> bonus paycheck
<br>
<input type="radio" id="rd" name="q3" value="1"> credit card balance
<br>
<input type="radio" id="rd" name="q3" value="0"> investment fund
<br>
<input type="radio" id="rd" name="q3" value="0"> savings account
</p>
<br><br>
	</div>
	<div class="sub-box" id="c1">
	<p class="text-left">
<label for="q4"><b>4. Which of the following increases liabilities but not assets?</b></label>
<br>
<input type="radio" id="rd" name="q4" value="0"> Taking out a loan to buy a new car
<br>
<input type="radio" id="rd" name="q4" value="0"> Taking out a loan to go on vacation
<br>
<input type="radio" id="rd" name="q4" value="0"> Using a credit card to buy a computer
<br>
<input type="radio" id="rd" name="q4" value="1"> Paying off a student loan
</p>
<br><br>
	</div>
	<div class="sub-box" id="c1">
	<p class="text-left">
<label for="q5"><b>5. Tony works 22 hours per week. His take home pay is $15.80 per hour. If Tony is able to save all of his earnings, how long will it take him to save at least $4,800?</b></label>
<br>
<input type="radio" id="rd" name="q5" value="0"> 12 weeks
<br>
<input type="radio" id="rd" name="q5" value="0"> 13 weeks
<br>
<input type="radio" id="rd" name="q5" value="1"> 14 weeks
<br>
<input type="radio" id="rd" name="q5" value="0"> 15 weeks
</p>
<br><br>
	</div>

        <div class="form-group" id="btn-inp">
            <input type="submit" onclick="return check()" value="SUBMIT" class="btn btn-primary">
        </div>
</section>
</form>

  <!-- FOOTER -->
  <footer id="main-footer" class="text-center p-4 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Copyright &copy;
            <span id="year"></span> FinTech</p>
        </div>
      </div>
    </div>
  </footer>


  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

  </script>
</body>

</html>