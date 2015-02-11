<!DOCTYPE HTML>
<!--
        Overflow by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />        
        <script src="js/pace.min.js"></script>
        <link href="css/barraGif.css" rel="stylesheet" />
              <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.scrolly.min.js"></script>
        <script src="js/jquery.poptrox.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/init.js"></script>
        <script src="js/jquery.easing-1.3.js"></script>
        <script src="js/jquery.iosslider.min.js"></script>        
        <script type="text/javascript">
            $(document).ready(function() {
                $('.iosSlider').iosSlider({
                    snapToChildren: true,
                    desktopClickDrag: true
                });
            });
        </script>        
        <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />        
        </noscript>        
        <link rel="stylesheet" href="css/common.css" />
        <link rel="stylesheet" href="css/default.css" />        
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

    </head>
    <body>
        <div class = 'sliderContainer'>

            <div class = 'iosSlider'>

                <div class = 'slider'>

                    <div class = 'item item1'>   
                        <div class="contenedor">
                            <!-- Header -->
                            <section id="header">
                                <header>
                                    <h1>TaxiCall</h1>
                                    <p>Solicita tu Taxi &nbsp; &DoubleRightArrow;</p><br/> 
                                </header>
                                <footer>
                                    <a href="#banner" class="button style2 scrolly scrolly-centered">Procede A Nuestra Empresa</a>
                                </footer>
                            </section>

                            <!-- Banner -->
                            <section id="banner">
                                <header>
                                    <h2>Empresa</h2>
                                </header>
                                <p>Empresa Dedicada al transporte en la ciudad de Loja con el<br />
                                    objetivo de cumplir a totalidad las necesidades y exigencias <br />
                                    de la sociedad lojana</p><hr/>
                                <div class="12u" style="height: 200px; overflow: hidden;">
                                    <div id="map-canvas" style="height: 200px;"></div>
                                </div>
                                <footer>
                                    <a href="#first" class="button style2 scrolly">Procede a Nuestra Misión</a>
                                </footer>
                            </section>

                            <!-- Feature 1 -->
                            <article id="first" class="container box style1 right">
                                <a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
                                <div class="inner">
                                    <header>
                                        <h2>Misión</h2>
                                    </header>
                                    Misión, dar soluciones con garantía de calidad,<br/>
                                    eficiencia y proveer de comodidad, a cada uno<br/>
                                    de nuestros distinguidos clientes                                    
                                </div>
                            </article>

                            <!-- Feature 2 -->
                            <article class="container box style1 left">
                                <a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
                                <div class="inner">
                                    <header>
                                        <h2>Visión</h2>
                                    </header>
                                    <p>
                                        Ser una empresa reconocida a nivel nacional por<br/>
                                        el servicio de movilidad en la modalidad de taxi, cuyo<br/>
                                        sinónimo sea de eficiencia y continuo mejoramiento en la<br/>
                                        calidad de servicio que brinda, considerando que las mejoras<br/>
                                        a nuestras unidades contribuirá al medio ambiente.
                                    </p>
                                </div>
                            </article>

                            <!-- Portfolio -->
                            <article class="container box style2">
                                <header>
                                    <h2>Ciudad de Loja</h2>
                                    <p>Algunos de los lugares Turisticos<br />
                                        Mas visitados</p>
                                </header>
                                <div class="inner gallery">
                                    <div class="row 0%">
                                        <div class="3u"><a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div>
                                        <div class="3u"><a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
                                        <div class="3u"><a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" alt="" title="Raven" /></a></div>
                                        <div class="3u"><a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
                                    </div>
                                </div>
                            </article>

                            <!-- Contact -->
                            <article class="container box style3">
                                <header>
                                    <h2>Contactenos</h2>
                                    <p>Puede contactar con nosotros para mayor informacion</p>
                                </header>
                                <form method="post" action="#" >
                                    <div class="row 50%">
                                        <div class="6u"><input type="text" class="text" name="name" placeholder="Nombre" /></div>
                                        <div class="6u"><input type="text" class="text" name="email" placeholder="Email" /></div>
                                    </div>
                                    <div class="row 50%">
                                        <div class="12u">
                                            <textarea name="message" placeholder="Descripción ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="12u">
                                            <ul class="actions">
                                                <li><input type="submit" value="Enviar" /></li>
                                            </ul>
                                        </div>                                        
                                    </div>                                    
                                </form>
                            </article>

                            <section id="footer">
                                <ul class="icons">
                                    Telefono: xxx xxx xxx                                    
                                </ul>
                                <div class="copyright">
                                    <ul class="menu">
                                        <li>&copy; TaxisCall. All rights reserved.</li>
                                    </ul>
                                </div>
                            </section>
                        </div>                                                                                               
                    </div>
                    <div class = 'item item2'>                        
                        <div class="contenedor">                            
                            <style type="text/css">                                
                                #map-canvas { margin:0 auto;height: 50px; width: 100%;}
                            </style>
                            <article class="container box style3" style="margin-top: 5%;height:90%;">
                                <div id="pag1">
                                    <header>
                                        <h2>Iniciar Session</h2>                                        
                                    </header>                                    
                                    <form method="post" action="#" id="form-Login">
                                        <div class="row 50%">
                                            <div class="6u"><input type="text" class="text" name="usuario" id="usuario" placeholder="usuario" /></div>
                                            <div class="6u"><input type="text" class="text" name="clave" id="clave" placeholder="clave" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="12u">
                                                <ul class="actions">
                                                    <li><input type="button" value="Iniciar Sessión" id="btn_logueo" /></li>
                                                </ul>  
                                            </div>
                                        </div>                                        
                                        <hr/>
                                        <div class="row">
                                            <div class="12u">
                                                <ul class="actions">
                                                    <li><input type="button" value="Resgistrarse" id="btn_registrar" style="background: #ff3333" /></li>
                                                </ul>  
                                            </div>
                                        </div>                                        
                                    </form>                                      
                                </div>

                                <div id="pag2" style="display:none;">
                                    <header>
                                        <h2>Registro Usuario</h2>
                                    </header>
                                    <form method="post" id="formRegistro">
                                        <div class="row 50%">
                                            <div class="6u"><input type="text" class="text" name="cedula" id="cedula" placeholder="cedula" required="true"/></div>
                                            <div class="6u"><input type="text" class="text" name="nombre" id="nombre" placeholder="nombre" required="true"/></div>
                                        </div>
                                        <div class="row 50%">
                                            <div class="6u"><input type="text" class="text" name="apellido" id="apellido" placeholder="apellido" required="true"/></div>
                                            <div class="6u"><input type="text" class="text" name="direccion" id="direccion" placeholder="direccion" required="true"/></div>
                                        </div>
                                        <div class="row 50%">
                                            <div class="12u"><input type="text" class="text" name="telefono" id="telefono" placeholder="telefono" required="true"/></div>
                                        </div>
                                        <div class="row">
                                            <div class="12u">
                                                <ul class="actions">
                                                    <li><input type="button" value="Resgistrarse" id="btn_guardarReg" style="background: #ff3333" /></li>
                                                    <li><input type="button" value="Atras" id="btn_atras" style="background: green" /></li>
                                                </ul>  
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div id="pag3" style="display:none;">
                                </div>
                            </article>
                            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
                            <script src="js/mapsLocal.js"></script>
                            <script src="js/mapsCliente.js"></script>
                            <script src="js/comprobacionInternet.js"></script>
                            <script src="js/eventos.js"></script>
                            <script src="js/ajaxPost.js"></script>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </body>
</html>


