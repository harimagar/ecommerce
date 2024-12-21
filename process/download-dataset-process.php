<?php

$data_to_downlaod = [
    ["event_time","order_id","product_id","category_id","category_code","brand","price","user_id"],
];
$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
$sql = mysqli_query($conn, "SELECT o.order_date, o.order_id, o.item_id, o.category_id, c.category_code, i.brand, i.item_price, o.customer_id FROM order_tbl o, item i, category c where i.item_id = o.item_id and o.category_id = c.category_id;");

while($data = mysqli_fetch_array($sql)){

    $data_to_downlaod[] = [$data['order_date'], $data['order_id'], $data['item_id'], $data['category_id'], $data['category_code'], $data['brand'], $data['item_price'],$data['customer_id'] ];
    $order_id = $data['order_id']; 
    
}

// Set headers to initiate file download
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename="dataset.csv"');

// Open PHP output stream as a file
$output = fopen('php://output', 'w');

// Write data to CSV file
foreach ($data_to_downlaod as $row) {
    fputcsv($output, $row);
}

// Close the output stream
fclose($output);
exit();
?>