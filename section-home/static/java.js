
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