// app.js

const navItems = document.querySelectorAll(".nav-item");

navItems.forEach(item => {
  item.addEventListener("click", () => {

    navItems.forEach(nav => {
      nav.classList.remove("active");
    });

    item.classList.add("active");

  });
});


// Simple dashboard interaction

const actionCards = document.querySelectorAll(".action-card");

actionCards.forEach(card => {
  card.addEventListener("click", () => {

    card.style.transform = "scale(0.98)";

    setTimeout(() => {
      card.style.transform = "";
    }, 150);

  });
});