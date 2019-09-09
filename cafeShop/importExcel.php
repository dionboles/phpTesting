<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
     $('#example').DataTable({
        "scrollY":        "500px",
        "scrollCollapse": true,
        "paging":         false
     });
    });
</script>
<?php
 require 'vendor/autoload.php';
 include('database.php');
//  $query = $conn->prepare("INSERT INTO users (school_id,firstname,lastname,birthday,active) VALUES (?,?,?,?,?)");
//  $result = $query->fetch(PDO::FETCH_ASSOC);
 use PhpOffice\PhpSpreadsheet\Spreadsheet;
 use PhpOffice\PhpSpreadsheet\IOFactory;
try {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        $inputFileType = 'Xlsx';
        $reader = IOFactory::createReader($inputFileType);
        $value ="customer.xlsx";
        $spreadsheet = $reader->load("./docs/".$value);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        array_shift($sheetData);
        $rows = [];
        $res = $conn->query("SELECT COUNT(DISTINCT school_id) FROM users;");
        if ($res->fetchColumn() == 0) {
            echo("start");
                $conn->beginTransaction();
                for($i=0;$i<count($sheetData);$i++) {
                    $rows[] = ["school_id" =>$sheetData[$i]['A'],
                                    "firstname"=>$sheetData[$i]['B'],
                                    "lastname" => $sheetData[$i]['C'],
                                    "active" => $sheetData[$i]['D'] == null ? 0 : 1 ,
                                    "birthday" => date('Y-m-d H:i:s',strtotime($sheetData[$i]['E']))
                                    ];
                }
                $sql  = "INSERT INTO users SET school_id = :school_id, firstname=:firstname,lastname=:lastname,active=:active,birthday=:birthday;";
                $stmt= $conn->prepare($sql);
                foreach($rows as $row) {
                    $stmt->execute($row);
                }
                $conn->commit();
        }
        echo('<table id="example" class="table table-striped table-bordered" style="width:100%">');
       echo("<thead>
                <tr>
                    <th>School_id</th>
                    <th>Student_Firstname</th>
                    <th>Student_Lastname</th>
                    <th>Student_Active</th>
                    <th>Student_Birthday</th>
                </tr>
            </thead>");
        echo("<tbody>");
        foreach($sheetData as $key => $b){
                echo("<tr>");
                    echo("<td>");
                        print_r($b['A']);
                    echo("</td>");
                    echo("<td>");
                        print_r($b['B']);
                    echo("</td>");
                    echo("<td>");
                        print_r($b['C']);
                    echo("</td>");
                    echo("<td>");
                        print_r($b['D'] == null ? "false" : "true");
                    echo("</td>");
                    echo("<td>");
                        print_r($b['E']);
                    echo("</td>");
                echo("</tr>");
            }
            echo("</tbody>");
            echo('</table>');
        die();
    }catch(Exception $e) {
        print_r($e);
    }
?>
