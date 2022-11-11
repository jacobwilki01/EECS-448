<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtain values
$username = $_GET["username"];
$password = $_GET["password"];
$item1 = $_GET["item1"];
$item2 = $_GET["item2"];
$item3 = $_GET["item3"];
$shipping = $_GET["shipping"];

//Shipping Stuff
if ($shipping == "Free"){
    $shipping = "Seven Days (Free)";
    $shipping_total = 0;
} else if ($shipping == "$5") {
    $shipping = "Three Days ($5)";
    $shipping_total = 5;
} else {
    $shipping = "Overnight ($50)";
    $shipping_total = 50;
}

// Do math
$total1 = $item1 * 15;
$total2 = $item2 * 700;
$total3 = $item3 * 3;
$total = $total1 + $total2 + $total3 + $shipping_total;

//Print table
echo "<table border=1 align='center'><tr><th colspan='2'>Receipt</th><td colspan='2'>" . $username . ", thanks for shopping with us. Your password is " . $password . ".</td></tr>";
echo "<tr><td>Item</td><td>Quantity</td><td>Cost per Item</td><td>Subtotal</td></tr>";
echo "<tr><td>Kitchen Timer</td><td>" . $item1 . "</td><td>$15</td><td>$" . $total1 . "</td></tr>";
echo "<tr><td>Fancy Laptop</td><td>" . $item2 . "</td><td>$700</td><td>$" . $total2 . "</td></tr>";
echo "<tr><td>Coca-Cola</td><td>" . $item3 . "</td><td>$3</td><td>$" . $total3 . "</td></tr>";
echo "<tr><td colspan='2'>Shipping</td><td>" . $shipping . "</td><td>$" . $shipping_total . "</td></tr>";
echo "<tr><td colspan='3'>Total Cost</td><td>$" . $total . "</td></tr></table>";
?>