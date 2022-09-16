<h1><i class="fas fa-h1 "> ADICIONAR NOVO USUÁRIO </i></h1>


<form action="?page=salvar" method="post">
            <input type="hidden" name="acao" value="cadastrar">
            <div class="mb-3">
                <label for="" class="form-label">Nome Completo:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Ex: Gabriel Aires" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nome de Login</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Ex: gabriel123" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">CEP</label>
                <input type="number" id="zipcode" name="zipcode" class="form-control" placeholder="Ex: 77023029" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ex: example@admin.com " required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Senha</label>
                <input type="password" id="password" name="password" class="form-control"  required>
            </div>
           
            <div class="mb-3">
                <button type="submit" class="btn-primary" placeholder="">Cadastrar</button>
            </div>
      </form>
