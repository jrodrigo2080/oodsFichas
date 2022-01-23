<script>

    ;(function(){
        //Pega os elementos da tela e declara como constantes
        const leitorDeArquivos = new FileReader(),
            formulario = document.querySelector('.upload-imagem'),
            previaDaImagem = document.querySelector('.imagem'),
            inputArquivo = document.querySelector('.upload'),
            btnAtualiza = document.querySelector('.btnAtualiza');
        function leEAtualiza(){
            //pega o arquivo enviado e guarda nesta variavel
            let imagemEnviada = inputArquivo.files[0];

            //Usa a função do objeto leitor de arquivos, que lê o arquivo, e consegue reaproveita-lo para usar o arquivo como uma URL
            leitorDeArquivos.readAsDataURL(imagemEnviada);

            //Após leitura da imagem (evento load), a função de callback define o valor do src da imagem de prévia com o valor do resultado da leitura do leitor de arquivos
            leitorDeArquivos.addEventListener('loadend', function(load){

                //veja no console o que o resultado do leitor de arquivos :)
                console.log(load.target.result);
                //define o caminho da imagem com o caminho criado pelo leitor de arquivos
                previaDaImagem.src = load.target.result
            })
        }

        //Quando o formulário for enviado:
        formulario.addEventListener('submit', function(submit){
            //empede o recarregamento da página
            submit.preventDefault();

            leEAtualiza();
        })

        //Ou quando clica no boão atualizar
        btnAtualiza.addEventListener('click', function(){
            leEAtualiza();
        })


    })()

    function calculaFechamento(){
        var totalGanho  = parseFloat(document.getElementById('totalGanho').value);
        var taxaTotal   = parseFloat(document.getElementById('taxaTotal').value);
        var porcentagem = document.getElementById('porcentagem').value;

        var resultado   = document.getElementById("resultado");
        var rakeTotal   = document.getElementById("rakeTotal");
        var rakeBack    = document.getElementById("rakeBack");
        var comissao    = document.getElementById("comissao");
        var final       = document.getElementById("final");

        var total = document.getElementById('total');
        total.value = taxaTotal;

        var ganho = document.getElementById('ganho');
        ganho.value = totalGanho;

        resultado.value =  totalGanho.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
        rakeTotal.value =  taxaTotal.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
        rakeBack.value  =  porcentagem;
        comissao.value  =  ((porcentagem.replace('%','')/100)*taxaTotal).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
        final.value = (parseFloat(document.getElementById('totalGanho').value) + ((porcentagem.replace('%','') /100) * parseFloat(document.getElementById('taxaTotal').value))).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});

    }

    function mostarFechamento(el){

        var display = document.getElementById(el).style.display;
        var lbEquipe = document.getElementById('labelNomeClube');
        var lbPorcentagem = document.getElementById('porcentagem');

        var lbNomeAgente = document.getElementById('agente_id');
        var optionAgente = lbNomeAgente.children[lbNomeAgente.selectedIndex];
        var agente = optionAgente.textContent;

        var select = document.getElementById('clube_id');
        var option = select.children[select.selectedIndex];
        var equipe = option.textContent;

        var texto = equipe;
        var porcentagem = texto.substring(texto.lastIndexOf(" ")+1);
        lbPorcentagem.value = porcentagem;

        lbEquipe.value = equipe;

        var tituloAgencia = document.getElementById('titulo_agencia');

        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        tituloAgencia.value = "Agência "+agente+"   "+today;


        var nomeAgente = document.getElementById('agente');
        nomeAgente.value = agente;

        var nomeClube = document.getElementById('clube');
        nomeClube.value = equipe;

        var dataFechamento = document.getElementById('data');
        dataFechamento.value = today;

        if(display == "none"){
            document.getElementById(el).style.display = 'block';
        }else{
            document.getElementById(el).style.display = 'none';
        }
    }


</script>
<?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/template/_includes/script.blade.php ENDPATH**/ ?>