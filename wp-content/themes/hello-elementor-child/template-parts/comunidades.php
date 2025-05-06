<?php
/*
Template Name: "Comunidades"
*/
get_content();
get_header(); ?>


<body>
    <main>
        <section class="seccion_titulo">
            <div class="contenedor_titulo">
                <h1 class="titulo"><span class="h1_border">BIENVENIDO A SIXSPORT:</span> <span class="h1_resaltado">Tu Comunidad Deportiva</span></h1>
            </div>

            <div class="flexbox_container">
                <div class="contenedor_parrafo">
                    <p class="parrafo_inicio">En <strong>SixSport</strong>, conectamos a personas apasionadas por el deporte, creando un espacio único para quienes desean compartir, aprender y motivarse mutuamente. Únete a nuestra comunidad y forma parte de un entorno lleno de personas con intereses similares. Aquí podrás compartir experiencias, consejos y desafíos con atletas y entusiastas como tú.

                        Ya sea que busques mejorar tu estado físico, superar tus propios límites o disfrutar de la naturaleza, SixSport tiene una comunidad para ti:

                        <li class="elementos_lista"><strong>Fitness:</strong> Si tu objetivo es mejorar tu salud y fuerza a través de rutinas de ejercicio físico, nuestra comunidad de Fitness es el lugar perfecto para ti. Encontrarás motivación, guías y consejos de entrenadores y otros entusiastas para ayudarte a alcanzar tus metas, ya sea en el gimnasio o en tu propio hogar.</li>

                        <li class="elementos_lista"> <strong>Ciclismo:</strong> Para los amantes del ciclismo, ya sea en ruta o montaña, nuestra comunidad de Ciclismo te ofrece un espacio para compartir rutas, aventuras y consejos sobre bicicletas y equipo. Conoce a otros ciclistas que comparten tu pasión por las rutas exigentes, ya sea por carretera o en terrenos más desafiantes.</li>

                        <li class="elementos_lista"> <strong>Montañismo:</strong> Si eres un amante de la naturaleza y los desafíos al aire libre, la comunidad de Montañismo es para ti. Comparte tus aventuras en la montaña, desde el senderismo hasta el alpinismo, y aprende sobre nuevas rutas, equipos y técnicas para disfrutar de la naturaleza en su forma más pura.</li>
                    </p>
                </div>

                <div class="contenedor_imagen">
                    <img src="montaña.png" class="carrusel_imagen activa" id="imagen1" alt="Montañismo">
                    <img src="ciclismo.jpg" class="carrusel_imagen" id="imagen2" alt="Ciclismo">
                    <img src="fitness.png" class="carrusel_imagen" id="imagen3" alt="Fitness">

                    <button class="boton_carrusel boton_izquierda" onclick="cambiarImagen(-1)">&#10094;</button>
                    <button class="boton_carrusel boton_derecha" onclick="cambiarImagen(1)">&#10095;</button>

                    <p class="parrafo_imagen">Supera tus límites y alcanza tus metas con nosotros</p>
                </div>
            </div>
        </section>

        <section class="seccion_tabla">
            <div class="contenedor_tabla">
                <h3>COMUNIDADES DISPONIBLES</h3>
                <table class="tabla">
                    <thead>
                        <tr class="fila_encabezado">
                            <th>COMUNIDAD</th>
                            <th>DEPORTE</th>
                            <th>LUGAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fila">
                            <td onclick="window.location.href='fitness.html'"><strong>Fitness</strong></td>    
                            <td onclick="window.location.href='fitness.html'"><strong>Yoga</strong></td>                         
                            <td onclick="window.location.href='fitness.html'" class="celda">
                                <span class="texto_celda"><strong>Madrid</strong></span>
                                <img src="flecha.png" class="img_flecha" alt="Flecha">
                            </td>                         
                        </tr>
                        <tr class="fila">
                            <td onclick="window.location.href='ciclismo.html'"><strong>Ciclismo</strong></td>    
                            <td onclick="window.location.href='ciclismo.html'"><strong>MTB</strong></td>     
                            <td onclick="window.location.href='ciclismo.html'" class="celda">
                                <span class="texto_celda"><strong>Barcelona</strong></span>
                                <img src="flecha.png" class="img_flecha" alt="Flecha">
                            </td>
                        </tr>
                        <tr class="fila">
                            <td onclick="window.location.href='montaña.html'"><strong>Pesas</strong></td>    
                            <td onclick="window.location.href='montaña.html'"><strong>Crossfit</strong></td>     
                            <td onclick="window.location.href='montaña.html'" class="celda">
                                <span class="texto_celda"><strong>Sevilla</strong></span>
                                <img src="flecha.png" class="img_flecha" alt="Flecha">
                            </td> 
                        </tr>
                    </tbody>
                </table>
            
                    </tbody>
                </table>
            </div>
        </section>
    </main>     

    <script>
        let imagenActual = 0;
        const imagenes = document.querySelectorAll('.carrusel_imagen');

        function cambiarImagen(direccion) {
            imagenes[imagenActual].classList.remove('activa');
            imagenActual = (imagenActual + direccion + imagenes.length) % imagenes.length;
            imagenes[imagenActual].classList.add('activa');
        }
        
        // Cambio automático cada 5 segundos
        setInterval(function() {
            cambiarImagen(1);
        }, 5000);
    </script>
</body>
</html>
    <style>
        @font-face {
            font-family: "vanguardcf";
            src: url('vanguardcf/Fontspring-DEMO-vanguardcf-extrabold.otf') format('opentype');
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
       
        .contenedor_titulo {
            max-width: 100%;
            width: 100%;
            text-align: center;
            padding: 0 15px;
        }

        h1 {
            font-size: 4em;
            font-family: 'vanguardcf';
            font-style: italic;
        }

        .h1_resaltado {
            margin-left: 10px;
            background-color: rgb(231, 0, 0);
            padding: 10px;
            color: white;
            font-style: normal;
            font-size: 0.8em;
        }

        .h1_border {
            border-bottom: 4px solid black;
        }

        h3 {
            font-size: 3em;
            font-family: 'vanguardcf';
            font-style: italic;
            margin-left: 25px;
        }

        p {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 1.1em;
        }

        li {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .elementos_lista {
            padding-bottom: 10px;
        }

        .flexbox_container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .contenedor_parrafo {
            flex: 50%;
            padding-left: 10px;
            text-align: justify;
            padding-right: 20px;
            margin-left: 20px;
            margin-right: 10px;
        }

        .contenedor_imagen {
            flex: 40%;
            max-width: 100%;  
            max-height: 100%; 
            object-fit: contain;
            position: relative;
            margin-right: 10px;
            text-align: center;
        }
        
        .carrusel_imagen {
            width: 100%;
            height: auto;
            object-fit: contain;
            margin-top: 25px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
            display: none; 
        }

        .carrusel_imagen.activa {
            display: block;  
        }

        .boton_carrusel {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        .boton_izquierda {
            left: 0;
        }

        .boton_derecha {
            right: 0;
        }

        .parrafo_imagen {
            margin-top: 5px;
            border-bottom: 2px solid black;
            display: inline-block;
        }

        .seccion-tabla {
            width: 100%;
        }

        .contenedor_tabla {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .tabla {
            width: 100%;
            border-collapse: collapse;
            margin-left: 30px;
        }
        
        .tabla th {
            text-align: left;
            padding: 8px;
            color: #888;
            font-weight: normal;
            border-bottom: 1px solid #ccc;
            font-size: 1.2em;
        }
        
        .tabla td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ccc;
        }

        td:hover {
            cursor: pointer;
        }
           
        .fila:hover {
            background-color: #e6e6e6;
            transition: background-color 0.5s ease;;
        }

        
        .celda {
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .img_flecha {
            width: 16px;
            height: 16px;
            margin-left: 10px;
        }
     
        

    
        .seccion_tabla {
            margin-bottom: 50px;
        }

        @media (max-width: 992px) {
            h1 {
                font-size: 3em;
            }
            
            h3 {
                font-size: 2.5em;
            }
            
            .flexbox_container {
                padding: 0 10px;
            }
            
            .contenedor_parrafo {
                padding-right: 15px;
                margin-left: 15px;
                margin-right: 5px;
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5em;
            }

            h3 {
                font-size: 2em;
                margin-left: 15px;
            }
            
            .flexbox_container {
                flex-direction: column;
            }
            
            .contenedor_parrafo, .contenedor_imagen {
                flex: 100%;
                max-width: 100%;
                padding: 10px;
                margin: 0;
            }
            
            .contenedor_imagen {
                margin-top: 20px;
            }
            
            .celda {
                width: 92%;
                margin-left: 15px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.8em;
            }

            .h1_border, .h1_resaltado {
                display: inline-block;
            }

            h3 {
                font-size: 1.6em;
                margin-left: 10px;
            }
            
            p, li, td {
                font-size: 1em;
            }
            
            .contenedor_parrafo {
                padding: 5px;
            }
            
            .celda {
                width: 90%;
                margin-left: 10px;
                padding: 8px;
            }
            
            td:hover {
                font-size: 1.1em;
            }
            
            .img_flecha {
                width: 15px;
            }
        }
    </style>

<?php get_footer(); ?>


