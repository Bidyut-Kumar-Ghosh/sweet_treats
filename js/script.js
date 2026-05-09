// ================= FEEDBACK FORM VALIDATION =================

const feedbackForm = document.querySelector(".feedback-form");

if(feedbackForm){

    feedbackForm.addEventListener("submit", function(event){

        const inputs = feedbackForm.querySelectorAll("input, textarea");

        let valid = true;

        inputs.forEach(function(input){

            if(input.value.trim() === ""){

                valid = false;

            }

        });

        if(!valid){

            event.preventDefault();

            alert("Please fill in all fields.");

        }

    });

}

// ================= MENU SEARCH FUNCTION =================

const searchInput = document.getElementById("menuSearch");

if(searchInput){

    searchInput.addEventListener("keyup", function(){

        const filter = searchInput.value.toLowerCase();

        const menuCards = document.querySelectorAll(".menu-card");

        menuCards.forEach(function(card){

            const itemName = card.querySelector("h2").textContent.toLowerCase();

            if(itemName.includes(filter)){

                card.style.display = "block";

            } else {

                card.style.display = "none";

            }

        });

    });

}

// ================= IMAGE SLIDER =================

let slideIndex = 0;

const slides = document.querySelectorAll(".slides");

function showSlide(index){

    slides.forEach(function(slide){

        slide.style.display = "none";

    });

    if(index >= slides.length){

        slideIndex = 0;

    }

    if(index < 0){

        slideIndex = slides.length - 1;

    }

    slides[slideIndex].style.display = "block";

}

function changeSlide(n){

    slideIndex += n;

    showSlide(slideIndex);

}

function autoSlide(){

    slideIndex++;

    showSlide(slideIndex);

}

// Initialize Slider

if(slides.length > 0){

    showSlide(slideIndex);

    setInterval(autoSlide, 4000);

}

// ================= SCROLL ANIMATION =================

window.addEventListener("scroll", function(){

    const cards = document.querySelectorAll(
        ".feature-box, .menu-card, .feedback-card, .dashboard-card"
    );

    cards.forEach(function(card){

        const cardTop = card.getBoundingClientRect().top;

        const windowHeight = window.innerHeight;

        if(cardTop < windowHeight - 100){

            card.style.opacity = "1";

            card.style.transform = "translateY(0px)";

        }

    });

});

// ================= NAVBAR HOVER EFFECT =================

const navLinks = document.querySelectorAll(".nav-list a");

navLinks.forEach(function(link){

    link.addEventListener("mouseenter", function(){

        this.style.transition = "0.3s ease";

    });

});

// ================= PAGE LOAD EFFECT =================

window.addEventListener("load", function(){

    document.body.style.opacity = "1";

});

// ================= MOBILE HAMBURGER MENU =================

const mobileMenu = document.getElementById("mobile-menu");

const navList = document.getElementById("nav-list");

if(mobileMenu && navList){

    mobileMenu.addEventListener("click", function(){

        navList.classList.toggle("active");

    });

}

// ================= CLOSE MENU AFTER CLICK =================

const mobileLinks = document.querySelectorAll(".nav-list a");

mobileLinks.forEach(function(link){

    link.addEventListener("click", function(){

        if(window.innerWidth <= 768){

            navList.classList.remove("active");

        }

    });

});

// ================= SLIDER TOUCH SUPPORT =================

let touchStartX = 0;

let touchEndX = 0;

const slider = document.querySelector(".slider");

if(slider){

    slider.addEventListener("touchstart", function(event){

        touchStartX = event.changedTouches[0].screenX;

    });

    slider.addEventListener("touchend", function(event){

        touchEndX = event.changedTouches[0].screenX;

        handleGesture();

    });

}

function handleGesture(){

    if(touchEndX < touchStartX){

        changeSlide(1);

    }

    if(touchEndX > touchStartX){

        changeSlide(-1);

    }

}

// ================= BUTTON CLICK EFFECT =================

const buttons = document.querySelectorAll(".btn");

buttons.forEach(function(button){

    button.addEventListener("click", function(){

        button.style.transform = "scale(0.96)";

        setTimeout(function(){

            button.style.transform = "scale(1)";

        }, 150);

    });

});