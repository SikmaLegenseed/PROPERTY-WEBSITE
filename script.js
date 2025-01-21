// Get the button element
const button = document.querySelector('.button-main');

// Add a click event listener to the button
button.addEventListener('click', function() {
    // Get the content section element
    const content = document.querySelector('.content');

    // Scroll to the content section
    content.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
  });

document.addEventListener("DOMContentLoaded", () => {
  const contentImage = document.querySelector('.content img');

  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              contentImage.style.opacity = "1";
               contentImage.style.transform = "translateY(0)";
          }
      });
  });

    observer.observe(contentImage);
});
