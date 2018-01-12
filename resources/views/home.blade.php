@extends('app')

@section('content')
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h2 class="panel-title">Panel of matrices</h2>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <a href="#" class="list-group-item active ">
                        OIE <br>
                        IIX<br>
                        EXE
                    </a>
                    <a href="#" class="list-group-item">EIOIEIOEIO</a>
                    <a href="#" class="list-group-item">
                        EAEAE <br>
                        AIIIA <br>
                        EIOIE <br>
                        AIIIA <br>
                        EAEAE <br>
                    </a>
                </div>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h2 class="panel-title">Word to search and ocurrence</h2>
            </div>
            <div class="panel-body">
                <label for="word">Word to search...</label>
                <input class="form-control" id="word" type="text" placeholder="OIE">
                <label for="ocurrence">Ocurrence</label>
                <input class="form-control" id="ocurrence" type="text" readonly>
            </div>
        </div>
    </div><!-- /.container -->
@endsection