<div class="card-columns">

            <?php
                $cmdSql = "SELECT usuario.*, imagem.link FROM usuario INNER JOIN imagem ON usuario.email = imagem.fk_usuario_email GROUP BY usuario.email;";
                $cxPronta = $cx->prepare($cmdSql); 
                if($cxPronta->execute()){
                    if($cxPronta->rowCount() > 0){
                        $usuarios = $cxPronta->fetchAll(PDO::FETCH_OBJ);
                        foreach ($usuarios as $usuario) {
                            echo'<a class="position-relative" href="?usuario='.$usuario->email.'">
                                <div class="card text-center">
                                    <img class="card-img-top p-4" src="'.$usuario->link.'">
                                    <div class="card-body">
                                    <h5 class="card-title">'.$usuario->nome.'</h5>        
                                    </div>
                                </div>                            
                            </a>';
                            
                        }                        
                    }
                }
            ?>

</div>