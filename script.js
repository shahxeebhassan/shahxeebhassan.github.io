// Intersection Observer for section animations
const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, {
    threshold: 0.1
});

// Observe all sections
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section');
    sections.forEach(section => sectionObserver.observe(section));

    // Add animation classes to elements
    document.querySelector('header').classList.add('animate-fade-in');
    document.querySelectorAll('.hover-scale').forEach(el => {
        el.classList.add('animate-fade-in');
    });

    // Initialize custom buttons
    initializeCustomButtons();

    // Initialize counters
    initializeCounters();
});

// Custom button initialization
function initializeCustomButtons() {
    const buttons = document.querySelectorAll('a[href^="#"]');
    buttons.forEach(button => {
        button.classList.add('custom-button');
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = button.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Counter animation
function initializeCounters() {
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const step = target / (duration / 16); // 60fps
        let current = 0;

        const updateCounter = () => {
            current += step;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };

        const counterObserver = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                updateCounter();
                counterObserver.unobserve(counter);
            }
        });

        counterObserver.observe(counter);
    });
}

// Form validation (to be implemented when form is ready)
function validateForm() {
    // Form validation logic will be added here
    return true;
}

// Update LinkedIn link
function updateLinkedInLink(url) {
    const linkedInLink = document.getElementById('linkedin-link');
    if (linkedInLink && url) {
        linkedInLink.href = url;
    }
}

// Registration form handler (to be implemented)
function handleRegistration(event) {
    event.preventDefault();
    // Registration form handling logic will be added here
}

// Mobile menu toggle
function toggleMobileMenu() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.classList.toggle('hidden');
}

// Add loading animation
window.addEventListener('load', () => {
    document.body.classList.add('loaded');
});

// Countdown Timer (until Sunday, July 6, 2025, 11:59 PM)
function updateCountdown() {
    const countdownElement = document.getElementById("countdown");
    const deadline = new Date("2025-07-06T23:59:59").getTime();
    const now = new Date().getTime();
    const diff = deadline - now;

    if (diff <= 0) {
        countdownElement.textContent = "Registration closed";
        return;
    }

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

    countdownElement.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
}

setInterval(updateCountdown, 1000);
updateCountdown();
