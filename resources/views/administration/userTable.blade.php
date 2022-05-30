<div class="table-responsive">
    <table class="table" id="userTable">
        <thead>
            <tr>
                <th>User Code</th>
                <th>Employee Code</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->user_code }}</td>
                <td>{{ $user->employee_code }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="POST">
                        <div class='btn-group'>
                            <input type='hidden' value='DELETE'>
                            <a href="{{ route('user.show', [$user->id]) }}" class='btn btn-default btn-xs'>
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </a>
                            <a href="{{ route('user.edit', [$user->id]) }}" class='btn btn-default btn-xs'>
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <button type="submit"><i class="glyphicon glyphicon-trash"></i></button>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
