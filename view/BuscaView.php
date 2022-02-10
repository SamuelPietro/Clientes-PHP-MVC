<main role="main" class="flex-shrink-0">
  <!-- Listagem dos resultados da pesquisa -->
  <div class="container  mt-4">
    <div class="row justify-content-between">
      <div class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
        <h3>Resultados da sua pesquisa</h3>
      </div>
      
    </div>
    

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
        <?php $controller=new ClienteController(); $controller->tabelaBuscar();  ?></tbody>
    </table>
    </div>
  </div>
</main>