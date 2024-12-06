<?php
// $name = htmlspecialchars($_GET['name'], ENT_QUOTES);
// $product = htmlspecialchars($_GET['product'], ENT_QUOTES);
// $order = htmlspecialchars($_GET['order'], ENT_QUOTES);

// print "私の名前は、" . $name . "<br /" . "ご希望の商品は、" . $product . "<br />" . "注文数は、" . $order;


$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number;
