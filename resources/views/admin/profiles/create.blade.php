@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'admin.profiles.store']) !!}

        @include('admin.profiles.fields')

    {!! Form::close() !!}
</div>
@endsection
