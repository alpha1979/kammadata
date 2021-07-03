@extends('layouts.template')
@section('content')
<div class="container">
    
    <div class="container border border-dark rounded ui-middle shadow">
        <h1>Hi, {{ $friend_name }}</h1>
        <p> your best freind wants you to try {{config('app.name',"KAMMA DATA")}}. if you register with us we will send your friend one porche</p>
		<p>This email is shared by {{ $yourname }}</p>
    </div>
</div>
    
@endsection