function bodyUnscrollable() {
    var x = document.getElementById("menu-toggle");
    x.onclick = function() {
        if (x.checked == true) {
            document.body.classList.add("noscroll");


            // document.body.style.position = "fixed";
            // document.body.style.top = `-${window.scrollY}px`;
        } else {
            document.body.classList.remove("noscroll");


            // const scrollY = document.body.style.top;
            // document.body.style.position = '';
            // document.body.style.top = '';
            // window.scrollTo(0, parseInt(scrollY || '0') * -1);
        }
    }
}

function addOnClicker() {
    var klikattavat = document.getElementsByClassName("has-dropdown");
    for (var i = 0; i < klikattavat.length; i++) (function(i) {
        var element = klikattavat[i];

        element.addEventListener("click", function() {
            var dropdown = element.nextElementSibling;
            dropdown.classList.toggle("show");

            // if (dropdown.classList.contains("show")) {
            //     dropdown.classList.remove("show");
            // } else {
            //     dropdown.classList.add("show");
            // }

            var arrow = element.querySelector(".menu-arrow");
            arrow.classList.toggle("turn");

            // if (arrow.classList.contains("turn")) {
            //     arrow.classList.remove("turn");
            // } else {
            //     arrow.classList.add("turn");
            // }
        });
    })(i);
}

function hamburgerStyler() {
    var hamburger = document.querySelector('label[for="menu-toggle"]');
    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("opened");
    })
}

bodyUnscrollable();
addOnClicker();
hamburgerStyler();
