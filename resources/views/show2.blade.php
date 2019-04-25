<h2>Usuario: </h2>
<p>{{ $user->name }}</p>

<h3>Tareas:</h3>

<ul>
    @foreach($user->tasks as $task)
    <li>{{ $task->description }} || {{ $task->status }}</li>
    @endforeach
</ul>