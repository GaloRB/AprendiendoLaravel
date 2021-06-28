Formulario de creacion de empleados

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf 

<label for="Nombre">Name:</label>
<input type="text" name="Name" id="Name">
<br>
<label for="LastName">LastName</label>
<input type="text" name="LastName" id="LastName">
<br>
<label for="Email">Email</label>
<input type="text" name="Email" id="Email">
<br>
<label for="Photo">Photo</label>
<input type="file" name="Photo" id="Photo">
<br>
<input type="submit" value="Guardad Datos">

</form>