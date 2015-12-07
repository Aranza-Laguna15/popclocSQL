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
                <form role="form">
                    <div class="col-lg-6">
                        <br>
                        <div class="form-group">
                            <label for="InputName">Nombre</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nombreusuario" placeholder="Nombre" required>
                                <span class="input-group-addon"><span class=""></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Correo</label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="correo" placeholder="Correo electronico" required>
                                <span class="input-group-addon"><span class=""></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword">Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="contraseña" placeholder="Contraseña" required>
                                <span class="input-group-addon"><span class=""></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputAge">Edad</label>
                            <div class="input-group">
                                <select class="form-control">
                                    <option>12</option><option>13</option><option>14</option><option>15</option>
                                    <option>16</option><option>17</option><option>18</option><option>19</option>
                                    <option>20</option><option>21</option><option>22</option><option>23</option>
                                    <option>24</option><option>25</option><option>26</option><option>27</option>
                                    <option>28</option><option>29</option><option>30</option><option>31</option>
                                    <option>32</option><option>33</option><option>34</option><option>35</option>
                                    <option>36</option><option>37</option><option>38</option><option>39</option>
                                    <option>40</option><option>41</option><option>42</option><option>43</option>
                                    <option>44</option><option>45</option><option>46</option><option>47</option>
                                    <option>48</option><option>49</option><option>50</option><option>51</option>
                                    <option>52</option><option>53</option><option>54</option><option>55</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="InputSex">Sexo</label>
                        <div class="radio">
                        <label>
                            <input type="radio" name="sexo" id="optionsRadios1" value="mujer" >
                            Mujer
                        </label>
                        </div>
                        <div class="radio">
                        <label>
                            <input type="radio" name="sexo" id="optionsRadios2" value="hombre">
                            Hombre
                        </label>
                        </div>
                        <div class="radio">
                        <label>
                            <input type="radio" name="sexo" id="optionsRadios3" value="otro">
                            Otro
                        </label>
                        </div
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
