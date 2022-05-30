<div class="table-responsive">
    <table class="table" id="tariffTable">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Tariff Patient</th>
                <th>Doctor Fee</th>
                <th>Action</th>
            </tr>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Tariff Patient</th>
                <th>Doctor Fee</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($tariffs as $tariff)
            <tr>
                <td>{{ $tariff->tariff_code }}</td>
                <td>{{ $tariff->tariff_name }}</td>
                <td>{{ $tariff->tariff_patient }}</td>
                <td>{{ $tariff->doctor_fee }}</td>
                <td>
                    <form action="{{ route('tariff.destroy', ['id' => $tariff->id]) }}" method="POST">
                        <div class='btn-group'>
                            <input type='hidden' value='DELETE'>
                            <a href="{{ route('tariff.show', [$tariff->id]) }}" class='btn btn-primary btn-sm'>
                                {{ __('controls.button.grid.show') }}
                            </a>
                            <a href="{{ route('tariff.edit', [$tariff->id]) }}" class='btn btn-warning btn-sm'>
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
