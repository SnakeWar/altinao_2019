<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="container">
    <h2>Edit a Player</h2><br  />
    <form method="post" action="{{action('GameController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Data</label>
                <input type="text" class="form-control" data-date-format="dd/mm/yy" id="datepicker" value="{{$game->data}}" name="data">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label >Placar Casa</label>
                <input type="text" class="form-control" name="placar_casa" value="{{$game->placar_casa}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label >Placa Visitante</label>
                <input type="text" class="form-control" name="placar_visitante" value="{{$game->placar_visitante}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable >Time Casa</lable>
                <select class="form-control" multiple id="exampleFormControlSelect2" style="margin-top:5px;" name="time_casa">
                    @foreach($teams as $team)
                        <option value="{{$team['id']}}" @if($team['id']==$game->teams_casa) selected @endif>{{$team['nome']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable >Time Visitante</lable>
                <select class="form-control" multiple id="exampleFormControlSelect2" style="margin-top:5px" name="time_visitante">
                    @foreach($teams as $team)
                        <option value="{{$team['id']}}" @if($team['id']==$game->teams_visitante) selected @endif>{{$team['nome']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-2" style="margin-top:0px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">UPDATE</button>
            </div>
            <div class="form-group col-md-2" style="margin-top:0px">
                <a href="{{URL::to('games')}}" class="btn btn-danger" style="margin-left:38px">BACK</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy'
    });
</script>
</body>
</html>