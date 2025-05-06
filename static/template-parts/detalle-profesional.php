<?php
/*
Template Name: "Detalle profesional"
*/
get_content();
get_header(); ?>

<style>
/* Estilos generales */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.main-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* DETALLE DE PERFIL */
.profile-detail {
  display: flex;
  flex-direction: column;
  gap: 30px;
}

.profile-presentation {
  display: flex;
  justify-content: space-between;
  gap: 30px;
}

.profile-information {
  flex: 1;
}

h2 {
  margin-bottom: 20px;
  font-size: 32px;
  border-bottom: 2px solid #000;
  padding-bottom: 10px;
}

.profile-image-container {
  position: relative;
  width: 320px;
  height: 420px;
  margin-top: 70px;
  background-color: black;
  color: white;
  text-align: center;
}

.profile-image-container h4 {
  color: gray;
  font-size: 20px;
}

.profile-image {
  width: 100%;
  height: 320px;
  object-fit: cover;
}

.profile-languages {
  position: absolute;
  top: 10px;
  right: 10px;
  display: flex;
  gap: 8px;
}

.language-icon {
  width: 30px;
  height: 30px;
  background-color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.caroussel {
  display: flex;
  flex-direction: row;
}

.profile-title {
  font-size: 24px;
  margin: 10px 0;
}

.img-selectors {
  display: flex;
  gap: 10px;
  justify-content: center;
  margin-top: 10px;
}

.img-selector {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  border: none;
  background-color: #ccc;
}

.img-selector.active {
  background-color: #666;
}

/* INFORMACIÓN PERSONAL */
.main-text {
  font-size: 18px;
  border: 1px solid #ccc;
  padding: 15px;
  margin-bottom: 20px;
}

.main-text h3 {
  font-size: 30px;
  text-align: center;
}

.studies {
  margin-bottom: 20px;
}

.studies ul {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
}

.studies ul li {
  color: #f0cb56;
  border: 2px solid #f0cb56;
  width: 100%;
  max-width: 255px;
  font-weight: bold;
  padding: 10px;
  margin-bottom: 10px;
  transition: all 250ms ease;
}

.studies ul li:hover {
  background-color: #f0cc562c;
}

.studies h3 {
  border-bottom: 1px solid #000;
  margin-bottom: 10px;
  padding-bottom: 5px;
}

/* MENTORÍAS Y CALENDAR*/
.mentorship-container {
  margin-top: 10px;
  margin-bottom: 30px;
  display: flex;
}

.mentorship-section {
  margin-right: 30px;
  max-width: 320px;
  position: relative;
}

.mentorship-section ul {
  list-style: circle;
  margin-left: 17px;
}

.mentorship-section h3 {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
  flex: 1;
}

.mentorship-section article {
  margin-bottom: 40px;
}

/* Estilos del calendario y botón */
.calendar-section {
  display: flex;
  flex-direction: column;
}

.calendar-section h3 {
  text-align: center;
  font-size: 30px;
  margin: 14px 0px;
}

/* BOTÓN SECUNDARIO PARA AGENDAR MENTORÍA */
.calendar-button {
  display: block;

  text-decoration: none;
  background-color: #ffffffeb;
  font-size: 12px;
  text-align: center;
  font-weight: 500;
  letter-spacing: 3px;
  fill: #ca1616;
  color: #ca1616;
  border-style: solid;
  border-color: 2px #ca1616;
  padding: 15px;
  transition: all 300ms ease-in;
  max-width: 300px;
  cursor: pointer;
}

.calendar-button:hover {
  background-color: #b21d1d37;
}

/* Estilos responsivos */
@media (max-width: 920px) {
  .studies ul li {
    max-width: 100%;
  }
}

@media (max-width: 768px) {
  .profile-presentation {
    flex-direction: column;
    align-items: center;
  }

  .profile-presentation {
    gap: 0px;
  }

  .profile-image-container {
    margin-top: 0px;
  }

  /* El texto de la mentorship se queda arriba, solo, y justo debajo el widget. 
  En el escritorio está el texto a la izquierda y el widget a la derecha.  */
  .mentorship-container {
    flex-direction: column;
  }

  .mentorship-section {
    max-width: 100%;
    margin: 0px;
  }

  .calendar-section {
    width: 100%;
  }

  .calendar-button {
    margin: 0px auto;
  }

  iframe {
    margin: 0px auto;
    display: block;
    width: 100%;
    height: 500px;
  }
}

@media (max-width: 400px) {
  iframe {
    width: 320px;
    height: 300px;
  }
}

</style>

<script>
      document.addEventListener("DOMContentLoaded", function () {
        const imgSelectors = document.querySelectorAll(".img-selector");
        const imgs = document.querySelectorAll(".profile-image");
        let currentIndex = 0;
        let intervalId;

        setupCarousel();
        startAutoRotation();

        function setupCarousel() {
          // La imagen inicial es la primera
          hideUnactiveImgs(imgs);

          imgSelectors.forEach((selector, index) => {
            selector.addEventListener("click", function () {
              // Si el usuario hace click se detiene la rotación automática
              stopAutoRotation();

              currentIndex = index;
              updateCarousel();

              // Reiniciar la rotación automática después de un tiempo
              setTimeout(startAutoRotation, 4000);
            });
          });
        }

        function startAutoRotation() {
          // Evitar múltiples intervalos
          if (intervalId) {
            clearInterval(intervalId);
          }

          // Establecer intervalo para rotación automática
          intervalId = setInterval(function () {
            /* Cuando llega al final del array, el "% imgs.length" se asegura de que el currentIndex nunca sea mayor que el index final del array.*/
            currentIndex = (currentIndex + 1) % imgs.length;
            updateCarousel();
          }, 1000); // <-- Aquí se cambia la velocidad de cambio de las imágenes
        }

        function stopAutoRotation() {
          if (intervalId) {
            clearInterval(intervalId);
            intervalId = null;
          }
        }

        function updateCarousel() {
          // Solo ves la imagen que has seleccionado o está en rotación actual
          imgs.forEach((img, idx) => {
            img.classList.remove("active");
            if (idx === currentIndex) {
              img.classList.add("active");
            }
          });

          imgSelectors.forEach((selector, idx) => {
            selector.classList.remove("active");
            if (idx === currentIndex) {
              selector.classList.add("active");
            }
          });

          hideUnactiveImgs(imgs);
        }

        function hideUnactiveImgs(imgs) {
          /* Primero desaparecen todas aquellas imágenes inactivas */
          imgs.forEach((img) => {
            if (!img.classList.contains("active")) {
              img.style.display = "none";
            } else {
              img.style.display = "block";
            }
          });
        }
      });
    </script>

<div class="main-container">
      <section class="profile-detail">
        <div class="profile-presentation">
          <section class="profile-information">
            <!-- PRESENTACIÓN -->
            <h2>Juan Pérez</h2>

            <article class="main-text">
              <i><h3>ESTA ES MI FRASE MOTIVACIONAL: ENTRENA Y DESCANSA.</h3></i>
              <p>
                Como entrenador personal certificado con más de 8 años de experiencia, me especializo en
                crear programas de entrenamiento personalizados que se adaptan perfectamente a tus
                objetivos y necesidades individuales.
                <br /><br />

                Me apasiona trabajar con personas de todos los niveles, desde principiantes hasta atletas
                avanzados, guiándote paso a paso en tu camino hacia una mejor versión de ti mismo.
                <br /><br />
                Creo firmemente que el éxito físico se logra con un plan estructurado, constancia y el
                apoyo adecuado, elementos que garantizo en cada una de mis mentorías.
              </p>
            </article>
            <!-- ESTUDIOS -->
            <article class="studies">
              <h3>Estudios/Formación</h3>
              <ul>
                <li>LICENCIADA EN EXERCISE SCIENCE</li>
                <li>L1 CROSSFIT COACH</li>
                <li>ESPECIALISTA EN PRE Y POST PARTO</li>
              </ul>
            </article>
          </section>

          <!-- CAROUSSEL DE IMÁGENES -->
          <section class="profile-image-container">
            <div class="profile-languages">
              <img src="img\spain.png" class="language-icon" />
            </div>
            <!-- Todas las fotos -->
            <div class="caroussel">
              <img
                id="foto1"
                src="img\abrahamProfile.webp"
                alt="Foto del profesional"
                class="profile-image active"
              />
              <img
                id="foto2"
                src="img\amyProfile.png"
                alt="Foto del profesional"
                class="profile-image"
              />
              <img id="foto3" src="img\Gabi.png" alt="Foto del profesional" class="profile-image" />
              <img
                id="foto4"
                src="img\jessieProfile.png"
                alt="Foto del profesional"
                class="profile-image"
              />
            </div>

            <h4 class="profile-title">PRESIDENTE SIXSPORT</h4>
            <div class="img-selectors">
              <button id="#foto1" class="img-selector active"></button>
              <button id="#foto2" class="img-selector"></button>
              <button id="#foto3" class="img-selector"></button>
              <button id="#foto4" class="img-selector"></button>
            </div>
          </section>
        </div>

        <div class="mentorship-container">
          <section class="mentorship-section">
            <h3>1. ¡MENTORÍA PERSONALIZADA!</h3>
            <article>
              <p>#Beneficio de contratar una mentoría</p>
              <p>
                Descripción de lo que se hace en la mentoría / +info del servicio / + info sobre
                profesional.
              </p>
              <p>
                Descripción de lo que se hace en la mentoría / +info del servicio / + info sobre
                profesional.
              </p>

              <ul>
                <li>LICENCIADA EN EXERCISE SCIENCE</li>
                <li>L1 CROSSFIT COACH</li>
                <li>ESPECIALISTA EN PRE Y POST PARTO</li>
              </ul>
            </article>
            <a href="#" class="calendar-button">AGENDAR MENTORÍA</a>
          </section>

          <section class="calendar-section">
            <h3>HUECOS DISPONIBLES</h3>
            <div class="calendar-widget">
              <!-- Aquí iría el widget del Google Calendar -->
              <iframe
                src="https://calendar.google.com/calendar/embed?src=a31fb45c787b8141be34e8cacea7955c4ecff716b0fc0ed31e7a0008c9ed0693%40group.calendar.google.com&ctz=Europe%2FLondon"
                style="border: 0"
                width="500"
                height="500"
                frameborder="0"
                scrolling="no"
              ></iframe>
            </div>
          </section>
        </div>
      </section>
    </div>


<?php get_footer(); ?>