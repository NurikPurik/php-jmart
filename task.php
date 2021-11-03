<?php

$products = [
    [
        "name" => "X-Box One",
        "price" => 450000.00,
        "amount" => 15
    ],
    [
        "name" => "IPhone X",
        "price" => 560000.00,
        "amount" => 6
    ],


];

function my_function(&$data, $percent)
{
    if(empty($data)) {
        return $data;
    }
    
    foreach($data as $key => $product) {
        if(isset($product['price']) && !empty($product['price'])) {
            $data[$key]['price'] = $product['price'] + ($product['price'] * ($percent / 100));
        }
    }
}
my_function($products, 2);

print_r($products);

