document.querySelector('.scroll-arrow').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#next-section').scrollIntoView({ behavior: 'smooth' });
});