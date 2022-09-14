<?php
$usuario = $_SESSION['user_logado'];
require_once 'Upload.php';
if(isset($_POST['btnImg'])){
    $up = new Upload($_FILES['foto'],'img/');
    $up->salvarImagem();
}

?>
<div class="container">
    <h2>Seja bem vindo: <?php echo $usuario->nome; ?></h2>

    <form method="POST" class="form-inline" enctype="multipart/form-data"> 
        <input type="file" class="form-control" name="foto" >            
        <button type="submit" name="btnImg" class="btn btn-primary form-control">Enviar IMG</button>
    </form>

    <fieldset>
        <legend>Minha fotos</legend>

        <div class="card-columns">
            <div class="card">
                <img class="card-img-top" src="">                
            </div> 
        </div>

    </fieldset>
</div>