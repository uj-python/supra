// Carries Style script.js for Suprainspire

document.addEventListener('DOMContentLoaded', () => {
    console.log('Suprainspire Carries-style site loaded');

    // Initialize AOS animations
    AOS.init({
        duration: 1000,
        once: true
    });

    // Counter animation
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;
            const increment = target / 200; // adjust speed

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
});
