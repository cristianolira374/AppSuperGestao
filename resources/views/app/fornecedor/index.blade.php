<h3>Fornecedor</h3>

@php
/*    

*/
@endphp


Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
MSG: {{$msg}}
<br>
@if($fornecedores[0]['status'] == 'N')
    <h3> Fornecedor inativo </h3>
@else
    <h3> Fornecedor ativo </h3>
@endif
<br>


@unless($fornecedores[0]['status'] == 'S')
<h3> Fornecedor inativo </h3>
@endunless

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif