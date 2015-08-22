<!-- / Id / Form Input -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('id', null, ['class' => 'form-control id-class', 'placeholder' => ' Id']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfoid" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfoid">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('id') }}</small>
</div>
<!-- / Id / END Form Input -->

<!-- / Name / Form Input -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('name', null, ['class' => 'form-control name-class', 'placeholder' => ' Name']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfoname" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfoname">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>
<!-- / Name / END Form Input -->

<!-- / Firstname / Form Input -->
<div class="form-group">
    {!! Form::label('firstname', 'Firstname:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('firstname', null, ['class' => 'form-control firstname-class', 'placeholder' => ' Firstname']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfofirstname" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfofirstname">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('firstname') }}</small>
</div>
<!-- / Firstname / END Form Input -->

<!-- / Lastname / Form Input -->
<div class="form-group">
    {!! Form::label('lastname', 'Lastname:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('lastname', null, ['class' => 'form-control lastname-class', 'placeholder' => ' Lastname']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfolastname" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfolastname">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('lastname') }}</small>
</div>
<!-- / Lastname / END Form Input -->

<!-- / Username / Form Input -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('username', null, ['class' => 'form-control username-class', 'placeholder' => ' Username']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfousername" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfousername">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('username') }}</small>
</div>
<!-- / Username / END Form Input -->

<!-- / Email / Form Input -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('email', null, ['class' => 'form-control email-class', 'placeholder' => ' Email']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfoemail" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfoemail">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>
<!-- / Email / END Form Input -->

<!-- / Password / Form Input -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('password', null, ['class' => 'form-control password-class', 'placeholder' => ' Password']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfopassword" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfopassword">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('password') }}</small>
</div>
<!-- / Password / END Form Input -->

<!-- / Remember Token / Form Input -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('remember_token', null, ['class' => 'form-control remember_token-class', 'placeholder' => ' Remember Token']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinforemember_token" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinforemember_token">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('remember_token') }}</small>
</div>
<!-- / Remember Token / END Form Input -->

<!-- / Created At / Form Input -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('created_at', null, ['class' => 'form-control created_at-class', 'placeholder' => ' Created At']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfocreated_at" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfocreated_at">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('created_at') }}</small>
</div>
<!-- / Created At / END Form Input -->

<!-- / Updated At / Form Input -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('updated_at', null, ['class' => 'form-control updated_at-class', 'placeholder' => ' Updated At']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfoupdated_at" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfoupdated_at">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('updated_at') }}</small>
</div>
<!-- / Updated At / END Form Input -->


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
