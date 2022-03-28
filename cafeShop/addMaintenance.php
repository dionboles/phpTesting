<?php
    require "database.php";
    $type = $_POST["type"];
    $cost = $_POST["cost"];
    $product = $_POST["Product"];
    $order_number = $_POST["Order_Number"];
    $maintenance_Date = $_POST["maintenance_Date"];
    $check = false; 
    $reposnse = [
        "msg" => "",
        "success" => true
    ];
    if (empty($type)){
        $reposnse["msg"] .= htmlentities("Enter a Type of Maintenance <br>");
        $check = false;
    }
    if (empty($cost)){
        $reposnse["msg"] .= htmlentities("Enter a Price Value <br>");
        $check = false;
    }
    if (empty($product)){
        $reposnse["msg"] .= htmlentities("Enter a Product That need work <br>");
        $check = false;
    }
    if (empty($order_number)){
        $reposnse["msg"] .= htmlentities("Enter a Order Number  <br>");
        $check = false;
    }
    if (check == true){
        $data = [
            'Type' => $type,
            'Cost' => $cost,
            'Product' => $product,
            'Order_Number' => $order_number,
            "maintenance_Date" => $maintenance_Date,
        ];
        $sql = "INSERT INTO Maintenance (Type, Cost, Product, Order_Number,maintenance_Date) 
                VALUES (:Type, :Cost, :Product, :Order_Number,:maintenance_Date)";
        $sth = $conn -> prepare($sql);
        $sth ->execute($data);
        $reposnse["msg"] = "Complated";
    }
    echo(json_encode($reposnse));