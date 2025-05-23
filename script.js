const sections = document.querySelectorAll('section');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, {
  threshold: 0.1
});

sections.forEach(section => {
  section.classList.add('hidden');
  observer.observe(section);
});

const scrollToTopBtn = document.createElement('button');
scrollToTopBtn.textContent = '↑';
scrollToTopBtn.className = 'scroll-to-top';
document.body.appendChild(scrollToTopBtn);

scrollToTopBtn.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});

window.addEventListener('scroll', () => {
  scrollToTopBtn.style.display = window.scrollY > 300 ? 'block' : 'none';
});

document.getElementById('languageSwitcher').addEventListener('change', function () {
  const lang = this.value;

  fetch('lang.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'lang=' + lang
  })
  .then(response => response.json())
  .then(data => {
    document.title = data.title;
    document.querySelector('header h1').textContent = data.header;
    document.querySelector('header p').textContent = data.subtitle;
    document.querySelector('.intro h2').textContent = data.about_me;
    document.querySelectorAll('.intro p')[0].textContent = data.about_text1;
    document.querySelectorAll('.intro p')[1].textContent = data.about_text2;
    document.querySelector('.hobby h2').textContent = data.hobby_title;
    document.querySelector('.hobby p').textContent = data.hobby_text1;
    document.querySelector('.educatie h2').textContent = data.education_title;
    document.querySelector('.educatie p').textContent = data.education_text1;
    document.querySelector('.galerie h2').textContent = data.gallery_title;
    document.querySelector('footer p').innerHTML = data.footer;
  });
});
