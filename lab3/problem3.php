<!DOCTYPE html>
<html>
<head>
    <title>Problem three</title>
</head>
<body>
        <?php
        $length=20;
        $width=20;
        $perimeter=2*($length + $width);
        $area=($length*$width);
        
        echo "Area of the rectangle is $area";
        echo "<br>";
        echo "Perimeter of the rectangle is $perimeter";
        echo "<br>";

        if( $length == $width)
            {
                echo "The shape is a square";
            }
        ?>
</body>
</html>