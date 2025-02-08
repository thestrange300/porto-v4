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
    duration: 1700,
    delay: (el, i) => 500 + 30 * i
  });

// ---------- GSAP Content ------------


document.addEventListener("DOMContentLoaded", function () {
    // Initial page load animations
    gsap.from("#hero-desc", {
        opacity: 0,
        y: 50,
        duration: 1.5,
        ease: "power3.out",
    });

    gsap.from("#socials", {
        opacity: 0,
        y: 50,
        duration: 1.5,
        ease: "back.out",
    });

    // Main card animation timeline
    const image = document.getElementById("center-jack");
    const timeline = gsap.timeline({
        onComplete: () => {
            setTimeout(enableImageEffects, 300);
        },
    });

    // Center card animation sequence
    timeline
        .to(image, {
            rotationY: 360,
            x: 5,
            y: -5,
            z: 5,
            duration: 0.6,
            ease: "none",
        })
        .to(image, { 
            rotationY: 0, 
            scale: 1.4, 
            duration: 0.4, 
            ease: "power3.out" 
        })
        .to(image, { 
            scale: 1, 
            duration: 0.2, 
            ease: "power2.out" 
        })
        .add(() => {
            // Card sprawl animation
            gsap.set(".card", {
                className: 'card md:w-[256px] md:h-auto h-[196px] w-auto absolute',
                opacity: 1, // Changed from 0.7 to 1
                scale: 0.9
            });

            // Set initial stacked positions with z-index
            gsap.set("#card-left1", { x: -15, rotation: -8, scale: 0.95, zIndex: 15 });
            gsap.set("#card-left2", { x: -30, rotation: -15, scale: 0.9, zIndex: 10 });
            gsap.set("#card-right1", { x: 15, rotation: 8, scale: 0.95, zIndex: 15 });
            gsap.set("#card-right2", { x: 30, rotation: 15, scale: 0.9, zIndex: 10 });

            // Animate to final positions
            gsap.to("#card-left1", { 
                x: -80, 
                rotation: -10, 
                duration: 0.8, 
                ease: "power3.out" 
            });
            gsap.to("#card-left2", { 
                x: -140, 
                rotation: -20, 
                duration: 0.8, 
                ease: "power3.out" 
            });
            gsap.to("#card-right1", { 
                x: 80, 
                rotation: 10, 
                duration: 0.8, 
                ease: "power3.out" 
            });
            gsap.to("#card-right2", { 
                x: 140, 
                rotation: 20, 
                duration: 0.8, 
                ease: "power3.out" 
            });
        });

    // Hover effect functions
    let isImageEffectsEnabled = false;
    let rotateX, rotateY;

    function enableImageEffects() {
        isImageEffectsEnabled = true;
        image.addEventListener("mouseenter", handleMouseEnter);
        image.addEventListener("mouseleave", handleMouseLeave);
        document.addEventListener("mousemove", handleMouseMove);

        rotateX = gsap.quickTo(image, "rotationX", { 
            duration: 0.1, 
            ease: "power3.out" 
        });
        rotateY = gsap.quickTo(image, "rotationY", { 
            duration: 0.1, 
            ease: "power3.out" 
        });
        gsap.set(image, { transformPerspective: 800 });
        simulateInitialHover();
    }

    function handleMouseEnter() {
        if (!isImageEffectsEnabled) return;
        gsap.to(image, { scale: 1.05, duration: 0.3 });
    }

    function handleMouseLeave() {
        if (!isImageEffectsEnabled) return;
        gsap.to(image, { scale: 1, duration: 0.3 });
    }

    function handleMouseMove(e) {
        if (!isImageEffectsEnabled) return;
        const { clientX: mouseX, clientY: mouseY } = e;
        const { top, left, width, height } = image.getBoundingClientRect();
        const centerX = left + width / 2;
        const centerY = top + height / 2;
        const deltaX = (mouseX - centerX) / width;
        const deltaY = (mouseY - centerY) / height;

        rotateX(-deltaY * 5);
        rotateY(deltaX * 5);
    }

    function simulateInitialHover() {
        gsap.to(image, { scale: 1.05, duration: 0.3 });
    }
});

