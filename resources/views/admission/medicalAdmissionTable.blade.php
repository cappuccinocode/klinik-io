<div class="table-responsive">
    <table class="table table-striped" id="medicalAdmissionTable">
        <thead>
            <tr>
                <th>Title</th>
                <th>Patient</th>
                <th>MR Number</th>
                <th>NIK</th>
                <th>Birth Date</th>
                <th>Blood Type</th>
                <th>BPJS</th>
                <th>Action</th>
            </tr>
            <tr>
                <th>Title</th>
                <th>Patient</th>
                <th>MR Number</th>
                <th>NIK</th>
                <th>Birth Date</th>
                <th>Blood Type</th>
                <th>BPJS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($patients as $patient)
            <tr>
                <td>{{ $patient->title }}</td>
                <td>{{ $patient->fullname }}</td>
                <td>{{ $patient->mr_number }}</td>
                <td>{{ $patient->nik }}</td>
                <td>{{ $patient->birth_date }}</td>
                <td>{{ $patient->blood_type }}</td>
                <td>{{ $patient->bpjs_number }}</td>
                <td>
                    <form action="{{ route('patient.destroy', ['id' => $patient->id]) }}" method="POST">
                        <div class='btn-group'>
                            <input type='hidden' value='DELETE'>
                            <a href="{{ route('patient.show', [$patient->id]) }}" class='btn btn-primary btn-sm'>
                                {{ __('controls.button.grid.show') }}
                            </a>
                            <a href="{{ route('patient.edit', [$patient->id]) }}" class='btn btn-warning btn-sm'>
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
