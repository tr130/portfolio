const nameContainer = document.getElementById('name-container');
const devContainer = document.getElementById('dev-container');
const nameText = 'My name is Henry Golding';
const devText = 'I\'m a web developer';
let i = 0;
let j = 0;

function typeWriter() {
  if (i < nameText.length) {
    nameContainer.innerHTML += nameText.charAt(i);
    i++;
    setTimeout(typeWriter, 50);
  } else if (j < devText.length) {
    devContainer.innerHTML += devText.charAt(j);
    j++;
    setTimeout(typeWriter, 50);
  }
}

typeWriter()