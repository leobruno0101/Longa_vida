<?php
session_start();
include("conexao.php");


$numero = $_POST['numero'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];

$con = $_POST['consultar'];
$cad = $_POST['cadastrar'];
$alt = $_POST['alterar'];
$del = $_POST['excluir'];


if($cad == "cadastrar"){
    $sql = "INSERT INTO plano VALUES ('$numero','$descricao','$valor')";

    mysqli_query($conn, $sql);
    
    header("location: plano.php");    

    mysql_close($conn);

}elseif($alt == "alterar"){
    $sql = "UPDATE plano set descricao = '$descricao', valor = '$valor' where numero = $numero";

    mysqli_query($conn, $sql);
    
    header("location: plano.php"); 

    mysql_close($conn);

}elseif($con == "consultar"){
    $sql = "SELECT * from plano where numero = $numero";

    $resultado = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($resultado) > 0){
        $row = mysqli_fetch_assoc($resultado);
        $Snum = $row["numero"];
        $Sdes = $row["descricao"];
        $Sval = $row["valor"];
    }
    header("Location: plano.php?Snum=" . urlencode($Snum) . "&Sdes=" . urlencode($Sdes)."&Sval=" .urlencode($Sval));
    exit();

    mysql_close($conn);

}else{
    $sql = "DELETE from plano where numero = $numero";

    mysqli_query($conn, $sql);
    
    header("location: plano.php"); 

    mysql_close($conn);
}



?>