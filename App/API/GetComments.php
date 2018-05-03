<?php

include("../Global-scripts/init.php");
header("Content-Type: application/json; charset=utf-8");
$p=@$_GET['pays'];
$s=@$_GET['subject'];


$query = $conn->prepare("SELECT * from `liste forum` WHERE pays like '".$p."' and sujet like '".$s."'");
$query->execute();
$results=$query->fetchAll(PDO::FETCH_ASSOC);

if($query->rowCount() > 0)
{
    foreach($results as &$v) {
        $v['pays'] = utf8_encode($v['pays']);
        $v['nom'] = utf8_encode($v['nom']);
        $v['images'] = utf8_encode($v['images']);
    }
    echo(json_encode (array('data' => $results, 'code' => "200", 'msg' => "success" )));
}
else echo(json_encode(array('data' => $results, 'code' => "404", 'msg' => "empty" )));
?>




