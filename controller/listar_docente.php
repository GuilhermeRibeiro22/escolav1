<?php
 
// session_start();
// // Verificar se a sessão NÃO existe:
// if(!isset($_SESSION['dados'])){
//   header('Location: login.php');
//   exit();
// }
 
 
require_once('../classes/docente_class.php');
 
 
$c = new Docente();
// Guardar o array de resultado na variavel:
$resultado = $c->Listar();
 
?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <title>Cadastro de Docentes</title>
  </head>
  <body>
    
    <?php
    require_once "../view/menu.html";
    ?>
 
 
<div class="container-fluid">
 
    <div class="row justify-content-end mt-2 clearfix">
      
      
      
      
      <div class="col-1">
        <a href="sair.php" class="btn btn-danger">Sair</a>
      </div>
    </div>
    
    
    
    <table class="table mt-5">
      <thead class="thead-dark">
        <tr>
          <th>id</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        
        <!-- Insira aqui as linhas da tabela com os dados dos docentes -->
        
        <!-- Exemplo de linha da tabela -->
        <?php foreach($resultado as $docente){ ?>
          <tr>
            <td><?=$docente['id_docente'];?></td>
            <td><?=$docente['nome_docente'];?></td>
            <td><?=$docente['email_docente'];?></td>
            <td><?=$docente['telefone_docente'];?></td>
            <td>
           
            <!-- Botões para execução dos modais -->
              <button type="button" class="btn btn-primary" onclick="setAtualizar(<?php echo $docente['id_docente']; ?> , '<?php echo $docente['nome_docente']; ?>' , '<?php echo $docente['email_docente']; ?>' , '<?php echo $docente['telefone_docente']; ?>' )" data-bs-toggle="modal" data-bs-target="#atualizarDocente">Editar</button>
              <button type="button" class="btn btn-danger" onclick="setRemover(<?php echo $docente['id_docente'] ?>)" data-bs-toggle="modal" data-bs-target="#removerDocente" >Excluir</button>
              
              <!-- <button type="button" class="btn btn-danger" onclick="setRemover(<?php echo $docente['id_docente'] ?>)"> EXCLUIR</button> -->
              
              
              
            </tr>
            <?php } ?>
            
            
            <form action="../controller/del_docente.php" method="post">                                                          
              <input type="text" id="id_docente" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#removerDocente"  name="id_docente">                                    
            <!-- </td> -->
            
            
            <!-- Modal Remover Docente -->
            <div class="modal fade" id="removerDocente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Remover Docente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">                    
                    <p id="mod-1">Tem certeza que gostaria de remover o cadastro?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger"> Excluir</button>
                  </div>
                </div>
                                        </div>
                                      </div>
              <!-- Fim do modal -->
                                     
                                      
              </form>                          
                            
              
 
              <!-- <form action="../controller/atualizar_docente.php" method="post">                                                          
              <input type="text" id="id" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#atualizarDocente"  name="id_docente">         -->
 
 
         <!-- Modal Atualizar cadastro docente -->
            <div class="modal fade" id="atualizarDocente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Atualizar Docente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
 
                  <div class="row">
                       <div class="container-fluid">
                             <nav class="nav bg-dark " >
                                <ul class="nav">
                                 </ul>
                              </nav>
                            </div>
                          </div>
 
      
 
                 <div class="row">           
 
                    <div class="col">
               
                         <form action="../controller/atualizar_docente.php" method="post"> 
                         <input type="text" id="docente" class="form-control d-none" aria-describedby="textoSimples" data-bs-target="#atualizarDocente"  name="docente">    
              
 
                           <div class="col mt-5">                
                                  <label for="inputText" class="form-label">Nome</label>
                                  <input type="text" id="nome" class="form-control" aria-describedby="textoSimples" name="nome" require>            
                          </div>
                              
                                   
                           <div class="row">
                             <div class="col-8">
                                   <label for="inputText" class="form-label">Email</label>
                                   <input type="email" id="email" class="form-control" aria-describedby="textoEndereco" name="email" require> 
                             </div>     
                             
                             <div class="col-4">
                               <label for="inputText" class="form-label">Telefone</label>
                               <input type="phonenumber" id="telefone" class="form-control" aria-describedby="textoEndereco" name="telefone" require> 
                            </div>
                      
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger"> Atualizar</button>
                  </div>
                </div>
                                        </div>
                                      </div>
              <!-- Fim do modal -->
 
        </form> <!-- Fim do form atualizar docente -->                      
                                
                                                                 
                                                                     
                                    
                          
                                    
                                    
                                    
                                               
                                    
                                    
             </tbody>
 
        </table>
  </div>
 
  <script>
      function setRemover(id) {          
        document.getElementById('id_docente').value = id; 
      }
 
      function setAtualizar(id , nome , email, telefone) {
 
                      
              //  alert(id)    ;
            document.getElementById('docente').value = id;
            document.getElementById('nome').value = nome; 
            document.getElementById('email').value = email; 
            document.getElementById('telefone').value = telefone; 
      }
      </script>
 
 
 
<script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
 
 
<?php 
include ('../alertas.php'); 
?>
 
 
 
</body>
</html>