@extends('layouts.layoutLGA')

@section('content')       

    <center>
        <div class="container">
        <table>
        <a class="btn fourthagrega" href="{{route('admin.prodstore')}}">AGREGAR PRODUCTOS</a>
     <thead>
     <tr>
            <th>NOMBRE</th>
            <th>IMAGEN</th>
            <th>PRECIO</th>
            <th>TIPO</th>
            <th>CANTIDAD</th>
            <th>BOTONES</th>
       </tr>   
     </thead>
    <tbody>
    @foreach($alimentos as $al)
       <tr>
           <td>{{$al->vch_nombre}}</td>
           <td><img class="productos" src="imgs/{{$al->vch_file}}" alt=""></td>
           <td>${{$al->int_precio}}</td>
           <td>{{$al->vch_tipo}}</td>
           <td>{{$al->int_cantidad}}</td>
           <td> 
               <center>
               <form method="POST"value="{{route('prod.destroy',$al->id_producto)}}" action="{{route('prod.destroy',$al->id_producto)}}">
               @csrf
               <input onclick="return validate()" value="ELIMINAR" type="submit" class="btn fourth"></input>
               </form>
               <form method="POST" action="{{route('prod.update',$al->id_producto)}}">
               @csrf
               <input value="ACTUALIZAR" type="submit" class="btn fourthactualiza"></input>
               </form>
               </center>
            </td>
           
       </tr>
       @endforeach
    </tbody>
      
    </table>
        </div>
 
    </center>
   
   
@endsection