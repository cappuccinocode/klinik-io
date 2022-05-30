<div class="table-responsive">
    <table class="table" id="doctorTable">
        <thead>
            <tr>
                <th>Employee Code</th>
                <th>Doctor</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
            <tr>
                <th>Employee Code</th>
                <th>Doctor</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($doctors as $doctor)
            <tr>
                <td>{{ $doctor->employee_code }}</td>
                <td>{{ $doctor->fullname }}</td>
                <td>{{ $doctor->employee_type }}</td>
                <td>
                    <form action="{{ route('doctor.destroy', ['id' => $doctor->id]) }}" method="POST">
                        <div class='btn-group'>
                            <input type='hidden' value='DELETE'>
                            <a href="{{ route('doctor.show', [$doctor->id]) }}" class='btn btn-primary btn-sm'>
                                {{ __('controls.button.grid.show') }}
                            </a>
                            <a href="{{ route('doctor.edit', [$doctor->id]) }}" class='btn btn-warning btn-sm'>
                                {{ __('controls.button.grid.edit') }}
                            </a>
                            <button type="submit" class='btn btn-danger btn-sm'>
                                {{ __('controls.button.grid.delete') }}
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
