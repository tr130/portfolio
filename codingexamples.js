const codeText = document.querySelectorAll('.code-text');
const examples = document.querySelector('.aboutme');

for (let i = 0; i < codeText.length; i++) {
  codeText[i].style.display = 'none';
}

examples.addEventListener('click', function(e) {
  if (e.target.classList[1] == 'code-toggle-upper') {
    if (e.target.textContent == 'See the code') {
      e.target.nextElementSibling.style.display = 'block';
      e.target.textContent = 'Hide the code';
    } else {
      e.target.nextElementSibling.style.display = 'none';
      e.target.textContent = 'See the code';
    }
  } else if (e.target.classList[1] == 'code-toggle-lower') {
    e.target.parentNode.style.display = 'none';
    e.target.parentNode.previousElementSibling.textContent = 'See the code';
  }
})