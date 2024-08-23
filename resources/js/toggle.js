document.querySelectorAll('.meal-title').forEach(item => {
    item.addEventListener('click', function() {
        const content = this.nextElementSibling;
        content.style.display = content.style.display === 'none' || content.style.display === '' ? 'block' : 'none';
    });
});
