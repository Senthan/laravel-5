

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    </thead>

    <tbody>
    @foreach($staffs as $staff)
        <tr>
            <td>{!! $staff->name !!}</td>
            <td>{!! $staff->phone !!}</td>
            <td>{!! link_to_route('staff.edit','Edit', [$staff->id]) !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{--<a href="/staff/create">Go_to_create</a>--}}
{!! link_to_route('staff.create','Go_to_create') !!}