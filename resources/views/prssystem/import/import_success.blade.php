@extends('prssystem.layouts.list')

@section('content')
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading alert-success">CSV Import</div>
                    <div class="panel-body">
                       <b>( {{$count}} )</b> Product Data imported successfully. <a href="{{route('allproduct')}}">Click Here</a> for All Products List
                       <?php if(!empty($error)){ ?>
                        <?php foreach($error as $item){ ?>
                            <div class="alert alert-danger">{{json_encode($item)}}</div>
                        <?php } ?>
                       <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
