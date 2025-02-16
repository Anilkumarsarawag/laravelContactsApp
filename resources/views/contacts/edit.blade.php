@extends('layout')

@section('content')
    <h2>Edit Contact</h2>
    
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $contact->name }}" required>
        </div>
        
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection