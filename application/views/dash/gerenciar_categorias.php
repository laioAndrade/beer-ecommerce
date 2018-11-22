<?= $this->session->flashdata('gravar_dados_bebidas');?>

<div>
   <button data-toggle = "collapse" data-target = "#add-categoria" class = "btn btn-adicionar"><i class = "icon-espaco fa fa-plus"></i>Adicionar nova categoria</button>
</div>

<div class = "collapse margin-top margin-bottom" id = "add-categoria">
    <form method = "POST" action = "/beer-ecommerce/dash/categoria/gravar" id = 'form-add-categoria'>
        <div class = "row add-marca-div">
            <div class = "col-md-4">
                <input name = "descricao_categoria" type = "text" placeholder = "Informe o nome da categoria" class = "form-control" required>
            </div>

            <div class = "col-md-5" id = 'div-add-categoria'>
                <button id = 'btn-add-categoria' type = "submit" class = "btn btn-adicionar form-control"><i class = "icon-espaco fa fa-plus"></i>Gravar</button>
            </div>
        </div>
    </form>
</div>



<div class = "margin-top">
    <p class = "title">Filtre o que deseja ver</p>
    <div class = "row">
        <div class = "col-md-8"><input id = "filtro-categoria" class = "form-control" placeholder = "Pesquise por nome ou onde é aplicada"></div>
    </div>
</div>


<div class = "bebidas margin-top">
    <table class="table table-bordered" id = "tabela-categorias">
        <thead>
            <tr class = "tr-estilo">
                <th class="text-center">ID da categoria</th>
                <th class = "text-center">Nome categoria</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($dados as $dado){ ?>
            <tr>
                <td class = "text-center">#<?=$dado['id_categoria']?></td>
                <td class = "text-center"><?=$dado['descricao_categoria']?></td>

                <td class = "text-center">
                    <button nome-categoria ="<?= str_replace(" ", "_", $dado['descricao_categoria']) ?>" id-categoria ="<?=$dado['id_categoria']?>" class = "btn btn-sm btn-info editar-categoria"><i class = "fa fa-edit"></i></button>
                </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

</div>


</div>

</div>
</div>
</body>

</html>