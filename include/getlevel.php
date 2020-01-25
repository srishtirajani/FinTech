<?php
        $level=0;
        $q1 = $_GET['q1'];
        $q2 = $_GET['q2'];
        $q3 = $_GET['q3'];
        $q4 = $_GET['q4'];
        $q5 = $_GET['q5'];
            if($q1=="home")
            {
                $level = "beginner";
                header("Location: ../financialplanningb.php");
            }
            else
            {
                if($q2=="1")
                {
                    $level = "pro";
                    header("Location: ../financialplanningi.php");
                }
                else
                {
                    $level = "intermediate";
                    header("Location: ../financialplanningp.php");
                }
                
            }

?>