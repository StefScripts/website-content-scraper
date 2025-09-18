// // Mobile Navigation Toggle
// document.addEventListener('DOMContentLoaded', function() {
//     const navToggle = document.getElementById('navToggle');
//     const navList = document.querySelector('.nav-list');
//     const body = document.body;
    
//     if (navToggle) {
//         navToggle.addEventListener('click', function() {
//             navList.classList.toggle('active');
//             body.classList.toggle('nav-open');
            
//             // Animate hamburger menu
//             const spans = navToggle.querySelectorAll('span');
//             if (navList.classList.contains('active')) {
//                 spans[0].style.transform = 'rotate(45deg) translateY(8px)';
//                 spans[1].style.opacity = '0';
//                 spans[2].style.transform = 'rotate(-45deg) translateY(-8px)';
//             } else {
//                 spans[0].style.transform = 'none';
//                 spans[1].style.opacity = '1';
//                 spans[2].style.transform = 'none';
//             }
//         });
        
//         // Close menu when clicking outside
//         document.addEventListener('click', function(e) {
//             if (!navToggle.contains(e.target) && !navList.contains(e.target)) {
//                 navList.classList.remove('active');
//                 body.classList.remove('nav-open');
//                 const spans = navToggle.querySelectorAll('span');
//                 spans[0].style.transform = 'none';
//                 spans[1].style.opacity = '1';
//                 spans[2].style.transform = 'none';
//             }
//         });
        
//         // Close menu when clicking on a link
//         navList.querySelectorAll('a').forEach(link => {
//             link.addEventListener('click', () => {
//                 navList.classList.remove('active');
//                 body.classList.remove('nav-open');
//                 const spans = navToggle.querySelectorAll('span');
//                 spans[0].style.transform = 'none';
//                 spans[1].style.opacity = '1';
//                 spans[2].style.transform = 'none';
//             });
//         });
//     }
    
//     // Smooth scroll for anchor links
//     document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//         anchor.addEventListener('click', function (e) {
//             e.preventDefault();
//             const target = document.querySelector(this.getAttribute('href'));
//             if (target) {
//                 target.scrollIntoView({
//                     behavior: 'smooth',
//                     block: 'start'
//                 });
//             }
//         });
//     });
    
//     // Intersection Observer for fade-in animations
//     const observerOptions = {
//         threshold: 0.1,
//         rootMargin: '0px 0px -100px 0px'
//     };
    
//     const observer = new IntersectionObserver(function(entries) {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 entry.target.classList.add('fade-in');
//                 observer.unobserve(entry.target);
//             }
//         });
//     }, observerOptions);
    
//     // Observe all elements with animation classes
//     document.querySelectorAll('.audience-card, .feature-card, .location-box, .pull-quote').forEach(el => {
//         observer.observe(el);
//     });
    
//     // Parallax effect for hero section
//     const hero = document.querySelector('.hero');
//     if (hero) {
//         window.addEventListener('scroll', () => {
//             const scrolled = window.pageYOffset;
//             const rate = scrolled * -0.5;
//             if (hero.querySelector('::before')) {
//                 hero.style.transform = `translateY(${rate}px)`;
//             }
//         });
//     }
    
//     // Tab functionality for content pages
//     const tabButtons = document.querySelectorAll('.tab-button');
//     const tabContents = document.querySelectorAll('.tab-content');
    
//     tabButtons.forEach(button => {
//         button.addEventListener('click', () => {
//             const targetTab = button.getAttribute('data-tab');
            
//             // Remove active class from all buttons and contents
//             tabButtons.forEach(btn => btn.classList.remove('active'));
//             tabContents.forEach(content => content.classList.remove('active'));
            
//             // Add active class to clicked button and corresponding content
//             button.classList.add('active');
//             document.getElementById(targetTab).classList.add('active');
//         });
//     });
    
//     // Accordion functionality
//     const accordionHeaders = document.querySelectorAll('.accordion-header');
    
//     accordionHeaders.forEach(header => {
//         header.addEventListener('click', () => {
//             const accordionItem = header.parentElement;
//             const accordionContent = header.nextElementSibling;
//             const isOpen = accordionItem.classList.contains('active');
            
//             // Close all accordion items
//             document.querySelectorAll('.accordion-item').forEach(item => {
//                 item.classList.remove('active');
//                 item.querySelector('.accordion-content').style.maxHeight = null;
//             });
            
//             // If this item wasn't open, open it
//             if (!isOpen) {
//                 accordionItem.classList.add('active');
//                 accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
//             }
//         });
//     });
    
//     // Form validation for contact form (if present)
//     const contactForm = document.getElementById('contactForm');
//     if (contactForm) {
//         contactForm.addEventListener('submit', function(e) {
//             e.preventDefault();
            
