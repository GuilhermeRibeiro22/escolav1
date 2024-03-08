[15:04] CAUA SOARES JOSE
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Importar a classe:
    require_once('../classes/docente_class.php');
 
 
 
    // Instanciar um obj do tipo contato:
    $c = new Docente();
 
 
 
    // Definir os valores das suas propriedades:
    $c->id = $_POST['docente'];
    $c->nome = $_POST['nome'];
    $c->email = $_POST['email'];
    $c->telefone = $_POST['telefone'];
 
    if($c->Atualizar() > 0) {
        $c -> Atualizar();
        header('Location: listar_docente.php?msg=7');
        exit();
    } else {
        header('Location: listar_docente.php?erro=7');
        exit();
    }
 
 
}else {
    echo "A página deve ser carregada por POST.<br>";
    echo "<a href=\"../listar_docente.php\">Voltar</a>";
}
 
 
?>