<?php

 require "database.php";
 $sql = 'SELECT 
 (SELECT COUNT(*)  FROM Users WHERE gender = "M") as men , 
 (SELECT COUNT(*)  FROM Users WHERE gender = "F") as woman  
 FROM Users Limit 1';
 $sth = $conn -> query($sql);
 $sth ->execute();
 $men = null;
 $woman = null;
 while ($rawCampaign = $sth->fetch()) {
 $men = $rawCampaign["men"];
 $woman = $rawCampaign["woman"];
 }

 $sql = 'SELECT DISTINCT(ethnicity) , 
 (SELECT COUNT(*) FROM Users WHERE ethnicity ="African American"  ) as "AfricanAmerican" ,
 (SELECT COUNT(*) FROM Users WHERE ethnicity ="Caucasian" ) as "Caucasian" ,
 (SELECT COUNT(*) FROM Users WHERE ethnicity ="Asian" ) as "Asian"
 FROM Users';
 $sth = $conn -> query($sql);
 $sth ->execute();
 $AfricanAmerican = null;
 $Caucasian = null;
 $Asian = null;

 while ($rawCampaign = $sth->fetch()) {
    $AfricanAmerican = $rawCampaign["AfricanAmerican"];
    $Caucasian = $rawCampaign["Caucasian"];
    $Asian = $rawCampaign["Asian"];
}

$sql = "SELECT AGE , COUNT(*) AS `num` FROM Users GROUP BY AGE";
$sth = $conn -> query($sql);
$sth ->execute();
$ageArray = [];

while ($rawCampaign = $sth->fetch()) {
    $ageArray[$rawCampaign['AGE']] = $rawCampaign["num"];
}


$sql = "SELECT income,Age FROM Users GROUP BY income";
$sth = $conn -> query($sql);
$sth ->execute();
$incomeArray = [];
$income_AGE_Array = [];
while ($rawCampaign = $sth->fetch()) {
    array_push($incomeArray,$rawCampaign['income']);
    array_push($income_AGE_Array,$rawCampaign['Age']);
}

/*
a. Chart 1: Gender
b. Chart 2. Ethnicity
c. Chart 3: Age
d. Chart 4: Income 
*/
?>

<?php include("./header.php")?>
<?php   $bgColor = "bg-dark"; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<div class="contanter">
    <div class="display-1 text-center bg-info text-white">
        Audit
    </div>
    <div class="row bg-light">
        <div class="col-sm-4">
            <canvas id="Gender"></canvas>
        </div>
        <div class="col-sm-4">
            <canvas id="Ethnicity"></canvas>
        </div>
        <div class="col-sm-4">
            <canvas id="Age"></canvas>
        </div>
        <div class="col-sm-4">
            <canvas id="Income"></canvas>
        </div>
    </div>
</div>
<script>
var ctx_Ethnicity = document.getElementById('Ethnicity').getContext('2d');
var Ethnicity_Chart = new Chart(ctx_Ethnicity, {
    type: 'bar',
    data: {
        labels: ['African American','Caucasian',"Asian"],
        datasets: [{
            label: 'Number of Ethnicitys',
            data: 
                <?php
                echo("[".$AfricanAmerican.",".$Caucasian.",".$Asian."]");
                unset($AfricanAmerican,$Caucasian,$Asian);
                ?>
                ,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
var ctx_Gender = document.getElementById('Gender').getContext('2d');
var Gender_Chart = new Chart(ctx_Gender, {
    type: 'bar',
    data: {
        labels: ['M','F'],
        datasets: [{
            label: 'Number of Woman To Men',
            data: 
                <?php
                echo("[".$men.",".$woman."]");
                unset($men,$woman);
                ?>
                ,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
var ctx_Age = document.getElementById('Age').getContext('2d');
var Age_myChart = new Chart(ctx_Age, {
    type: 'line',
    data: {
        
        labels: 
        <?php 
            echo("[");
            foreach ($ageArray as $key => $value) {
                echo( $key.",");
            }
            echo("]");
            ?>,
        datasets: [{
            label: 'Members age',
            data: 
                <?php
                echo("[");
                    foreach ($ageArray as &$value) {
                        # code...
                        echo($value);
                        echo(",");
                    }
                 echo("]");
                 unset($value);
                ?>
                ,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx_Income = document.getElementById('Income').getContext('2d');
var Income_myChart = new Chart(ctx_Income, {
    type: 'line',
    data: {
        
        labels: 
        <?php 
            echo("[");
            foreach ($income_AGE_Array as $key => $value) {
                echo( $value.",");
            }
            echo("]");
            ?>,
        datasets: [{
            label: 'Income Data',
            data: 
                <?php
                echo("[");
                    foreach ($incomeArray as &$value) {
                        # code...
                        echo($value);
                        echo(",");
                    }
                 echo("]");
                 unset($value);
                ?>
                ,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }, 
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(255, 99, 132)'
            }
        }
    }
});
</script>
<?php include("./footer.php")?>
