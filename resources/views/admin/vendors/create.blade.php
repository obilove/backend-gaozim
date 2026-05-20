@extends('layouts.app')

@section('content')
    <h2>Create Vendor</h2>

    <form action="{{ route('admin.vendors.store') }}" method="POST">
        @csrf

        @include('admin.vendors.form')

        <button type="submit">Save Vendor</button>
    </form>
@endsection
