<table class="table">
    <thead>
    <th>Id</th>
			<th>Name</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Remember Token</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->id !!}</td>
			<td>{!! $user->name !!}</td>
			<td>{!! $user->firstname !!}</td>
			<td>{!! $user->lastname !!}</td>
			<td>{!! $user->username !!}</td>
			<td>{!! $user->email !!}</td>
			<td>{!! $user->password !!}</td>
			<td>{!! $user->remember_token !!}</td>
			<td>{!! $user->created_at !!}</td>
			<td>{!! $user->updated_at !!}</td>
            <td>
                <a href="{!! route('users.edit', [$user->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('users.delete', [$user->id]) !!}" onclick="return confirm('Are you sure wants to delete this User?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
