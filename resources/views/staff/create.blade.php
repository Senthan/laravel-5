{!! Form::open(['route' => 'staff.store', 'method' => 'POST']) !!}

{!! Form::label('name','Name:') !!}
{!! Form::text('name',null,['class' => 'form-control','foo']) !!}

<br>

{!! Form::label('phone','Phone:') !!}
{!! Form::text('phone',null,['class' => 'form-control','foo']) !!}

<br>

{!! Form::submit('Create') !!}

{!! Form::close() !!}
