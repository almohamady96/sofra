@extends('admin.layouts.main',[
                                'page_header'       => 'العروض',
                                'page_description'  => 'عرض جديد'
                                ])
@section('content')
    <!-- general form elements -->
    <div class="box box-primary">
        <!-- form start -->
        {!! Form::model($model,[
                                'action'=>'OrderController@store',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST',
                                'files'=>true
                                ])!!}

        <div class="box-body">

            @include('admin.orders.form')

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">حفظ</button>
            </div>

        </div>
        {!! Form::close()!!}

    </div><!-- /.box -->

@endsection