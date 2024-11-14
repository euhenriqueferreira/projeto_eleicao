$(function(){

    const resultado = JSON.parse(localStorage.getItem('resultado'));

    // Variaveis e Constantes de Voto
    const totalVotosEleicao = parseInt(localStorage.getItem('totalVotosEleicao').replace(/\./g, ''), 10);
    resultado.sort((a, b) => b.totalVotos - a.totalVotos);

    function renderizarVencedor(){    
        modelVencedor = 
        `
            <img src="images/medal.png" alt="" class="w-11 object-contain mr-4">
            <h3 class="flex-1 text-[27px] text-slate-200 font-normal">${resultado[0].nome}</h3>
            <div class="bg-slate-400 ml-4 text-[27px] text-slate-800 font-normal h-full py-2.5 w-44 pr-4 text-right"><span>${resultado[0].totalVotos.toLocaleString('pt-BR')}</span></div>
            <div class="bg-slate-200 text-[27px] text-slate-800 font-normal h-full py-2.5 w-28 text-center"><span>${Math.ceil(resultado[0].totalVotos / totalVotosEleicao * 100)}%</span></div>
        `
        
        document.querySelector('#candidato-vencedor').innerHTML = modelVencedor;
    }

    function renderizarOutrosCandidatos(){
        resultado.forEach((candidato, index) => {
            if(index === 0){
                return;
            }
            let porcentagemVotos = Math.ceil(candidato.totalVotos / totalVotosEleicao * 100);
            renderizar('#resultado-candidatos', criarCandidato(candidato, porcentagemVotos), 'append');
        });
    }

    renderizarVencedor();
    renderizarOutrosCandidatos();
})