<?php
include ('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="../images/logo.png" />
    <title>Pop Cloc </title>
    <link href="../bootstrap-3.3.6-dist/css/dashboard.css" rel="stylesheet">
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../bootstrap-3.3.6-dist/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Pop Cloc</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>

                        <li class="page-scroll">
                            <form class="navbar-form navbar-right">
                                <p class="ar"><?php echo $login_session; ?></p>
                                <a href="logout.php">Salir</a>
                            </form>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="port">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2> Bienvenido </h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#ModalPerfil" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../images/perfil.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#ModalLeccion" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../images/leccion.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#ModalAvances" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../images/avances.png" class="img-responsive" alt="">
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Desarrolladores</h3>
                        <p>Ing. Aranza Laguna</p>
                        <p>Ing. Ivan Flores </p>
                        <p>Ing. Manuel Islas</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Siguenos en las redes sociales</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/Popcloc/" class="btn-social btn-outline facebook"><i class="facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/PopCloc" class="btn-social btn-outline twitter"><i class="twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/pop.cloc/" class="btn-social btn-outline instagram"><i class="instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Descarga nuestra app</h3>
                        <p>No olvides descargar nuestra aplicación movil para tu Android gratis en la <a href="https://play.google.com/store?hl=es_419">Play Store</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="ModalPerfil" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Perfil de usuario</h2>
                            <hr class="star-primary">
		<section class="perfil"><form role="form">
 
				<div class="form-group">
					    <label for="formGroup">Nombre de Usuario</label>
					    <div class="input-group">
					      <input class="form-control" type="text" id="formGroup" value="usuario@usuario" disabled>
                          <span class="help-block">Este nombre está oculto para los demás usuarios.</span>
					    </div>
					  </div>
 
					<div class="form-group">
					    <label for="formGroup">Nombre </label>
					    <div class="input-group">
					      <input class="form-control" type="text" id="formGroup" placeholder="usuario">
					    <span class="input-group-addon"><span class=""></span></span>
                        </div>
					  </div>
 
					  <div class="form-group">
					    <label for="formGroup" >Correo electrónico</label>
					    <div class="input-group ">
					      <span class="input-group-addon">@</span>
					      <input class="form-control" type="text" id="formGroup">
					      
					    </div>
					  </div>
				
					<div class="form-group">
					    <label for="formGroup">Sexo</label>
					    <div class="input-group">
					       <input class="form-control" type="text" id="formGroup" value="sexo" disabled>
					    </div>
					  </div>
						<br />
 
						<div class="form-group">
					    <label class="col-sm-2 control-label" for="formGroup"></label>
					    <div class="input-group">
					    </div>
					  </div>
		</form>	</section>
	</div>

                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="portfolio-modal modal fade" id="ModalLeccion" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Lecciones</h2>
                            <hr class="star-primary">
                            <div class="tabbable tabs-left">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#lA" data-toggle="tab">NIVEL 1</a></li>
                                    <li class="disabled"><a href="#lB" data-toggle="tab" disabled>NIVEL 2</a></li>
                                    <li class="disabled"><a href="#lC" data-toggle="tab">NIVEL 3</a></li>
                                    <li class="disabled"><a href="#lD" data-toggle="tab">NIVEL 4</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="lA">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> BIENVENIDO A POP CLOC</a> </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <p> Pop Cloc te ayuda a mejorar tu ortografía brindandote en una serie
                                                            de lecciones: las reglas ortografícas y gramáticales, con las
                                                            cuales podrás realizar tus ejercicios en tu movíl. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Palabras homófonas
        </a>
      </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <p>Las palabras homófonas son aquellas que se escriben diferente, pero
                                                            suenan igual y tienen un significado distinto entre ellas, por
                                                            ejemplo: </p>
                                                        <p> Ola: Onda de mar / Hola: Saludo </p>
                                                        <p> As: carta o naipe con la letra A / Has: del verbo Hacer </p>
                                                        <p> Baya: una fruta / Vaya: del verbo ir / Valla: es una cerca </p>
                                                        <p> Abría: del verbo abrir / Habría: del verbo Haber </p>
                                                        <p> Tienen igual pronunciación, pero su ortografía es distinta y su significado
                                                            diferente. </p>
                                                        <h4> Recuerda: </h4>
                                                        <p> No confundir con las palabras homógrafas que son las que se pueden
                                                            escribir y sonar igual, pero tienen diferente significado, por
                                                            ejemplo: </p>
                                                        <p> Traje: del verbo traer / Traje: es un atuendo </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Lección 1: Uso de la B y V</a></h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <h3> Uso de la B </h3>
                                                        <p> * Antes de una consonante se escribe <b> B </b>, por ejemplo:</p>
                                                        <p> Ha<b>b</b>lar, Mue<b>b</b>le, <b>B</b>rillo, A<b>b</b>domen, <b>B</b>lando,
                                                            <b>B</b>ronco</p>
                                                        <p> * Verbos que terminan en <b>-aba</b>, por ejemplo: </p>
                                                        <p> Salta<b>b</b>a, explota<b>b</b>a, termina<b>b</b>a, estudiá<b>b</b>amos
                                                            </p>
                                                        <p>* Verbos que terminan en <b>-bir</b> o <b>buir</b>, por ejemplo:
                                                            </p>
                                                        <p> Escri<b>b</b>ir, Reci<b>b</b>ir, Contri<b>b</b>uir, distri<b>b</b>uir
                                                            </p>
                                                        <p> Excepto: Hervir, Servir, Vivir. </p>
                                                        <p>* Palabras con los prefijos <b>bi</b>, <b>bis</b> y <b>biz</b>, por
                                                            ejemplo: </p>
                                                        <p> <b>B</b>icolor, <b>B</b>izcocho </p>
                                                        <p>* Palabras que comienzan con <b>bo</b> y les siguen las letras <b>d</b>,
                                                            <b>f</b>, <b>n</b>, <b>r</b> y <b>t</b>, por ejemplo: </p>
                                                        <p> <b>B</b>otella, <b>B</b>onetería, <b>B</b>odega, <b>B</b>ofetada,
                                                            <b>B</b>ordado </p>
                                                        <p> Excepto: Votar, Voraz. </p>

                                                        <h3> Uso de la V </h3>
                                                        <p> * Después de las letras <b>b</b>, <b>d</b> y <b>n</b>, por ejemplo:</p>
                                                        <p> Ob<b>v</b>iamente, Con<b>v</b>ivir, in<b>v</b>entar</p>
                                                        <p> * Palabras que cominezan con <b>eva</b>, <b>eve</b>,<b>evi</b>, <b>evo</b>,
                                                            por ejemplo: </p>
                                                        <p> e<b>v</b>aporación, e<b>v</b>acuación, e<b>v</b>idente</p>
                                                        <p>* Palabras que comienzan con <b>vice</b>, <b>villa</b>, por ejemplo:
                                                            </p>
                                                        <p> <b>V</b>icepresidente, <b>V</b>illano </p>
                                                        <p> Excepto: Bicentenario, Billar. </p>
                                                        <p>* Después de las sílabas <b>ol</b>, <b>pra</b>, <b>pre</b>, <b>pri</b>,
                                                            <b>pro</b>, por ejemplo: </p>
                                                        <p> Inol<b>v</b>idable, pro<b>v</b>echo, pre<b>v</b>io</p>
                                                        <p>* Palabras que terminan con <b>vira</b>, <b>viro</b>, <b>ívora</b>,
                                                            <b>ívoro</b>, por ejemplo: </p>
                                                        <p> Carní<b>v</b>ro, herbi<b>v</b>ora</p>
                                                        <p> Excepto: Víbora </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         Lección 2: Uso de la C y S</a> </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="panel-body">
                                                        <h3> Uso de la C </h3>
                                                        <p>* Verbos terminados en <b>ciar</b>, <b>cer</b>, <b>cir</b>, por ejemplo:
                                                            </p>
                                                        <p> De<b>c</b>ir, obede<b>c</b>er, abdu<b>c</b>ir </p>
                                                        <p>Excepto: Lisiar, Coser, Toser </p>
                                                        <p>* Sustantivos que terminan en <b>ción</b>,por ejemplo </p>
                                                        <p> Can<b>c</b>ión, aten<b>c</b>ión, decora<b>c</b>ión </p>
                                                        <p>* Antes de <b>c</b> y <b>t</b> al final, por ejemplo: </p>
                                                        <p>Adi<b>c</b>ción, Le<b>c</b>tura </p>
                                                        <p> Cuando terminan en diminutivos <b>cica</b>, <b>cico</b>, <b>cito</b>                                                            y <b>cillo</b>, por ejemplo: </p>
                                                        <p> Peda<b>c</b>illo, hombre<b>c</b>ito </p>

                                                        <h3> Uso de la S </h3>
                                                        <p>* Terminación Superlativa <b>isimo</b>, <b>isima</b>, por ejemplo:
                                                            </p>
                                                        <p> Fuerti<b>s</b>imo, Lenti<b>s</b>imo </p>
                                                        <p>* Palabras que terminan en <b>sión</b> derivadas de las que terminan
                                                            en <b>so</b>, <b>sor</b>, <b>sible</b>, <b>sivo</b>, por ejemplo:
                                                            </p>
                                                        <p> Confu<b>s</b>ión, televi<b>s</b>ión </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFive">
                                                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         Lección 3: Uso de la Z</a> </h4>
                                                </div>
                                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                    <div class="panel-body">
                                                        <h3> Uso de la Z</h3>
                                                        <p>* Se escribe <b>z</b> antes de <b>a</b>, <b>o</b>, <b>u</b> y al
                                                            final de la silaba, por ejemplo: </p>
                                                        <p> <b>Z</b>apato, <b>Z</b>acatecas, antifa<b>z</b> </p>
                                                        <p>* Aumentativos que expresan la idea de un golpe,si terminan en <b>azo</b>                                                            y <b>aza</b>, por ejemplo: </p>
                                                        <p> Taladra<b>z</b>o, clavada<b>z</b>o, navaja<b>z</b>o </p>
                                                        <p>* Las palabras terminadas en <b>izo</b>, <b>iza</b>, <b>izar</b>,
                                                            por ejemplo: </p>
                                                        <p> Eri<b>z</b>ar, ri<b>z</b>os </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="lB">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingSix">
                                                    <h4 class="panel-title">
                                     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> Lección 4: Uso de la G y J</a> </h4>
                                                </div>
                                                <div id="collapseSix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSix">
                                                    <div class="panel-body">
                                                        <h3> Uso de la G </h3>
                                                        <p>* Se utiliza en los verbos que terminan en <b>ger</b>, <b>gir</b>,
                                                            <b>giar</b>, por ejemplo:</p>
                                                        <p> Elo<b>g</b>iar, esco<b>g</b>er, ele<b>g</b>ir </p>
                                                        <p> Excepto: el verbo tejer y sus conjugaciones </p>
                                                        <p>* Palabras que empiezan con <b>geo</b>, por ejemplo: </p>
                                                        <p><b>G</b>eólogo, <b>g</b>eografía, <b>g</b>eografía </p>
                                                        <p>* Palabras que terminan con <b>gia</b> y <b>gio</b> y sus derivados,
                                                            por ejemplo: </p>
                                                        <p> Cole<b>g</b>iatura, <b>g</b>conta<b>g</b>iado </p>
                                                        <p>* Palabras con los prefijos <b>g</b> o <b>g</b>, por ejemplo: </p>
                                                        <p> Ori<b>g</b>inal, mar<b>g</b>inal </p>
                                                        <p> Excepto: Palabras derivadas de la letra j </p>

                                                        <h3> Uso de la J </h3>
                                                        <p>* Sustantivos terminados en <b>je</b>, por ejemplo: </p>
                                                        <p> Mon<b>j</b>e, paisa<b>j</b>e </p>
                                                        <p>Excepto: Cónyuge, faringe, laringe </p>
                                                        <p>* Conjugaciones de los verbos que terminan en <b>ducir</b>, por ejemplo:
                                                            </p>
                                                        <p> Conducir / Condu<b>j</b>e, Deducir / Dedu<b>j</b>e </p>
                                                        <p>* Verbos terminados en <b>jear</b> y sus conjugaciones, por ejemplo:
                                                            </p>
                                                        <p> Co<b>j</b>ear, flo<b>j</b>ear </p>
                                                        <p>* Sustantivos terminados en <b>jero</b> y <b>jería</b>, por ejemplo:
                                                            </p>
                                                        <p> Calle<b>j</b>ero, extran<b>j</b>ero, relo<b>j</b>ería </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingSeven">
                                                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      Lección 5: Uso de la H y sin H
        </a>
      </h4>
                                                </div>
                                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                                    <div class="panel-body">
                                                        <h3> Uso de la H </h3>
                                                        <p>* Todas las palabras que comienzan con <b>idr</b>, <b>iper</b>, <b>ipo</b>,
                                                            por ejemplo: </p>
                                                        <p><b>H</b>idráulico, <b>h</b>idrante, <b>h</b>ipo </p>
                                                        <p>* Silabas que comienzan con <b>om</b>, <b>on</b>, <b>or</b> y <b>er</b>,
                                                            por ejemplo:</p>
                                                        <p><b>H</b>omenaje, <b>h</b>onroso, <b>h</b>ormiga, <b>h</b>ermano</p>
                                                        <p>Excepto: Ernesto, erguir, erudición </p>
                                                        <p>* Antes de <b>ia</b>, <b>ie</b>, <b>ue</b> y <b>ui</b>, por ejemplo:</p>
                                                        <p><b>h</b>ierro, <b>h</b>uerta, <b>h</b>uir</p>
                                                        <p>* Palabras con origen etimológico, por ejemplo:</p>
                                                        <p>Alco<b>h</b>ol, almo<b>h</b>ada, al<b>h</b>ajas </p>
                                                        <p>* Palabras compuestas que empiezan con <b>h</b>, por ejemplo: </p>
                                                        <p> Des<b>h</b>acer, re<b>h</b>acer, des<b>h</b>echo </p>
                                                        <h3> Sin H </h3>
                                                        <p>* No se utiliza la <b>h</b> cuando en los derivados se pierde el
                                                            diptongo al inicio de la palabra, por ejemplo: </p>
                                                        <p> orfandad /<b>h</b>uérfano, óseo / <b>h</b>ueso </p>
                                                        <p>* Algunas palabras sin <b>h</b> cambian su significado, por ejemplo:
                                                            </p>
                                                        <p> Errar: equivocarse / <b>h</b>errar: poner herraduras, ay: exclamación
                                                            / <b>h</b>ay: del verbo haber </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingEight">
                                                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          Lección 6: Uso de la M-N, Y-LL, R-RR</a></h4>
                                                </div>
                                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                                    <div class="panel-body">
                                                        <h3> Uso de la M </h3>
                                                        <p> * Antes de <b>p</b>, <b>b</b> y <b>n</b>, por ejemplo:</p>
                                                        <p> a<b>m</b>plio, a<b>m</b>biente, hi<b>m</b>no</p>

                                                        <h3> Uso de la N </h3>
                                                        <p>* Antes de <b>f</b>, <b>m</b> y <b>v</b>, por ejemplo:</p>
                                                        <p>E<b>n</b>fermedad, i<b>n</b>memorable, i<b>n</b>vertir </p>
                                                        <p>* Cuando una palabra empieza con <b>n</b> y con prefijos <b>en</b>,
                                                            <b>in</b>, la <b>n</b> se escribe doble, por ejemplo:</p>
                                                        <p>I<b>nn</b>ovador, i<b>nn</b>erente</p>

                                                        <h3> Uso de la Y </h3>
                                                        <p>* Al final de una palabra que termina en diptongo pero no tiene acentuación,
                                                            por ejemplo: </p>
                                                        <p> Le<b>y</b>, Ho<b>y</b>, re<b>y</b></p>


                                                        <h3> Uso de la LL </h3>
                                                        <p> * Verbos que terminan en <b>llir</b>, <b>llar</b>, por ejemplo:</p>
                                                        <p> Zambu<b>ll</b>ir, atrope<b>ll</b>ar, engu<b>ll</b>ir </p>
                                                        <p> * Palabras que terminan en <b>illo</b>, <b>illa</b>, <b>ello</b>,
                                                            <b>ella</b>, por ejemplo: </p>
                                                        <p> Pasi<b>ll</b>o, maravi<b>ll</b>a, paneci<b>ll</b>o, sombri<b>ll</b>a,
                                                            estre<b>ll</b>a, bote<b>ll</b>a </p>
                                                        <p>* Palabras que comienzan con <b>vice</b>, <b>villa</b>, por ejemplo:
                                                            </p>
                                                        <p> <b>V</b>icepresidente, <b>V</b>illano </p>
                                                        <p> Excepto: Bicentenario, Billar. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="lC">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingNine">
                                                    <h4 class="panel-title">
                                     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine"> 
                                         Lección 7: Parónimos</a> </h4>
                                                </div>
                                                <div id="collapseNine" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingNine">
                                                    <div class="panel-body">
                                                        <p>Los parónimos son palabras muy parecidas en su pronunciación y escritura
                                                            pero muy diferentes en su significado.</p>
                                                        <p> Para los que están aprendiendo nuevos idiomas pueden resultarles
                                                            dificil entenderlos, ya que si no se habla claro puede resultar
                                                            en confusiones, aqui unos ejemplos de palabras parónimas:</p>
                                                        <p> Adaptar: Ajustar / Adoptar: Adquirir </p>
                                                        <p> Adición: Añadidura o agregación de una cosa a otra / Adicción: Dependencia
                                                            del organismo de alguna sustancia o droga a la que se ha habituado
                                                            </p>
                                                        <p> Asunción: Aceptación, admisión / Ascensión: Subida, elevación. </p>
                                                        <p> Laso: estar cansado o carente de fuerzas / Laxo: Conjugación de laxar</p>
                                                        <p> Espiar: Observar o escuchar a escondidas lo que alguien dice o hace
                                                            / Expiar: Borrar las culpas por medio de algún sacrificio.</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTen">
                                                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
      Lección 8: Palabras juntas o separadas
        </a>
      </h4>
                                                </div>
                                                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                                    <div class="panel-body">
                                                        <p>En el idioma español existen palabras que se escriben juntas o separadas
                                                            dependiendo de la expresión.</p>
                                                        <p>Al escribirlas juntas o separas cambia totalmente la idea de lo que
                                                            se quiere comunicar, por ejemplo las siguientes palabras:</p>
                                                        <p> Abordo: pertenece al verbo abordar/ A bordo: Modo adverbial que refiere
                                                            a estar en un barco</p>
                                                        <p> Acerca de: en relación a, con respecto a / Cerca de: proximidad</p>
                                                        <p> A cuestas: cargar sobre la espalda / Acuestas: del verbo acostarse</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingLect">
                                                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseLect" aria-expanded="false" aria-controls="collapseLect">
      Lectura adicional: Un sueño extraño – Uso de homónimos y parónimos (Liana Castello, escritora argentina.)
        </a>
      </h4>
                                                </div>
                                                <div id="collapseLect" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLect">
                                                    <div class="panel-body">
                                                        <p>Soñé un sueño muy extraño. Soñé que las cosas cobraban vida y sucedían
                                                            hechos como estos:</p>

                                                        <p>Un mimo me hacía un mimo, mientras un perro de caza buscaba una linda
                                                            casa donde vivir. Una ola de mar me saludaba diciéndome “hola”,
                                                            mientras un sobre cerrado se apoyaba sobre mi regazo con algún
                                                            mensaje que jamás supe de qué se trataba porque no lo abrí.</p>
                                                        <p>Yo quería tomar un té de alguna rica hierba, pero no pude porque
                                                            la hierba huyó corriendo. Seguro que no quería que la hiervan
                                                            y por eso escapó.</p>
                                                        <p>Me miraba los vellos del brazo, dándome cuenta que nada bellos me
                                                            parecían y de pronto escucho un ruido muy fuerte. Alguien grita
                                                            “ay” y yo pregunto: “¿Hay alguien por allí? Me doy cuenta que
                                                            el tubo de ensayos con el que estaba haciendo experimentos cayó
                                                            al suelo y me preguntó qué motivos tuvo para haberse caído, pero
                                                            me callo y lo pienso en silencio.</p>
                                                        <p>Escucho una voz muy extraña, alguien me llama, pero no me doy cuenta
                                                            quién es. Es una llama color caramelo que me dice: Cierra la
                                                            ventana niño, veo la sierra y me pongo nostálgica.</p>
                                                        <p>De pronto, estoy en el campo con muchos caballos y debo herrar herraduras,
                                                            son muchas y tengo miedo de errar. Cuando termino mi tarea, le
                                                            digo a mi caballo preferido: Vaya pingo vaya, corra tras las
                                                            vallas porque él también estaba cansado y necesitaba distraerse.</p>
                                                        <p>Vuelvo a mi casa, quiero entrar, pero la puerta no abría, me pregunto:
                                                            ¿No habría que buscar otra llave?</p>
                                                        <p>Como este sueño es muy entraño, voy a tomar nota de él. Me sentaré
                                                            en un banco y mientras canto una linda canción, haré una lista
                                                            de todos los personajes que han intervenido. Va a ser extraño
                                                            hacer un cuento con este sueño, pero se lo mostraré a mi maestra
                                                            y seguramente ella podrá enseñarme lo que de él debo aprender.</p>
                                                        <p>Fin</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="lD">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingUno">
                                                    <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseUno" aria-expanded="false" aria-controls="collapseUno">
          Lección 9: Reglas de acentuación
        </a>
      </h4>
                                                </div>
                                                <div id="collapseUno" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingUno">
                                                    <div class="panel-body">
                                                        <h3> Acentuación </h3>
                                                        <p> Las acentuaciones se utilizan para diferenciar las palabras que puedan
                                                            llegar a escribirse de la misma forma, pero que tienen un significado
                                                            diferente; dependiendo del lugar de acentuación se clasifican
                                                            en 4 tipos: </p>
                                                        <p> La sílaba tónica es la sílaba de la palabra en la que se produce
                                                            la acentuación.</p>
                                                        <table class="table table-bordered ">
                                                            <thead class="hed">
                                                                <tr>
                                                                    <th>Clasificación </th>
                                                                    <th>¿Cuándo se usa? </th>
                                                                    <tr>
                                                            </thead>
                                                            <tr>
                                                                <td>Agudas</td>
                                                                <td>Cuando la sílaba tónica es la última sílaba.</br> Cuando
                                                                    terminan en vocal o las consonantes <b>n</b> o <b>s</b>.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Llanas o Graves </td>
                                                                <td>Cuando la sílaba tónica es la penúltima sílaba. </br> Cuando
                                                                    terminan en consonante que no sea <b>n</b> o <b>s</b>.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Esdrújulas </td>
                                                                <td>Cuando la sílaba tónica es la antepenúltima sílaba </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sobreesdrújulas </td>
                                                                <td>Cuando la sílaba tónica es la anterior a la antepenúltima
                                                                    sílaba</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingDos">
                                                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
          Lección 10: Signos de puntuación
        </a>
      </h4>
                                                </div>
                                                <div id="collapseDos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDos">
                                                    <div class="panel-body">
                                                        <p>El punto <b>(.)</b>, la coma <b>(,)</b>, el punto y coma <b>(;)</b>, los dos puntos <b>(:)</b> y los puntos suspensivos <b>(...)</b> se escriben siempre sin dejar un espacio de separación con respecto a la palabra o el signo que precede, y separados por un espacio de la palabra o el signo que sigue, a no ser que este sea de cierre.</p>
                                                        <p>Los signos dobles, como los de interrogación <b>(¿?)</b> y exclamación <b>(¡!)</b>, los paréntesis <b>()</b>, los corchetes <b>([])</b>, las comillas <b>(“”)</b>, todos ellos compuestos por un signo de apertura y uno de cierre.</p>
                                                        <table class="table table-bordered ">
                                                            <thead class="hed">
                                                                <tr>
                                                                    <th>Signo </th>
                                                                    <th>¿Cuándo se usa? </th>
                                                                    </tr>
                                                            </thead>
                                                            <tr>
                                                                <td>Punto (.)</td>
                                                                <td>Señala una pausa al final de un enunciado.</br> 
                                                                Después de una abreviatura.</br>
                                                                Punto y seguido: separa enunciados de un párrafo.</br>
                                                                Punto y aparte: separa dos párrafos distintos.</br>
                                                                Punto final: cierra un texto.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Coma (,) </td>
                                                                <td>Indica una pausa breve dentro de un enunciado. </br> 
                                                                Para separar miembros de una enumeración.</br>
                                                                Para separar miembros gramaticalmente equivalentes dentro de un enunciado.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dos puntos(:) </td>
                                                                <td>Detienen un discurso para avisar sobre lo que sigue.</br>
                                                                    Después de una enumeración. </br>
                                                                    Antes de las citas textuales.</br>
                                                                    En una relación causa-efecto.</br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Punto y coma (;) </td>
                                                                <td>
                                                                    Indica una pausa superior a la coma e inferior a un punto.</br>
                                                                    Separa proposiciones yuxtapuestas, cuando ya se ha usado la coma.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Puntos suspensivos (...)</td>
                                                                <td>Suponen una interrupción de una oración o un final indefinido.</br>
                                                                    Después de enumeraciones incompletas.</br>
                                                                    Cuando se quere dar a entender un momento de duda, temor o vacilación.</br>
                                                                    Cuando se interrumpe un enunciado.</br>
                                                                    Para dejar un enunciado incompleto y/o en suspenso.</br>
                                                                    Cuando se escribe una cita textual, omitiendo alguna parte.</br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Signos de interrogación (¿ ?) y signos de exclamación (¡ !)</td>
                                                                <td>(¿ ?): Para delimitar preguntas directas.</br>
                                                                    (¡ !): Para marcar enunciados exclamativos</br>
                                                                    Siempre deben ponerse los signos de apertura (¿ ¡) al inicio.</br>
                                                                    Después de los singos de cierre (? !) nunca se escribe punto.</br>
                                                                    Los signos de cierre entre parentesis expresan (?): duda o (!): ironia.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Parentesis ( ) y corchetes [ ]</td>
                                                                <td>Encierran elementos complementarios o aclaratorios de un enunciado.</br>
                                                                    Para interrumpir el sentido de un discurso, aclarando o complementandolo. </br>
                                                                    Para señalar algun lugar o fecha.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Comillas inglesas (" ") / simples (' ') / españolas o latinas(« »)</td>
                                                                <td> Para reproducir citas textuales de cualquier extensión.</br>
                                                                    Cuando se ha de intercalar un comentario o intervención del narrador o transcriptor de una cita. </br>
                                                                    Para citar títulos de artículos, poemas, cuadros, etc. </br>
                                                                    Cuando se aclara el significado de una palabra, en este caso se prefiere el uso de comillas simples.
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /tabbable -->
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="ModalAvances" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Tus avances</h2>
                            <hr class="star-primary">
                            <table class="table table-bordered ">
                                                            <thead class="hed">
                                                                <tr>
                                                                    <th>Actividad</th>
                                                                    <th>Calificación</th>
                                                                    <tr>
                                                            </thead>
                                                            <tr>
                                                                <td>Lección 1</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lección 2</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lección 3</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Exámen Nivel 1</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lección 4</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lección 5</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lección 6</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Exámen Nivel 2</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lección 7</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lección 8</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Exámen Nivel 3</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lección 9</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lección 10</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Exámen Nivel 4</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Exámen Final</td>
                                                                <td>No concluido</td>
                                                            </tr>
                                                        </table>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../bootstrap-3.3.6-dist/libs/jquery-1.11.3.js"></script>
    <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</body>
</html>
