<script>

    //Faz o alerta de confirmação desaparecer
    $(document).ready(function () {
        setTimeout(function () {
            $('#alerta_salvo').fadeOut(1500);
        }, 3000);
    });

    //--
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

    function preenchePorcentagem(){
        var select = document.getElementById('clube_id');
        var value = select.options[select.selectedIndex];
    }

    function keypressed( obj , e ) {
        var tecla = ( window.event ) ? e.keyCode : e.which;
        var texto = document.getElementById("numeros").value
        var indexvir = texto.indexOf(",")
        var indexpon = texto.indexOf(".")
    }

    function setNomeClube(){
        //var caminho_logo = document.getElementById('caminho_logo').value;

        var select = document.getElementById('clube_id');
        var option = select.children[select.selectedIndex];
        var equipe_porcentagem = option.textContent;

         console.log(equipe_porcentagem);
        //remove a porcentagem do nome do clube
        var nome_clube_texto = equipe_porcentagem;
        var nome_clube = nome_clube_texto.split("|");
        var nome = nome_clube.slice(0,1);
        console.log(nome_clube);

        //passa os dados para os campos
        document.getElementById('clube_title').value ='Clube: '+ nome;
        document.getElementById('id_clube').value = nome;
        document.getElementById('clube_proft').value = nome;
        carregarLogoClube(nome);
    }

    function carregarLogoClube(nome_clube){
        document.getElementById('logo_clube').src = '/storage/clube/'+nome_clube;
    }

    function mostarFechamento(el){

        var display = document.getElementById(el).style.display;

        if(document.getElementById('clube_id').value === ""){
            alert('Selecione o Clube!');
        }else if(document.getElementById('tipo_fechamento').value===""){
            alert('Selecione o tipo do fechamento!')
        }else{
            //Mostra a div do fechamento
            if(display == "none"){
                document.getElementById(el).style.display = 'block';
            }else{
                document.getElementById(el).style.display = 'none';
            }

            //Pega a data Atual
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();
            today = dd + '/' + mm + '/' + yyyy;


            //pega os dados para ser trabalhado (agente, clube,porcentagem e tipo)
            var lbNomeAgente = document.getElementById('agente_id');
            var optionAgente = lbNomeAgente.children[lbNomeAgente.selectedIndex];
            var agente = optionAgente.textContent;

            var select = document.getElementById('clube_id');
            var option = select.children[select.selectedIndex];
            var equipe_porcentagem = option.textContent;

            //remove a porcentagem do nome do clube
            var nome_clube_texto = equipe_porcentagem;
            var nome_clube = nome_clube_texto.substring(nome_clube_texto.slice(0,-1));
            console.log(nome_clube);

            var texto = equipe_porcentagem;
            var porcentagem = texto.substring(texto.lastIndexOf("|")+1);

            var tipo_fechamento = document.getElementById('tipo_fechamento').value;

            var equipe = equipe_porcentagem.substring(equipe_porcentagem.slice(" ")+1);

            //Preenche o cabecalho do fechamento
            var nomeAgente_title = document.getElementById('agente_title');
            nomeAgente_title.value = "Agente: "+agente;
            var clube_title = document.getElementById('clube_title');
            //clube_title.value = "Clube: "+equipe;
            var porcentagem_title = document.getElementById('porcentagem_title');
            porcentagem_title.value = "Porcentagem: "+porcentagem;
            var tipo_title = document.getElementById('tipo_title');
            tipo_title.value = "Tipo: "+tipo_fechamento;
            var tipo_title = document.getElementById('fechamento_title');
            tipo_title.value = "Fechamento semanal dia "+today;

            //Mostrar o tipo do fechamento
            if(document.getElementById('tipo_fechamento').value === "por-banca"){
                document.getElementById('btBuscaClube').disabled = false;
                document.getElementById('table_por_banca').style.display = 'block';
            }else{
                document.getElementById('table_proft').style.display = 'block';
                document.getElementById('btBuscaClube').disabled = false;
            }

            if(document.getElementById('btiniciar').style.display ==='block'){
                document.getElementById('btiniciar').style.display = 'none';
                document.getElementById('btNovo').style.display = 'block';
                document.getElementById('btBuscaClube').disabled = true;
            }

            //Dados dos inputs tipo hidden
            document.getElementById('tipo_fechamento_proft').value = tipo_fechamento;
            document.getElementById('agente_proft').value = agente;
            //O nome do clube é enviado na funcao setNomeClube()
            document.getElementById('porcentagem_proft').value = porcentagem;
            document.getElementById('data_fechamento_proft').value = today;
        }

    }

    function calculaFechamento(){

        //vai pegar os rakes e os resultados digitados pelo usuario
        var rake_cash  = document.getElementById('rake_cash').value.replace('.','');
        var rake_mtt   = document.getElementById('rake_mtt').value.replace('.','');
        var rake_uniao = document.getElementById('rake_uniao').value.replace('.','');
        var resultado_cash  = document.getElementById('resultado_cash').value.replace('.','');
        var resultado_mtt   = document.getElementById('resultado_mtt').value.replace('.','');
        var resultado_uniao = document.getElementById('resultado_uniao').value.replace('.','');

        //pega os campos para preencher proft&loft
        var resultado   = document.getElementById('tbresultado_proft');
        var rake_total  = document.getElementById('tbrakeTotal_proft');
        var rake_back   = document.getElementById('tbrakeBack_proft');
        var comissao    = document.getElementById('tbcomissao_proft');
        var final       = document.getElementById('tbfinal_proft');

        //pega os campos para preencher por banca
        var rake_total_banca = document.getElementById('rakeTotal_por_banca');
        var comissao_banca = document.getElementById('comissao_por_banca');
        var rake_back_banca = document.getElementById('rakeBack_porbanca');

        //pega a porcentagem
        var select = document.getElementById('clube_id');
        var option = select.children[select.selectedIndex];
        var equipe_porcentagem = option.textContent;

        var texto = equipe_porcentagem;
        var porcentagem = texto.substring(texto.lastIndexOf("|")+1);

        //faz os calculos e valida colocando 0 nos campos vazios
        rake_cash == ""  ? rake_cash = "0"  : rake_cash = rake_cash;
        rake_mtt == ""   ? rake_mtt = "0"   : rake_mtt = rake_mtt;
        rake_uniao == "" ? rake_uniao = "0" : rake_uniao = rake_uniao;
        resultado_cash == ""    ? resultado_cash = "0"    :   resultado_cash = resultado_cash;
        resultado_mtt == ""     ? resultado_mtt = "0"     :     resultado_mtt = resultado_mtt;
        resultado_uniao == ""   ? resultado_uniao = "0"   : resultado_uniao = resultado_uniao;

        //Preenchendo os campos
        var soma_resultado = (parseFloat(resultado_cash.replace(',','.')) + parseFloat(resultado_uniao.replace(',','.')) + parseFloat(resultado_mtt.replace(',','.')));
        var soma_rake = (parseFloat(rake_mtt.replace(',','.')) + parseFloat(rake_uniao.replace(',','.')) + parseFloat(rake_cash.replace(',','.')));//.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
        var calculo_comissao = (porcentagem.replace('%','')*soma_rake)/100;
        var calculo_final = soma_resultado + calculo_comissao;



        //passando para a tabela os valores corretos
        resultado.value  = soma_resultado.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});;
        rake_total.value = soma_rake.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
        rake_back.value  = porcentagem;
        comissao.value   = calculo_comissao.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
        final.value      = calculo_final.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});

        rake_total_banca.value = soma_rake.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
        rake_back_banca.value = porcentagem;
        comissao_banca.value = calculo_comissao.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});

        //Passa os valores para os inputs tipo hidden
        document.getElementById('rake_uniao_proft').value = rake_uniao.replace(',','.');
        document.getElementById('rake_mtt_proft').value = rake_mtt.replace(',','.');
        document.getElementById('rake_cash_proft').value = rake_cash.replace(',','.');
        document.getElementById('resultado_cash_proft').value = resultado_mtt.replace(',','.');
        document.getElementById('resultado_uniao_proft').value = resultado_uniao.replace(',','.');
        document.getElementById('resultado_mtt_proft').value = resultado_cash.replace(',','.');
        document.getElementById('total_resultado_proft').value = soma_resultado;
        document.getElementById('total_rake_proft').value = soma_rake;
        document.getElementById('final_proft').value = calculo_final;
        document.getElementById('resultado_proft').value = soma_resultado;
        document.getElementById('rake_total_proft').value = soma_rake;
        document.getElementById('rake_back_proft').value = porcentagem;
        document.getElementById('comissao_proft').value = calculo_comissao;

    }

    function calculaFechamento_old(){
        var totalGanho  = parseFloat(document.getElementById('totalGanho').value);
        var taxaTotal   = parseFloat(document.getElementById('taxaTotal').value);
        var porcentagem = document.getElementById('porcentagem').value;

        if((document.getElementById('totalGanho').value === "") || (document.getElementById('taxaTotal').value === "")) {
            alert('Por favor preencha os dados com os valores corretamente!');
        }
        else
        {
            if(document.getElementById('tipo_fechamento').value==='banca'){
                var rakeTotal = document.getElementById("bancarakeTotal");
                var rakeBack = document.getElementById("banc_rakeBack");
                var comissao = document.getElementById("bancacomissao");

                var tbrakeTotal = document.getElementById("banca_rakeTotal");
                var tbrakeBack = document.getElementById("banca_rakeBack");
                var tbcomissao = document.getElementById("banca_comissao");

                document.getElementById('banca_tipofechamento').value = 'POR BANCA';

                rakeTotal.value = taxaTotal.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
                rakeBack.value = porcentagem;
                comissao.value = ((porcentagem.replace('%', '') / 100) * taxaTotal).toLocaleString('pt-br', {
                    style: 'currency',
                    currency: 'BRL'
                });
                tbrakeTotal.value = taxaTotal.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
                tbrakeBack.value = porcentagem;
                tbcomissao.value = ((porcentagem.replace('%', '') / 100) * taxaTotal).toLocaleString('pt-br', {
                    style: 'currency',
                    currency: 'BRL'
                });
            }else{
                var resultado = document.getElementById("resultado");
                var rakeTotal = document.getElementById("rakeTotal");
                var rakeBack = document.getElementById("rakeBack");
                var comissao = document.getElementById("comissao");
                var final = document.getElementById("final");

                var tbresultado = document.getElementById("tbresultado");
                var tbrakeTotal = document.getElementById("tbrakeTotal");
                var tbrakeBack = document.getElementById("tbrakeBack");
                var tbcomissao = document.getElementById("tbcomissao");
                var tbfinal = document.getElementById("tbfinal");

                var total = document.getElementById('total');
                total.value = taxaTotal;

                var ganho = document.getElementById('ganho');
                ganho.value = totalGanho;

                document.getElementById('tipofechamento').value = 'PROFIT&LOSS';

                resultado.value = totalGanho.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
                rakeTotal.value = taxaTotal.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
                rakeBack.value = porcentagem;
                comissao.value = ((porcentagem.replace('%', '') / 100) * taxaTotal).toLocaleString('pt-br', {
                    style: 'currency',
                    currency: 'BRL'
                });
                final.value = (parseFloat(document.getElementById('totalGanho').value) + ((porcentagem.replace('%', '') / 100) * parseFloat(document.getElementById('taxaTotal').value))).toLocaleString('pt-br', {
                    style: 'currency',
                    currency: 'BRL'
                });

                tbresultado.value = totalGanho.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
                tbrakeTotal.value = taxaTotal.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
                tbrakeBack.value = porcentagem;
                tbcomissao.value = ((porcentagem.replace('%', '') / 100) * taxaTotal).toLocaleString('pt-br', {
                    style: 'currency',
                    currency: 'BRL'
                });
                tbfinal.value = (parseFloat(document.getElementById('totalGanho').value) + ((porcentagem.replace('%', '') / 100) * parseFloat(document.getElementById('taxaTotal').value))).toLocaleString('pt-br', {
                    style: 'currency',
                    currency: 'BRL'
                });
            }

        }
    }

    function mostarFechamento_old(el){

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

        var banca_agente = document.getElementById('banca_agente');
        banca_agente.value = agente;

        var nomeClube = document.getElementById('clube');
        nomeClube.value = equipe;

        var banca_clube = document.getElementById('banca_clube');
        banca_clube.value = equipe;

        var dataFechamento = document.getElementById('data');
        dataFechamento.value = today;

        var banca_data = document.getElementById('banca_data');
        banca_data.value = today;

        if(document.getElementById('clube_id').value === ""){
            alert('Selecione o Clube!');
        }else if(document.getElementById('tipo_fechamento').value===""){
            alert('Selecione o tipo do fechamento!')
        }else{
            if(display == "none"){
                document.getElementById(el).style.display = 'block';
            }else{
                document.getElementById(el).style.display = 'none';
            }

            if(document.getElementById('tipo_fechamento').value === "banca"){
                document.getElementById('fechamento_por_banca').style.display = 'block';
            }else{
                document.getElementById('fechamento_profit').style.display = 'block';
            }

            if(document.getElementById('btiniciar').style.display ==='block'){
                document.getElementById('btiniciar').style.display = 'none';
                document.getElementById('btNovo').style.display = 'block';
            }

        }

    }



    function dataRelatorio(){
        n =  new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("date_relatorio").innerHTML = m + "/" + d + "/" + y;
    }
</script>
