<?php
/*
Template Name: "Nosotros"
*/
the_content();
get_header(); ?>

<style>
/* Estilos generales */
.main-nosotros-wrapper {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /* Separo a propósito este margen porque esto es para separar el código personalizado de esta plantilla con el resto de elementos de WP. */
  margin-bottom: 40px;
}

ul {
  display: flex;
  flex-direction: row;
  list-style: none;
  gap: 1rem;
}

.profile-card-list {
  width: 100%;
  flex-wrap: wrap;
  justify-content: center;
  align-content: center;
  margin-top: 60px;
  padding: 0px;
  gap: 25px;
}

li:has(.profile-card) {
  height: 720px;
}

/* Estilo del Header*/

.main-header {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin: 0 auto;

  gap: 25px;
}

.main-header h2 {
  font-size: 6em;
  font-style: italic;
}

.main-header h2,
.main-header p {
  margin: 0;
}

.main-header span {
  margin-left: 30px;
}

.main-header p {
  width: 40%;
  text-align: center;
  font-size: 24px;
  line-height: 24px;
  color: #333333;
}

/* Estilo de la carta del profesional */

.profile-card h6,
.profile-card h5,
.profile-card h4 {
  margin: 0;
  font-size: 0.83em;
}

.profile-card {
  text-align: center;
  height: 420px;
  width: 320px;

  position: relative;
  color: white;
  background-color: black;
  padding-bottom: 12px;
  opacity: 1;
}

.languages {
  position: absolute;
  top: 10px;
  right: 10px;
  gap: 8px;
}

.profile-card > {
  width: 100%;
}

.profile-card .person-image {
  height: 320px;
}

.profile-card h4 {
  font-size: 32px;
  z-index: 10;
  cursor: pointer;
}

.profile-card h5 {
  color: gray;
  margin-bottom: 10px;
  opacity: 0;
  transition: all 250ms ease;
}

.profile-card button {
  font-size: 16px;
  font-weight: bold;
  padding: 8px 12px;
  color: white;
  background-color: transparent;
  border: none;
  cursor: pointer;
}

/* Estilo de la carta de atrás */
.description-wrapper {
  height: 295px;
  background-color: white;
  border: 2px solid black;
  color: black;
  display: flex;
  flex-direction: column;
  gap: 4px;
  padding: 12px;
  text-align: left;
}

.description-wrapper h6 {
  font-size: 18px;
  font-weight: bold;
}

.description-wrapper p {
  margin: 0px 0px 0px 10px;
}

.job-positions {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  list-style: disc;
  margin-left: -10px;
  gap: 4px;
}

/* Todo esto son estilos CSS que ya existen en el botón del WP. 
Eliminar este código y remplazar las clases del botón con las de WP para que tengan los mismos estilos.*/
.calendar-button {
  text-decoration: none;
  background-color: #ffffffeb;
  font-size: 12px;
  text-align: center;
  font-weight: 500;
  letter-spacing: 3px;
  fill: #ca1616;
  color: #ca1616;
  border-style: solid;
  border-width: 2px 2px 2px 2px;
  border-color: #ca1616;
  padding: 10px;
  transition: all 300ms ease-in;
  max-width: 80%;
}

.calendar-button:hover {
  background-color: #b21d1d37;
}

.description-wrapper div {
  display: flex;
  align-content: flex-end;
  justify-content: center;
  /* Manda al final del contenedor los botones */
  margin-top: auto;
}

/* Animaciones y efectos de Profile Card */
.profile-card:hover h5 {
  opacity: 1;
}

.border-bottom-left-to-right::after {
  display: block;
  content: "";
  border-bottom: 2px solid transparent;
  transform-origin: center;
  transform: scaleX(0);
  transition: transform 250ms ease-in-out;
}

.profile-card:hover .border-bottom-left-to-right::after {
  border-color: white;
  transform: scaleX(1);
}

@media (max-width: 870px) {
  .main-header h2 {
    font-size: 4em;
  }
  .main-header p {
    width: 100%;
  }
}

