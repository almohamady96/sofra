@extends('admin.layouts.main',[
								'page_header'		=> 'المدن',
								'page_description'	=> 'عرض المدن'
								])
@section('content')
    <div class="box box-primary">
        <div class="box-header">
            @include('flash::message')
            <div class="pull-right">
                <a href="{{url('admin/city/create')}}" class="btn btn-primary">
                    <i class="fa fa-plus"></i> مدينة جديدة
                </a>
                {{--<a href="{{url(route('city.create'))}}" class="btn btn-danger"><i class="fa fa-plus"> &nbsp New City</i></a>
                            <a href="trashed" class="btn btn-danger" style="float: right">Show Trashed value</a>--}}
            </div>
        </div>
        @if(!empty($cities))
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <th>#</th>
                    <th>اسم المدينة</th>
                    <th class="text-center">تعديل</th>
                    <th class="text-center">حذف</th>
                    </thead>
                    <tbody>
                    @php $count = 1; @endphp
                    @foreach($cities as $city)
                        <tr id="removable{{$city->id}}">
                            <td>{{$count}}</td>
                            <td>{{$city->name}}</td>
                            <td class="text-center"><a href="city/{{$city->id}}/edit" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a></td>
                            {{--<td ><a href="{{url(route('city.edit',$record->id))}}" class="btn btn-danger"><i class="fa fa-edit"></i></a></td>--}}
                            {{--<td class="text-center">
                                <button id="{{$city->id}}" data-token="{{ csrf_token() }}" data-route="{{URL::route('city.destroy',$city->id)}}"  type="button" class="destroy btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                            </td>--}}
                            <td class="text-center">
                                {!!Form::open([
                                  'action' => ['CityController@destroy',$city->id ],
                                  'method' => 'delete'
                                  ])!!}
                                <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash-o"></i></button>
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @php $count ++; @endphp
                    @endforeach
                    </tbody>
                </table>
            </div>
            {!! $cities->render() !!}
        @endif


    </div>
@stop