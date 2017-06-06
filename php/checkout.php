<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout Mirror Fashion</title>
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/script-1.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/converteMoeda.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style-3-bootstrap.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-header">
    <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" alt="logo" /></a>
   
   <button class="navbar-toggle" type="button"
    data-target=".navbar-collapse" data-toggle="collapse">
         <span class="glyphicon glyphicon-th"></span>
    </button>
  </div>
  <ul class="nav navbar-nav collapse navbar-collapse">
    <li><a href="sobre.php">Sobre</a></li>
    <li><a href="#">Ajuda</a></li>
    <li><a href="#">Perguntas frequentes</a></li>
    <li><a href="#">Entre em contato</a></li>
  </ul>
</nav>
    <div class="container"> 
        <div class="jumbotron">
        	<h1>Ótima escolha!</h1>
        	<p>Obrigado por comprara na Mirror Fashion!
        	    Preencha os dados para efetivar sua compra.</p>
        </div>      
    </div>

    <div class="container">
        <div class="row">
           <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2>Sua compra</h2>	
                        <div class="panel-body">
                        <img src="../img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive hidden-xs">
                            <dl>
                            	<dt>Produto</dt>
                            	<dd><?= $_POST['nome'] ?></dd>

                        		<dt>Preço</dt>
                        		<dd><?= $_POST['preco'] ?></dd>

                            	<dt>Cor</dt>
                            	<dd><?= $_POST['cor'] ?></dd>

                            	<dt>Tamanho</dt>
                            	<dd><?=  $_POST['tamanho']?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <form class="col-sm-8">
                <div class="row">
                    <fieldset class="col-md-6">
                        <legend>Dados Pessoais</legend>
                        <div class="form-group">
                            <label for="nome">NOME: </label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome Completo" autofocus  />
                        </div>

                        <div class="form-group">
                            <label for="email">EMAIL:</label>                    
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" id="email" name="email"/>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00">
                        </div>

                        <div class="form-group">
                            <label for="spam">Receber boletim de noticias da Mirro Fashion: </label>
                            <input type="checkbox" name="spam"  value="sim">

                        </div>
                    </fieldset>
               
                    <div class="row">
                        <fieldset class="col-md-6">
                            <legend>Cartão de crédito</legend>

                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <input type="text" name="numero-cartao" id="numero-cartao" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select name="bandeira-cartao" id="bandeira-cartao" class="     form-control">
                                    <option value="master">MasterCard</option>
                                    <option value="visa">VISA</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <input type="month" class="form-control" name="validade-cartao" id="validade-cartao"/>                
                            </div>                    
                        </fieldset>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg pull-right">
                        <span class="glyphicon glyphicon-ok"> Confirmar</span>
                    </button>
                </div>  
            </form>
        </div>
    </div>
</body>
</html>