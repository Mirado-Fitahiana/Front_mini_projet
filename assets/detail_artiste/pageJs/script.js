//anime image
const images = document.querySelectorAll('.img1');

images.forEach(image => {
  const voirDetail = image.nextElementSibling;
  
  image.addEventListener('mouseenter', () => {
    image.style.transform = 'scale(1.2)';
    voirDetail.style.visibility = 'hidden';
    image.style.cursor = 'grab';
    image.style.transition = '1s';
  });

  image.addEventListener('mouseleave', () => {
    image.style.transform = 'scale(1)';
    voirDetail.style.visibility = 'visible';
  });
});

//noir to couleur
const image = document.querySelector('.id1');
const imgcouleur = 'http://localhost/Projet_Baovola/assets/image/Célia_rakotondrainy.jpg';
const imgnoir = 'http://localhost/Projet_Baovola/assets/image/Célia_rakotondrainy_noir.jpg';

image.addEventListener('mouseenter', function() {
  image.style.transform = 'scale(1.1)';
  image.style.cursor = 'grab';
});

image.addEventListener('mouseleave', function() {
  image.style.transform = 'scale(1)';
});

//div animed
const colSmElements = document.querySelectorAll('.col-sm');

function handleFadeIns() {
  colSmElements.forEach((colSm, index) => {
    setTimeout(() => {
      colSm.classList.add('visible');
    }, index * 900);
  });
}

handleFadeIns();
