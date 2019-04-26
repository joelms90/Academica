@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

		  <table class="table table-striped">
		  <thead class="text-center">
		    <tr class="text-center">
		      <th scope="col">Descripción</th>
		      <th scope="col">Status</th>
		      <th scope="col">Encargados</th>
		    
		    </tr>
		  </thead>
		  <tbody class="text-center">
		  	@foreach($tasks as $task)
		  	
		    <tr class="text-center">
		      <th scope="row">{{$task->description}}</th>
		      <td>{{$task->status}}</td>
		      <td>
		      @foreach($task->users as $user)
		      <a>{{$user->name}} Teléfono: {{$user->phone}} Correo:{{$user->email}}</a><br>
		      @endforeach
		      <td>
		     
		    
		    </tr>
		    @endforeach
		
		  </tbody>
		</table>

    </div>
</div>
@endsection
