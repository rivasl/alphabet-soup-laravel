@extends('app')

@section('content')
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h2 class="panel-title">Panel of matrices</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked admin-menu">
                            <li class="active"><a href="#" data-target-id="3 3 OIE IIX EXE"><i class="fa fa-home fa-fw"></i>OIE<br>IIX<br>EXE</a></li>
                            <li><a href="#" data-target-id="1 10 EIOIEIOEIO"><i class="fa fa-list-alt fa-fw"></i>EIOIEIOEIO</a></li>
                            <li><a href="#" data-target-id="5 5 EAEAE AIIIA EIOIE AIIIA EAEAE"><i class="fa fa-file-o fa-fw"></i>EAEAE<br>AIIIA<br>EIOIE<br>AIIIA<br>EAEAE</a></li>
                        </ul>
                    </div>
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