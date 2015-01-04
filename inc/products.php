<?php 

function get_list_view_html($product_id, $product) {
    $output = "";

    $output = $output . "<li>";
    $output = $output .  '<a href="shirt.php?id='. $product_id .'">';
    $output = $output .  '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output .  $product["name"];
    $output = $output .  "<p>View Details</p>";
    $output = $output .  "</a>";
    $output = $output .  "</li>";

    return $output;
}

$products = array();
$products[101] = array(
  "name" => "Logo Shirt, Red",
  "price" => 18,
  "img" => "img/shirts/shirt-101.jpg",
  "paypal" => "3687TW34N2BD8",
  "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[102] = array(
    "name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => "5MG8RVXLAXYWL",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "paypal" => "F7AY9EGYHZ7R8",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => "B4JYRJG83NU2S",
     "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "paypal" => "GMBXDHLQ9BMCQ",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "paypal" => "22MJWNUB2MX6Y",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "paypal" => "86GWGCSSUJSNY",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "paypal" => "LBXQNWGFHVMMG",
    "sizes" => array("Large", "X-Large")
);

?>