const info = document.querySelector('.info');
const inquiry = document.querySelector('.inquiry');
const correction = document.querySelector('.correction');

const infoDe = document.querySelector('.info-detail');
const inquiryDe = document.querySelector('.inquiry-detail');
const correctionDe = document.querySelector('.correction-detail');


function info_open() {
  if(infoDe.style.display=='none'){
		infoDe.style.display = 'block';
    inquiryDe.style.display = 'none';
		correctionDe.style.display = 'none';
	}else{
		infoDe.style.display = 'block';
    inquiryDe.style.display = 'none';
		correctionDe.style.display = 'none';
	}
}
function inquiry_open() {
  if(inquiryDe.style.display=='none'){
		inquiryDe.style.display = 'block';
    infoDe.style.display = 'none';
		correctionDe.style.display = 'none';
	}else{
		inquiryDe.style.display = 'block';
    infoDe.style.display = 'none';
		correctionDe.style.display = 'none';
	}
}
function correction_open() {
  if(correctionDe.style.display=='none'){
		correctionDe.style.display = 'block';
    infoDe.style.display = 'none';
		inquiryDe.style.display = 'none';
	}else{
		correctionDe.style.display = 'block';
    infoDe.style.display = 'none';
		inquiryDe.style.display = 'none';
	}
}