document.addEventListener("DOMContentLoaded", function() {
    const select = document.getElementById("raza");
    const productCards = document.querySelectorAll(".product-card");
  
    select.addEventListener("change", function() {
      const selectedCategory = this.value;
  
      productCards.forEach(function(card) {
        const category = card.getAttribute("data-category");
  
        if (selectedCategory === "todos" || selectedCategory === category) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
  