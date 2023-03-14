const nome = document.querySelector('.nome-pokemon');
const id = document.querySelector('.id-pokemon');
const img = document.querySelector('.pokemon-img');
const formulario = document.querySelector('.form');
const input = document.querySelector('.pesquisa');
const voltar = document.querySelector('.voltar');
const next = document.querySelector('.proximo');

var contagem = 1;


const fetchPokemon = async(pokemon) => {
    const APIResponse = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemon}`);
    if (APIResponse.status == 200) {
        const data = await APIResponse.json();
        return data;
    }
}

const renderPokemon = async(pokemon) => {

    nome.innerHTML = 'Carregando...';
    id.innerHTML = ' ';



    const data = await fetchPokemon(pokemon);

    if (data) {
        img.style.display = 'block';
        nome.innerHTML = data.name;
        id.innerHTML = data.id;
        img.src = data['sprites']['other']['official-artwork']['front_default'];
        input.value = ''; //deixa vazio depois de pesquisar o pokemon
        contagem = data.id
    } else {
        img.style.display = 'none';
        nome.innerHTML = 'ERRO 404';
        id.innerHTML = "";
    }
}

formulario.addEventListener('submit', (event) => {
    event.preventDefault();
    renderPokemon(input.value.toLowerCase()); // "toLoserCase()" deixa todas as letras minusculas
})

voltar.addEventListener('click', () => {
    if (contagem > 1) {
        contagem -= 1;
        renderPokemon(contagem)
    }

})

next.addEventListener('click', () => {
    contagem += 1;
    renderPokemon(contagem)
})

renderPokemon(contagem);