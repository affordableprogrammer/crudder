<table class="table">
    <thead>
    <th>Id</th>
			<th>Status</th>
			<th>Taxid</th>
			<th>Activation Code</th>
			<th>Active Subscription</th>
			<th>Company</th>
			<th>Title</th>
			<th>Salutation</th>
			<th>Email</th>
			<th>Telephone</th>
			<th>Fax</th>
			<th>Website</th>
			<th>Birthday</th>
			<th>Bio</th>
			<th>Street</th>
			<th>Street Additional</th>
			<th>City</th>
			<th>State</th>
			<th>Zipcode</th>
			<th>Country</th>
			<th>Lat</th>
			<th>Long</th>
			<th>Billing Street</th>
			<th>Billing Street Additional</th>
			<th>Billing City</th>
			<th>Billing State</th>
			<th>Billing Zipcode</th>
			<th>Billing Country</th>
			<th>Pic</th>
			<th>Age</th>
			<th>Twitter Username</th>
			<th>Googleplusurl</th>
			<th>Facebookurl</th>
			<th>Last Active</th>
			<th>Last Seen</th>
			<th>Inactive For</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Deleted At</th>
			<th>User Id</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($profiles as $profile)
        <tr>
            <td>{!! $profile->id !!}</td>
			<td>{!! $profile->status !!}</td>
			<td>{!! $profile->taxid !!}</td>
			<td>{!! $profile->activation_code !!}</td>
			<td>{!! $profile->active_subscription !!}</td>
			<td>{!! $profile->company !!}</td>
			<td>{!! $profile->title !!}</td>
			<td>{!! $profile->salutation !!}</td>
			<td>{!! $profile->email !!}</td>
			<td>{!! $profile->telephone !!}</td>
			<td>{!! $profile->fax !!}</td>
			<td>{!! $profile->website !!}</td>
			<td>{!! $profile->birthday !!}</td>
			<td>{!! $profile->bio !!}</td>
			<td>{!! $profile->street !!}</td>
			<td>{!! $profile->street_additional !!}</td>
			<td>{!! $profile->city !!}</td>
			<td>{!! $profile->state !!}</td>
			<td>{!! $profile->zipcode !!}</td>
			<td>{!! $profile->country !!}</td>
			<td>{!! $profile->lat !!}</td>
			<td>{!! $profile->long !!}</td>
			<td>{!! $profile->billing_street !!}</td>
			<td>{!! $profile->billing_street_additional !!}</td>
			<td>{!! $profile->billing_city !!}</td>
			<td>{!! $profile->billing_state !!}</td>
			<td>{!! $profile->billing_zipcode !!}</td>
			<td>{!! $profile->billing_country !!}</td>
			<td>{!! $profile->pic !!}</td>
			<td>{!! $profile->age !!}</td>
			<td>{!! $profile->twitter_username !!}</td>
			<td>{!! $profile->googleplusurl !!}</td>
			<td>{!! $profile->facebookurl !!}</td>
			<td>{!! $profile->last_active !!}</td>
			<td>{!! $profile->last_seen !!}</td>
			<td>{!! $profile->inactive_for !!}</td>
			<td>{!! $profile->created_at !!}</td>
			<td>{!! $profile->updated_at !!}</td>
			<td>{!! $profile->deleted_at !!}</td>
			<td>{!! $profile->user_id !!}</td>
            <td>
                <a href="{!! route('profiles.edit', [$profile->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('profiles.delete', [$profile->id]) !!}" onclick="return confirm('Are you sure wants to delete this Profile?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
