<h2>
    <a href="/staff/edit/{{$staff->id}}">
        {{$staff -> name}}
    </a>
</h2>

{!! Form::model($staff, ['route' => ['staff.destroy', $staff->id], 'method' => 'DELETE']) !!}
{{--{!! Form::open() !!}--}}

Are you sure to delete this staff?

<button type="submit">Delete</button>

{!! Form::close() !!}
