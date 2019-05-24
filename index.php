<?php 
    $titulo = "Doceria - Inicio";

include('src/componentes/cabecalho.php'); ?>
<div class="conteudo central">
            <div class="d-flex justify-content-center">
                <img class="mb-3" src="https://media3.giphy.com/media/oiGCnybFPh6Q8/giphy.gif?cid=790b76115cdcca3068516d756313ba15&rid=giphy.gif"> 
            </div>
            <form action="processabr.php" method="post">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" />
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" />
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-danger" type="submit">Login</button>                  
                </div>                
            </form>
        </div>
<?php include('src/componentes/footer.php'); ?>