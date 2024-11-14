$(function(){
    const formInput = document.getElementById('input-arquivo');

    const LocalStorageRegistroSessoes = localStorage.getItem('totalSessoesEleicao') ? true : false;
    const LocalStorageRegistroVotos = localStorage.getItem('totalVotosEleicao') ? true : false;

    LocalStorageRegistroSessoes && renderizar('#total-sessoes', localStorage.getItem('totalSessoesEleicao'));
    LocalStorageRegistroVotos && renderizar('#total-votos', localStorage.getItem('totalVotosEleicao'));



    if(formInput){
        formInput.addEventListener('submit', function(e){
            e.preventDefault();

            const inputFile = document.getElementById('arquivo');
            const file = inputFile.files[0];
    
            if(!file){
                alert('Por favor, envie um arquivo');
            }

            // ativarLink('#apuracao-anchor');

            const reader = new FileReader();
            reader.onload = function(event){
                try{
                    const json = JSON.parse(event.target.result);
                    setarItemLocalStorage(`apuracao`, json);

                    const totalSessoesEleicao = contar('sessoes', json);
                    const totalVotosEleicao = contar('votos', json);

                    if(totalSessoesEleicao){
                        setarItemLocalStorage('totalSessoesEleicao', totalSessoesEleicao);

                    } 
                    totalVotosEleicao && setarItemLocalStorage('totalVotosEleicao', totalVotosEleicao);

                } catch(error){
                    console.log("Erro ao ler o JSON:", error);
                }
            }
        
            reader.readAsText(file);
        })
    }
})


// Usado para fazer a contagem do total de votos ou do total de sessões
function contar(tipo, json){
    let numero = 0;

    if(tipo === 'sessoes'){
        json.forEach((sessao)=>{
            numero++;
        })
    } else if(tipo === 'votos'){
        json.forEach((sessao)=>{
            sessao.Candidatos.forEach((candidato)=>{
                numero += candidato.totalVotos;
            })
        });
    } else{
        return false;
    }

    return numero.toLocaleString('pt-BR');
}

// // Usada para mostrar os numeros de votos e sessões nos respectivos elementos do DOM
// function mostrarNaTela(el, content){
//     const elemento = document.querySelector(el);
//     elemento.innerText = content ? content : '';

//     return elemento.innerText;
// }

