<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        
        $objUsuarios = new Usuarios;
        $objUsuarios->name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_SPECIAL_CHARS);
        $objUsuarios->username = filter_input(INPUT_POST, 'username',FILTER_SANITIZE_SPECIAL_CHARS);
        $objUsuarios->zipcode = filter_input(INPUT_POST, 'zipcode',FILTER_VALIDATE_INT);
        $objUsuarios->email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
        
        //deixando a senha mais segura
        $val = [
            'cost' => 10,
        ];
        $passwordsecurity = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_SPECIAL_CHARS);

        //validação da senha
        function verificarSenha($passwordsecurity){
            return preg_match('/[a-z]/', $passwordsecurity) // tem pelo menos uma letra minúscula
            && preg_match('/[0-9]/', $passwordsecurity) // tem pelo menos um número
            && preg_match('/^[\w$@]{8,}$/', $passwordsecurity); //ter pelo menos 8 ou mais caracteres
        }
        if(verificarSenha($passwordsecurity)){
            $objUsuarios->password = password_hash($passwordsecurity, PASSWORD_DEFAULT,$val);
        }else{
            print "<script> alert('Senha precisa ter Uma letra e Um número e ser maior que 8 caracteres');</script>";
        }

        if(!filter_var($objUsuarios->name,FILTER_SANITIZE_SPECIAL_CHARS)){
            $validacao[] = "Nome inválido";
        }
        if(!filter_var($objUsuarios->username,FILTER_SANITIZE_SPECIAL_CHARS)){
            $validacao[] = "username inválido";
        }
        if(!filter_var($objUsuarios->zipcode,FILTER_VALIDATE_INT)){
            $validacao[] = "zipcode inválido";
        }
        if(!filter_var($objUsuarios->email,FILTER_SANITIZE_EMAIL)){
            $validacao[] = "email inválido";
        }
        if(!filter_var($objUsuarios->password,FILTER_SANITIZE_SPECIAL_CHARS)){
            $validacao[] = "password inválido";
        }

        if(empty($validacao)){
            $retorno = $objUsuarios->setUsers($conn);
            if($retorno){
                print "<script> alert('Cadastro realizado com sucesso');</script>";
                print "<script> location.href='?page=listar';</script>";
            }else{
                print "<script> alert('Não foi possível cadastrar');</script>";
                print "<script> location.reaload(); </script>";
            }
        }else{
            foreach($validacao as $erro){
                print "<script> alert('Não foi possível cadastrar');</script>";
            }
        }
        break;
    default:
        echo "Não aconteceu nada";
        break;
}
