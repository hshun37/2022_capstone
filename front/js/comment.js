const reiview = document.querySelector('.back-review');
const write = document.querySelector('.write-review');

const reiviewDe = document.querySelector('.review-detail');
const writeDe = document.querySelector('.write-detail');

function review_open() {
  if(reiviewDe.style.display=='none'){
		reiviewDe.style.display = 'block';
    reiviewDe.style.display = 'none';
	}else{
		reiviewDe.style.display = 'block';
    reiviewDe.style.display = 'none';
	}
}
function write_open() {
  if(writeDe.style.display=='none'){
		writeDe.style.display = 'block';
    reiviewDe.style.display = 'none';
	}else{
		writeDe.style.display = 'block';
    reiviewDe.style.display = 'none';
	}
}
