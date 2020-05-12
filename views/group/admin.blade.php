@extends('layouts.app')

@section('content')


    <h2>그룹설정</h2>
    <br>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">


                <div class="panel-body">

                    <form method="post" action="" role="form"
                          class="form-horizontal form-groups-bordered">
                        @csrf
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">그룹명</label>

                            <div class="col-sm-5">
                                <input name="name" type="text"
                                       class="form-control" id="field-1"
                                       placeholder=""
                                       value="">

                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">사이트</label>

                            <div class="col-sm-5">
                                <input name="email" type="text" class="form-control" id="field-1" placeholder=""
                                       readonly=""
                                       value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">관리자</label>

                            <div class="col-sm-5">
                                <select name="searchYear" id="searchYear" onchange="펑션명()">
                                    @foreach($users as $user)
                                    <option value="2017">{{ $user->name }}  {{ $user->email }}</option>
                                        @endforeach
                                </select>

                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                            </div>
                        </div>

@endsection
