  <?php 
              $controller = new ClienteController(); 
              $controller->editarFormulario($id);
              
              ?>
<main role="main" class="flex-shrink-0">
  <!-- adicionar clientes (Verifica se a url contem a requisição e controla a exibição) -->
  <div class="container mt-4">
    <div class="row justify-content-between">
    <div class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
        <h3>Editar cliente</h3>
      </div>
      
    </div>
    <form method="POST" action="?acao=editar&id=<?php echo $id;?>&status=salvar">
      <div class="form-group row mt-2">
        <label for="nome" class="col-3 col-form-label">Nome
          <span class="text-danger">*</span>
        </label>
        <div class="col-9">
          <input id="nome" name="nome" value="<?php echo $controller->getNome(); ?>" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="telefone" class="col-3 col-form-label">Telefone
          <span class="text-danger">*</span>
        </label>
        <div class="col-9">
          <input id="telefone" name="telefone" value="<?php echo $controller->getTelefone(); ?>" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="email" class="col-3 col-form-label">E-mail
          <span class="text-danger">*</span>
        </label>
        <div class="col-9">
          <input id="email" name="email" value="<?php echo $controller->getEmail(); ?>" type="text" class="form-control">
        </div>
      </div>
      <?php if (isset($_SESSION[ 'status']) && $_SESSION[ 'status']==1 ) { ?>
      <div class="alert alert-success mt-2" role="alert">Cliente atualizado com sucesso!</div>
      <?php } elseif(isset($_SESSION[ 'status']) && $_SESSION[ 'status']==0 ){ ?>
      <div class="alert alert-danger mt-2" role="alert">Ocorreu um erro. Verifique se todos os campos foram preenchidos corretamente.</div>
      <?php }?>
      <div class="form-group row">
      <div class="text-center col-12 mt-4">
          <button name="submit" type="submit" class="btn btn-success">SALVAR</button>
          <button name="reset" type="reset" class="btn btn-danger">LIMPAR</button>
          <a href="?acao=listar"><button name="voltar" type="button" class="btn btn-primary">VOLTAR</button></a>
        </div>
      </div>
    </form>
    <hr>
  </div>
</main>