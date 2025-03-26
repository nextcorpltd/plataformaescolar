<style>
    .topo{
        text-align: center;
    }
    .subtopo{
        text-align: center;
        margin-bottom: 16px;
        font-size: 18px;
        text-decoration: underline;
    }
    .aluno{
        margin-bottom: 16px;
    }
    .plagio{
        margin-bottom: 16px;
    }
    .plagio h3{
        font-size: 18px;
    }
    .pesquisa{
        margin-bottom: 16px;
    }
    .pesquisa h3{
        font-size: 18px;
    }
    .bloco{
        border: 1px solid #000000;
        padding: 16px;
        margin-bottom: 10px;
        border-radius: 10px
    }
    .bloco h1{
        font-size: 16px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verificação de plágio</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
    <div class="topo">
        <img src="images/logo.jpeg" alt="" style="width: 100px"/>
        <h1>ISPEL</h1>
        <h2>Instituto Superior Politécnico Evangélico do Lubango</h2>
    </div>
    <div class="subtopo">
        <h3>Verificação de Plágio</h3>
    </div>
    <div class="aluno">
        <div style="display: block;"><strong>Nome:</strong> {{ $repo['author'] }}</div>
        <div style="display: block;"><strong>Curos:</strong> {{ $repo['course'] }}</div>
        <div style="display: block;"><strong>Orientador:</strong> {{ $repo['teacher'] }}</div>
        <div style="display: block;"><strong>Data:</strong> {{ date('d/m/Y H:i', strtotime($repo['created_at'])) }}</div>
    </div>
    <div class="info">
        <p>Este relatório visa verificar a originalidade do conteúdo e integridade do documentos.</p>
    </div>
    <div class="plagio">
        <h3 style="background: black; color:white; padding: 5px">Resultado:</h3>
        <div class="plagio-info">
            <div>
                <strong>Porcentagem de Plágio:</strong>
                <span>{{ $doc['score'] }}%</span>
            </div>
            <div>
                <strong>Total de fontes:</strong>
                <span>{{ $doc['sourceCounts'] }}</span>
            </div>
            <div>
                <strong>Verificação de palavras:</strong>
                <span>{{ $doc['extWordCounts'] }}</span>
            </div>
            <div>
                <strong>Palavras plagiadas:</strong>
                <span>{{ $doc['totalPlagiarismWords'] }}</span>
            </div>
        </div>
    </div>

    <div class="pesquisa">
        <h3 style="background: black; color:white; padding: 5px">Resultados similares:</h3>
        @foreach ($sources as $item)
            <div class="bloco">
                <div>
                    <strong>Palavras plagiadas:</strong>
                    <span>{{ $item->plagiarismWords }}</span>
                </div>
                <h1>{{ $item->title }}</h1>
                <p>{{ $item->description }}</p>
                <div>
                    <strong>Fonte:</strong>
                    <span>{{ $item->url }}</span>
                </div>
                <div>
                    <strong>Citações:</strong>
                    <span>{{ $item->citation }}</span>
                </div>
            </div>
        @endforeach
    </div>

    <div style="margin-top: 100px; text-align: center; ">
        <div style="text-align: center; margin-top: 10px; font-weight: bold; border-top: 1px solid #000000">
            <span>Departamento dos Assuntos Científicos</span>
        </div>
    </div>
</body>
</html>

