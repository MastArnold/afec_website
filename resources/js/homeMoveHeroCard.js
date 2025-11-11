document.addEventListener("DOMContentLoaded", () => {
    const card = document.getElementById("hero-card");

    if (!card) return;

    card.addEventListener("mousemove", (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left; // position X relative à l'élément
        const y = e.clientY - rect.top;  // position Y relative à l'élément

        // Pourcentage de position dans l'élément
        const xPercent = (x / rect.width) * 100;
        const yPercent = (y / rect.height) * 100;

        // Appliquer une petite variation autour du centre (50%, 50%)
        const moveX = 50 + (xPercent - 50) / 10; // plus le dénominateur est grand, plus l’effet est subtil
        const moveY = 50 + (yPercent - 50) / 10;

        card.style.backgroundPosition = `${moveX}% ${moveY}%`;
    });

    // Recentrer au survol
    card.addEventListener("mouseleave", () => {
        card.style.backgroundPosition = "50% 50%";
    });
});
