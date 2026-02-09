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

    if(typeof wp_path !== 'undefined') {
      const themeUri = wp_path.template_dir;
      img.src = `${themeUri}/assets/img/${imgStock[position].affiche}`;
      img.alt = imgStock[position].titre;
    } else {
      console.error("L'objet wp_path est introuvable. Vérifiez wp_localize_script.");
    }
};
