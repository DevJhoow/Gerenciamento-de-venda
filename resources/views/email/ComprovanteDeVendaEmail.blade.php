<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Comprovante de Venda</title>
</head>
<body>

  <h1>Comprovante de Venda</h1>

  <div class="info">
    <p><strong>Produto:</strong> {{ $mailData['produtoNome'] }}</p>
    <p><strong>Cliente:</strong> {{ $mailData['clienteNome'] }}</p>
  </div>

  <div class="footer">
    Obrigado pela sua compra!<br>
    Este é um comprovante gerado automaticamente.
  </div>

</body>
</html>
