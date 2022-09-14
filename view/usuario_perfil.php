<?php
$usuario = $_SESSION['user_logado'];
?>
<div class="container">
    <h1>Seja bem vindo: <?php echo $usuario->nome; ?></h1>

    <fieldset>
        <legend>Minha fotos</legend>

        <div class="card-columns">
            <div class="card">
                <img class="card-img-top" src="">                
            </div> 
        </div>
        
    </fieldset>
</div>