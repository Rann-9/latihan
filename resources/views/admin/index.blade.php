@extends('admin.parent')

@section('content')

<div class="container d-flex justify-content-end">
    <a href="{{ route ('admin.create') }}" class="btn btn-primary">Create Admin</a>
</div>

{{-- TABLE --}}
<div class="container text-center">
    <h5 class="fw-bold">Users</h5>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>

@endsection