<div class="table-responsive">
    <table class="table table-striped" id="medicalRecordByPatientTable">
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
                    <div class='btn-group'>
                        <a href="{{ route('medicalRecord.show', [$patient->id]) }}" class='btn btn-primary btn-sm'>
                            {{ __('controls.button.grid.show') }}
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
