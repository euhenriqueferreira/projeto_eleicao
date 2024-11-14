$(function(){
    // Apuração em JSON
    const apuracao = JSON.parse(localStorage.getItem('apuracao'));

    // Variaveis e Constantes de Sessao
    const totalSessoesEleicao = parseInt(localStorage.getItem('totalSessoesEleicao').replace(/\./g, ''), 10);
    let numSessoesApuradas = 0;

    // Variaveis e Constantes de Voto
    const totalVotosEleicao = parseInt(localStorage.getItem('totalVotosEleicao').replace(/\./g, ''), 10);
   
    // Variaveis de Candidato
    let listaCandidatos = [];


    // Registra os candidatos no array de candidatos e renderiza os elementos no DOM
    function registrarCandidatos(){
        let modelCandidato = ``;

        apuracao.forEach(sessao => {
            if(sessao == apuracao[0]){
                sessao.Candidatos.forEach(function(candidato){
                    if(listaCandidatos.indexOf(candidato.nome) !== 1){   
                        candidato.totalVotos = 0;
                        listaCandidatos.push(candidato);

                        renderizar('#lista-apuracao-candidatos', criarCandidato(candidato), 'append');
                    } 
                })
            }
        });
    }

    // Faz a contagem e o controle da apuração dos votos
    function realizarApuracao(){
        let porcentagem = 0;

        apuracao.forEach((sessao, index)=>{
            setTimeout(()=>{
                numSessoesApuradas++;
                porcentagem = Math.ceil(numSessoesApuradas / totalSessoesEleicao * 100);

                if(numSessoesApuradas % (Math.floor((Math.random() * (80 - 40 + 1))) + 40) === 0){
                    renderizarInfosSessoes(numSessoesApuradas, porcentagem);
                    atualizarVotos(listaCandidatos);
                    atualizarHora();
                } 

                if(numSessoesApuradas == totalSessoesEleicao) {
                    renderizarInfosSessoes(numSessoesApuradas, porcentagem);
                    // ativarLink('#resultados-anchor');
                } 

                contarVotosSessao(sessao);  
            }, index * 50);
        }) 
    }

    function atualizarHora(){
        const element = document.querySelector('#hora-atualizacao');
        const data = new Date();
        const hora = data.getHours();
        const minutos = data.getMinutes();
        const segundos = data.getSeconds();

        element.innerText = `Atualizado por último: ${hora}:${minutos}:${segundos}`;
    }

    // Conta os votos de uma sessão
    function contarVotosSessao(sessao){
        sessao.Candidatos.forEach((candidato)=>{
            listaCandidatos.forEach((c)=>{
                if(c.nome == candidato.nome){
                    c.totalVotos += candidato.totalVotos;
                }
            })

            if(apuracao.indexOf(sessao) === apuracao.length - 1){
                if(sessao.Candidatos.indexOf(candidato) === sessao.Candidatos.length - 1){
                    setarItemLocalStorage('resultado', listaCandidatos);
                }
            }
        })
    }

    // Renderiza as informações sobre as sessões
    function renderizarInfosSessoes(numSessoesApuradas, porcentagem){
        renderizar('#sessoes-apuradas', numSessoesApuradas.toLocaleString('pt-BR'));         
        renderizar('#porcentagem-sessoes-apuradas', porcentagem + '%');
        document.querySelector('#barra-de-progresso').style.width = porcentagem + '%';
    }

    // Atualiza os votos dos candidatos e os ordena
    function atualizarVotos(listaCandidatos){
        let porcentagemVotos = '';

        listaCandidatos.sort((a, b) => b.totalVotos - a.totalVotos);
        document.querySelector('#lista-apuracao-candidatos').innerHTML = '';

        listaCandidatos.forEach((candidato)=>{
            porcentagemVotos = Math.ceil(candidato.totalVotos / totalVotosEleicao * 100);
            renderizar('#lista-apuracao-candidatos', criarCandidato(candidato, porcentagemVotos), 'append');
        })
    }

    // Chamada das funções
    registrarCandidatos();
    realizarApuracao();
})