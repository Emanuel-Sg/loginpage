<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <div id="main-container">
    <h1>Cadastre-se para acessar o sistema</h1>
    <form id="register-form" action="">
      <div class="full-box">
        <label for="email"></label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <div class="half-box spacing">
          <label for="name"></label>
          <input type="text" name="name" id="name" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="half-box">
          <label for="lastname"></label>
          <input type="text" name="idade" id="idade" placeholder="Digite sua idade" data-required data-only-letters>
      </div>
      <div class="half-box spacing">
        <label for="lastname"></label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha" data-password-validate data-required>
      </div>
      <div class="half-box">
        <label for="passconfirmation"></label>
        <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha" data-equal="password">
      </div>
      <div>
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Registrar">
      </div>
    </form>
  </div>
  <p class="error-validation template"></p>
  <script src="js/scripts.js"></script>
</body>
</html>