<?php

namespace App\Http\Controllers;

use App\Http\Requests\Member\MemberRequest;
use App\Models\buku;
use App\Models\jenis_kelamin;
use App\Models\kelas;
use App\Models\member;
use App\Models\transaksi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class MemberController extends Controller
{
    public function index()
    {   
        return view('member.index', [
            'members' => member::latest()->Paginate(10),
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'all_transactions' => transaksi::get(),
        ]);
    }

    public function create()
    {
        return view('member.create', [
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'all_transactions' => transaksi::get(),
            'jenis_kelamins' => jenis_kelamin::get(),
            'kelass' => kelas::get(),
            'member' => new member,
        ]);
    }

    public function store(MemberRequest $request)
    {
        $img = \DefaultProfileImage::create("thumbnail");
        Storage::put("profile.png", $img->encode());

        member::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'nim' => $request->nim,
            'jenis_kelamin_id' => $request->jenis_kelamin_id,
            'kelas_id' => $request->kelas_id,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'alamat' => $request->alamat,
            'thumbnail' => $request->file('thumbnail') ? $request->file('thumbnail')->store('images/member') : 'profile.png',
        ]);

        return redirect('member/index')->with('success', 'The new member was inserted ');
    }

    public function detail(member $member)
    {
        return view('member.detail', [
            'member' => $member,
            'jenis_kelamins' => jenis_kelamin::get(),
            'kelass' => kelas::get(),
        ]);
    }

    public function edit(member $member)
    {
        return view('member.edit',[
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'jenis_kelamins' => jenis_kelamin::get(),
            'all_transactions' => transaksi::get(),
            'kelass' => kelas::get(),
            'member' => $member,
        ]);
    }

    public function update(MemberRequest $request, member $member)
    {
        if($request->file('thumbnail'))
        {
            Storage::delete($member->thumbnail);
            $attr['thumbnail'] = $request->file('thumbnail')->store('images/member');
        } else {
            $attr['thumbnail'] = $member->thumbnail;
        }

        dd($member->nim);
        $member->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'nim' => $member->nim,
            'jenis_kelamin_id' => $request->jenis_kelamin_id,
            'kelas_id' => $request->kelas_id,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'alamat' => $request->alamat,
            'thumbnail' => $attr['thumbnail'],
        ]);

        return redirect('member/index')->with('success', 'Updated has successfully ');
   
    }

    public function delete(member $member)
    {
        Storage::delete($member->thumbnail);
        $member->delete();
        Alert::success('success', 'Member was deleted successfully');
        return redirect('member/index');
    }
}
