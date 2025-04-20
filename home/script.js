// iamge changer
document.addEventListener('DOMContentLoaded', function() {
    // Array of image sources
    const images = [
        '../images/gallery/01.jpg',
        '../images/gallery/02.jpg',
        '../images/gallery/03.jpg',
        '../images/gallery/04.jpg',
        '../images/gallery/05.jpg'
    ];
    
    const imageElement = document.getElementById('animated-hero-image');
    let currentIndex = 0;
    
    // Function to change image with fade effect
    function changeImage() {
        // Add fade-out class
        imageElement.classList.add('fade-out');

        // After fade completes, change the image and fade back in
        setTimeout(() => {
        currentIndex = (currentIndex + 1) % images.length;
        imageElement.src = images[currentIndex];
        imageElement.classList.remove('fade-out');
        }, 500);
    }
    
    // Change image every 3 seconds
    setInterval(changeImage, 3000);
});

// slider-process-cinnamon
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    let currentSlide = 0;
    const totalSlides = slides.length;
    
    // Function to update slides
    function updateSlides() {
        // Reset all slides and dots
        slides.forEach(slide => {
            slide.classList.remove('active', 'prev', 'next');
        });
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Set active slide
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
        
        // Set previous slide
        const prevSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        slides[prevSlide].classList.add('prev');
        
        // Set next slide
        const nextSlide = (currentSlide + 1) % totalSlides;
        slides[nextSlide].classList.add('next');
    }
    
    // Auto slide change
    setInterval(function() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlides();
    }, 3000);
    
    // Click event for navigation dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            updateSlides();
        });
    });
});

// cinnamon and leaves falling 
// document.addEventListener('DOMContentLoaded', function() {
//       const container = document.getElementById('cinnamon-container');


//     const heroSection = container.closest('.hero-section') || container.closest('.page_slider') || container;
    
 
//     const config = {
//         particleCount: 30,         // Reduced count since images are larger
//         minSize: 30,               // Minimum image size in pixels
//         maxSize: 80,               // Maximum image size in pixels
//         minDuration: 5,            // Slower falling for images
//         maxDuration: 15,           // Maximum falling duration
//         // Array of image sources to use
//         images: [
//         '../images/gallery/cinnamon.png', 
//         //   '../images/cinnamon-stick-2.png',
//         //   '../images/cinnamon-bark.png',
//         //   '../images/cinnamon-powder.png',
//         '../images/gallery/cinnamon.png'
//         ],
//         opacityMin: 0.6,           // Higher minimum opacity for better visibility
//         opacityMax: 1.0,           // Full opacity for main images
//         layerDepth: 3              // Depth layers for realistic effect
//     };
    
//     // Function to create a single falling image
//     function createFallingImage() {
//         const imageWrapper = document.createElement('div');
//         imageWrapper.className = 'falling-cinnamon-image';
        
//         // Random properties
//         const depthLayer = Math.floor(Math.random() * config.layerDepth);
//         const depthScale = 1 - (depthLayer * 0.2);
        
//         const size = (config.minSize + Math.random() * (config.maxSize - config.minSize)) * depthScale;
//         const left = Math.random() * 100;
//         const delay = Math.random() * 5;
//         const duration = (config.minDuration + Math.random() * (config.maxDuration - config.minDuration)) / depthScale;
//         const imageIndex = Math.floor(Math.random() * config.images.length);
//         const opacity = config.opacityMin + Math.random() * (config.opacityMax - config.opacityMin);
//         const rotation = Math.random() * 360; // Random initial rotation
        
//         // Create actual image element
//         const img = document.createElement('img');
//         img.src = config.images[imageIndex];
//         img.alt = 'Falling cinnamon';
//         img.style.width = '100%';
//         img.style.height = '100%';
//         img.style.objectFit = 'contain';

//         // Apply styles to wrapper
//         imageWrapper.style.width = `${size}px`;
//         imageWrapper.style.height = `${size}px`;
//         imageWrapper.style.left = `${left}%`;
//         imageWrapper.style.top = '-80px'; // Start above viewport
//         imageWrapper.style.opacity = '0';
//         imageWrapper.style.zIndex = 5 - depthLayer;
//         imageWrapper.style.filter = `blur(${depthLayer * 0.5}px)`;
//         imageWrapper.style.position = 'absolute';
//         imageWrapper.style.transform = `rotate(${rotation}deg)`;
        
//         // Add subtle shadow for depth
//         if (depthLayer === 0) {
//         imageWrapper.style.filter += ' drop-shadow(0 5px 5px rgba(0,0,0,0.2))';
//         }
        
//         // Add image to wrapper and wrapper to container
//         imageWrapper.appendChild(img);
//         container.appendChild(imageWrapper);
        
//         return { element: imageWrapper, depthScale };
//     }
    
//     // Add natural swirling motion to images
//     function addSwirl(imageObj, index) {
//         const { element: imageWrapper, depthScale } = imageObj;
//         const swirlAmplitude = (20 + Math.random() * 50) * depthScale;
        
//         // Create unique animation
//         const animationName = `image-swirl-${index}`;
//         const randomFactor = Math.random() * 0.5 + 0.75;
        