//             // Basic validation
//             const requiredFields = contactForm.querySelectorAll('[required]');
//             let isValid = true;
            
//             requiredFields.forEach(field => {
//                 if (!field.value.trim()) {
//                     field.classList.add('error');
//                     isValid = false;
//                 } else {
//                     field.classList.remove('error');
//                 }
//             });
            
//             if (isValid) {
//                 // Show success message
//                 const successMessage = document.createElement('div');
//                 successMessage.className = 'success-message';
//                 successMessage.textContent = 'Thank you for your message. We will get back to you soon!';
//                 contactForm.appendChild(successMessage);
                
//                 // Reset form
//                 contactForm.reset();
                
//                 // Remove success message after 5 seconds
//                 setTimeout(() => {
//                     successMessage.remove();
//                 }, 5000);
//             }
//         });
//     }
    
//     // Add playful hover effects to audience cards
//     const audienceCards = document.querySelectorAll('.audience-card');
//     audienceCards.forEach(card => {
//         card.addEventListener('mouseenter', function() {
//             this.style.transform = 'rotate(0deg) translateY(-5px)';
//         });
        
//         card.addEventListener('mouseleave', function() {
//             const index = Array.from(audienceCards).indexOf(this);
//             const rotations = [-2, 1, -1];
//             this.style.transform = `rotate(${rotations[index]}deg)`;
//         });
//     });
// });


// Navigation Toggle
const navToggle = document.getElementById('navToggle');
const navList = document.querySelector('.nav-list');

if (navToggle) {
    navToggle.addEventListener('click', () => {
        navList.classList.toggle('active');
        navToggle.classList.toggle('active');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!navToggle.contains(e.target) && !navList.contains(e.target)) {
            navList.classList.remove('active');
            navToggle.classList.remove('active');
        }
    });

    // Close menu when clicking a link
    const navLinks = navList.querySelectorAll('a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navList.classList.remove('active');
            navToggle.classList.remove('active');
        });
    });
}

// Fade in animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

// Observe all fade-in-up elements
document.addEventListener('DOMContentLoaded', () => {
    const fadeElements = document.querySelectorAll('.fade-in-up');
    fadeElements.forEach(element => {
        observer.observe(element);
    });
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add subtle parallax effect to hero sections
const heroSections = document.querySelectorAll('.hero, .approach-hero');
if (heroSections.length > 0 && window.innerWidth > 768) {
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        heroSections.forEach(hero => {
            const speed = 0.5;
            const yPos = -(scrolled * speed);
            hero.style.transform = `translateY(${yPos}px)`;
        });
    });
}

// Enhance phase items interaction
const phaseItems = document.querySelectorAll('.phase-item');
phaseItems.forEach((item, index) => {
    item.addEventListener('mouseenter', () => {
        // Add a subtle glow effect to the step number
        const stepCircle = item.querySelector('::before');
        if (stepCircle) {
            item.style.setProperty('--glow-opacity', '0.3');
        }
    });
    
    item.addEventListener('mouseleave', () => {
        item.style.setProperty('--glow-opacity', '0');
    });
});

// Add loading state for external links
const externalLinks = document.querySelectorAll('a[target="_blank"]');
externalLinks.forEach(link => {
    link.addEventListener('click', function() {
        this.classList.add('loading');
        setTimeout(() => {
            this.classList.remove('loading');
        }, 1000);
    });
});

// Accessibility: Handle keyboard navigation for interactive elements
document.addEventListener('keydown', (e) => {
    // Close mobile menu with Escape key
    if (e.key === 'Escape' && navList.classList.contains('active')) {
        navList.classList.remove('active');
        navToggle.classList.remove('active');
        navToggle.focus();
    }
});

// Performance: Debounce scroll events
let scrollTimeout;
window.addEventListener('scroll', () => {
    if (scrollTimeout) {
        window.cancelAnimationFrame(scrollTimeout);
    }
    scrollTimeout = window.requestAnimationFrame(() => {
        // Add any scroll-based animations here
    });
});

// Initialize any tooltips or popovers if needed
const initTooltips = () => {
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    tooltipElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            const tooltip = document.createElement('div');
            tooltip.className = 'tooltip';
            tooltip.textContent = this.getAttribute('data-tooltip');
            document.body.appendChild(tooltip);
            
            const rect = this.getBoundingClientRect();
            tooltip.style.top = rect.top - tooltip.offsetHeight - 10 + 'px';
            tooltip.style.left = rect.left + (rect.width - tooltip.offsetWidth) / 2 + 'px';
            
            this._tooltip = tooltip;
        });
        
        element.addEventListener('mouseleave', function() {
            if (this._tooltip) {
                this._tooltip.remove();
                delete this._tooltip;
            }
        });
    });
};

// Call tooltip initialization if needed
initTooltips();