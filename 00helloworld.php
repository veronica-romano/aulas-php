<?php
    echo ("Hello World!")
    function getGrade ($a, $b, $c){
        // your code here
        $score = ($a + $b + $c) / 3;
        if ($score >= 90 && $score <= 100) {
          return $letterGrade = "A";
        } elseif ($score >= 80 && $score < 90) {
              return $letterGrade = "B";
            } elseif ($score >= 70 && $score < 80) {
                return $letterGrade = "C";
                } elseif ($score >= 60 && $score < 70) {
                  return $letterGrade = "D";
                    } else {
                        return $letterGrade = "F";
                    };
        echo $letterGrade;
    }
?>