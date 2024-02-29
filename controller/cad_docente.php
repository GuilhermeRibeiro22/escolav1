<?php
session_start();
// Verificar se a página está sendo carregada por POST:
    // if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/docente_class.php');

 

        // Instanciar um obj do tipo contato:
        $c = new Docente();

 

        // Definir os valores das suas propriedades:
        $c->nome = $_POST['nomeDocente'];
        $c->email = $_POST['emailDocente'];
        $c->telefone = $_POST['telefoneDocente'];

 

 

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