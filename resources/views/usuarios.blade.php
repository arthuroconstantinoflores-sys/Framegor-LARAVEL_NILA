<h2>Mi pinche proyecto de frameworks del NILA con larabel</h2>
<h1>Lista de usuarios</h1>

<ul>
    @foreach($usuarios as $usuario)
        <li>{{ $usuario }}</li>
    @endforeach
</ul>