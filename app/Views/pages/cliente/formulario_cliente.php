        <div class="card">
            <div class="card-header">
                Cliente - Cadastro/Edição
            </div>
            <div class="card-body">
            <!-- voltar em js -->
            <p><a href="javascript:history.back()">Voltar</a></p>
                <!-- formulario do codeigniter 4 -->
                <?php echo form_open('cliente/store') ?>

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" value="<?php echo isset($dadosCliente) ? $dadosCliente['nome']: '' ?>" name="nome" id="nome" class="form-control" require>

                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"   value="<?php echo isset($dadosCliente) ? $dadosCliente['email'] : '' ?>" class="form-control" name="email" id="email"require>

                </div><br>
                <button type="submit" class="btn btn-primary" value="salvar">salvar</button>
                <!-- campo hider id para ele altera              se existir              fasa  se nao      vazio              -->
                <input type="hidden" name="id" value="<?php echo isset($dadosCliente) ? $dadosCliente['id'] : '' ?>">
                <?php echo form_close() ?>
            </div>
        </div>
        </div>
        <div>