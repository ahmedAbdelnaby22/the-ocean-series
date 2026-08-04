import './bootstrap';
import '../css/app.css';

/*
|--------------------------------------------------------------------------
| THE OCEAN SERIES
|--------------------------------------------------------------------------
*/

window.addEventListener("load", () => {

    // ==========================
    // Welcome Popup
    // ==========================

    const popup = document.getElementById("welcomePopup");

    if (popup) {

        popup.style.opacity = "0";

        popup.style.display = "flex";

        setTimeout(() => {

            popup.style.transition = "0.8s";

            popup.style.opacity = "1";

        }, 200);

    }

});


// ==========================
// Close Popup
// ==========================

window.closeWelcome = function () {

    const popup = document.getElementById("welcomePopup");

    if (!popup) return;

    popup.style.opacity = "0";

    setTimeout(() => {

        popup.style.display = "none";

    }, 500);

};


// ==========================
// Fade Animation
// ==========================

const observer = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {

            entry.target.classList.add("show");

        }

    });

});

document.querySelectorAll(".fade-up").forEach((el) => {

    observer.observe(el);

});


// ==========================
// Smooth Scroll
// ==========================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function (e) {

        const target = document.querySelector(this.getAttribute("href"));

        if (!target) return;

        e.preventDefault();

        target.scrollIntoView({

            behavior: "smooth"

        });

    });

});