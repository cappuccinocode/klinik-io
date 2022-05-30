<div class="table-responsive">
    <table class="table table-striped" id="medicalRecordTable">
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
        @foreach ($medicalRecords as $medicalrecord)
            <tr>
                <td>{{ $medicalrecord->title }}</td>
                <td>{{ $medicalrecord->fullname }}</td>
                <td>{{ $medicalrecord->mr_number }}</td>
                <td>{{ $medicalrecord->nik }}</td>
                <td>{{ $medicalrecord->birth_date }}</td>
                <td>{{ $medicalrecord->blood_type }}</td>
                <td>{{ $medicalrecord->bpjs_number }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('medicalRecord.show', [$medicalrecord->id]) }}" class='btn btn-primary btn-sm'>
                            {{ __('controls.button.grid.show') }}
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
