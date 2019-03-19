@extends('layouts.app')

@section('content')
    <form action="{{route('contacts')}}">
        <h1>Contact Us</h1>
        <button type="submit" class="btn btn-success" style="float: right;">Back</button>
    </form>
    <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
    <form action="{{route('storeContact')}}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="inputFirstName" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="inputLastName" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email Address</label>
            <input type="email" class="form-control" name="email" id="inputEmail" required>
        </div>
        <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea class="form-control" id="inputMessage" name="text" rows="5" required></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection