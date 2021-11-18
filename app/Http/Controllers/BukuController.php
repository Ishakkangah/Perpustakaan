<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\BookRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\buku;
use App\Models\Category;
use App\Models\member;
use App\Models\transaksi;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index(Request $request)
    {   
        $data = $request->search;

        if($request->search)
        {
            $data = $request->search;
            return view('buku.index', [
                'books' => buku::latest()->where("judul", "LIKE", "%$data%")->Paginate(15),
                'all_books' => buku::get(),
                'all_members' => member::get(),
                'all_transactions' => transaksi::get(),
                'categories' => Category::get(),
            ]);
        } else {
            return view('buku.index', [
                'books' => buku::latest()->Paginate(15),
                'all_books' => buku::get(),
                'all_members' => member::get(),
                'all_transactions' => transaksi::get(),
                'categories' => Category::get(),
            ]);
        }


    }

    public function create()
    {
        return view('buku.create', [
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'all_transactions' => transaksi::get(),
            'book' => new buku,
            'categories' => Category::get(),
            'tanggal_input' => Carbon::today(),
        ]);
    }

    public function store(BookRequest $request)
    {
        $img = \DefaultProfileImage::create("thumbnail");
        Storage::put("profile.png", $img->encode());

        $tanggal_input = Carbon::today();
        buku::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'pengarang' => $request->pengarang,
            'tahun_penerbit' => $request->tahun_penerbit,
            'penerbit' => $request->penerbit,
            'ISBN' => $request->ISBN,
            'category_id' => $request->category_id,
            'jumlah_buku' => $request->jumlah_buku,
            'lokasi' => $request->lokasi,
            'asal_buku' => $request->asal_buku,
            'jumlah_buku_per_rak' => $request->jumlah_buku_per_rak,
            'tanggal_input' => $tanggal_input,
            'thumbnail' => $request->file('thumbnail') ? $request->file('thumbnail')->store('images/book') : 'profile.png',
        ]);

        return redirect('/buku/index')->with('success', 'The book has been inserted');
    }

    public function delete(buku $buku)
    {
        Storage::delete($buku->thumbnail);
        $buku->delete();
        Alert::success('success', 'The book has been deleted');

        return redirect('/buku/index');
    }

    public function detail(buku $buku)
    {
        return view('buku.detail', [
            'book' => $buku,
        ]);
    }

    public function edit(buku $buku)
    {
        return view('buku.edit', [
            'book' => $buku,
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'all_transactions' => transaksi::get(),
            'categories' => Category::get(),
            'tanggal_input' => Carbon::today(),
        ]);
    }

    
    public function update(BookRequest $request, buku $buku)
    {
        if($request->file('thumbnail'))
        {
            Storage::delete($buku->thumbnail);
            $attr['thumbnail'] = $request->file('thumbnail')->store('images/book');
        } else {
            $attr['thumbnail'] = $buku->thumbnail;
        }

        $buku->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'pengarang' => $request->pengarang,
            'tahun_penerbit' => $request->tahun_penerbit,
            'penerbit' => $request->penerbit,
            'ISBN' => $request->ISBN,
            'category_id' => $request->category_id,
            'jumlah_buku' => $request->jumlah_buku,
            'lokasi' => $request->lokasi,
            'asal_buku' => $request->asal_buku,
            'jumlah_buku_per_rak' => $request->jumlah_buku_per_rak,
            'tanggal_input' => Carbon::today(),
            'thumbnail' => $attr['thumbnail'],
        ]);

        return redirect('/buku/index')->with('success', 'The book has been updated');
    }

}
