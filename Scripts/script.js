document.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById("header");

    window.addEventListener('scroll', () => {
        var scroll = window.scrollY;
        
        if (scroll > 10) {
            header.style.backgroundColor = '#414141';
        } else {
            header.style.backgroundColor = 'transparent';
        }
    });
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