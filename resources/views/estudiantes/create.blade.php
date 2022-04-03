<center>
<h2>Nuevo Estudiante</h2>
</center>
<br>
<br>
<form action="{{ url('estudiante') }}" method="post">
    @csrf   
    @include ('estudiantes.form')
</form>