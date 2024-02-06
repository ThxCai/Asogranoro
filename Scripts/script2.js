document.addEventListener("DOMContentLoaded", function() {

    var header = document.getElementById("header");

    header.style.backgroundColor = "#414141";
    if (scroll > 100) {
        title.style.opacity = '1'; // Hacer visible el título
    } else {
        title.style.opacity = '0'; // Ocultar el título
    }
});

var links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute("href").substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const offset = targetElement.offsetTop - header.offsetHeight;
                        window.scrollTo({
                            top: offset,
                            behavior: "smooth"
                        });
                    }
                });
            });