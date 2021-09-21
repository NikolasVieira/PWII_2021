<h3>Novo produto</h3>
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="nome do produto">
    <input type="number" name="qtd" placeholder="Quantidade">
    <input type="number" step="any" name="valor" placeholder="Valor">
    <input type="submit" value="Salvar">
</form>
