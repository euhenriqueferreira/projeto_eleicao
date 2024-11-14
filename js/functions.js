// Seta um item no LocalStorage
function setarItemLocalStorage(nomeItem, conteudo){
    if(typeof conteudo == 'object'){
        localStorage.setItem(nomeItem, JSON.stringify(conteudo));
    } else{
        localStorage.setItem(nomeItem, conteudo);
    }
}

// Renderiza elementos na tela
function renderizar(elemento, conteudo, tipo){
    let element = '';

    if(typeof elemento == 'object'){
        element = elemento;
    } else{
        element = document.querySelector(elemento);
    }
    
    if(tipo == 'normal' || tipo == null){
        element.innerText = conteudo;
    } else if(tipo == 'append'){
        element.append(conteudo);
    }
}

function ativarLink(elemento){
    console.log(document.querySelector(elemento));
    const link = document.querySelector(elemento);
    if(link){
        link.classList.remove('pointer-events-none', 'opacity-50');
    } else{
        console.error(`O link ${elemento} não foi encontrado`)
    }
}

// Cria um elemento de candidato
function criarCandidato(candidato, porcentagemVotos){
    const candidatoEl = document.createElement('div');
    candidatoEl.classList.add('w-full', 'mx-auto', 'border-2', 'border-solid', 'border-indigo-700', 'dark:border-slate-200','shadow-md', 'shadow-slate-300','dark:shadow-slate-800', 'flex', 'items-center', 'pl-4', 'candidato-item');
    modelCandidato =    
    `
        <img src="images/user.png" alt="" class="w-11 object-contain mr-4 dark:hidden">
        <img src="images/user-dark.png" alt="" class="w-10 object-contain mr-4 hidden dark:block">
        <h3 class="flex-1 text-[25px] text-slate-800 dark:text-slate-100 font-normal">${candidato.nome}</h3>
        <div class="bg-indigo-700 dark:bg-slate-200 ml-4 text-[25px] text-slate-200 dark:text-slate-900 font-normal h-full py-2.5 w-44 pr-4 text-right total-votos font-number"><span>${candidato.totalVotos.toLocaleString('pt-BR')}</span></div>
        <div class="bg-indigo-900 dark:bg-slate-400 text-[25px] text-slate-200 dark:text-slate-900 font-normal h-full py-2.5 w-28 text-center porcentagem-votos font-number"><span>${porcentagemVotos ? porcentagemVotos : 0}%</span></div>
    `;
    candidatoEl.innerHTML = modelCandidato;

    return candidatoEl;
}