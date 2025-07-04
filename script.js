// Hamburger menu
const hamburger = document.querySelector('.hamburger');
const navMobile = document.getElementById('nav-menu');
hamburger.addEventListener('click', () => {
    navMobile.classList.toggle('open');
    hamburger.setAttribute('aria-expanded', navMobile.classList.contains('open'));
});

// Smooth scroll for nav links
document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth' });
            navMobile.classList.remove('open');
            hamburger.setAttribute('aria-expanded', 'false');
        }
    });
});

// Scroll-in animaties
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('inview');
        }
    });
}, { threshold: 0.15 });

document.querySelectorAll('.dienst, .blogpost, .overons-img img, .overons-content > div').forEach(el => {
    observer.observe(el);
});

// Navbar shrink effect on scroll
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 80) { // pas 80 aan naar wens
        navbar.classList.add('shrink');
    } else {
        navbar.classList.remove('shrink');
    }
});