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

.addStudentButton{
    padding:10px 20px;
    background-color:#005bb5;
    font-weigtht:bold;
    color:white;
    border:1px solid #005bb5;
    display:inline-block;
    border-radius:5px;
}
.addStudentButton:hover{
    background-color:#004080;
}
@endsection
@section('content')
<h2>Students</h2>
<form action="{{ URL('student') }}" method="GET">
    <div class="search">
    <input type="text" placeholder="Search" id="search" name="search" value="{{ request('search') }}">
    <Button type="submit">Search</Button>
    <a href="{{ URL('student/add') }}" class="addStudentButton ms-3" title="Add Student"><i class="fa-solid fa-plus"></i></a>
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
        <th>Image</th>
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
                <td class="text-center">
                    @if($student->image)
                        <img src="{{ asset('storage/'.$student->image )}}" alt="" class="img-fluid" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ URL('student/edit',$student->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('student.delete', $student->id) }}" method="POST" onsubmit="return confirm('Are You Sure To delete this student?')" style="display:inline">
                        @csrf                      
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="paginationDiv w-100">
    {{ $students->
    appends(request()->query())
    ->links('pagination::bootstrap-5') }}
</div>

@endsection