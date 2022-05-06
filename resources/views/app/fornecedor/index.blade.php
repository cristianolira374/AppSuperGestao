<h3>Fornecedor</h3>

@php
/*    

*/
@endphp


@isset($fornecedores)
<h3>FOR</h3>
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido'}}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[0]['telefone'] ?? ''}}
        @switch($fornecedores[$i]['ddd'])
            @case ('11')
                São Paulo - SP
                @break
            @case('85')
                Fortaleza - CE
                @break
            @case ('88')
                Interior - CE
                @break
            @default
                Cidade não identificada
        @endswitch
        <hr>
    @endfor

<h3>WHILE</h3>
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido'}}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[0]['telefone'] ?? ''}}
        @switch($fornecedores[$i]['ddd'])
            @case ('11')
                São Paulo - SP
                @break
            @case('85')
                Fortaleza - CE
                @break
            @case ('88')
                Interior - CE
                @break
            @default
                Cidade não identificada
        @endswitch
        @php $i++ @endphp
        <hr>
    @endwhile

<h3>FOREACH</h3>
    @foreach ($fornecedores as $indices => $fornecedor)
         Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        @switch($fornecedor['ddd'])
            @case ('11')
                São Paulo - SP
                @break
            @case('85')
                Fortaleza - CE
                @break
            @case ('88')
                Interior - CE
                @break
            @default
                Cidade não identificada
        @endswitch
        <hr>
    @endforeach

<h3>FORELSE COM LOOP DO BLADE</h3>
    @forelse($fornecedores as $indices => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: @{{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        @switch($fornecedor['ddd'])
            @case ('11')
                São Paulo - SP
                @break
            @case('85')
                Fortaleza - CE
                @break
            @case ('88')
                Interior - CE
                @break
            @default
                Cidade não identificada
        @endswitch
        <br>
        @if($loop->first)
            Primeira interação do loop
        @endif
        @if($loop->last)
            Última interação do loop
            <br>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset


