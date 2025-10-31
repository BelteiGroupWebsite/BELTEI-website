<div class="mt-4">

    <h6 class="mb-2 fw-bold text-danger">Missing Documents Report</h6>

    <p>
        Total Students: {{ $this->missing['total'] }} |
        Missing Profile: {{ $this->missing['count_profile'] }} |
        Missing Beltei: {{ $this->missing['count_beltei'] }} |
        Missing MoEY: {{ $this->missing['count_moey'] }}
    </p>

    <table class="table table-bordered table-sm">
        <thead class="table-warning">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>ID</th>
                <th>Missing</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->missing['rows'] as $i => $r)
            @php $s = $r['student']; @endphp
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $s->latin_name }} ({{ $s->khmer_name }})</td>
                <td>{{ $s->student_id }}</td>
                <td>
                    @if($r['missing_profile']) <span class="badge bg-danger">Profile</span> @endif
                    @if($r['missing_beltei'])  <span class="badge bg-warning text-dark">Beltei</span> @endif
                    @if($r['missing_moey'])    <span class="badge bg-info">MoEY</span> @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
