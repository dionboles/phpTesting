<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        include("./Coffee.php");
        include("./Student.php");
        // $b = new Bicycle;
        // $b -> setBrand("test");
        // $b -> year = "2018"; 
        // $b -> model = "test";
     
        // $b -> setWeight_Lbs(1.5);
        // var_dump($b);

        // echo $b -> name();

        $b = new Coffee;
        $b -> setTemp(200);
    //    echo "Temp ".$b -> getTemp();
        // var_dump($b);

        $a = new Student;
    //     echo $a :: add_student();
    //    echo $a :: count();
        for ($i=0; $i < count($a::$grades) ; $i++) { 
            # code...
            echo($a::$grades[$i]);
        }
    //    foreach ($a::$grades as $key => $value) {
    //        print($value."<br>");
    //    }
        // var_dump($a);
    ?>
</body>
</html>