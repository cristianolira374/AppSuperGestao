<h3>Fornecedor</h3>

@php
/*    

*/
@endphp


@isset($fornecedores)
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
@endisset


