<!DOCTYPE html>
<html>
<head>
    <title>Problem two</title>
</head>
<body>
    <?php
        $marks=45;
        if($marks>=90)
            {
                echo "The mark is: A+";
            }
        elseif($marks>=80 and $marks<90)
            {
                echo "The mark is: A";
            }
        elseif($marks>=70 and $marks<80)
            {
                echo "The mark is: B";
            }
        elseif($marks>=60 and $marks<70)
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