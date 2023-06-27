const image = document.querySelectorAll('.im');

        image.forEach(image => {
        image.addEventListener('mouseenter', () => {
            image.style.transform = 'scale(1.2)';
            image.style.cursor = 'grab';
            vue.style.visibility = 'hidden';
        });

        image.addEventListener('mouseleave', () => {
            image.style.transform = 'scale(1)';
            vue.style.visibility = 'visible';
        });
        });

// document.querySelector('.menu-btn').addEventListener('click', () => document.querySelector('.men').classList.toggle('show'));