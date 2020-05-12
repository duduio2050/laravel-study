![스크린샷-2020-05-12-오후-6 01 30](https://user-images.githubusercontent.com/52492230/81666452-042b7080-947d-11ea-8580-56e74bbc700d.png)

@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        그룹 생성
                    </div>

                    <div class="panel-options">

                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>

                        <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                    </div>
                </div>

                <div class="panel-body">

                    <form action="{{ route('group_create_insert') }}" method="post"
                          class="form-horizontal form-groups-bordered">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <label class="col-sm-3 control-label">그룹명</label>

                                <div class="col-sm-5">


                                    <input name="name" id="category" placeholder=""
                                           type="text"
                                           class="form-control">


                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="col-sm-3 control-label">그룹 사이트</label>

                                <div class="col-sm-5">


                                    <input name="site" id="category" placeholder=""
                                           type="text"
                                           class="form-control">


                                </div>
                            </div>
                        </div>



                        <div class="form-group">

                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-blue">작성</button>
                            </div>
                        </div>

                    </form>


                </div>

            </div>
        </div>
    </div>

@endsection
