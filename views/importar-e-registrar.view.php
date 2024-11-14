<main class="flex-1 max-w-screen-lg mx-auto flex flex-col items-center justify-center">
    <div class="flex items-center gap-x-4 mb-10">
    
        <div class="w-14 h-1 bg-indigo-700 dark:bg-slate-200"></div><!-- Linha detalhe-->

        <h2 class="text-[32px] text-indigo-700 dark:text-slate-200 font-semibold text-center">Importar e Registrar Resultados</h2>
        
        <div class="w-14 h-1 bg-indigo-700 dark:bg-slate-200"></div><!-- Linha detalhe-->
    
    </div><!-- Container Titulo -->

    <div class="max-w-[700px] w-full mx-auto border-2 border-solid border-indigo-700 dark:border-slate-200 shadow-md shadow-slate-300 dark:shadow-slate-800 mb-6 flex items-center gap-x-4 pl-4 hover:scale-105 transition">
        <h3 class="flex-1 text-2xl text-slate-800 dark:text-slate-100 font-normal">Sessões Disponíveis</h3>
        <div class="bg-indigo-700 dark:bg-slate-200 text-2xl text-slate-200 dark:text-slate-900 font-normal h-full py-2.5 w-44 pr-4 text-right font-number">
            <span id="total-sessoes">---</span>
        </div>
    </div><!-- Item Sessões Disponíveis-->
   
    <div class="max-w-[700px] w-full mx-auto border-2 border-solid border-indigo-700 dark:border-slate-200 shadow-md shadow-slate-300 dark:shadow-slate-800 mb-12 flex items-center gap-x-4 pl-4 hover:scale-105 transition">
        <h3 class="flex-1 text-2xl text-slate-800 dark:text-slate-100 font-normal">Votos Esperados</h3>
        <div class="bg-indigo-700 dark:bg-slate-200 text-2xl text-slate-200 dark:text-slate-900 font-normal h-full py-2.5 w-44 pr-4 text-right font-number">
            <span id="total-votos">---</span>
        </div>
    </div><!-- Item Votos Esperados-->

    <form id="input-arquivo" class="text-center relative">
        <label id="label-input" for="arquivo" class="px-5 py-3 bg-indigo-700 dark:bg-slate-200 flex justify-center items-center text-2xl font-normal text-slate-200 dark:text-slate-900 gap-x-3 cursor-pointer hover:scale-105 transition">
            Enviar arquivo
            <img src="images/upload.png" alt="" class="w-8 object-contain dark:hidden">
            <img src="images/upload-dark.png" alt="" class="w-8 object-contain hidden dark:block">
        </label>
        <input type="file" name="arquivo" id="arquivo" class="hidden">
        <input id="botao-enviar" type="submit" value="Enviar" class="px-8 py-2 border-indigo-700 dark:border-slate-200 border-2 border-solid text-xl mt-5 font-semibold text-indigo-700 dark:text-slate-200 cursor-pointer hover:bg-indigo-700 dark:hover:bg-slate-200 hover:text-slate-200 dark:hover:text-slate-900 transition">
    </form><!-- Botão -->

            
    <button id="botao-reiniciar-eleicao" class="mt-5 hover:scale-105 text-lg text-indigo-700 font-semibold flex items-center gap-x-2 underline">
        Reiniciar eleição
        <!-- <img src="images/restart.png" alt="" class="dark:hidden object-contain w-6">
        <img src="images/restart-dark.png" alt="" class="hidden dark:block w-6"> -->
    </button>
</main>