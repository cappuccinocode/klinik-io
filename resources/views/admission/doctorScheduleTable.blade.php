<div class="table-responsive">
    <table class="table" id="doctorScheduleTable">
        <thead>
            <tr>
                <th>Schedule Day</th>
                <th>Start</th>
                <th>End</th>
                <th>Action</th>
            </tr>
            <tr>
                <th>Schedule Day</th>
                <th>Start</th>
                <th>End</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($doctorSchedules as $doctorSchedule)
            <tr>
                <td>{{ $doctorSchedule->schedule_day }}</td>
                <td>{{ $doctorSchedule->schedule_start }}</td>
                <td>{{ $doctorSchedule->schedule_end }}</td>
                <td>
                    <form action="{{ route('doctorSchedule.destroy', ['id' => $doctorSchedule->id]) }}" method="POST">
                        <div class='btn-group'>
                            <input type='hidden' value='DELETE'>
                            <a href="{{ route('doctorSchedule.show', [$doctorSchedule->id]) }}" class='btn btn-primary btn-sm'>
                                {{ __('controls.button.grid.show') }}
                            </a>
                            <a href="{{ route('doctorSchedule.edit', [$doctorSchedule->id]) }}" class='btn btn-warning btn-sm'>
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
