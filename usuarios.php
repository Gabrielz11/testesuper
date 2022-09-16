<?php
class Usuarios{
    //declaracao de variaveis publicas
    public $name;
    public $username;
    public $zipcode;
    public $email;
    public $password;
    public int $insert_id;

    //não era necessário criar uma classe porém na atividade pede, vi muito tarde, para agilizar o processo fiz a chamada do metodo no save passando a conexão.
    //essa não é a melhor forma. utilizando PDO e utilizando a classe seria o mais indicado.
    public function setUsers($conn){
        //criar o sql para inserção no banco
        //o retorno traz um booleano diferente do pedido no exemplo, porém como é um exemplo segui esse caminho.
        $sql = "INSERT INTO usuarios (name,username,zipcode,email,senha) VALUES ('{$this->name}','{$this->username}','{$this->zipcode}','{$this->email}','{$this->password}')";
        $result = $conn->query($sql);
        return $result;
    }

    //somente utilizado para criar a query e retornar a query pronta, porém se tivesse necessidade de mais alguma mudança na parte de negócio seria interessante utilizar este método.
    //porém é curto utilizando direto no arquivo seria mais rápido, porém seguindo o exemplo demonstrado tentei deixar o mais parecido possível. 
    public function AllUsers(){
        $sql  = "SELECT * FROM usuarios";
        return $sql;
    }

}
?>