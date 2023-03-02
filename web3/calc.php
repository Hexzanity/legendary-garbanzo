<html>
<head><title>Calculation Result</title></head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $val1 = $_POST["val1"];
        $val2 = $_POST["val2"];
        $calc = $_POST["calc"];
        # test if input is_numeric
        if(is_numeric($val1) && is_numeric($val2)){
            # test if calc is not null
            if(!empty($calc)){
                # switch statement for value of calc
                switch($calc){
                    case "add":
                        $result = $val1 + $val2;
                        break;
                    case "sub":
                        $result = $val1 - $val2;
                        break;
                    case "mul":
                        $result = $val1 * $val2;
                        break;
                    case "div":
                        if($val2 == 0){
                            $result = "undefined";
                        }
                        else{
                            $result = $val1 / $val2;
                        }
                        break;
                }
                echo "Calculation result: $result";
            }
            else{
                echo "Please select an arithmetical operation.";
            }
        }
        else{
            echo "Invalid entry - please Enter all the needed information and retry.";
        }
    }
?>
</body>
</html>