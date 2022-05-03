<?php
    echo ("Hello World!")


    function getGrade($a, $b, $c) {
        // your code here
        $score = ($a + $b + $c) / 3;
        
        if ($score >=90 && $score <= 100){
          $letterGrade = 'A';
        } else if ($score >= 80 && $score < 90){
          $letterGrade = 'B';
          } else if ($score >= 70 && $score < 80){
            $letterGrade = 'C';
            }else if ($score >= 60 && $score < 70){
              $letterGrade = 'D';
               }else{
                $letterGrade = 'F';
                 }
        }
      }
?>