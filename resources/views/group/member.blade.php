@extends('layouts.app')

@section('content')















    <div>
        <h3>
            그룹
        </h3>

    </div>


    <form action="{{ route('group_member_insert') }}" method="post" class="form-horizontal form-groups-bordered">

        @csrf
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title">
                            그룹 지정
                        </div>

                        <div class="panel-options">

                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>

                            <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                        </div>
                    </div>

                    <div class="panel-body" style="padding-bottom: 0px">


                        <div class="form-group">
                            <div class="input-group">
                                <label class="col-sm-3 control-label" style="padding-top:0px;">그룹 지정</label>
                                <div class="col-sm-5">
                                    <select name="group_id" class="selectboxit visible" style="width: 30%;">
                                        <option>그룹명</option>
                                        @foreach($groups as $group)
                                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-blue">
                                    그룹 지정
                                </button>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">

                <table class="table table-bordered responsive">
                    @if($users->isEmpty())
                        <td class="text-center" colspan="9">데이터가 없습니다.</td>
                    @endif
                    <thead>
                    <tr>
                        <th width="3%" class="text-center"></th>
                        <th width="5%" class="text-center">ID</th>
                        <th width="5%" class="text-center">이메일</th>
                        <th width="20%" class="text-center">이름</th>
                        <th width="20%" class="text-center">현재 속한 그룹명</th>
                        <th width="10%" class="text-center">가입일</th>
                    </tr>
                    </thead>
                    @foreach($users as $user)
                        <tbody>

                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name="user_id{{ $user->id }}" value="{{ $user->id }}">
                            </td>
                            <td class="text-center">{{ $user->id }}
                            </td>

                            <td class="text-center">{{ $user->email }}
                            </td>
                            <td class="text-center">{{ $user->name }}
                            </td>
                            <td class="text-center">@if($user->group->first() != null){{ $user->group->first()->name }} @endif
                            </td>
                            <td class="text-center">{{ $user->created_at }}

                            </td>


                        </tr>
                        @endforeach


                        </tbody>

                </table>
                <div class="col-md-12 text-center">
                    {!! $users->render() !!}
                </div>
            </div>

        </div>

    </form>



@endsection