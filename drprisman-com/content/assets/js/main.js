/**
 * Main JavaScript file for Dr. Prisman's website
 * Handles mobile navigation, back-to-top functionality, and form enhancements
 */

(function() {
    'use strict';
    
    // Wait for DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        
        // Initialize mobile navigation
        initMobileNavigation();
        
        // Initialize back to top button
        initBackToTop();
        
        // Initialize smooth scrolling for anchor links
        initSmoothScrolling();
        
        // Initialize form enhancements
        initFormEnhancements();
        
        // Initialize accessibility improvements
        initAccessibility();
    });
    
    /**
     * Mobile Navigation Toggle
     */
    function initMobileNavigation() {
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        const body = document.body;
        
        if (!menuToggle || !navMenu) return;
        
        menuToggle.addEventListener('click', function() {
            const isOpen = navMenu.classList.contains('active');
            
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.main-navigation') && navMenu.classList.contains('active')) {
                closeMenu();
            }
        });
        
        // Close menu when pressing escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                closeMenu();
            }
        });
        
        // Close menu when clicking on nav links (mobile)
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    closeMenu();
                }
            });
        });
        
        function openMenu() {
            navMenu.classList.add('active');
            menuToggle.setAttribute('aria-expanded', 'true');
            body.style.overflow = 'hidden';
            
            // Animate hamburger to X
            const hamburger = menuToggle.querySelector('.hamburger');
            if (hamburger) {
                hamburger.classList.add('active');
            }
        }
        
        function closeMenu() {
            navMenu.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
            body.style.overflow = '';
            
            // Animate X back to hamburger
            const hamburger = menuToggle.querySelector('.hamburger');
            if (hamburger) {
                hamburger.classList.remove('active');
            }
        }
        
        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                closeMenu();
            }
        });
    }
    
    /**
     * Back to Top Button
     */
    function initBackToTop() {
        const backToTopBtn = document.getElementById('back-to-top');
        
        if (!backToTopBtn) return;
        
        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });
        
        // Scroll to top when clicked
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    /**
     * Smooth Scrolling for Anchor Links
     */
    function initSmoothScrolling() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip if it's just "#"
                if (href === '#') return;
                
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    
                    const headerHeight = document.querySelector('.site-header').offsetHeight;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
    
    /**
     * Form Enhancements
     */
    function initFormEnhancements() {
        const forms = document.querySelectorAll('form');
        
        forms.forEach(form => {
            // Add form validation styling
            const inputs = form.querySelectorAll('input, textarea, select');
            
            inputs.forEach(input => {
                // Add real-time validation feedback
                input.addEventListener('blur', function() {
                    validateField(this);
                });
                
                input.addEventListener('input', function() {
                    // Clear error state when user starts typing
                    if (this.classList.contains('error')) {
                        this.classList.remove('error');
                        const errorMsg = this.parentNode.querySelector('.form-error');
                        if (errorMsg) {
                            errorMsg.style.display = 'none';
                        }
                    }
                });
            });
            
            // Enhanced form submission
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Validate all required fields
                const requiredFields = form.querySelectorAll('[required]');
                requiredFields.forEach(field => {
                    if (!validateField(field)) {
                        isValid = false;
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    // Focus on first error field
                    const firstError = form.querySelector('.error');
                    if (firstError) {
                        firstError.focus();
                    }
                }
            });
        });
        
        function validateField(field) {
            const value = field.value.trim();
            const type = field.type;
            let isValid = true;
            
            // Check if required field is empty
            if (field.hasAttribute('required') && !value) {
                showFieldError(field, 'This field is required');
                isValid = false;
            }
            // Email validation
            else if (type === 'email' && value && !isValidEmail(value)) {
                showFieldError(field, 'Please enter a valid email address');
                isValid = false;
            }
            // If field is valid, remove error styling
            else {
                clearFieldError(field);
            }
            
            return isValid;
        }
        
        function showFieldError(field, message) {
            field.classList.add('error');
            
            let errorMsg = field.parentNode.querySelector('.form-error');
            if (!errorMsg) {
                errorMsg = document.createElement('span');
                errorMsg.className = 'form-error';
                field.parentNode.appendChild(errorMsg);
            }
            
            errorMsg.textContent = message;
            errorMsg.style.display = 'block';
        }
        
        function clearFieldError(field) {
            field.classList.remove('error');
            const errorMsg = field.parentNode.querySelector('.form-error');
            if (errorMsg) {
                errorMsg.style.display = 'none';
            }
        }
        
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    }
    
    /**
     * Accessibility Improvements
     */
    function initAccessibility() {
        // Add keyboard navigation for buttons that act like links
        const clickableElements = document.querySelectorAll('[data-clickable]');
        
        clickableElements.forEach(element => {
            element.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });
        
        // Improve focus management for mobile menu
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        
        if (menuToggle && navMenu) {
            // Trap focus in mobile menu when open
            navMenu.addEventListener('keydown', function(e) {
                if (e.key === 'Tab' && this.classList.contains('active')) {
                    const focusableElements = this.querySelectorAll('a, button, input, textarea, select');
                    const firstElement = focusableElements[0];
                    const lastElement = focusableElements[focusableElements.length - 1];
                    
                    if (e.shiftKey) {
                        // Shift + Tab
                        if (document.activeElement === firstElement) {
                            e.preventDefault();
                            lastElement.focus();
                        }
                    } else {
                        // Tab
                        if (document.activeElement === lastElement) {
                            e.preventDefault();
                            firstElement.focus();
                        }
                    }
                }
            });
        }
        
        // Add skip links functionality
        const skipLinks = document.querySelectorAll('.skip-link');
        skipLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.focus();
                    target.scrollIntoView();
                }
            });
        });
    }
    
    /**
     * Utility Functions
     */
    
    // Throttle function for scroll events
    function throttle(func, wait) {
        let timeout;
        return function executedFunction() {
            const later = () => {
                clearTimeout(timeout);
                func.apply(this, arguments);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Debounce function for resize events
    function debounce(func, wait) {
        let timeout;
        return function executedFunction() {
            const later = () => {
                clearTimeout(timeout);
                func.apply(this, arguments);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
})();