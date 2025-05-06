<?php
/*
Template Name: "home"
*/
the_content();
get_header(); ?>

<style>
        /* Estilos generales */
        .main-home-wrapper {
        margin: 0;
        padding: 0;
        /*   width: 100%;
  height: 100%; */
        box-sizing: border-box;
        /* Separo a propósito este margen porque esto es para separar el código personalizado de esta plantilla con el resto de elementos de WP. */
        margin-bottom: 40px;
    }


    /*  Generado por mi */

    /* Frase Tagline */

    .frase-tagline {
        text-align: center;
        margin: 40px auto;
        padding: 20px;
        max-width: 800px;
    }
    
    .frase-tagline h3 {
        font-size: 24px;
        font-weight: 500;
        color: #333;
    }
    
    .frase-tagline-borde {
        text-align: center;
        margin: 40px auto;
        padding: 20px;
        max-width: 800px;
        background-color: #555555;
        border-radius: 15px;
    }
    
    .frase-tagline-borde h3 {
        font-size: 24px;
        font-weight: 500;
        color: #333;
    }





/* Contenedor principal */
.info-rapida-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin: 40px auto;
    max-width: 900px;
    flex-wrap: wrap; /* Permite que se apilen en móviles */
}

/* Alineación de texto e imagen */
.info-rapida-wrapper-left {
    flex-direction: row; /* Texto a la izquierda, imagen a la derecha */
    justify-content: space-around;
}

.info-rapida-wrapper-right {
    flex-direction: row-reverse; /* Imagen a la izquierda, texto a la derecha */
    justify-content: space-around;
}

/* Texto */
.info-texto {
    background-color: #f0f0f0;
    padding: 45px;
    border-radius: 15px;
    flex-basis: 45%; /* Controlamos el tamaño del texto */
    min-width: 250px;
}

.info-texto h2 {
    margin: 0;
    font-size: 24px;
    color: #333;
}

/* Imagen */
.info-imagen {
    flex-basis: 10%; /* Controlamos el tamaño de la imagen */
    display: flex;
    justify-content: center;
    align-items: center;
}

.info-imagen img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
    border-radius: 10px;
}

/* Estado inicial */
.info-rapida-wrapper {
  opacity: 0;
}

/* Aparece desde la izquierda */
.info-rapida-wrapper-left.aparecer {
  animation: slideInLeft 1.2s cubic-bezier(0.25, 1.25, 0.5, 1) forwards;
}

/* Aparece desde la derecha */
.info-rapida-wrapper-right.aparecer {
  animation: slideInRight 1.2s cubic-bezier(0.25, 1.25, 0.5, 1) forwards;
}

