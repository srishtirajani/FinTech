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

    <style>
        .chat-body{
            min-height: 500px;
            background: url('images/bng.jpg');
            background-repeat: no-repeat;
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

    <section class="chat-body">
        <table width=100%>
            <tr>
                <td>
                    <div class="row">
                        <div class="col-md-6 m-5">
                            <form class="submit_form" method="post" action="main.php">
                                <h3>Chat Anything Here!</h3>
                                <div class="container p-2">
                                    <div class="container m-2">
                                        <input type="text" name="userPhone" placeholder="Enter Your Phone Number"/>
                                    </div>
                                    <div class="container m-2">
                                        <input type="text" name="message" placeholder="Enter Your Message Here"/>
                                    </div>
                                    <div class="container m-2">
                                        <input type="submit" value="Send" name="s_say"  class="btn btn-primary"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="col-md-6">
                        <div class="container">
                            <table width=100% cellspacing="10" cellpadding="10">
                                <thread>
                                    <tr>                                
                                        <th>Phone No.</th>
                                        <th>Message</th>
                                    </tr>
                                </thread>
                                <?php
                                    include_once 'include/include.php';
                                    $sql3 = "SELECT * FROM messages"; 
                                        // ASC means you're ordering from newest to oldest 
                                        //mysqli_query($conn,$sql3);
                                    $result = $conn->query($sql3);
                                    
                                    if ($result->num_rows > 0) 
                                    {
                                        $id=0;
                                        // output data of each row
                                        
                                        while($row = $result->fetch_assoc())
                                        {
                                            echo "
                                            <thread>
                                                <tr>
                                                    <td>" . $row["userPhone"] . " </td>
                                                    <td> " . $row["message"] ."</td>
                                                </tr>
                                            </thread>";                                     
                                            $id =$id +1;
                                        }                                
                                    } 
                                    $conn->close();
                                    ?>
                            </table>
                        </div>                
                    </div>                    
                </td>
            </tr>
        </table>
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
