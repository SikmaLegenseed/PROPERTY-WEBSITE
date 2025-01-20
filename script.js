// Fungsi untuk melakukan scroll halus ke bagian konten
function scrollToContent() {
    const contentSection = document.querySelector('.content');
    contentSection.scrollIntoView({ behavior: 'smooth' });
  }

  // Dapatkan elemen tombol dan tambahkan event listener
  const readMoreButton = document.querySelector('.button-main');
  readMoreButton.addEventListener('click', scrollToContent);