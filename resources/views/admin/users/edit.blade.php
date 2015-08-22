@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch']) !!}

        @include('admin.users.fields')

    {!! Form::close() !!}
</div>
@endsection
