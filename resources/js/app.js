import './bootstrap';

import '@fortawesome/fontawesome-free/js/all.js';
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.meal-title').forEach(item => {
        item.addEventListener('click', function(event) {
            
            event.stopPropagation();

            
            const content = this.nextElementSibling;
            content.style.display = content.style.display === 'none' || content.style.display === '' ? 'block' : 'none';
        });
    });

    
    document.addEventListener('click', function(event) {
        
        document.querySelectorAll('.meal-content').forEach(content => {
            content.style.display = 'none';
        });
    });
});
