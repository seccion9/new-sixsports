<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function($) {	
    let boton = document.getElementsByClassName("elementor-menu-toggle")[0];
	
    if (boton !== undefined) {
        boton.addEventListener('click', function() {
            let nav = document.getElementsByClassName("elementor-nav-menu--dropdown elementor-nav-menu__container")[0];
            if (nav !== undefined) {
                nav.classList.toggle("menu-hamburguesa-abierto");
                let links = nav.querySelectorAll("ul li a");
            }  
        });
		
        // Añadir el evento click a los enlaces dentro del nav
        let navLinks = document.querySelectorAll(".elementor-nav-menu--dropdown.elementor-nav-menu__container ul li a");
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Quitar la clase 'elementor-item-active' de todos los enlaces
                navLinks.forEach(l => l.classList.remove("elementor-item-active")); // Quitar la clase de todos los enlaces
                // Añadir la clase 'elementor-item-active' solo al enlace que se clicó
                this.classList.add("elementor-item-active"); // Cambia 'xxxx' por el nombre de la clase que deseas agregar
            });
        });
    }
});
</script>
<!-- end Simple Custom CSS and JS -->
