<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatorio</title>
</head>
<body>
    <form>
        <div class="container" >
            <diV style="border: solid 1px;">
                <label style="margin-left:40%;">ODDS Fichas</label><br>
                <hr>
                <div>
                    <div>
                        @if($tipoFechamento)
                            Tipo de Fechamento: {{$tipoFechamento}}<br>
                        @endif
                        @if($agente)
                            Agente: {{$agente}}<br>
                        @endif
                        @if($clube)
                            Clube: {{$clube}}<br>
                        @endif
                    </div>
                </div>
            </diV>
            <div>
                <div>
                    <div style="text-align: center; font-size: 15px;">Relatório de Fechamento Semanal<br>
                        @if($data_inicial)
                            Data Inicial: {{$data_inicial}} até {{$data_final}}<br>
                        @endif
                    <div/>
                </div>


                <table class="table table-bordered" style=" margin-left: -4%" width="100%" border="1" cellpadding="3" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="font-size: 13px; width: 70px; text-align: left">Data</th>
                        <th style="font-size: 13px; width: 120px; text-align: left">Agente</th>
                        <th style="font-size: 13px; width: 120px; text-align: left">Clube</th>
                        <th style="font-size: 13px; width: 80px; text-align: left">Rake Total</th>
                        <th style="font-size: 13px; width: 80px; text-align: left">Resultado</th>
                        <th style="font-size: 13px; width: 70px; text-align: left">Rake Back</th>
                        <th style="font-size: 13px; width: 80px; text-align: left">Comissao</th>
                        <th style="font-size: 13px; width: 80px; text-align: left">Final</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dados as $fechamento)
                        <tr>
                            <td style="font-size: 12px;">{{\Carbon\Carbon::parse($fechamento->dataFechamento)->format('d-m-Y')}}</td>
                            <td style="font-size: 12px;">{{$fechamento->agente}}</td>
                            <td style="font-size: 12px;">{{$fechamento->clube}}</td>
                            <td style="font-size: 12px;">{{'R$ '.number_format($fechamento->total_rake, 2, ',', '.') }}</td>
                            <td style="font-size: 12px;">{{'R$ '.number_format( $fechamento->total_resultado, 2, ',', '.')}}</td>
                            <td style="font-size: 12px;">{{$fechamento->rack_back}}%</td>
                            <td style="font-size: 12px;">{{'R$ '.number_format($fechamento->comissao, 2, ',', '.')}}</td>
                            <td style="font-size: 12px;">{{'R$ '.number_format($fechamento->final, 2, ',', '.')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
<script>
</script>
</body>
</html>