</style>

 <script>
      /* Al hacer click en el nombre del profesional ves más información de él/ella */
      const profileButtons = document.querySelectorAll(".profile-card button");
      profileButtons.forEach((button) => {
        button.addEventListener("click", () => {
          const card = button.closest(".profile-card");
          card.classList.add("swapped");
        });
      });

      /* Al hacer click en la flecha vuelves a ver la foto del profesional */
      const descriptionButtons = document.querySelectorAll(".description-wrapper button");
      descriptionButtons.forEach((button) => {
        button.addEventListener("click", () => {
          const card = button.closest(".profile-card");
          card.classList.remove("swapped");
        });
      });
</script>


<div class="main-nosotros-wrapper">
      <div class="main-header">
        <h2>
          EQUIPO <br />
          <span>SIXSPORT</span>
        </h2>
        <p>
          Somos una entidad deportiva, formada por profesionales y colaboradores, dedicados al
          crecimiento integral de deportistas, entrenadores y personas del mundo del deporte.
        </p>
      </div>

      <ul class="profile-card-list">
        <li>
          <article class="profile-card">
            <!-- Idiomas -->
            <ul class="languages">
              <li>
                <img
                  alt="spanish flag"
                  src="https://sixsport.es/wp-content/uploads/2025/04/spain.png"
                  width="20px"
                  height="20px"
                />
              </li>
              <li>
                <img
                  alt="english flag"
                  src="https://sixsport.es/wp-content/uploads/2025/04/united-kingdom.png"
                  width="20px"
                  height="20px"
                />
              </li>
              
            </ul>
            <!-- Nombre, foto y cargo -->
            <img
              class="person-image"
              src="https://sixsport.es/wp-content/uploads/2023/12/abrahamProfile.webp"
            />
            <button class="border-bottom-left-to-right">
              <h4>ABRAHAM</h4>
            </button>
            <h5>PRESIDENTE SIXSPORT</h5>
            <article class="description-wrapper">
              <!-- Estudios/Educación -->
              <h6>Formación:</h6>
              <p>LIFECOACH ICF</p>
              <!-- Puesto/Cargo -->
              <h6>Soy:</h6>
              <ul class="job-positions">
                <li>MENTOR DEPORTIVO ATHELETEMAX</li>
                <li>PERSONAL TRAINER TOTALFIT</li>
                <li>BIOPOLIS SPORT TRAINER</li>
              </ul>

              <!-- Botón para agendar cita con el profesional -->
              <div>
                <a class="calendar-button" href="www.google.com">AGENDAR CON ABRAHAM</a>
              </div>
            </article>
          </article>
        </li>
        <li>
          <article class="profile-card">
            <!-- Idiomas -->
            <ul class="languages">
              <li>
                <img
                  alt="english flag"
                  src="https://sixsport.es/wp-content/uploads/2025/04/united-kingdom.png"
                  width="20px"
                  height="20px"
                />
              </li>
            
            </ul>
            <!-- Nombre, foto y cargo -->
            <img
              class="person-image"
              src="https://sixsport.es/wp-content/uploads/2023/12/amyProfile.png"
            />
            <button class="border-bottom-left-to-right">
              <h4>AMY</h4>
            </button>
            <h5>VICE PRESIDENTA SIXSPORT</h5>
            <article class="description-wrapper">
              <!-- Estudios/Educación -->
              <h6>Formación:</h6>
              <p>LICENCIADA EN EXERCISE SCIENCE</p>
              <!-- Puesto/Cargo -->
              <h6>Soy:</h6>
              <ul class="job-positions">
                <li>PERSONAL TRAINER TOTALFIT</li>
                <li>L1 CROSSFIT COACH</li>
                <li>ESPECIALISTA EN PRE Y POST PARTO</li>
                <li>FUNDADORA SIXFIT</li>
              </ul>

              <!-- Botón para volver atrás/agendar cita con el profesional -->
              <div>
                <a class="calendar-button" href="www.google.com">AGENDAR CON AMY</a>
              </div>
            </article>
          </article>
        </li>
        <li>
          <article class="profile-card">
            <!-- Idiomas -->
            <ul class="languages">
              <li>
                <img
                  alt="spanish flag"
                  src="https://sixsport.es/wp-content/uploads/2025/04/spain.png"
                  width="20px"
                  height="20px"
                />
              </li>
              <li>
                <img
                  alt="english flag"
                  src="https://sixsport.es/wp-content/uploads/2025/04/united-kingdom.png"
                  width="20px"
                  height="20px"
                />
              </li>
            
            </ul>
            <!-- Nombre, foto y cargo -->
            <img
              class="person-image"
              src="https://sixsport.es/wp-content/uploads/2023/12/danProfile.png"
            />
            <button class="border-bottom-left-to-right">
              <h4>DAN</h4>
            </button>
            <h5>COORDINADOR SIXSPORT TRAINING</h5>
            <article class="description-wrapper">
              <!-- Estudios/Educación -->
              <h6>Formación:</h6>
              <p>TÉCNICO DEPORTIVO SUPERIOR</p>
              <!-- Puesto/Cargo -->
              <h6>Soy:</h6>
              <ul class="job-positions">
                <li>PERSONAL TRAINER TOTALFIT</li>
                <li>L1 CROSSFIT COACH</li>
              </ul>

              <!-- Botón para agendar cita con el profesional -->
              <div>
                <a class="calendar-button" href="www.google.com">AGENDAR CON DAN</a>
              </div>
            </article>
          </article>
        </li>
        <li>
          <article class="profile-card">
            <!-- Idiomas -->
            <ul class="languages">
              <li>
                <img
                  alt="spanish flag"
                  src="https://sixsport.es/wp-content/uploads/2025/04/spain.png"
                  width="20px"
                  height="20px"
                />
              </li>
            </ul>
            <!-- Nombre, foto y cargo -->
            <img class="person-image" src="https://sixsport.es/wp-content/uploads/2023/12/Gabi.png" />
            <button class="border-bottom-left-to-right">
              <h4>GABI</h4>
            </button>
            <h5>COORDINADORA SIXSPORT TRAINING</h5>
            <article class="description-wrapper">
              <!-- Estudios/Educación -->
              <h6>Formación:</h6>
              <p>TÉCNICO SUPERIOR TAFAO</p>
              <p>TÉCNICO SUPERIOR EN MARKETING DIGITAL</p>
              <!-- Puesto/Cargo -->
              <h6>Soy:</h6>
              <ul class="job-positions">
                <li>MARKETERA DIGITAL</li>
              </ul>

              <!-- Botón para agendar cita con el profesional -->
              <div>
                <a class="calendar-button" href="www.google.com">AGENDAR CON GABI</a>
              </div>
            </article>
          </article>
        </li>
        <li>
          <article class="profile-card">
            <!-- Idiomas -->
            <ul class="languages">
              <li>
                <img
                  alt="english flag"
                  src="https://sixsport.es/wp-content/uploads/2025/04/united-kingdom.png"
                  width="20px"
                  height="20px"
                />
              </li>
            
            </ul>
            <!-- Nombre, foto y cargo -->
            <img
              class="person-image"
              src="https://sixsport.es/wp-content/uploads/2023/12/jessieProfile.png"
            />
            <button class="border-bottom-left-to-right">
              <h4>AMY</h4>
            </button>
            <h5>COORDINADORA SIXSPORT EXCHANGE</h5>
            <article class="description-wrapper">
              <!-- Estudios/Educación -->
              <h6>Formación:</h6>
              <p>LICENCIADA EN LEISURE MANAGMENT</p>
              <!-- Puesto/Cargo -->
              <h6>Soy:</h6>
              <ul class="job-positions">
                <li>MENTORA DEPORTIVA ATHLETEMAX</li>
                <li>SPORT LIFE COACH</li>
              </ul>

              <!-- Botón para volver atrás/agendar cita con el profesional -->
              <div>
                <a class="calendar-button" href="www.google.com">AGENDAR CON AMY</a>
              </div>
            </article>
          </article>
        </li>
      </ul>
</div>

<?php get_footer(); ?>