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

<!-- / Status / Form Input -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('status', null, ['class' => 'form-control status-class', 'placeholder' => ' Status']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfostatus" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfostatus">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('status') }}</small>
</div>
<!-- / Status / END Form Input -->

<!-- / Taxid / Form Input -->
<div class="form-group">
    {!! Form::label('taxid', 'Taxid:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('taxid', null, ['class' => 'form-control taxid-class', 'placeholder' => ' Taxid']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfotaxid" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfotaxid">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('taxid') }}</small>
</div>
<!-- / Taxid / END Form Input -->

<!-- / Activation Code / Form Input -->
<div class="form-group">
    {!! Form::label('activation_code', 'Activation Code:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('activation_code', null, ['class' => 'form-control activation_code-class', 'placeholder' => ' Activation Code']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfoactivation_code" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfoactivation_code">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('activation_code') }}</small>
</div>
<!-- / Activation Code / END Form Input -->

<!-- / Active Subscription / Form Input -->
<div class="form-group">
    {!! Form::label('active_subscription', 'Active Subscription:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('active_subscription', null, ['class' => 'form-control active_subscription-class', 'placeholder' => ' Active Subscription']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfoactive_subscription" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfoactive_subscription">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('active_subscription') }}</small>
</div>
<!-- / Active Subscription / END Form Input -->

<!-- / Company / Form Input -->
<div class="form-group">
    {!! Form::label('company', 'Company:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('company', null, ['class' => 'form-control company-class', 'placeholder' => ' Company']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfocompany" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfocompany">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('company') }}</small>
</div>
<!-- / Company / END Form Input -->

<!-- / Title / Form Input -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('title', null, ['class' => 'form-control title-class', 'placeholder' => ' Title']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfotitle" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfotitle">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('title') }}</small>
</div>
<!-- / Title / END Form Input -->

<!-- / Salutation / Form Input -->
<div class="form-group">
    {!! Form::label('salutation', 'Salutation:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('salutation', null, ['class' => 'form-control salutation-class', 'placeholder' => ' Salutation']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfosalutation" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfosalutation">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('salutation') }}</small>
</div>
<!-- / Salutation / END Form Input -->

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

<!-- / Telephone / Form Input -->
<div class="form-group">
    {!! Form::label('telephone', 'Telephone:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('telephone', null, ['class' => 'form-control telephone-class', 'placeholder' => ' Telephone']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfotelephone" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfotelephone">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('telephone') }}</small>
</div>
<!-- / Telephone / END Form Input -->

<!-- / Fax / Form Input -->
<div class="form-group">
    {!! Form::label('fax', 'Fax:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('fax', null, ['class' => 'form-control fax-class', 'placeholder' => ' Fax']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfofax" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfofax">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('fax') }}</small>
</div>
<!-- / Fax / END Form Input -->

<!-- / Website / Form Input -->
<div class="form-group">
    {!! Form::label('website', 'Website:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('website', null, ['class' => 'form-control website-class', 'placeholder' => ' Website']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfowebsite" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfowebsite">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('website') }}</small>
</div>
<!-- / Website / END Form Input -->

<!-- / Birthday / Form Input -->
<div class="form-group">
    {!! Form::label('birthday', 'Birthday:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('birthday', null, ['class' => 'form-control birthday-class', 'placeholder' => ' Birthday']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfobirthday" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfobirthday">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('birthday') }}</small>
</div>
<!-- / Birthday / END Form Input -->

<!-- / Bio / Form Input -->
<div class="form-group">
    {!! Form::label('bio', 'Bio:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('bio', null, ['class' => 'form-control bio-class', 'placeholder' => ' Bio']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfobio" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfobio">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('bio') }}</small>
</div>
<!-- / Bio / END Form Input -->

<!-- / Street / Form Input -->
<div class="form-group">
    {!! Form::label('street', 'Street:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('street', null, ['class' => 'form-control street-class', 'placeholder' => ' Street']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfostreet" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfostreet">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('street') }}</small>
</div>
<!-- / Street / END Form Input -->

<!-- / Street Additional / Form Input -->
<div class="form-group">
    {!! Form::label('street_additional', 'Street Additional:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('street_additional', null, ['class' => 'form-control street_additional-class', 'placeholder' => ' Street Additional']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfostreet_additional" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfostreet_additional">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('street_additional') }}</small>
</div>
<!-- / Street Additional / END Form Input -->

<!-- / City / Form Input -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('city', null, ['class' => 'form-control city-class', 'placeholder' => ' City']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfocity" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfocity">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('city') }}</small>
</div>
<!-- / City / END Form Input -->

<!-- / State / Form Input -->
<div class="form-group">
    {!! Form::label('state', 'State:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('state', null, ['class' => 'form-control state-class', 'placeholder' => ' State']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfostate" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfostate">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('state') }}</small>
</div>
<!-- / State / END Form Input -->

<!-- / Zipcode / Form Input -->
<div class="form-group">
    {!! Form::label('zipcode', 'Zipcode:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('zipcode', null, ['class' => 'form-control zipcode-class', 'placeholder' => ' Zipcode']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfozipcode" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfozipcode">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('zipcode') }}</small>
</div>
<!-- / Zipcode / END Form Input -->

<!-- / Country / Form Input -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('country', null, ['class' => 'form-control country-class', 'placeholder' => ' Country']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfocountry" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfocountry">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('country') }}</small>
</div>
<!-- / Country / END Form Input -->

<!-- / Lat / Form Input -->
<div class="form-group">
    {!! Form::label('lat', 'Lat:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('lat', null, ['class' => 'form-control lat-class', 'placeholder' => ' Lat']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfolat" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfolat">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('lat') }}</small>
</div>
<!-- / Lat / END Form Input -->

<!-- / Long / Form Input -->
<div class="form-group">
    {!! Form::label('long', 'Long:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('long', null, ['class' => 'form-control long-class', 'placeholder' => ' Long']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfolong" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfolong">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('long') }}</small>
</div>
<!-- / Long / END Form Input -->

<!-- / Billing Street / Form Input -->
<div class="form-group">
    {!! Form::label('billing_street', 'Billing Street:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('billing_street', null, ['class' => 'form-control billing_street-class', 'placeholder' => ' Billing Street']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfobilling_street" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfobilling_street">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('billing_street') }}</small>
</div>
<!-- / Billing Street / END Form Input -->

<!-- / Billing Street Additional / Form Input -->
<div class="form-group">
    {!! Form::label('billing_street_additional', 'Billing Street Additional:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('billing_street_additional', null, ['class' => 'form-control billing_street_additional-class', 'placeholder' => ' Billing Street Additional']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfobilling_street_additional" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfobilling_street_additional">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('billing_street_additional') }}</small>
</div>
<!-- / Billing Street Additional / END Form Input -->

<!-- / Billing City / Form Input -->
<div class="form-group">
    {!! Form::label('billing_city', 'Billing City:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('billing_city', null, ['class' => 'form-control billing_city-class', 'placeholder' => ' Billing City']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfobilling_city" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfobilling_city">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('billing_city') }}</small>
</div>
<!-- / Billing City / END Form Input -->

<!-- / Billing State / Form Input -->
<div class="form-group">
    {!! Form::label('billing_state', 'Billing State:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('billing_state', null, ['class' => 'form-control billing_state-class', 'placeholder' => ' Billing State']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfobilling_state" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfobilling_state">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('billing_state') }}</small>
</div>
<!-- / Billing State / END Form Input -->

<!-- / Billing Zipcode / Form Input -->
<div class="form-group">
    {!! Form::label('billing_zipcode', 'Billing Zipcode:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('billing_zipcode', null, ['class' => 'form-control billing_zipcode-class', 'placeholder' => ' Billing Zipcode']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfobilling_zipcode" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfobilling_zipcode">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('billing_zipcode') }}</small>
</div>
<!-- / Billing Zipcode / END Form Input -->

<!-- / Billing Country / Form Input -->
<div class="form-group">
    {!! Form::label('billing_country', 'Billing Country:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('billing_country', null, ['class' => 'form-control billing_country-class', 'placeholder' => ' Billing Country']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfobilling_country" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfobilling_country">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('billing_country') }}</small>
</div>
<!-- / Billing Country / END Form Input -->

<!-- / Pic / Form Input -->
<div class="form-group">
    {!! Form::label('pic', 'Pic:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('pic', null, ['class' => 'form-control pic-class', 'placeholder' => ' Pic']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfopic" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfopic">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('pic') }}</small>
</div>
<!-- / Pic / END Form Input -->

<!-- / Age / Form Input -->
<div class="form-group">
    {!! Form::label('age', 'Age:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('age', null, ['class' => 'form-control age-class', 'placeholder' => ' Age']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfoage" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfoage">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('age') }}</small>
</div>
<!-- / Age / END Form Input -->

<!-- / Twitter Username / Form Input -->
<div class="form-group">
    {!! Form::label('twitter_username', 'Twitter Username:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('twitter_username', null, ['class' => 'form-control twitter_username-class', 'placeholder' => ' Twitter Username']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfotwitter_username" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfotwitter_username">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('twitter_username') }}</small>
</div>
<!-- / Twitter Username / END Form Input -->

<!-- / Googleplusurl / Form Input -->
<div class="form-group">
    {!! Form::label('googleplusurl', 'Googleplusurl:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('googleplusurl', null, ['class' => 'form-control googleplusurl-class', 'placeholder' => ' Googleplusurl']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfogoogleplusurl" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfogoogleplusurl">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('googleplusurl') }}</small>
</div>
<!-- / Googleplusurl / END Form Input -->

<!-- / Facebookurl / Form Input -->
<div class="form-group">
    {!! Form::label('facebookurl', 'Facebookurl:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('facebookurl', null, ['class' => 'form-control facebookurl-class', 'placeholder' => ' Facebookurl']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfofacebookurl" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfofacebookurl">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('facebookurl') }}</small>
</div>
<!-- / Facebookurl / END Form Input -->

<!-- / Last Active / Form Input -->
<div class="form-group">
    {!! Form::label('last_active', 'Last Active:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('last_active', null, ['class' => 'form-control last_active-class', 'placeholder' => ' Last Active']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfolast_active" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfolast_active">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('last_active') }}</small>
</div>
<!-- / Last Active / END Form Input -->

<!-- / Last Seen / Form Input -->
<div class="form-group">
    {!! Form::label('last_seen', 'Last Seen:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('last_seen', null, ['class' => 'form-control last_seen-class', 'placeholder' => ' Last Seen']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfolast_seen" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfolast_seen">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('last_seen') }}</small>
</div>
<!-- / Last Seen / END Form Input -->

<!-- / Inactive For / Form Input -->
<div class="form-group">
    {!! Form::label('inactive_for', 'Inactive For:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('inactive_for', null, ['class' => 'form-control inactive_for-class', 'placeholder' => ' Inactive For']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfoinactive_for" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfoinactive_for">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('inactive_for') }}</small>
</div>
<!-- / Inactive For / END Form Input -->

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

<!-- / Deleted At / Form Input -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('deleted_at', null, ['class' => 'form-control deleted_at-class', 'placeholder' => ' Deleted At']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfodeleted_at" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfodeleted_at">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('deleted_at') }}</small>
</div>
<!-- / Deleted At / END Form Input -->

<!-- / User Id / Form Input -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
	<div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
    {!! Form::text('user_id', null, ['class' => 'form-control user_id-class', 'placeholder' => ' User Id']) !!}
	    <div class="input-group-addon">
			<i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfouser_id" aria-expanded="false" aria-controls="openinfo1"></i>
		</div>
	</div> {{-- / input-group end--}}
    <div class="collapse" id="openinfouser_id">
		<div class="well"><medium class="list-group-item list-group-item-info">put info here / SCHEMA: itemprop="headline name"</medium>
		</div>
	</div>
	<span id="helpBlock" class="help-block">
	A block of help text that breaks onto a new line and may extend beyond one line. </span>
    <small class="text-danger">{{ $errors->first('user_id') }}</small>
</div>
<!-- / User Id / END Form Input -->


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
