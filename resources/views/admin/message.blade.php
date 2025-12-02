@extends('layout.app')
@section('css')
 <link rel="stylesheet" href="{{asset('css/message.css')}}">
@endsection
@section('header-content')
    <h1 class="header-title">All Contact Messages(Admin Only)</h1>
@endsection
@section('content')
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Submitted At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td>{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->subject }}</td>
            <td>{{ $message->message }}</td>
            <td>{{ $message->created_at->format('d M Y, h:i A') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
