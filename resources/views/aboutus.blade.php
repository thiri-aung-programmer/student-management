
@extends('layouts.app')
@section('content')
     <section>
        <h2>About Us</h2>
        <p>This is a simple HTML and CSS Template to start your project.</p>
        <p>Name: {{ $name }}</p>
        <p>ID  : {{ $id }}</p>
     </section>
@endsection
@section('scripts')
<script>
    alert('hi');
</script>

@endsection