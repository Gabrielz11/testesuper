<h1><i class="fas fa-h1 "> LISTAR USUÁRIO </i></h1>
<?php

$objUsuarios = new Usuarios;
$retorno = $objUsuarios->AllUsers();

//trata o sql pra ver se existe algo nele
if ($result = $conn->query($retorno)) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</td>";
    print "<th>Nome</td>";
    print "<th>Username</td>";
    print "<th>CEP</td>";
    print "<th>Email</td>";
    print "</tr>";
    //retorna o resultado através de um loop como objeto para melhorar a estrutura do código.
    while ($obj = $result->fetch_object()) {
        print "<tr>";
        print "<td>" . $obj->id . "</td>";
        print "<td>" . $obj->name . "</td>";
        print "<td>" . $obj->username . "</td>";
        print "<td>" . $obj->zipcode . "</td>";
        print "<td>" . $obj->email . "</td>";
        //estrutura feita para poder editar através do print, necessario ser por javascript no onclick. Onde é passado o id do usuáriodaquela row.
    }
    print "</table>";
} else {
    print "<script> <p class='alert alert-dang'> </p> </script>";
}


?>