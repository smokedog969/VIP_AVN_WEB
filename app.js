const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

//tl.to(".anim", { y: "0%", duration: 1, stagger: 0.25 });
//tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
 //tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
//tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
//tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");

    // WORKING ANIMATION FOR HEADER OLD ---
     
    gsap.from(".box", {
        opacity: 0,
        y: -100,
        duration: 2
    });
    

    
    gsap.from(".box2", {
        opacity: 0,
        x: 800,
        duration: 3
    });

 // END  

 /////NAVIGATION ANIMATE FUNCTION START/////
function navSlide() {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");

    burger.addEventListener("click", () => {
        //Toggle Nav
        nav.classList.toggle("nav-active");

        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ""
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });
        //Burger Animation
        burger.classList.toggle("toggle");
    });

}

navSlide();
/////NAVIGATION ANIMATE FUNCTION START/////


// jQuery(document).ready(function($) {
//     var jPM = $.jPanelMenu({
//         menu: '.side-menu',
//         trigger: '#side-menu-trigger',
//         direction: 'right'

//     });
//     jPM.on();
//     $(".side-menu a").click(function() {
//         jPM.close();
//     });
// });