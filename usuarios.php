<?php 
    include './cabecalho.php' ;
    $titulo = "Usuario";

    include './conexao.php';
    $query = "Select id, nome, login, ativo from usuarios ";
    $resultado = mysqli_query($conexao,$query)  ;  
?>
    <div class="card mt-4 mb-4 ">
            <div class="card-header bg-dark text-white">Cliente</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2"><a href="./new_usuario.php" type="button" class="btn btn-secondary">Novo Usuario</a></div>
                    <div class="col-2">
                        <select name="opcao" class="form-control"> 
                            <option value="0">Todos</option>
                            <option value="1">Por Nome</option>
                            <option value="2">Por Codigo</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="TextoPesquisado">
                    </div>
                    </div>
                    <div class="col-2"><button type="button" class="btn btn-secondary">Pesquisar</button></div>
                </div>
            </div>
    </div>
<table class="table table-dark table-hover table-striped">
    <thead>
        <tr>
            
                <td> ID</td>
                <td> Nome</td>
                <td> Login</td>
                <td> Ativo</td>
                <td> Editar </td>
                <td> Deletar</td>
            
        </tr>
    </thead>
    <tbody>
        <?php 
            while($linha = mysqli_fetch_array($resultado))
            {
                ?>

                <tr>
                    <td><?php echo $linha['id'] ?></td>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['login'] ?></td>
                    <td>
                        <?php 
                            if($linha['ativo']==1)
                            {
                                ?>
                                <input type="checkbox" checked disabled />
                                <?php
                            }
                            else
                            {
                                ?>
                                <input type="checkbox" disabled>
                                <?php
                            }
                                
                            
                        ?>
                    </td>
                    <td>
                        <a class='btn btn-warning' href="./usuariosEdit.php"></a>
                    </td>

                    <td>
                        <a class='btn btn-danger' href="./usuariosDelete.php"></a>
                    </td>

                </tr>

                <?php
            }
        ?>

    </tbody>
</table>


<?php include 'rodape.php'?>