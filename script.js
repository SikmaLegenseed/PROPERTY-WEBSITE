document.addEventListener("DOMContentLoaded", () => {
  const button = document.querySelector('.button-main');
  const content = document.querySelector('.content');

  if (button && content) {
      button.addEventListener('click', () => {
          content.scrollIntoView({ behavior: "smooth", block: "start" });
      });
  }

  const contentImage = document.querySelector('.content img');

  if (contentImage) {
      const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  contentImage.style.opacity = "1";
                  contentImage.style.transform = "translateY(0)";
              }
          });
      }, { threshold: 0.5 }); 

      observer.observe(contentImage);
  }
});
