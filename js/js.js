
let search = document.querySelector('#search');
search.addEventListener('onkeydown', buscar());

function buscar(){
    console.log(search.value);
}