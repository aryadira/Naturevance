// JS
// SPLASH SCREEN
let intro = document.querySelector('.intro');
let logo = document.querySelector('.logo-header');
let logoSpan = document.querySelectorAll('.logo');

window.addEventListener('DOMContentLoaded', ()=>{

	setTimeout(()=>{

		logoSpan.forEach((span, idx)=> {
			setTimeout(()=>{
				span.classList.add('active');
			}, (idx + 1) * 400)
		});

		setTimeout(()=> {
			logoSpan.forEach((span, idx)=> {

				setTimeout(()=> {
					span.classList.remove('active');
					span.classList.add('fade');
				}, (idx + 1) * 50)
			})
		},2000);

		setTimeout(()=> {
			intro.style.top = '-100vh';
		},2500)
	})
})

// CONTACT US
function submitForm() {
	let name = document.getElementById('input-name').value
	let email = document.getElementById('input-email').value
	let phoneNumber = document.getElementById('input-number').value
	let textarea = document.getElementById('input-textarea').value


	if(name == '') {
		alert('Nama Wajib Di Isi')
	} else if(email == '') {
		alert('Email Wajib Di Isi')
	} else if(phoneNumber == '') {
		alert('Nomor Telepon Wajib Di Isi')
	} else if(textarea == '') {
		alert('Pesan Wajib Di Isi')
	}

	console.log(name)
	console.log(email)
	console.log(phoneNumber)
	console.log(textarea)


	let receiverEmail = 'smkn26jkt@gmail.com';

	let a = document.createElement('a')

	a.href = 'mailto:' + receiverEmail + '?subject' + '&body=Halo nama saya ' + name + ', ' + textarea 

	a.click()
}
