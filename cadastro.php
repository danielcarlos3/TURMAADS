<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <?php include_once "csspadrao.php"; ?>
</head>

<body>

    <body class="hold-transition register-page" id="pgdegrade">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                </div>
                <div class="card-body">
                    <?php include_once "alert.php"; ?>
                    <!-- formulario de cadastro -->
                    <form method="post" name="frmcadastro" id="frmcadastro">
                        <div class="input-group mb-3">
                            <input required autofocus name="edtnome" id="edtnome" type="text" class="form-control" placeholder="Digite seu nome e sobre nome*" require>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <!-- entrade de email -->
                        <div class="input-group mb-3">
                            <input name="edtemail" id="edtemail" type="email" class="form-control" placeholder="Digite seu endereço de e-mail*" require>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <!-- entrada de senha -->
                        <div class="input-group mb-3">
                            <input name="edtsenha" id="edtsenha" type="password" class="form-control" placeholder="Digite sua senha*" require>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <!--campo de termos de uso -->
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input name="edttermos" name="edttermos" type="checkbox" id="agreeTerms" name="terms" value="agree" >
                                    <label for="agreeTerms">
                                        Estou de acordo com todas as condições, <a class="primary" data-toggle="modal" data-target="#modal-default">Leia os termos</a>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <!-- botao de salvar -->
                        <div class="social-auth-links text-center">
                            <button name="bntsalvar" id="bntsalvar" type="submit" class="btn btn-block btn-primary">
                                <i class="fas fa-plus mr-2"></i>
                                Salvar
                            </button>
                        </div>
                    </form>
                    <!--botao de cancelar  -->
                    <div class="social-auth-links text-center">
                        <a href="login.php" type="button" class="btn btn-block btn-warning">
                            <i class="fas fa-ban"></i>
                            Cancelar
                        </a>
                    </div>
                    <!-- termos de uso -->
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">TERMOS DE USO</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p> CONSIDERANDO QUE A ACEITAÇÃO DESTES TERMOS E CONDIÇÕES GERAIS É ABSOLUTAMENTE INDISPENSÁVEL À UTILIZAÇÃO DO SOFTWARE.

                                        CONSIDERANDO QUE AO CLICAR NA CAIXA QUE INDICA SUA CONCORDÂNCIA VOCÊ ESTARÁ ACEITANDO OS TERMOS, DECLARANDO QUE LEU E CONCORDOU COM A VERSÃO MAIS RECENTE DOS TERMOS DE USO DO SOFTWARE, VINCULANDO-SE AUTOMATICAMENTE ÀS REGRAS AQUI CONTIDAS.

                                        Considerando que é necessário que o Usuário leia os presentes Termos de Uso, atentando-se para todas as normas e políticas a ele relacionadas, incluindo suas normas específicas, restrições de uso e outros procedimentos ou condições antes de efetivar a contratação.

                                        CONSIDERANDO QUE OS PRESENTES TERMOS DE USO FORAM DISPONIBILIZADOS INICIALMENTE NA DATA DE 09/02/2018 e encontram-se registrados no Cartório de Registro de Títulos e Documentos Civis de Pessoa Jurídica da Comarca de Caxias do Sul/RS, sob o nº 262875, do Livro B nº 154, anulando e substituindo os demais contratos porventura anteriores a este.

                                        Considerando que este Contrato entra em vigor em relação ao Usuário na data em que este clicar no botão “Aceito”, sendo esta a considerada “data efetiva” da contratação.

                                        Considerando que o Usuário declara estar ciente de que as operações que correspondam à aceitação do presente Contrato, de determinadas condições e opções, bem como eventual rescisão do presente instrumento e demais alterações, serão registradas nos bancos de dados do SOFTWARE, juntamente com a data e hora em que foram realizadas pelo Usuário, podendo tais informações serem utilizadas como prova pelas partes, independentemente do cumprimento de qualquer outra formalidade.

                                        Considerando que o SOFTWARE não presta consultoria profissional relacionada às áreas jurídica, financeira, contábil, fiscal, ou de outros serviços ou consultoria profissional, devendo o Usuário consultar os serviços de um profissional competente quando precisar desse tipo de assistência.

                                        Considerando que se o Usuário estiver aceitando este Termo em nome de terceiros, este declara e garante que: (i) tem plena autoridade legal para sujeitar seu empregador (ou a entidade em questão) a estes termos e condições; (ii) leu e entendeu este Contrato e (iii) concorda, em nome da parte que você representa, com os termos deste Contrato.

                                        Considerando que a METADADOS se reserva o direito de alterar este Contrato a qualquer momento e que as alterações entrem em vigor quando divulgadas por meio de seu website ou quando informar o Usuário por outros meios. Nestes casos, a continuação do uso pelo Usuário indicará sua concordância com as alterações.
                                    </p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        
        <!-- Valida os dados do forulário e caso seja valido salva os dado no banco de dados -->
        <?php include_once "jspadrao.php"; ?>
    </body>

</html>