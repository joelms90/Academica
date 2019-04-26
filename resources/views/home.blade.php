@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">



            <div id="app">
   <tasks-list  v-bind:current-user='{!! Auth::user()->toJson() !!}'></tasks-list>

</div>

    </div>
</div>
@endsection
