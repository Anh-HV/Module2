<?php 
if($_SERVER['REQUEST_METHOD'] =='POST') {
    $des = $_POST["description"];
    $price = $_POST["price"];
    $discountPercent = $_POST["discountPercent"];
    $DiscountAmount = $price*$discountPercent*0.1;
    $DiscountPrice=$price-$DiscountAmount;
    echo "Ten San Pham:".$des."<br />";
    echo "Lượng chiết khấu:".$DiscountAmount.
    "Giá sau khi đã được chiết khấu:".$DiscountPrice;
}