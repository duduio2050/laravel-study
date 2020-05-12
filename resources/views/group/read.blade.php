@extends('layouts.app')

@section('content')

    <h3>
        그룹
    </h3>

    <br/>
    <div class="row">
        <div class="col-md-12">
            <div data-collapsed="0" class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>{{ $group->name }}</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <h4>그룹명</h4>
                    <br>
                    <h3>{{ $group->name }}</h3>
                </div>
                <div class="panel-body">
                    <h4>그룹 사이트</h4>
                    <br>
                    <h3>{{ $group->site }}</h3>
                </div>
                <div class="panel-body">
                    <h4>그룹 생성일</h4>
                    <br>
                    <h3>{{ $group->created_at }}</h3>
                </div>
            </div>
        </div>
    </div>

    <p style="position:relative;text-align: right" class="input-group-btn">
        <a href="{{ route('group') }}">
            <button class="btn btn-primary"
                    type="submit">목록
            </button>
        </a>
        <a href="{{ route('group_update',['id'=>$group->id]) }}">
            <button class="btn btn-primary"
                    type="submit">수정
            </button>
        </a>
        <a href="{{ route('group_delete',['id'=>$group->id]) }}">
            <button class="btn btn-primary"
                    type="submit">삭제
            </button>
        </a>
    </p>




@endsection