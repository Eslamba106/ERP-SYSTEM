@extends('layouts.admin')

@section('title')
الضبط العام
@endsection

@section('contentheader')
الضبط
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.AdminPanelSettings.index') }}">الضبط</a>
@endsection

@section('contentheaderactive')
عرض
@endsection


@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">بيانات الضبط العام</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (@isset($data) && !@empty($data))
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td class="width30">اسم الشركة</td>
                    <td>{{ $data->system_name }}</td>
                </tr>
                <tr>
                    <td class="width30">كود الشركة</td>
                    <td>{{ $data->com_code }}</td>
                </tr>
                <tr>
                    <td class="width30">حالة الشركة</td>
                    <td>@if ($data->active == 1) مفعل @else معطل @endif</td>
                </tr>
                <tr>
                    <td class="width30">عنوان الشركة</td>
                    <td>{{ $data->address }}</td>
                </tr>
                <tr>
                    <td class="width30">هاتف الشركة</td>
                    <td>{{ $data->phone }}</td>
                </tr>
                <tr>
                    <td class="width30">رسالة التنبية اعلي الشاشة للشركة</td>
                    <td> {{ $data->general_alert }}</td>
                </tr>
                <tr>
                    <td class="width30">لوجو الشركة</td>
                    <td>
                        <div class="image">
                            <img src="{{ asset('admin/uploads').'/'.$data->photo }}" alt="لوجو الشركة" class="custom_img">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="width30">تاريخ اخر تحديث</td>
                    <td>
                        @if ($data->updated_by > 0 and $data->updated_by != null)
                            @php
                                $data_time = new DateTime($data->updated_at);
                                $date = $data_time->format('Y-m-d');
                                $time = $data_time->format('H:i');
                                $newDate = date('A' , strtotime($time));
                                $newDateType = (($newDate == 'AM' ? "صباحا" : "مساء"));
                            @endphp
                            {{ $date  }}
                            {{ $time }}
                            {{ $newDateType }}
                            {{ $data->updated_by_admin }}
                        @else 
                        لا يوجد تحديث
                        @endif
                    </td>
                </tr>
                </thead>

              </table>
            @else
            <div class="alert alert-danger">عفوا لا توجد بيانات لعرضها !!</div>
            @endif

        </div>
      </div>
    </div>
</div>
@endsection
 