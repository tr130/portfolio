const submitBtn = document.querySelector('#submit_btn');
const namedf = document.querySelector('#name');
const email = document.querySelector('#email');
const message = document.querySelector('#message');
const required = document.querySelectorAll('[required=""]')
const emailRegexp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

submitBtn.addEventListener('click', function(e) {
  for (let i = 0; i < required.length; i++) {
  if (!required[i].value) {
    e.preventDefault()
    required[i].className = 'incomplete';
    required[i].addEventListener('keypress', function() {
      required[i].className= '';
    }
    )
  } }
  
  if (!emailRegexp.test(email.value)) {
    e.preventDefault();
      email.className = 'incomplete';
      email.addEventListener('keypress', function() {
        if (emailRegexp.test(email.value)) {
          email.className = '';
        }
      })
    }
})