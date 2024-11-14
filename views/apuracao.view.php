<main class="flex-1 max-w-screen-lg w-full mx-auto flex flex-col items-center justify-center">
    <div class="flex items-center gap-x-4 mb-5">
    
        <div class="w-14 h-1 bg-indigo-700 dark:bg-slate-200"></div><!-- Linha detalhe-->

        <h2 class="text-[32px] text-indigo-700 dark:text-slate-200 font-semibold text-center">Apuração das Urnas</h2>
        
        <div class="w-14 h-1 bg-indigo-700 dark:bg-slate-200"></div><!-- Linha detalhe-->
    
    </div><!-- Container Titulo -->

    <div class="max-w-[700px] w-full mx-auto border-2 border-solid border-indigo-700 dark:border-slate-200 shadow-md shadow-slate-300 dark:shadow-slate-800 flex items-center pl-4 hover:scale-105 transition">
        <h3 class="flex-1 text-2xl text-slate-800 dark:text-slate-100 font-normal">Sessões Apuradas</h3>
        <div class="bg-indigo-700 dark:bg-slate-200 ml-4 text-2xl text-slate-200 dark:text-slate-900 font-normal h-full py-2.5 w-44 pr-4 text-right font-number"><span id="sessoes-apuradas">---</span></div>
        <div class="bg-indigo-900 dark:bg-slate-400 text-2xl text-slate-200 dark:text-slate-900 font-normal h-full py-2.5 w-28 text-center font-number"><span id="porcentagem-sessoes-apuradas">---</span></div>
    </div>

    <div class="max-w-[700px] mx-auto w-full text-right mt-3 text-slate-900 dark:text-slate-100">
        <span id="hora-atualizacao">Atualizado por último: 00:00:00</span>
    </div>

    <div class="max-w-[700px] h-3 w-full bg-slate-200 dark:bg-slate-700 mt-5 relative">
        <div id="barra-de-progresso" class="absolute left-0 top-0 h-full w-1 bg-indigo-700 dark:bg-slate-200"></div>
    </div>

    <div class="flex items-center gap-x-4 mb-5 mt-6">
        
        <div class="w-14 h-1 bg-indigo-700 dark:bg-slate-200"></div><!-- Linha detalhe-->

        <h2 class="text-[32px] text-indigo-700 dark:text-slate-200 font-semibold text-center">Votos por Candidato</h2>
        
        <div class="w-14 h-1 bg-indigo-700 dark:bg-slate-200"></div><!-- Linha detalhe-->

    </div><!-- Container Titulo -->

    <div id="lista-apuracao-candidatos" class="flex gap-y-5 flex-col items-center max-h-[235px] max-w-[850px] w-full overflow-y-auto overflow-x-hidden">

    </div>
</main>