<div class="container">
    <table class="dashboard">
        <thead class="dashboard-header">
            <tr>
                <th>No</th>
                <th>Patient Name</th>
                <th>Patient Number</th>
                <th>Time Registered</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item['patient_id'] }}</td>
                <td>{{ $item['queue_number'] }}</td>
                <td>{{ $item['id'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
