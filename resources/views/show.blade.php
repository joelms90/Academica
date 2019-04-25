<h2>Nombre Tarea: </h2>
<p>{{ $task->description }}</p>
<p>{{ $task->status }}</p>

<h3>Tarea Asiganada a:</h3>

<ul>
    @foreach($task->users as $user)
    <li>{{ $user->name }}</li>
    @endforeach
</ul>