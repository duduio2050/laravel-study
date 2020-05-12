<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function group()
    {
        $groups = Group::paginate();

        return view('group.group', compact('groups'));
    }

    public function groupRead($id)
    {
        $group = Group::find($id);

        return view('group.read', compact('group'));
    }

    public function groupCreate()
    {
        return view('group.create');
    }

    public function groupCreateInsert(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $group = new Group();

        $group->name = $request->name;

        $group->site = $request->site;

        $group->save();

        return redirect()->route('group');
    }

    public function groupUpdate($id)
    {
        $group = Group::find($id);

        return view('group.update', compact('group'));
    }

    public function groupUpdateInsert(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $group = Group::find($id);

        $group->name = $request->get('name');

        $group->site = $request->get('site');

        $group->save();

        return redirect()->route('group_read', ['id' => $group->id]);
    }

    public function groupDelete($id)
    {
        $group = Group::find($id);

        $group->delete();

        return redirect()->route('group');
    }

    public function groupAdmin()
    {
        $users = User::paginate();

        return view('group.admin', compact('users'));
    }

    public function groupMember()
    {
        $users = User::with('group')->paginate();

        $groups = Group::get();

        return view('group.member', compact('users', 'groups'));
    }

    public function groupMemberInsert(Request $request)
    {
        $requestAll = $request->all();

        foreach ($requestAll as $index => $item) {
            if (starts_with($index, 'user_id')) {
                $member = Member::where('user_id', $item)->first();
                if ($member) {
                    $changemember = $member;
                    $changemember->group_id = $request->get('group_id');
                    $changemember->update();
                } else {
                    $newmember = new Member();
                    $newmember->group_id = $request->group_id;
                    $newmember->user_id = $item;
                    $newmember->main_admin = 0;
                    $newmember->search_admin = 0;
                    $newmember->save();

                }
            }

        }
        return redirect()->route('group_member');
    }

}
