function slideMenu(){
	document.querySelector('.container').classList.toggle('move');
	document.querySelector('.sidebar').classList.toggle('show');
}

const menu = document.querySelector(".menu");
const btns = menu.getElementsByClassName("btn");
const sub = menu.getElementsByClassName("sub");
for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  const current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}

function dropdown(){
	document.querySelector('.dropdown').classList.toggle('drop');
}

