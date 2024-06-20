<?php

function conectarBD(){

    $conexao = mysqli_connect("127.0.0.1","root","","xhopii");
    return($conexao);
}

function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){

    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$senha')";

    mysqli_query($conexao, $consulta);
}

function verificarCliente($email, $senha){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $consulta); 

    if (mysqli_num_rows($resultado) > 0)
    {
        return mysqli_fetch_assoc($resultado);
    }
    else
    {
        return false;
    }
}

function retornarClientes(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao, $consulta);
    return($listaClientes);
}

function verificarClientePorEmail($email){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        return mysqli_fetch_assoc($resultado);
    } else {
        return false;
    }
}

function inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario)
{
    $conexao = conectarBD();
    $consulta = "INSERT INTO funcionario (cpf, nome, sobrenome, dataNascimento, telefone, email, salario) VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$salario')";

    mysqli_query($conexao, $consulta);
}

function verificarFuncionario($email)
{
    $conexao = conectarBD();
    $consulta = "SELECT * FROM funcionario WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $consulta);

    if (mysqli_num_rows($resultado) > 0)
    {
        return mysqli_fetch_assoc($resultado);
    }
    else
    {
        return false;
    }

}

function retornarFuncionario()
    {
        $conexao = conectarBD();
        $consulta = "SELECT * FROM funcionario";
        $listaFuncionario = mysqli_query($conexao, $consulta);
        return($listaFuncionario);
    }

function inserirProduto($nome, $fabricante, $descricao, $valor, $quantidade, $imagem)
    {

    $conexao = conectarBD();
    $consulta = "INSERT INTO produto (nome, fabricante, descricao, valor, quantidade, imagem) VALUES ('$nome', '$fabricante', '$descricao', '$valor', '$quantidade', '$imagem')";
    
    mysqli_query($conexao, $consulta);
    }

function retornarProduto()
    {
    $conexao = conectarBD();
    $consulta = "SELECT * FROM produto";
    $listaProduto = mysqli_query($conexao, $consulta);
    return($listaProduto);
    }
?>