//         // Natural falling animation with rotation
//         const keyframes = `
//         @keyframes ${animationName} {
//             0% { transform: translateY(-80px) translateX(0) rotate(${Math.random() * 360}deg); opacity: 0; }
//             5% { transform: translateY(0) translateX(${Math.random() * 20}px) rotate(${Math.random() * 360}deg); opacity: ${imageWrapper.style.opacity || 0.8}; }
//             25% { transform: translateY(calc(25vh)) translateX(${swirlAmplitude * randomFactor}px) rotate(${Math.random() * 720}deg); }
//             50% { transform: translateY(calc(50vh)) translateX(${-swirlAmplitude/2 * randomFactor}px) rotate(${Math.random() * 1080}deg); }
//             75% { transform: translateY(calc(75vh)) translateX(${swirlAmplitude/3 * randomFactor}px) rotate(${Math.random() * 1440}deg); }
//             90% { opacity: ${(parseFloat(imageWrapper.style.opacity) || 0.8) * 0.6}; }
//             100% { transform: translateY(calc(100vh + 100px)) translateX(${-swirlAmplitude/4 * randomFactor}px) rotate(${Math.random() * 1800}deg); opacity: 0; }
//         }
//         `;

//         const stylesheet = document.createElement('style');
//         stylesheet.textContent = keyframes;
//         document.head.appendChild(stylesheet);
        
//         // Apply the animation
//         const duration = parseFloat(imageWrapper.style.animation?.split(' ')[1] || 
//         config.minDuration + Math.random() * (config.maxDuration - config.minDuration));
//         const delay = parseFloat(imageWrapper.style.animation?.split(' ')[3] || Math.random() * 5);
        
//         imageWrapper.style.animation = `${animationName} ${duration}s ease-in-out ${delay}s infinite`;
//     }

//     // Mouse interaction - add images when mouse moves
//     let mouseMoveTimeout;
//     heroSection.addEventListener('mousemove', function(e) {
//         clearTimeout(mouseMoveTimeout);
        
//         // Only create images within the hero section
//         const rect = container.getBoundingClientRect();
//         const x = ((e.clientX - rect.left) / rect.width) * 100;
//         const y = ((e.clientY - rect.top) / rect.height) * 100;
        
//         if (x >= 0 && x <= 100 && y >= 0 && y <= 100) {
//         // Only create new image occasionally on mouse move to prevent too many images
//         if (Math.random() > 0.7) {
//             const imageObj = createFallingImage();
//             imageObj.element.style.left = `${x - 10 + Math.random() * 20}%`;
//             imageObj.element.style.top = `${y - 10 + Math.random() * 20}%`;
//             addSwirl(imageObj, `mouse-${Date.now()}`);
//         }
//         }
//     }, { passive: true });
    
//     // Create initial batch of falling images
//     for (let i = 0; i < config.particleCount; i++) {
//         const imageObj = createFallingImage();
//         addSwirl(imageObj, i);
//     }

//     // Continuously add new images at a controlled rate
//     setInterval(() => {
//         if (Math.random() > 0.7) { // 30% chance each interval
//         const imageObj = createFallingImage();
//         addSwirl(imageObj, config.particleCount + Math.floor(Math.random() * 1000));
//         }
//     }, 1000); // Reduced frequency due to larger images
    
//     // Ensure container is properly styled to contain images in hero section
//     container.style.position = 'absolute';
//     container.style.top = '0';
//     container.style.left = '0';
//     container.style.width = '100%';
//     container.style.height = '100%';
//     container.style.overflow = 'hidden';
//     container.style.pointerEvents = 'none';
//     container.style.zIndex = '5';
    
//     // Clean up excess images to prevent performance issues
//     setInterval(() => {
//         const allImages = document.querySelectorAll('.falling-cinnamon-image');
//         if (allImages.length > 100) { // Limit total number of images
//         // Remove oldest images
//         for (let i = 0; i < allImages.length - 100; i++) {
//             if (allImages[i] && allImages[i].parentNode) {
//             allImages[i].parentNode.removeChild(allImages[i]);
//             }
//         }
//         }
//     }, 5000);

//     document.addEventListener('DOMContentLoaded', () => {
//         const observer = new IntersectionObserver((entries) => {
//           entries.forEach(entry => {
//             if (entry.isIntersecting) {
//               entry.target.classList.add('visible'); // Add 'visible' class when element is in view
//             }
//           });
//         });
      
//         // Select all elements with the 'scroll-animation' class
//         const elements = document.querySelectorAll('.scroll-animation');
//         elements.forEach(element => observer.observe(element));
//     });

    // 
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        let valid = true;
    
        // Clear previous errors
        document.querySelectorAll('.error-message').forEach(el => {
            el.textContent = '';
            el.style.display = 'none';
        });
    
        // Name validation
        const name = document.getElementById('name').value.trim();
        if (name === '') {
            document.getElementById('nameError').textContent = 'Please enter your name.';
            document.getElementById('nameError').style.display = 'block';
            valid = false;
        }
    
        // Email validation
        const email = document.getElementById('email').value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === '' || !emailPattern.test(email)) {
            document.getElementById('emailError').textContent = 'Please enter a valid email address.';
            document.getElementById('emailError').style.display = 'block';
            valid = false;
        }
    
        // Message validation
        const message = document.getElementById('message').value.trim();
        if (message === '') {
            document.getElementById('messageError').textContent = 'Please enter your message.';
            document.getElementById('messageError').style.display = 'block';
            valid = false;
        }
    
        if (!valid) {
            e.preventDefault();
        }
    });
    
      
