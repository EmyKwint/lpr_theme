let imgStock = [
  { titre: "Salade Vinegrete", affiche: "hero_img_1.webp" },
  { titre: "Brochette",        affiche: "hero_img_2.webp" },
];

let position = 0;

window.slide = function(sens) {
    const img = document.querySelector("#image");
    if (!img) return; // Vérifier que l'élément existe
    
    position += sens;

    if (position > imgStock.length - 1) position = 0;
    if (position < 0) position = imgStock.length - 1;

    // Update image source and alt text
    const themeUri = document.documentElement.getAttribute('data-theme-uri');
    img.src = `${themeUri}/assets/img/${imgStock[position].affiche}`;
    img.alt = imgStock[position].titre;
};
