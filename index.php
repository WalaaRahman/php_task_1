<?php
    $num1=10;
    $num2=5;
    $operator='0'; 

    switch ($operator) {
        case '+':
            # code...
            $result=$num1+$num2;
            echo 'Result = '.$result;
            break;
        
        case '-':
            # code...
            $result=$num1-$num2;
            echo 'Result = '.$result;
            break;
    
        case '*':
            # code...
            $result=$num1*$num2;
            echo 'Result = '.$result;
            break;
        case '/':
            # code...
            $result=$num1/$num2;
            echo 'Result = '.$result;
            break;
                    
        default:
            # code...
            echo "Please Choose any operator + ,- ,* or /";
            break;
    }


?>