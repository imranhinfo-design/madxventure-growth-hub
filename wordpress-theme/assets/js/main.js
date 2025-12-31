/**
 * MadXventure Theme JavaScript
 */

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initSmoothScroll();
        initHeaderScroll();
        initContactForm();
        initAnimations();
    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const mainNav = document.getElementById('main-nav');

        if (!menuToggle || !mainNav) return;

        menuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            menuToggle.classList.toggle('active');
            
            // Toggle aria-expanded
            const isExpanded = mainNav.classList.contains('active');
            menuToggle.setAttribute('aria-expanded', isExpanded);
        });

        // Close menu when clicking on nav links
        const navLinks = mainNav.querySelectorAll('a');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                mainNav.classList.remove('active');
                menuToggle.classList.remove('active');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mainNav.contains(e.target) && !menuToggle.contains(e.target)) {
                mainNav.classList.remove('active');
                menuToggle.classList.remove('active');
            }
        });
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    
                    const headerHeight = document.getElementById('site-header').offsetHeight;
                    const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Header Background on Scroll
     */
    function initHeaderScroll() {
        const header = document.getElementById('site-header');
        
        if (!header) return;

        function updateHeader() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        window.addEventListener('scroll', updateHeader);
        updateHeader(); // Initial check
    }

    /**
     * Contact Form AJAX Submission
     */
    function initContactForm() {
        const form = document.getElementById('contact-form');
        
        if (!form) return;

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Show loading state
            submitButton.innerHTML = 'Sending...';
            submitButton.disabled = true;
            
            // Prepare form data
            const formData = new FormData(form);
            formData.append('action', 'madxventure_contact');
            formData.append('nonce', madxventureAjax.nonce);
            
            // Send AJAX request
            fetch(madxventureAjax.ajaxUrl, {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.success) {
                    // Show success message
                    showNotification(data.data.message, 'success');
                    form.reset();
                } else {
                    // Show error message
                    showNotification(data.data.message || 'An error occurred. Please try again.', 'error');
                }
            })
            .catch(function(error) {
                console.error('Form submission error:', error);
                showNotification('An error occurred. Please try again.', 'error');
            })
            .finally(function() {
                // Restore button state
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            });
        });
    }

    /**
     * Show Notification
     */
    function showNotification(message, type) {
        // Remove existing notifications
        const existingNotifications = document.querySelectorAll('.form-notification');
        existingNotifications.forEach(function(notification) {
            notification.remove();
        });

        // Create notification element
        const notification = document.createElement('div');
        notification.className = 'form-notification ' + type;
        notification.innerHTML = message;
        
        // Add styles
        notification.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 16px 24px;
            border-radius: 8px;
            font-weight: 500;
            z-index: 9999;
            animation: slideIn 0.3s ease;
            max-width: 400px;
            ${type === 'success' 
                ? 'background: #10b981; color: white;' 
                : 'background: #ef4444; color: white;'}
        `;
        
        document.body.appendChild(notification);
        
        // Remove after 5 seconds
        setTimeout(function() {
            notification.style.animation = 'slideOut 0.3s ease';
            setTimeout(function() {
                notification.remove();
            }, 300);
        }, 5000);
    }

    /**
     * Scroll Animations
     */
    function initAnimations() {
        const animatedElements = document.querySelectorAll('.service-card, .about-card, .result-card');
        
        if (!animatedElements.length) return;

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animatedElements.forEach(function(element, index) {
            element.style.opacity = '0';
            element.style.animationDelay = (index * 0.1) + 's';
            observer.observe(element);
        });
    }

    // Add animation keyframes to document
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes slideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

})();
