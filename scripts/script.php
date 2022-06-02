<?php
    if (!empty($_GET['id'])){

    require_once './connect.php';
    $id=$_GET['id'];
    $sql="SELECT `nazwa`,`port`,`opis` FROM `protokol` WHERE `id` =".$id.";";
    $result = $connect->query($sql);
    echo "<table>";
    echo "<tr>";
    echo "<th>nazwa</th>";
    echo "<th>port</th>";
    echo "<th>opis</th>";
    echo "</tr>";
    
    while($user = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$user['nazwa']."</td>";
        echo "<td>".$user['port']."</td>";
        echo "<td>".$user['opis']."</td>" ;
        echo "</tr>";
    }
    $connect ->close();
    $resp['status'] = "1";
    $resp['message'] = "GJ";
    }

    else{
    $resp['status'] = "0";
    $resp['message'] = "Wybierz protokol";
    }
            $response["response"] = $resp;
            echo json_encode($response);

?>