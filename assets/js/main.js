var faqButtons = document.querySelectorAll('.faq-question');

faqButtons.forEach(function (btn) {
  btn.addEventListener('click', function () {
    var item = btn.parentElement; 
    var answer = item.querySelector('.faq-answer');
    var isOpen = item.classList.contains('open');

    var openItem = document.querySelector('.faq-item.open');
    
    if (openItem) {
      openItem.classList.remove('open');
      openItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
      openItem.querySelector('.faq-answer').setAttribute('aria-hidden', 'true');
    }

    if (!isOpen) {
      item.classList.add('open');
      btn.setAttribute('aria-expanded', 'true');
      answer.setAttribute('aria-hidden', 'false');
    }
  });
});