<div class="card-columns mt-4">

            <?php
                $cmdSql = "SELECT usuario.*, imagem.link FROM usuario INNER JOIN imagem ON usuario.email = imagem.fk_usuario_email GROUP BY usuario.email;";
                $cxPronta = $cx->prepare($cmdSql); 
                if($cxPronta->execute()){
                    if($cxPronta->rowCount() > 0){
                        $usuarios = $cxPronta->fetchAll(PDO::FETCH_OBJ);
                        foreach ($usuarios as $usuario) {
                            echo'<a class="position-relative" href="?usuario='.$usuario->email.'">
                                <div class="card text-center pt-5 px-5">
                                    <img class="card-img-top " src="'.$usuario->link.'">
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