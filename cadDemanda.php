<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: index.php"); exit;
} 
	include_once 'common.php';
    require("conexao.php");
	//ini_set('default_charset','ISO-8859-1');
?>
<!doctype html>
<html>

<head>
    <link rel="icon" href="planader.ico" />
    <link rel="icon" type="image/png" href="https://photos.google.com/u/3/photo/AF1QipPtN3UM1rlxoZS5GNnXpZUXj85bz2DEOa0v9mjD" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>
        <?php echo $lang['PAGE_TITLE'];?>
    </title>

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/alter.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- <link href="css/full-slider.css" rel="stylesheet"> -->


    <link href="css/main.css" rel="stylesheet" />
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet" />

    <!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

    <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/form-contact.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


</head>

<body>

    <nav class="navbar navbar-fixed-top nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            	<span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
			</button>
                <!--                <a class="navbar-brand" href="index.php"><img src="img/background/marca-ifrs-vertical.jpg" alt=""></a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="organizacoes.php">
                           Perfil
                        </a>
                    </li>
                    <li>
                        <?php echo $_SESSION['UsuarioNome']; ?>
                    </li>
                    <b class="text6"> <a href="logout.php">Sair</a></b>
                    <b class="text7">
				</b>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section style="padding-top:20px;" class="" id="login">
        <div class="conteiner">
            <div class="">
                <h2>Cadastro de Demandas</h2>

                <hr style="border-color: #000000;">

                <form action="inserirdemanda.php" method="post" style="margin-left: 50px; margin-top: 20px; margin-bottom: 100px; ">

                    <label>Nome da Organização:</label>
                    <input type="text" name="nomeOrg" size="30" maxlength="20" value=" <?php echo $_SESSION['UsuarioNome']; ?>" readonly="readonly" />

                    <hr>

                    <label>Sobre a demanda:</label>
                    <p>Apresente abertamente o que necessita:</p>
                    <textarea name="demanda" cols="80" rows="5"></textarea>

                    <hr>

                    <label>Assinale a sua sujestão para o atendimento desta demanda:</label><br/>
                    <input type="radio" name="atendimento" value="Via um curso para varios participantes" />Via um curso para vários participantes <br/>
                    <input type="radio" name="atendimento" value="Via um curso in-company" />Via um curso in-company <br/>
                    <input type="radio" name="atendimento" value="Por meio do desenvolvimento de um produto novo" />Por meio do desenvolvimento de um produto novo <br/>
                    <input type="radio" name="atendimento" value="Por meio de uma prestação de servicos" />Por meio de uma prestação de serviço <br/>
                    <input type="radio" name="atendimento" value="Melhoria de algum processo ja identificado" />Melhoria de algum processo já identificado <br/>
                    <input type="radio" name="atendimento" value="Melhoria de processo nao identificado" />Melhoria de processo não identificado

                    <hr>

                    <label>Sobre a urgência no atendimento desta demanda:</label><br/>
                    <input type="radio" name="previsao" value="Menos de 3 meses" />Menos de 3 meses <br/>
                    <input type="radio" name="previsao" value="De 3 a 6 meses" />De 3 a 6 meses <br/>
                    <input type="radio" name="previsao" value="Entre 6 a 9 meses" />Entre 6 a 9 meses <br/>
                    <input type="radio" name="previsao" value="entre 10 a 12 meses" />entre 10 a 12 meses <br/>
                    <input type="radio" name="previsao" value="Pode ser acima de 12 meses" />Pode ser acima de 12 meses <br/><br/>

                    <input type="submit" title="Cadastrar" name="cadastrar" value="Cadastrar" />
                    <input type="reset" title="Limpar" name="limpar" value="Limpar">
                    <a href="organizacoes.php"><input type="button" title="Cancelar" name="sair" value="Calcelar" /></a>
                </form>
            </div>
        </div>
    </section>
    <br/>

    <footer class="footer">
        <div class="container">
            <div class="pull-left">
                <span class="copyright"><?php echo $lang['RODAPE']; ?></span>
            </div>
        </div>
    </footer>


    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#test').scrollToFixed();
            $('.res-nav_click').click(function() {
                $('.main-nav').slideToggle();
                return false

            });

        });

    </script>

    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100
        });
        wow.init();

    </script>


    <script type="text/javascript">
        $(window).load(function() {

            $('.main-nav li a').bind('click', function(event) {
                var $anchor = $(this);

                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 102
                }, 1500, '');
                /*
                if you don't want to use the easing effects:
                $('html, body').stop().animate({
                	scrollTop: $($anchor.attr('href')).offset().top
                }, 1000);
                */
                event.preventDefault();
            });
        })

    </script>

    <script type="text/javascript">
        $(window).load(function() {


            var $container = $('.portfolioContainer'),
                $body = $('body'),
                colW = 375,
                columns = null;


            $container.isotope({
                // disable window resizing
                resizable: true,
                masonry: {
                    columnWidth: colW
                }
            });

            $(window).smartresize(function() {
                // check if columns has changed
                var currentColumns = Math.floor(($body.width() - 30) / colW);
                if (currentColumns !== columns) {
                    // set new column count
                    columns = currentColumns;
                    // apply width to container manually, then trigger relayout
                    $container.width(columns * colW)
                        .isotope('reLayout');
                }

            }).smartresize(); // trigger resize to set container width
            $('.portfolioFilter a').click(function() {
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({

                    filter: selector,
                });
                return false;
            });

        });

    </script>
</body>

</html>
