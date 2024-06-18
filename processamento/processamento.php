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


?>