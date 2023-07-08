<h1>Olá!<h1>

<form 
    method="POST"
    action="{{ route('contato') }}"
    enctype="multipart/form-data"
    class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="assunto" value="Contato do Site"
>
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="email" placeholder="E-mail">
    <input type="text" name="telefone" placeholder="Telefone">
    <input type="text" name="mensagem" placeholder="Mensagem">
    <button type="submit">Enviar</button>
</form>