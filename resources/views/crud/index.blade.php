<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Insertdata</title>
    <link rel="stylesheet" href="C:\laragon\www\Laravel-InsertData\public\assets\bootstrap-3.1.1">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" class="margin-top:50">
                <h4>ADD VEW  RECORD | Laravel CRUD </h4>
                <hr>

                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success')}}
                </div>
                @endif

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail')}}
                </div>
                @endif

                <form action="add" method="POST">
                @csrf

                <div class="form-group">
                    <label for="">Id</label>
                    <input type="text" class="form-control" name="id" placeholder="Enter id" value="{{old('id')}}">
                    <span style="color:red">@error('id'){{ $message }} @enderror</span>
                </div>
                
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{old('name')}}">
                        <span style="color:red">@error('name'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Nrp</label>
                        <input type="text" class="form-control" name="nrp" placeholder="Enter nrp" value="{{ old('nrp') }}">
                        <span style="color:red">@error('nrp'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
                        <span style="color:red">@error('email'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>