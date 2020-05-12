@extends('layouts.app')

@section('content')















    <h3>
        그룹
    </h3>

    <br/>

    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered responsive">
                @if($groups->isEmpty())
                    <td class="text-center" colspan="9">데이터가 없습니다.</td>
                @endif
                <thead>
                <tr>
                    <th width="5%" class="text-center">id</th>
                    <th width="20%" class="text-center">그룹명</th>
                    <th width="20%" class="text-center">그룹 사이트</th>
                    <th width="10%" class="text-center">그룹 생성일</th>
                </tr>
                </thead>
                @foreach($groups as $group)
                    <tbody>

                    <tr>
                        <td class="text-center"><a
                                    href="{{ route('group_read', ['id'=>$group->id]) }}">{{ $group->id }}</a>
                        </td>
                        <td class="text-center"><a
                                    href="{{ route('group_read', ['id'=>$group->id]) }}">{{ $group->name }}</a>
                        </td>
                        <td class="text-center"><a
                                    href="{{ route('group_read', ['id'=>$group->id]) }}">{{ $group->site }}</a>
                        </td>
                        <td class="text-center"><a
                                    href="{{ route('group_read', ['id'=>$group->id]) }}">{{ $group->created_at }}</a>

                        </td>


                    </tr>
                    @endforeach


                    </tbody>

            </table>
            <div style="position:relative; text-align: right" class="input-group-btn">
                <a href="{{ route('group_create') }}">
                    <button class="btn btn-primary"
                            type="submit">새 그룹만들기
                    </button>
                </a>
            </div>
        </div>

    </div>




@endsection