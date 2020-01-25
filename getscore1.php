<?php
        $score=0;
        $q1 = $_GET['q1'];
        $q2 = $_GET['q2'];
        $q3 = $_GET['q3'];
        $q4 = $_GET['q4'];
        $q5 = $_GET['q5'];
            if($q1=="1")
                $score+=1;
            if($q2=="1")
                $score+=1;
            if($q3=="1")
                $score+=1;
            if($q4=="1")
                $score+=1;
            if($q5=="1")
                $score+=1;
        header("Location: solution1.php?score=".$score);
?>