const submitBtn = document.querySelector('#submit_btn');
const namedf = document.querySelector('#name');
const email = document.querySelector('#email');
const message = document.querySelector('#message');
const required = document.querySelectorAll('[required=""]')
const emailRegexp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

console.log(required);

submitBtn.addEventListener('click', function(e) {
  for (let i = 0; i < required.length; i++) {
  if (!required[i].value) {
    console.log('noname')
    e.preventDefault()
    required[i].style.backgroundColor = 'red';
    required[i].addEventListener('keypress', function() {
      console.log('change')
      required[i].style.backgroundColor = '';
    }
    )
  } }
  
  if (!emailRegexp.test(email.value)) {
    e.preventDefault();
      email.style.backgroundColor = 'red';
      email.addEventListener('keypress', function() {
        console.log('change')
        if (emailRegexp.test(email.value)) {
          email.style.backgroundColor = '';
        }
      })
    }
})