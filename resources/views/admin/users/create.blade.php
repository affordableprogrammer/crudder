@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'admin.users.store']) !!}

        @include('admin.users.fields')

    {!! Form::close() !!}
</div>
@endsection
