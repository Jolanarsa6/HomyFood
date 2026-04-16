@extends('admin.layouts.master')

@section('content')
    <table>
        <thead>
            <td>name</td>
            <td>accept</td>
            <td>reject</td>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td><a href=""><button>accept</a></button></td>
                    <td><a href=""><button>reject</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
