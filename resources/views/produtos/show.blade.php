<h3>Informações do produto</h3>

<p>ID: {{ $produtos->id }}</p>
<p>Nome: {{ $produtos->nome }} </p>
<p>Quantidade: {{ $produtos->qtd }} </p>
<p>Valor: {{ $produtos->valor }} </p>

<a href=" {{ route('produtos.index') }}">Voltar</a>