/* Animaciones personalizadas */
@keyframes slideInLeft {
  0% {
    transform: translateX(-200px);
    opacity: 0;
  }
  60% {
    transform: translateX(20px);
    opacity: 1;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slideInRight {
  0% {
    transform: translateX(200px);
    opacity: 0;
  }
  60% {
    transform: translateX(-20px);
    opacity: 1;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

/* diseño linea separatoria */ 

.custom-line {
    border: 0; /* Elimina los bordes predeterminados */
    border-top: 2px solid #000000; /* Cambia el color y grosor */
    width: 80%; /* Ajusta el ancho */
    margin: 20px auto; /* Centra la línea y agrega márgenes */
}

/* Tarjetas Card's */ 

.container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 40px;
    justify-items: center;
  }
  
/* Tarjetas */
.card {
  background-color: #999;
  width: 280px;
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Agrega la transición */
}

.card:hover {
  transform: scale(1.05) rotate(5deg); /* Aumenta el tamaño y rota ligeramente */
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3); /* Más sombra al hacer hover */
}

.profile-img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
  margin-bottom: 15px;
  transition: transform 0.3s ease; /* Transición para la imagen */
}

.card:hover .profile-img {
  transform: scale(1.1); /* Zoom en la imagen */
}

.description {
  background-color: white;
  padding: 10px;
  border-radius: 10px;
  font-weight: bold;
  font-size: 0.9rem;
  transition: transform 0.3s ease; /* Transición para el texto */
}

.card:hover .description {
  transform: translateY(-5px); /* Desplaza ligeramente hacia arriba */
}

@media screen and (max-width: 1024px) {
  .container {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media screen and (max-width: 600px) {
  .container {
    grid-template-columns: 1fr;
    padding: 20px;
  }

  .card {
    width: 100%;
  }
}

/* MAPA GOOGLE */

.visitanos-wrapper {
    max-width: 1200px;
    margin: 40px auto;
    padding: 20px;
  }
  
  .visitanos-card {
    display: flex;
    flex-wrap: nowrap;
    gap: 20px;
    background-color: #f2f2f2;
    padding: 30px;
    border-radius: 20px;
  }
  
  /* Columna izquierda */
  .visitanos-texto {
    flex: 1 1 40%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 20px;
  }
  
  .visitanos-texto h2 {
    margin: 0;
    font-size: 28px;
    color: #333;
    text-align: left;
  }
  
  .visitanos-texto p {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
  }
  
  /* Redes sociales */
  .redes-sociales {
    display: flex;
    gap: 16px;
    align-items: center;
  }
  
  .redes-sociales .icono svg {
    transition: transform 0.3s ease;
  }
  .redes-sociales .icono:hover svg {
    transform: scale(1.2);
  }
  
  /* Botón */
  .btn-como-llegar {
    display: inline-block;
    padding: 10px 20px;
    background-color: #fb7a02;
    color: #fff;
    font-weight: bold;
    text-decoration: none;
    border-radius: 8px;
    width: fit-content;
    transition: background 0.3s ease;
  }
  
  .btn-como-llegar:hover {
    background-color: #e16900;
  }
  
  /* Columna del mapa */
  .mapa-container {
    flex: 1 1 60%;
    border-radius: 12px;
    overflow: hidden;
    display: flex;     
  }
  
  .mapa-container iframe {
    width: 100%;
    height: 100%;
    border: none;
    flex-grow: 1;
  }
  
  /* Responsive */
  @media screen and (max-width: 768px) {
    .visitanos-card {
      flex-direction: column;
    }
  }

/* SLIDER DE IMAGENES */


/* Contenedor principal */
.slider-container {
    width: 80%;
    margin: 20px auto;
    position: relative;
    overflow: hidden;
    border-radius: 10px; /* Bordes redondeados */
}

/* Slider (las imágenes) */
.slider {
    display: flex;
    transition: transform 0.5s ease;
}

/* Las imágenes del slider */
.slider img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

/* Estilo de los puntos de navegación */
.dots-container {
    text-align: center;
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
}

.dot {
    height: 15px;
    width: 15px;
    margin: 0 5px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.3s;
    cursor: pointer;
}

.dot.active {
    background-color: #717171; /* Color cuando está activo */
}

.dot:hover {
    background-color: #ca1616; /* Color al pasar el ratón */
}


/* Estilos de video promocional */


.contenedor{
    display: block; 
    margin: 20px auto 0px auto; 
    width: 80%;     
  }
  .reproductor { 
    display: block; 
    width: 100%; 
    height: 100%; 
    padding-bottom: 56.25%; 
    overflow: hidden; 
    position: relative; 
    cursor: hand; 
    cursor: pointer; 
  }
  img.imagen-previa { 
     display: block; 
     left: 0; 
     bottom: 0;
     margin: auto; 
     max-width: 100%; 
     width: 100%; 
     position: absolute; 
     right: 0; 
     top: 0; 
     height: auto 
  }
  div.youtube-play { 
     height: 64px; 
     width: 64px; 
     left: 50%; 
     top: 50%; 
     margin-left: -36px; 
     margin-top: -36px;
     opacity:0.7;
     position: absolute; 
     background:   url("https://cdn2.iconfinder.com/data/icons/social-icons-color/512/youtube-64.png") no-repeat; 
  }
  div.youtube-play:hover{
     opacity:1; 
  }
  #youtube-iframe { 
     width: 100%; 
     height: 100%; 
     position: absolute; 
     top: 0; 
     left: 0; 
  }

  /* Slider de logos de marcas */

  .slider-container-logos {
    position: absolute;
    bottom: 60px;
    left: 0;
    right: 0;
    padding: 0;
    width: 100%;
    margin: 0;
    z-index: 10;
    overflow: hidden;
    height: 40px;
    background: transparent;
  }
  
  .slider-wrapper-logos {
    display: flex;
    animation: scroll 30s linear infinite; /* Mueve aquí la animación */
    width: max-content;
  }
  
  .slider-logos {
    display: flex;
  }
  
  .slide-logos {
    flex-shrink: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 80px;
    padding: 0 10px;
  }
  
  .slide-logos img {
    max-height: 30px;
    filter: grayscale(100%);
    transition: filter 0.3s ease;
  }
  
  .slide-logos img:hover {
    filter: grayscale(0%);
  }
  
  @keyframes scroll {
    0% {
      transform: translateX(0%);
    }
    100% {
      transform: translateX(-33.33%); /* 3 bloques iguales */
    }
  }
  
  .slider-container-logos:hover .slider-wrapper-logos {
    animation-play-state: paused;
  }
  
  @media (max-width: 768px) {
    .slider-container-logos {
      bottom: 10px; /* más arriba para no tapar la barra del reproductor móvil */
      height: 30px;
    }
  
    .slide-logos {
      width: 50px;
      padding: 0 5px;
    }
  
    .slide-logos img {
      max-height: 20px;
    }
  }
</style>


<div class="main-home-wrapper">
   
<!-- Video promocional --> <!-- TODAVIA NO ENTREGADO POR LA EMPRESA -->
<div class="contenedor">
  <div class="reproductor" data-id="E7wh0n98eDk">
    <iframe src="//www.youtube.com/embed/E7wh0n98eDk?autoplay=1&amp;autohide=2&amp;border=0&amp;wmode=opaque&amp;enablejsapi=1&amp;controls=0&amp;showinfo=0" frameborder="0" id="youtube-iframe">
    </iframe>
    <!-- Imagenes logotipos  actulizacion flotando-->

    <div class="slider-container-logos">
      <div class="slider-wrapper-logos">
        <div class="slider-logos">
          <div class="slide-logos"><img src="/src/logos/adidas.svg" alt="Marca 1"></div>
          <div class="slide-logos"><img src="/src/logos/jordan-logo.svg" alt="Marca 2"></div>
          <div class="slide-logos"><img src="/src/logos/nike-logo.svg" alt="Marca 3"></div>
          <div class="slide-logos"><img src="/src/logos/puma-logo.svg" alt="Marca 4"></div>
          <div class="slide-logos"><img src="/src/logos/reebok-5.svg" alt="Marca 5"></div>
        </div>
        <div class="slider-logos">
          <!-- Misma secuencia para el loop infinito -->
          <div class="slide-logos"><img src="/src/logos/adidas.svg" alt="Marca 1"></div>
          <div class="slide-logos"><img src="/src/logos/jordan-logo.svg" alt="Marca 2"></div>
          <div class="slide-logos"><img src="/src/logos/nike-logo.svg" alt="Marca 3"></div>
          <div class="slide-logos"><img src="/src/logos/puma-logo.svg" alt="Marca 4"></div>
          <div class="slide-logos"><img src="/src/logos/reebok-5.svg" alt="Marca 5"></div>
        </div>
        <div class="slider-logos">
          <!-- Misma secuencia para el loop infinito -->
          <div class="slide-logos"><img src="/src/logos/adidas.svg" alt="Marca 1"></div>
          <div class="slide-logos"><img src="/src/logos/jordan-logo.svg" alt="Marca 2"></div>
          <div class="slide-logos"><img src="/src/logos/nike-logo.svg" alt="Marca 3"></div>
          <div class="slide-logos"><img src="/src/logos/puma-logo.svg" alt="Marca 4"></div>
          <div class="slide-logos"><img src="/src/logos/reebok-5.svg" alt="Marca 5"></div>
        </div>

      </div>
    </div>
  </div>
</div>




<!-- Frase TAGLINE -->
<div class="frase-tagline">
    <h3>Mentoría deportiva para desatar todo tu potencial, más allá de tus objetivos</h3>
</div>

<!-- Seccion zona info rapida -->
<div class="info-rapida-wrapper info-rapida-wrapper-left">
    <div class="info-texto">
        <h2>Encuentra tu mentor/a</h2>
    </div>
    <div class="info-imagen">
        <img src="https://sixsport.es/wp-content/uploads/2023/12/logo-naranja_01.svg" alt="tu-mentor">
    </div>
</div>

<!-- Variante con imagen a la izquierda, texto a la derecha -->
<div class="info-rapida-wrapper info-rapida-wrapper-right">
    <div class="info-texto">
        <h2>Encuentra tu comunidad deportiva</h2>
    </div>
    <div class="info-imagen">
      <img src="https://sixsport.es/wp-content/uploads/2023/12/logo_rojo2.svg" alt="comunidad-deportiva">
  </div>
</div>

<!-- Otra con texto a la izquierda, imagen a la derecha -->
<div class="info-rapida-wrapper info-rapida-wrapper-left">
    <div class="info-texto">
        <h2>Encuentra oportunidades</h2>
    </div>
    <div class="info-imagen">
        <img src="https://sixsport.es/wp-content/uploads/2023/12/5b119203609ebea7bfbe90cb_logoExchangeVertical.svg" alt="oportunidades">
    </div>
</div>
<!-- Linea separatoria -->

<hr class="custom-line">

<!-- Slider de imagenes "NUESTRO EQUIPO"-->

<div>
  <div class="slider-container">
      <div class="slider">
          <img src="src/img/Sixport & Totalfit  9 - @nidagio Photography.jpg" alt="Imagen 1">
          <img src="src/img/Sixport & Totalfit  11 - @nidagio Photography.jpg" alt="Imagen 2">
          <img src="src/img/Sixport & Totalfit  3 - @nidagio Photography.jpg" alt="Imagen 3">
      </div>
      <div class="dots-container">
          <span class="dot active" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
      </div>
  </div>
</div>

<!-- Frase TAGLINE -->

<div  class="frase-tagline-borde">
    <h3>Cuando te rindas en tu diseño original, verás que es otra liga</h3>
</div>

<!-- Card's de imagenes "NUESTRO EQUIPO"-->



<div class="container">
    <!-- Tarjeta 1 -->
    <div class="card">
      <img src="img1.jpg" alt="Persona 1" class="profile-img">
      <p class="description">
        Lorem ipsum dolor sit amet consectetur adipiscing elit erat vel lacinia tortor sem, mauris netus hac mollis dis sociis volutpat turpis interdum nascetur ornare.
      </p>
    </div>
    
    <!-- Tarjeta 2 -->
    <div class="card">
      <img src="src/img/Sixport & Totalfit  17 - @nidagio Photography.jpg" alt="Persona 2" class="profile-img">
      <p class="description">
        Lorem ipsum dolor sit amet consectetur adipiscing elit erat vel lacinia tortor sem, mauris netus hac mollis dis sociis volutpat turpis interdum nascetur ornare.
      </p>
    </div>

    <!-- Tarjeta 3 -->
    <div class="card">
      <img src="placeholder.png" alt="sin imagen" class="profile-img">
      <p class="description">
        Lorem ipsum dolor sit amet consectetur adipiscing elit erat vel lacinia tortor sem, mauris netus hac mollis dis sociis volutpat turpis interdum nascetur ornare.
      </p>
    </div>

    <!-- Tarjeta 4 -->
    <div class="card">
      <img src="src/img/Sixport & Totalfit  10 - @nidagio Photography.jpg" alt="Persona 1" class="profile-img">
      <p class="description">
        Lorem ipsum dolor sit amet consectetur adipiscing elit erat vel lacinia tortor sem, mauris netus hac mollis dis sociis volutpat turpis interdum nascetur ornare.
      </p>
    </div>

    <!-- Tarjeta 5 -->
    <div class="card">
      <img src="img2.jpg" alt="Persona 2" class="profile-img">
      <p class="description">
        Lorem ipsum dolor sit amet consectetur adipiscing elit erat vel lacinia tortor sem, mauris netus hac mollis dis sociis volutpat turpis interdum nascetur ornare.
      </p>
    </div>

    <!-- Tarjeta 6 -->
    <div class="card">
      <img src="src/img/Sixport & Totalfit  16 - @nidagio Photography.jpg" alt="Sin imagen" class="profile-img">
      <p class="description">
        Lorem ipsum dolor sit amet consectetur adipiscing elit erat vel lacinia tortor sem, mauris netus hac mollis dis sociis volutpat turpis interdum nascetur ornare.
      </p>
    </div>
  </div>


<!-- Seccion de "Visitanos con mapa"-->

<div class="visitanos-wrapper">
  <div class="visitanos-card">
    <!-- Columna izquierda -->
    <div class="visitanos-texto">
      <p></p>
      <h2>Visítanos</h2>
      <p></p>
      
    <!-- Columna derecha (mapa) -->
    <div class="mapa-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186.87472852666116!2d2.2537748916271156!3d41.461009532264534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4bbd91ad848ad%3A0xd7cc4ecdba64b27d!2sTotalfit%20Box%20Academy%20%7C%20crosstraining%20en%20Badalona!5e0!3m2!1ses!2ses!4v1744296991444!5m2!1ses!2ses"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</div>




  <div class="visitanos-wrapper">
    <div class="visitanos-card">
      <!-- Columna izquierda -->
      <div class="visitanos-texto">
        <h2>Visítanos</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dapibus, mauris a luctus sollicitudin,
          purus ligula hendrerit sapien, vitae pretium neque felis sed odio.
        </p>
  
        <!-- Iconos redes sociales -->
      <div class="redes-sociales">
        <!-- Instagram -->
        <a href="#" aria-label="Instagram" class="icono">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#E1306C" viewBox="0 0 24 24">
            <path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.8.3 2.2.5.5.2.9.5 1.3.9.4.4.7.8.9 1.3.2.4.4 1 .5 2.2.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.3 1.8-.5 2.2-.2.5-.5.9-.9 1.3-.4.4-.8.7-1.3.9-.4.2-1 .4-2.2.5-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.3-2.2-.5a3.93 3.93 0 0 1-1.3-.9 3.93 3.93 0 0 1-.9-1.3c-.2-.4-.4-1-.5-2.2-.1-1.3-.1-1.7-.1-4.9s0-3.6.1-4.9c.1-1.2.3-1.8.5-2.2.2-.5.5-.9.9-1.3.4-.4.8-.7 1.3-.9.4-.2 1-.4 2.2-.5 1.3-.1 1.7-.1 4.9-.1zm0 1.8c-3.2 0-3.5 0-4.8.1-.9.1-1.4.2-1.7.3-.4.2-.7.4-1 .7-.3.3-.5.6-.7 1-.1.3-.3.8-.3 1.7-.1 1.2-.1 1.6-.1 4.8s0 3.5.1 4.8c.1.9.2 1.4.3 1.7.2.4.4.7.7 1 .3.3.6.5 1 .7.3.1.8.3 1.7.3 1.2.1 1.6.1 4.8.1s3.5 0 4.8-.1c.9-.1 1.4-.2 1.7-.3.4-.2.7-.4 1-.7.3-.3.5-.6.7-1 .1-.3.3-.8.3-1.7.1-1.2.1-1.6.1-4.8s0-3.5-.1-4.8c-.1-.9-.2-1.4-.3-1.7a2.4 2.4 0 0 0-.7-1c-.3-.3-.6-.5-1-.7-.3-.1-.8-.3-1.7-.3-1.2-.1-1.6-.1-4.8-.1zM12 5.8a6.2 6.2 0 1 1 0 12.4A6.2 6.2 0 0 1 12 5.8zm0 1.8a4.4 4.4 0 1 0 0 8.8 4.4 4.4 0 0 0 0-8.8zm5.7-.9a1.44 1.44 0 1 1 0 2.88 1.44 1.44 0 0 1 0-2.88z"/> 
          </svg>
        </a>

        <!-- Facebook -->
        <a href="#" aria-label="Facebook" class="icono">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#4267B2" viewBox="0 0 24 24">
            <path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0 0 22 12z"/>
          </svg>
        </a>

        <!-- X (Twitter) -->
        <a href="#" aria-label="X" class="icono">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#000000" viewBox="0 0 24 24">
            <path d="M22.52 2h-3.3L12 13.25 4.78 2H1.5l8.38 11.82L2 22h3.3l7.17-9.7L19.22 22H22.5l-8.5-12.02L22.52 2z"/>
          </svg>
        </a>

        <!-- WhatsApp -->
        <a href="https://wa.me/34123456789" target="_blank" aria-label="WhatsApp" class="icono">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#25D366" viewBox="0 0 24 24">
            <path d="M12.04 2a10 10 0 0 0-8.83 14.72L2 22l5.43-1.43A10 10 0 1 0 12.04 2zm0 18.13c-1.45 0-2.87-.38-4.1-1.1l-.29-.17-3.22.85.87-3.14-.18-.3A8.13 8.13 0 1 1 20.17 12c0 4.48-3.65 8.13-8.13 8.13zm4.6-6.11c-.25-.13-1.48-.73-1.71-.81-.23-.08-.4-.13-.56.13-.17.25-.64.81-.78.98-.14.17-.29.2-.54.07s-1.04-.38-1.98-1.21c-.73-.65-1.21-1.45-1.35-1.7-.14-.25-.01-.39.11-.51.11-.11.25-.29.37-.43.12-.15.16-.25.25-.41.08-.17.04-.32-.02-.45s-.56-1.34-.77-1.83c-.2-.49-.4-.42-.56-.43-.15 0-.32-.01-.49-.01s-.45.06-.69.32c-.24.25-.91.89-.91 2.16 0 1.27.94 2.5 1.07 2.67.13.17 1.85 2.85 4.5 3.99 2.65 1.14 2.65.76 3.13.71.48-.05 1.48-.6 1.69-1.18.21-.57.21-1.06.15-1.16-.06-.09-.22-.14-.47-.27z"/>
          </svg>
        </a>

        <!-- Teléfono -->
        <a href="tel:+34123456789" aria-label="Teléfono" class="icono">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#007AFF" viewBox="0 0 24 24">
            <path d="M6.6 10.79a15.05 15.05 0 0 0 6.61 6.61l2.2-2.2a1 1 0 0 1 1.01-.24c1.11.37 2.31.56 3.58.56a1 1 0 0 1 1 1v3.63a1 1 0 0 1-1 1A17.89 17.89 0 0 1 3 6a1 1 0 0 1 1-1h3.61a1 1 0 0 1 1 1c0 1.27.19 2.47.56 3.58a1 1 0 0 1-.24 1.01l-2.33 2.2z"/>
          </svg>
        </a>
      </div>
  
        <!-- Botón cómo llegar -->
        <a class="btn-como-llegar" href="https://www.google.com/maps?daddr=Totalfit+Box+Academy" target="_blank">
          Cómo llegar
        </a>
      </div>
  
      <!-- Columna derecha (mapa) -->
      <div class="mapa-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186.87472852666116!2d2.2537748916271156!3d41.461009532264534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4bbd91ad848ad%3A0xd7cc4ecdba64b27d!2sTotalfit%20Box%20Academy%20%7C%20crosstraining%20en%20Badalona!5e0!3m2!1ses!2ses!4v1744296991444!5m2!1ses!2ses"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
  
</div>
  
<script>
    // SLIDER DE IMAGENES

let slideIndex = 1; // Índice inicial del slide
showSlides(slideIndex);

// Función para cambiar de slide automáticamente
function showSlides(n) {
    let slides = document.querySelectorAll('.slider img');
    let dots = document.querySelectorAll('.dot');
    
    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }

    // Ocultar todas las imágenes
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Quitar la clase activa de todos los puntos
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    // Mostrar la imagen actual y añadir clase activa al punto correspondiente
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

// Función para cambiar de imagen al hacer click en los puntos
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Función para mover el slider automáticamente
function autoSlide() {
    showSlides(slideIndex += 1);
}

// Cambiar de imagen cada 3 segundos
setInterval(autoSlide, 3000);



// Video promocional

(function() {
    var v = document.getElementsByClassName("reproductor");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();
 
function labnolThumb(id) {
    return '<img decoding="async" class="imagen-previa" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="youtube-play"></div>';
}
 
function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}

// Animacion de entrada dinamismo lateral

const observarAnimaciones = () => {
    const observer = new IntersectionObserver((entradas) => {
      entradas.forEach(entrada => {
        if (entrada.isIntersecting) {
          entrada.target.classList.add('aparecer');
        }
      });
    }, {
      threshold: 0.3
    });

    document.querySelectorAll('.info-rapida-wrapper').forEach(el => {
      observer.observe(el);
    });
  };

  document.addEventListener("DOMContentLoaded", observarAnimaciones);

</script>






<?php get_footer(); ?>