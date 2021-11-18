<?php

namespace App\Http\Controllers;

use App\Models\{buku, member, status, transaksi};
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('transaksi.index', [
            'all_members' => member::get(),
            'all_books' => buku::get(),
            'all_transactions' => transaksi::get(),
            'transaksis' => transaksi::latest()->Paginate(10),
        ]);
    }

    public function create()
    {
        return view('transaksi.create', [
            'books' => buku::get(),
            'members' => member::get(),
            'statuss' => status::get(),
            'date' => Carbon::today(),
        ]);
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'buku_id' => 'required|string|max:100',
            'member_id' => 'required|string|max:100',
            'tanggal_kembali' => 'required|date',
            'status_id' => 'required|string|max:100',
        ]);
        $today = Carbon::today();
        transaksi::create([
            'buku_id' => $request->buku_id,
            'member_id' => $request->member_id,
            'tanggal_pinjam' => $today,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status_id' => $request->status_id,
        ]);

        return redirect('transaksi/index')->with('success', 'Transaksi was created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }
}
