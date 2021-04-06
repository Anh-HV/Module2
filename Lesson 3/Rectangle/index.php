<?php include("rec.php"); ?>
<?php 
    $rec = new Rectange(50,30);
    echo $rec->display();
    echo "<br />";
    echo "S = ".$rec->getArea()." CV = ".$rec->getPerimeter();