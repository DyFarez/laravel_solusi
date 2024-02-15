<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use Illuminate\Http\RedirectResponse;

class MemberController extends Controller
{
    public function index(){
        $members = new Members();

        $all_member = $members->all();
        // $all_member = Members::with('branches')->get(); 
        // dd($all_member);

        return view('member.member', ["members"=>$all_member]);
    }

    public function add(){
        return view('member.add');
    }

    public function store(Request $request)
    {
//         dd($request);
//         $this->validate($request, [
//             'cabang' => 'required|exists: branches,id',
//             'name' => 'required|string|max:100',
//             'phone_number' => 'required|string|min:8|max:16',
//             'photo' => 'required|image|mimes:jpeg, jpg,png|max: 2048',
//         ]);
// 
        // $image = request('file');
        // $image->storeAs('public/posts', $image->hashName());

        Members::create([
            'name' => request('name'),
            'branch_id' => request('branch_id'),
            'phone_number' => request('phone_number'),
            'photo' => request('file')
        ]);
        
        $members = new Members();

        $all_member = $members->all();
        return redirect()->route('member');        
    }

    public function destroy($id){

        Members::find($id)->delete();
        

        // return view('member.member', ["members" => Members::all()]);

        return redirect()->route('member');
    }
}
