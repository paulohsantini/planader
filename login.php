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
            <div class="collapse navbar-collapse navbar-ex1-collapse">
            </div>
        </div>
    </nav>

    <section id="login">
        <div class="conteiner" style="padding-top:80px; padding-bottom:120px"> 
            <div>
                <h3 align="center">
                    Entre em sua conta
                </h3>
                <h2>
                    Agora!
                </h2>
                <form action="inserirlogin.php" method="post" align="center">
                    <label><?php echo $lang['LOGIN_EMAIL']; ?></label>
                    <input type="text" name="email" id="email" size="40" maxlength="50" />
                    <br/><br/>

                    <label><?php echo $lang['LOGIN_SENHA']; ?></label>
                    <input type="password" name="senha" id="senha" size="40" maxlength="50" />
                    <br/><br/>

                    <label><input type="submit" title="Entrar" name="entrar" value="Entrar" /></label>
                    <label><a href="index.php"><input type="button" title="Cancelar" name="sair" value="Calcelar" /></a></label>
                    
                </form>
                <br/><br/><br/>    
                <center><label>Não é cadastrado? <a href="index.php#cadastro">Cadastre-se já!</a></label></center>
            </div>
        </div>
    </section>
    

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
