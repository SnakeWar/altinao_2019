<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Edit a Team</h2><br  />
    <form method="post" action="{{action('TeamController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" value="{{$team->nome}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="sigla">Sigla</label>
                <input type="text" class="form-control" name="sigla" value="{{$team->sigla}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-2" style="margin-top:0px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">UPDATE</button>
            </div>
            <div class="form-group col-md-2" style="margin-top:0px">
                <a href="{{URL::to('teams')}}" class="btn btn-danger" style="margin-left:38px">B A C K</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>