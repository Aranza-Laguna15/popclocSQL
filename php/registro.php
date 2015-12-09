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
                                <a href="../index.php">Ya tengo una cuenta</a>
                            </form>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <section class="registro">
        <div class="container">
            <div class="row">
                <h2>¡Registrate ahora!</h2>
                <form accept-charset="UTF-8" role="form" action="registrer.php" method="POST">
                    <div class="col-lg-6">
                        <br>
                        <div class="form-group">
                            <label for="InputName">Nombre</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                                <span class="input-group-addon"><span class=""></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Correo</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="correo" placeholder="Correo electronico" required>
                                <span class="input-group-addon"><span class=""></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword">Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
                                <span class="input-group-addon"><span class=""></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputAge">Edad</label>
                            <div class="input-group">
                                <select class="form-control" name="edad">
                                    <option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>
                                    <option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option>
                                    <option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option>
                                    <option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
                                    <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                    <option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option>
                                    <option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option>
                                    <option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option>
                                    <option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
                                    <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option>
                                    <option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="InputSex">Sexo</label>
                        <div class="radio">
                        <label>
                            <input type="radio" name="sexo" id="optionsRadios1" value="Mujer" >
                            Mujer
                        </label>
                        </div>
                        <div class="radio">
                        <label>
                            <input type="radio" name="sexo" id="optionsRadios2" value="Hombre">
                            Hombre
                        </label>
                        </div>
                        </div>
                        <input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-enviar pull-right">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="../bootstrap-3.3.6-dist/libs/jquery-1.11.3.js"></script>
    <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</body>

</html>
