<?php 
	include_once 'common.php';
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
                        <a href="index.php">
                            <?php echo $lang['MENU_HOME']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="#historia">
                            <?php echo $lang['MENU_HISTORIA']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="#cadastro">
                            <?php echo $lang['MENU_LABORATORIOS']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="#contato">
                            <?php echo $lang['MENU_CONTATO']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="login.php">
                            Login
                        </a>
                    </li>
                    <b class="text6">
					
				</b>
                    <b class="text7">
				</b>
                </ul>
            </div>
        </div>
    </nav>

    <div id="apresenta" class="conteiner" style="padding-top: 100px; padding-bottom: 120px;">
        <br/>
        <br/>
<!--        <h2 align="center"><i><?php echo $lang['APRESENTACAO6']; ?></i></h2>-->
        <h2 align="center"><i><?php echo $lang['APRESENTACAO7']; ?></i></h2>
        <br/>
        <br/>


        <h2 align="center"><b><?php echo $lang['APRESENTACAO']; ?></b></h2>
        <h3 align="center">
            <?php echo $lang['APRESENTACAO1']; ?>
        </h3>
        <h5 align="center">
            <?php echo $lang['APRESENTACAO5'] ?>
        </h5>
        <div class="col-md-4 wow" style="padding-left: 50px;">
            <p class="text4">
                <?php echo $lang['APRESENTACAO2']; ?>
                <p class="text4">
                    <?php echo $lang['APRESENTACAO3']; ?>
                    <p class="text4">
                        <?php echo $lang['APRESENTACAO4']; ?>
                    </p>
        </div>
    </div>

    <section class="main-section" id="historia" style="padding-bottom: 200px; padding-top: 200px;" >
        <!--main-section-start-->
        <div class="container">
            <div class="row historia">
                <div class="col-md-12">
                    <p>A PLANADER - Plataforma de Apoio ao Desenvolvimento Regional - delineia-se aqui como um ambiente tecnológico que cadastram analisa, aproxima e indica para cada demanda regional, qual(is) entidade(s) e qual(is) projeto(s) seria indicado para atendê-la, respeitando suas prioridades e características.</p>
                    <p>Objetiva atender a dissociação que existe em muitas regiões entre quem precisa de capacitação, produtos, serviços e fomentos diversos, e de quem as oferece. Priorizará o Instituto Federal e suas possibilidades de ações de ensino, pesquisa e extensão, e pode ser implementada em diversas regiões do RS, já que se trata de um ambiente tecnológico que permite cadastros distintos a partir da sua realidade local.</p>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
    </section>


    <section style="padding-top:90px;" class="section-colored" id="cadastro">
        <div class="container">
            <div class="">
                <h3 align="center">
                    <?php echo $lang['CADASTRO']; ?>
                </h3>
                <h2>
                    <?php echo $lang['CADASTRO1']; ?>
                </h2>

                <form action="inserir.php" method="post" class="cad">
                    <table style="width: 1000px;"  class="tabelaCad">
            <tr>
                <th>Nome Organização:</th>
                <td><input type="text" name="nome" size="40" maxlength="30" /></td>
            </tr>
            <tr>
               <th>Site:</th>
                <td><input type="text" name="site" size="30" maxlength="25" /> </td> 
            </tr>
            <th>Email:</th>
            <td colspan="4"><input type="text" name="email" size="50" maxlength="50" /></td>
            <tr>
                <th>CNPJ:</th>
                <td colspan="4"><input type="text" name="cnpj" size="35" maxlength="25" /></td>
            </tr>
            <tr>
                <th>Endereço</th>
                <td colspan="4"><input type="text" name="endereco" size="50" maxlength="50" /></td>
            </tr>
            <tr>
                <th>Cidade:</th>
                <td colspan="4"><input type="text" name="cidade" size="45" maxlength="35" /></td>
            </tr>
            <tr>
                <th>Telefone</th>
                <td colspan="4"><input type="text" name="telefone" size="30" maxlength="20" /></td>
            </tr>
            <tr>
                <th>Ramo:</th>
                <td><input type="radio" name="ramo" value="industria" width="250px" checked="checked" />Indústria
                <input type="radio" name="ramo" value="comercio" width="250px"  />Comércio
                <input type="radio" name="ramo" value="prestadora de servicos" width="250px" />Prestadora de Serviços
                <input type="radio" name="ramo" value="educacao" width="250px" />Educação</td>
            </tr>
            <tr>
                <th>Nome Responsável</th>
                <td colspan="4"><input type="text" name="nomecontato" size="60" maxlength="50" /></td>
            </tr>
            <tr>
                <th>Senha:</th>
                <td colspan="4"><input type="text" name="senha" value="<?php echo gerar_senha(8, false, true, true, false)?>" size="50" maxlength="45" readonly="readonly" /></td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td style="padding-top=20px;" align="center" colspan="5">
                <input type="submit" title="Cadastrar" name="cadastrar" value="Cadastrar" />
                <input type="reset" title="Limpar" name="limpar" value="Limpar">
                </td>
            </tr>
        </table>
                </form>
            </div>
        </div>

    </section>

    <section style="padding-top:90px" class="main-section contact" id="contato">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="clearfix">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.524084409865!2d-52.295059885328854!3d-27.63925263055142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e3146bf4ff2d7b%3A0x55e1c0fe80f707dd!2sInstituto+Federal+de+Educa%C3%A7%C3%A3o%2CCi%C3%AAncia+e+Tecnologia+do+Rio+Grande+do+Sul%2CC%C3%A2mpus+Erechim!5e0!3m2!1spt-BR!2sbr!4v1529617993158" width="550" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="container col-md-6">
                    <div class="address clearfix">
                        <h3><i class="icon-map-marker"></i>
                            <?php echo $lang['CONTATO_ENDERECO']; ?>
                        </h3>
                        <span><?php echo $lang['CONTATO_ENDERECO_ESCRITO']; ?></span>
                    </div><br>
                    <div class="email clearfix">
                        <h3><i class="fa-pencil"></i>
                            <?php echo $lang['CONTATO_EMAIL2']; ?>
                        </h3>
                        <span><?php echo $lang['CONTATO_EMAIL2_ESCRITO']; ?></span>
                    </div><br>
                    <div class="phone clearfix">
                        <h3><i class="fa-phone"></i>
                            <?php echo $lang['CONTATO_TELEFONE']; ?>
                        </h3>
                        <span><?php echo $lang['CONTATO_TELEFONE_ESCRITO']; ?></span>
                    </div><br>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="pull-left">
                <span class="copyright"><?php echo $lang['RODAPE']; ?></span>
            </div>
            <!--
        <div class="pull-right">
            <a class="" href="http://www.wegoo.com.br" target="_blank"> <img title="Wegoo Agência Digital" alt="Wegoo Agência Digital" class="logo_wegoo_rodape pull-right" src="img/go.png" alt=""></a>
        </div>
		-->
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
