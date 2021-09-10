<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 4 período</title>
    <?php include_once "csspadrao.php"; ?>
</head>

<body class="hold-transition login-page" id="pgdegrade">
    <div class="login-box">
        <!-- login  -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <?php include_once "alert.php"; ?>
                 <!-- formulario de login -->
                <form method="post">
                     <!--entrada de email  -->
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Digite seu Celular ou E-mail *">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                     <!--entrada de senha  -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Digite sua senha *">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                         <!--botao de logar  -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fas fa-sign-in-alt"></i>
                                Login
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-4 mb-2 col-12">
                     <!--botao de cadastro  -->
                    <a href="cadastro.php" class="btn btn-success col-12">Ainda não tenho conta</a>
                </p>
                 <!--botao de esquecer senha  -->
                <p class="mt-0">
                    <a href="#" class="text-center">Esqueci a senha</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    <?php include_once "jspadrao.php"; ?>
</body>

</html>