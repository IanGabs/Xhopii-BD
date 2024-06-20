<?php

require_once "funcoesBD.php";
session_start();

//Cadastro de Cliente
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputDataNasc']) && 
   !empty($_POST['inputTelefone']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSenha'])){

      $nome = $_POST['inputNome'];
      $sobrenome = $_POST['inputSobrenome'];
      $cpf = $_POST['inputCPF'];
      $dataNasc = $_POST['inputDataNasc'];
      $telefone = $_POST['inputTelefone'];
      $email = $_POST['inputEmail'];
      $senha = $_POST['inputSenha'];

      inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);

      header('Location:../view/cadastroCliente.php');
      die();
}

//Cadastro de Funcionario
if(!empty($_POST['inputNomeFunc']) && !empty($_POST['inputSobrenomeFunc']) && 
   !empty($_POST['inputCPFFunc']) && !empty($_POST['inputDataNascFunc']) && 
   !empty($_POST['inputTelefoneFunc']) && !empty($_POST['inputEmailFunc']) &&
   !empty($_POST['inputSalarioFunc']))
   {
      $nome = $_POST['inputNomeFunc'];
      $sobrenome = $_POST['inputSobrenomeFunc'];
      $cpf = $_POST['inputCPFFunc'];
      $dataNasc = $_POST['inputDataNascFunc'];
      $telefone = $_POST['inputTelefoneFunc'];
      $email = $_POST['inputEmailFunc'];
      $salario = $_POST['inputSalarioFunc'];

      inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario);

      header('Location:../view/cadastroFuncionario.php');
      die();
   }

if(!empty($_POST['inputEmailLog']) && !empty($_POST['inputSenhaLog']))
{
   $email = $_POST['inputEmailLog'];
   $senha = $_POST['inputSenhaLog'];

   $cliente = verificarCliente($email, $senha);
   if ($cliente)
   {
      $_SESSION['cliente'] = $cliente;
      header('Location: ../view/home.php');
   }
   else
   {
      header('Location:../view/login.php?error=1');
   }
   die();
}
//esqueci senha
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (isset($_POST['inputRedefinirLog']))
   {
       $email = $_POST['inputRedefinirLog'];

       $cliente = verificarClientePorEmail($email);

       if ($cliente)
       {
           $_SESSION['cliente'] = $cliente;
           header('Location: ../view/home.php');
           die();
       }
       else
       {
           header('Location: senha.php?erro=1');
           die();
       }
   }
}

if(!empty($_POST['inputNomeProd']) && !empty($_POST['inputFabricanteProd']) && 
   !empty($_POST['inputDescricaoProd']) && !empty($_POST['inputValorProd']) && 
   !empty($_POST['inputQuantidadeProd'])){

      $nome = $_POST['inputNomeProd'];
      $fabricante = $_POST['inputFabricanteProd'];
      $descricao = $_POST['inputDescricaoProd'];
      $valor = $_POST['inputValorProd'];                                          
      $quantidade = $_POST['inputQuantidadeProd'];

      inserirProduto($nome, $fabricante, $descricao, $valor, $quantidade);
      
      header('Location:../view/cadastroProduto.php');
      die();
   }
                 
?>