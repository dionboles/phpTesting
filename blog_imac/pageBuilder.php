<?php include_once("db.php")?>
<?php 
$id = strip_tags($_GET["id"]);
if(is_numeric($id)){
    $page = $db -> prepare("SELECT * FROM pages WHERE id  = :id AND published = 1");
    $page -> bindParam(":id",$id,PDO::PARAM_INT);
    $page -> query();
    $page -> execute();
    $page = $page -> fetch();
    echo(json_encode($page -> title));
}else{
    echo("failed");
}
exit;

?>