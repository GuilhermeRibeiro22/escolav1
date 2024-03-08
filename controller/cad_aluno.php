<?php
session_start();
// Verificar se a página está sendo carregada por POST:
    // if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/aluno_class.php');

 

        // Instanciar um obj do tipo contato:
        $c = new Aluno();

 

        // Definir os valores das suas propriedades:
        $c->nome = $_POST['nomeAluno'];
        $c->email = $_POST['emailAluno'];
        $c->telefone = $_POST['telefoneAluno'];
        $c->cep = $_POST['cepAluno'];
        $c->rua = $_POST['ruaAluno'];
        $c->bairro = $_POST['bairroAluno'];
        $c->estado = $_POST['estadoAluno'];
        $c->cidade = $_POST['cidadeAluno'];
        $c->pais = $_POST['paisAluno'];

 

 

        try{
            $c->Inserir();
        
            exit();

 

 

        }catch(PDOException $e) {
          
 


        }

 


        // echo "Contato cadastrado com sucesso!";
        // Redirecionar o jovem de volta à agenda:       
        
        
    //     echo '
    //     <script> 
    //       alert("cadastro realizado com sucesso !!!" );
         
    //   </script>';
      

 

        // header('Location: ../cad_docente.html');
        // exit();
    // }else{
    //     echo "Você precisa estar logado e essa página deve ser carregada por POST!";
    // 
}

 


?>