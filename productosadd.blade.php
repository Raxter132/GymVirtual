@extends('layouts.layoutLGA')
@section('content')
@if($errors->any())
<div id="alertmessage" class="alertmessage">{{$errors->first()}} <button style="margin-left:5px;" onclick="return confirm()">OK</button></div>
@endif
<form action="{{route('admin.prodstore')}}" method="POST" enctype="multipart/form-data">
@csrf
<br><br><br><br>
		<div class="">
		<h2>REGISTRAR PRODUCTO</h2>
		<center>
		<table style="border:1;">
		<tr>
		<td><h3 for="">Nombre del producto</h3></td>
		<td><input pattern="[A-Za-z0-9-_,.* ]{1,50}" type="text"  name="name" id="name" ></td>
		</tr>
		<tr>
		<td><h3 for="">Precio</h3></td>
		<td><input pattern="[1-9]{1}[0-9,.]{1,5}" type="text"  name="price" id="username" ></td>			
		</tr>
		<tr>
		<td><h3 for="">Tipo</h3</td>	
		<td><input  pattern="[a-zA-Z-_ ]{1,50}" type="text" class="" name="type" </td>	  
		</tr>
		<tr>
		<td><h3 for="">Cantidad</h3</td>	
		<td><input  pattern="[1-9]{1}[0-9]{0,3}" type="text" class="" name="cantidad" </td>	  
		</tr>
		<tr>
		<td><h3 for="">Imagen</h3></td>
		<td><input  accept="image/*"  type="file"  name="img"  ></td>
		</tr>
        <tr>
            <td></td>
            <td>
				<input type="submit" value="REGISTRAR PRODUCTO"><br>	</div>	

            </td>
        </tr>
		</table>
		</center>
</form>
@endsection