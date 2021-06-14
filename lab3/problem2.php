<!DOCTYPE html>
<html>
<head>
    <title>Problem two</title>
</head>
<body>
    <?php
        $marks=35;
        if($marks>=90)
            {
                echo "The mark is: A+";
            }
        elseif($marks>=80 && $marks<90)
            {
                echo "The mark is: A";
            }
        elseif($marks>=70 && $marks<80)
            {
                echo "The mark is: B";
            }
        elseif($marks>=60 && $marks<70)
            {
                echo "The mark is: C";
            }
        else
            {
                echo "The grade is: F";
            }
    ?>
</body>
</html>