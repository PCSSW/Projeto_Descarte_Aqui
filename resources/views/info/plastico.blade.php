@extends('info.layoutInfo')
@section('titulo', 'Plástico')
@section('conteudo')
    <style>       
        header {
            background-color: #FF5733;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>

    <body>
        <header>
            <h1>Reciclagem de Plástico</h1>
        </header>

        <main>
            <p>Reciclar plástico é fundamental para reduzir a poluição e conservar os recursos naturais.<br> Siga estas dicas para reciclar plástico de forma eficaz:</p>
            <ul>
                <li>1. Verifique os símbolos de reciclagem nos produtos de plástico.</li>
                <li>2. Separe plásticos por tipo (por exemplo, PET, HDPE, LDPE).</li>
                <li>3. Lave e enxágue os recipientes de plástico antes de reciclar.</li>
                <li>4. Evite plásticos contaminados ou sujos.</li>
            </ul>
        </main>

    </body>
@endsection
