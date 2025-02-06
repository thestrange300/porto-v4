import './bootstrap';

if (window.innerWidth >= 768) {
  const textWrapper = document.getElementById('hero_title');
  textWrapper.classList.add('intro');

  // Split the text into letters
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

}

// Add flicker class to J/A/C/K letters
document.querySelectorAll('.letter').forEach(span => {
  if (['J','A','C','K'].includes(span.textContent.trim())) {
    span.classList.add('flicker');
  }
});

anime.timeline({})
  .add({
    targets: '.intro .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  });

// ---------- GSAP Content ------------


document.addEventListener("DOMContentLoaded", function () {
    // Fade In + Slide Up for Image and Text
  gsap.from("#hero-desc", { 
      opacity: 0, 
      y: 50, 
      duration: 1.5, 
      ease: "power3.out"
  });

  gsap.from("#socials", { 
      opacity: 0, 
      y: 50, 
      duration: 1.5, 
      ease: "back.out"
  });

  gsap.to("#spinning", {
      rotation: 360,
      duration: 8,
      repeat: -1,
      ease: "linear"
  })

  gsap.to("#spinning2", {
      rotation: -360,
      duration: 8,
      repeat: -1,
      ease: "linear"
  })

  // Border Glow Effect on Text Box
  gsap.to(".border", {
      boxShadow: "0 0 10px rgba(255, 255, 255, 0.5)", 
      repeat: -1, 
      yoyo: true, 
      duration: 1.5,
      ease: "power1.inOut"
  });
    
});

// GSAP Hover Zoom and Mouse Follow Effect
const image = document.getElementById('center-jack');

image.addEventListener('mouseenter', () => {
// Zoom in on hover
gsap.to(image, { scale: 1.05, duration: 0.3 });
});

image.addEventListener('mouseleave', () => {
// Reset the scale back
gsap.to(image, { scale: 1, duration: 0.3 });
});

// Mouse move effect to simulate the 3D flexing
document.addEventListener('mousemove', (e) => {
const { clientX: mouseX, clientY: mouseY } = e;
const { top, left, width, height } = image.getBoundingClientRect();

const centerX = left + width / 2;
const centerY = top + height / 2;

const deltaX = (mouseX - centerX) / width;
const deltaY = (mouseY - centerY) / height;

gsap.to(image, {
rotationX: -deltaY * 5, // Adjust the intensity of the 3D flex
rotationY: deltaX * 5,  // Adjust the intensity of the 3D flex
transformPerspective: 800, // Adds perspective
duration: 0.1,
});
});