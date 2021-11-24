<script>
    function confirma(){
        if (!confirm('Deseja Excluir ?')) {
            return false
        }
        return true;
    }
</script>
<div class="card">
    <div class="card-header">
        Clientes Cadastrados
    </div>
    <div class="card-body">
        <table class="table table-hover">
           <p> <?php echo anchor('/', 'Pagina Inicial') ?> </p>
            <tr class="text-white bg-dark">
                <th>Id:</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Acão</th>
            </tr>
            <?php foreach($clientes as $cliente): ?>
            <tr>
                <td><?php echo $cliente['id'] ?></td>
                <td><?php echo $cliente['nome'] ?></td>
                <td><?php echo $cliente['email'] ?></td>
                <td>
                <?php echo anchor("cliente/edit/{$cliente['id']} ", 'Editar') ?> | <!-- editar  -->
                <?php echo anchor("cliente/delete/{$cliente['id']} ", 'Excluir', ['onclick' => 'return confirma()']) ?><!--chama a fun cofirma  -->                
               </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>