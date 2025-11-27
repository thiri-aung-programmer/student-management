@extends('layouts.app')
@section('head')
<title>Students</title>

@endsection
@section('styles')
table{
    width:100%;
    border-collapse:collapse;
}
table,th,td{
    border:1px solid black;
}
th,td{
    padding:10px;
    text-align:left;
}
th{
    background-color:#005bb5;
    color:white;
}
tr:nth-child(even){
    background-color:#f2f2f2;
}
tr:hover{
    background-color:#f5f5f5;
}
h2{
    color:#005bb5;
    text-align:center;
}
.search{
    display:flex;
    justify-content:center;
    margin-bottom:20px;    
}
.search input{
    padding:10px;
    width:50%;
    margin-right:10px;
}
.search button{
    padding:10px;
    background-color:#005bb5;
    color:white;
    border:none;
}
.search button:hover{
    background-color:#004088;
}

.editButtton{
    background-color:#4CAF50;
    color:white;
    padding:5px 10px;
    text-align:center;
    text-decoration:none;
    display:inline-block;
    border-radius:5px;
}
.editButton:hover{
    background-color:#45a049;
    color:black;
}
.deleteButtton{
    background-color:#f44336;
    color:white;
    padding:5px 10px;
    text-align:center;
    text-decoration:none;
    display:inline-block;
    border-radius:5px;
}
.deleteButton:hover{
    background-color:#da190b;
    color:black;
}
@endsection
@section('content')
<h2>Students</h2>
<form action="{{ URL('student') }}" method="GET">
    <div class="search">
    <input type="text" placeholder="Search" id="search" name="search" value="{{ request('search') }}">
    <Button type="submit">Search</Button>
</div>
</form>
<table>
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Score</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{$student->name }}</td>
                <td>{{$student->email }}</td>
                <td>{{$student->age }}</td>
                <td>{{$student->date_of_birth }}</td>
                <td>{{$student->gender }}</td>
                <td>{{$student->score }}</td>
                <td>
                    <a href="#" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                    <a href="#" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection