@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($profile, ['route' => ['admin.profiles.update', $profile->id], 'method' => 'patch']) !!}

        @include('admin.profiles.fields')

    {!! Form::close() !!}
</div>
@endsection
