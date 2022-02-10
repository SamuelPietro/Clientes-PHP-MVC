<main role="main" class="flex-shrink-0">
  <!-- Listagem dos clientes -->
  <div class="container  mt-4">
    <div class="row justify-content-between">
      <div class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
        <h3>Todos os clientes</h3>
      </div>
      
    </div>
    
    <?php if (isset($_SESSION[ 'status']) && $_SESSION[ 'status']==2 ) { ?>
    <div class="alert alert-success mt-2" role="alert">Cliente excluido com sucesso!</div>
    <?php } elseif(isset($_SESSION[ 'status']) && $_SESSION[ 'status']==3 ){ ?>
    <div class="alert alert-danger mt-2" role="alert">Ocorreu um erro ao excluir este cliente.</div>
    <?php }?>
    <div class="table-responsive-md">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">E-mail</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php $controller=new ClienteController(); $controller->criarTabela(); ?></tbody>
    </table>
    </div>
  </div>
</main>