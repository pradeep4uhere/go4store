@extends('prssystem.layouts.list')
@section('content')
    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Product CSV Import</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('import_parse') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                                <label for="csv_file" class="col-md-4 control-label">CSV file to import</label>

                                <div class="col-md-6">
                                    <input id="csv_file" type="file" class="form-control" name="csv_file" required>

                                    @if ($errors->has('csv_file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('csv_file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                            <input type="checkbox" name="header" checked>
                                    </div>
                                    <div class="checkbox">
                                            &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-download"></i><a href="{{'https://www.go4shop.online/public/files/product_import/so_products.csv'}}">Download Sample Files</a>
                                    </div>
                                    <div class="checkbox">
                                            Your ID is: {{Auth::user()->id}} / Update Created By Column
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Parse CSV
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
