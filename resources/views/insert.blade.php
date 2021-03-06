<html>

<head>
    <title>Insert Contact Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1>Add New Contact</h1>


        <!-- <button class="btn  pull-right" onclick="/view">View</button> -->
        <a href='/view' style="text-align:center">View</a> @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif {!! Form::open(['route'=>'contactus.store']) !!}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('Name:') !!} {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>

        <div class="form-group {{ $errors->has('phonenumber') ? 'has-error' : '' }}">
            {!! Form::label('Phone:') !!} {!! Form::text('phonenumber', old('phonenumber'), ['class'=>'form-control', 'placeholder'=>'Enter Phone']) !!}
            <span class="text-danger">{{ $errors->first('phonenumber') }}</span>
        </div>

        <div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
            {!! Form::label('Mobile:') !!} {!! Form::text('mobile', old('mobile'), ['class'=>'form-control', 'placeholder'=>'Enter Mobile']) !!}
            <span class="text-danger">{{ $errors->first('mobile') }}</span>
        </div>

        <div class="form-group">
            <center><button class="btn btn-success">Save!</button></center>
        </div>

        {!! Form::close() !!}

    </div>

</body>

</html>