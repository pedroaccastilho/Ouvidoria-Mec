<!DOCTYPE html>
<!-- saved from url=(0138)https://trello-attachments.s3.amazonaws.com/5c83fbf58a11cb51b2b040d3/5cae37d7e498823888aa06b2/403d4804f4d39b9886333091f7b8c217/CadAdm.html -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template
    <link href="form-validation.css" rel="stylesheet">-->
</head>

<body class="bg-light">

    <div class="container">
        <div class="row">

            <div class="col-4"></div>
            <div class="col-6">

                <br><br><br><br><br><br><br><br>
                <h3><u>Login</u></h3><br><br>

                  <form method="post" action={{route('login.entrar')}}>
                    @csrf
                    <div class="form-group row">
                        <label for="Login" class="col-sm-2 col-form-label">Login:</label>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" id="Codigo">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Nome" class="col-sm-2 col-form-label">Senha:</label>
                        <div class="col-sm-6">
                            <input type="text" name="password" class="form-control" maxlength="50" id="Senha" placeholder="*********">
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                    <br>
					<div class="form-group row">
					 <label for="Enviar" class="col-sm-4 col-form-label"></label>
						<div class="col-sm-5">
                    <br><input type="submit" class="btn btn-dark" value="Enviar">
					<button type="reset" class="btn btn-outline-dark">Limpar</button>
					<label for="Enviar" class="col-sm-2 col-form-label"></label>

						 <button type="button" class="btn btn-outline-dark">Denuncia anônima</button>
						</div>
					</div>

                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>



</body></html>
