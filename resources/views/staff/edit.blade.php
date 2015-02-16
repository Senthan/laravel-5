<h2>
    <a href="/staff/edit/{{$staff->id}}">
        {{$staff -> name}}
    </a>
</h2>

{!! Form::model($staff, ['route' => ['staff.update', $staff->id], 'method' => 'PATCH']) !!}
{{--{!! Form::open() !!}--}}

Name {!! Form::text('name', null) !!} <br>
Phone {!! Form::text('phone', null) !!} <br>

<button type="submit">Update</button>

{!! Form::close() !!}
