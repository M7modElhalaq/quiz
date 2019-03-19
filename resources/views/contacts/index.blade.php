@extends('layouts.app')

@section('content')
    <form action="{{route('createContact')}}">
        <h1>Contact List</h1>
        <button type="submit" class="btn btn-success" style="float: right;">Add Contact</button>
    </form>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">&nbsp</th>
                <th scope="col">&nbsp</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <th scope="row">{{$contact->id}}</th>
                    <td>{{$contact->firstName}}</td>
                    <td>{{$contact->lastName}}</td>
                    <td>{{$contact->email}}</td>
                    <td>
                        <form action="{{route('deleteContact', ['id' => $contact->id])}}" method="post">
                            {!! csrf_field() !!}
                            {!! method_field('delete') !!}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('editContact', ['id' => $contact->id]) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection