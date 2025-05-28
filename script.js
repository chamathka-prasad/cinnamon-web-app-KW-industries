// // iamge changer
// document.addEventListener('DOMContentLoaded', function() {
//     // Array of image sources
//     const images = [
//         'home/assets/gal1.jpg',
//         'home/assets/gal-2.jpg',
//         'home/assets/gal-8.jpg'
//         // '../home/assets/raw-cinnamon-sticks-background.webp',
//         // '../home/assets/raw-cinnamon-sticks-background.webp'
//     ];
    
//     const imageElement = document.getElementById('animated-hero-image');
//     let currentIndex = 0;

//     function changeImage() {
//         // Add fade-out class
//         imageElement.classList.add('fade-out');

//         // After fade completes, change the image and fade back in
//         setTimeout(() => {
//         currentIndex = (currentIndex + 1) % images.length;
//         imageElement.src = images[currentIndex];
//         imageElement.classList.remove('fade-out');
//         }, 500);
//     }
    
//     // Change image every 3 seconds
//     setInterval(changeImage, 3000);
// });

// // slider-cinnamon
// document.addEventListener('DOMContentLoaded', function() {
//     const slides = document.querySelectorAll('.slide');
//     const dots = document.querySelectorAll('.dot');
//     let currentSlide = 0;
//     const totalSlides = slides.length;
    
    
//     function updateSlides() {
//         // Reset all slides and dots
//         slides.forEach(slide => {
//             slide.classList.remove('active', 'prev', 'next');
//         });
//         dots.forEach(dot => dot.classList.remove('active'));
        
//         // Set active slide
//         slides[currentSlide].classList.add('active');
//         dots[currentSlide].classList.add('active');
        
//         // Set previous slide
//         const prevSlide = (currentSlide - 1 + totalSlides) % totalSlides;
//         slides[prevSlide].classList.add('prev');
        
//         // Set next slide
//         const nextSlide = (currentSlide + 1) % totalSlides;
//         slides[nextSlide].classList.add('next');
//     }
    
//     // Auto slide change
//     setInterval(function() {
//         currentSlide = (currentSlide + 1) % totalSlides;
//         updateSlides();
//     }, 3000);
    
//     // Click event for navigation dots
//     dots.forEach((dot, index) => {
//         dot.addEventListener('click', () => {
//             currentSlide = index;
//             updateSlides();
//         });
//     });

    
      
// });

