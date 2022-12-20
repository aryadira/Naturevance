// GENRE 
		let list = document.querySelectorAll('.list');
		let itemBox = document.querySelectorAll('.itemBox');

		for (let i = 0; i<list.length; i++) {
			list[i].addEventListener('click', function() {
				for(let j = 0; j<list.length; j++) {
					list[j].classList.remove('active');
				}
				this.classList.add('active');

				let dataFilter = this.getAttribute('data-filter');

				for(let k = 0; k<itemBox.length; k++){
					itemBox[k].classList.remove('active');
					itemBox[k].classList.add('hide');

					if (itemBox[k].getAttribute('data-item') == dataFilter || dataFilter == "all") {
						itemBox[k].classList.remove('hide');
						itemBox[k].classList.add('active');
					}
				}
			})
		}

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