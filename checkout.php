<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Checkout - Recanto dos Bichos</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    
<body>
    
    <?php include("includes/header.php")?>
        
        <?php require_once 'includes/menu.php'; ?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
        <h2 class="panel-title">Sua compra</h2>
        </div>
        
        <div class="panel-body">
        <dl>
            
            <img src="img/produtos/Racao_Premier_Golden_Senior_Frango.png" alt="Ração Premier Golden">
            
            <dt>Produto</dt>
            <dd><?= $_POST['nome'] ?></dd>
            
            <dt>Preço</dt>
            <dd><?= $_POST['preco'] ?></dd>
            
        </dl>
        
        </div>
    </div>
    
    <form>
        <fieldset>
            <legend>Dados Pessoais</legend>
            
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" autofocus required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
            </div>
            
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
            </div>
            
        </fieldset>
        
        <fieldset>
            
            <div class="form-group">
                <label for="numero-cartao">Numero - CVV</label>
                <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
            </div>
            
            <div class="form-group">
                <label for="bandeira-cartao">Bandeira</label>
                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                    <option value="master">MasterCard</option>
                    <option value="visa">Visa</option>
                    <option value="amex">American Express</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="validade-cartao">Validade</label>
                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
            </div>
            
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="sim" name="spam" checked>
                    Quero receber spam do Recanto dos Bichos.
                </label>
            </div>
        
        </fieldset>
        
        <button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-thumbs-up"></span>
            Confirmar Pedido
        </button>
        
        
    </form>
    
</div>
        <?php include("includes/footer.php")?>
    
</body>

</html>

