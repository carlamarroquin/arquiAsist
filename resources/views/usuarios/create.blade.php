@extends('master')

@section('content')


<div>
<h1>CREAR USUARIO</h1>
{!!Form::open(['route'=>'user.store', 'method'=>'POST'])!!}
	Nombres:
    	<input type="text" name="nombre" class="form-control">
	Apellidos:<br/>
		<input type="text" name="apellidos" class="form-control">
	Email:<br/>
		<input type="email" name="email" class="form-control">
	Departamento:<br/>
		<input type="text" name="depto" class="form-control">
	Usuario:<br/>
		<input type="text" name="usuario" class="form-control">
	Tipo de Usuario:<br/>
		<input type="text" name="tipo" class="form-control">
	Contraseña:<br/>
		<input type="password" name="password" class="form-control">
        <br/>
		<input type="submit" value="Guardar" class="btn btn-success">

{!!Form::close()!!}
</div>

@endsection