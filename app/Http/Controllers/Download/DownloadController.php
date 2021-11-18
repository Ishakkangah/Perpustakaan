<?php

namespace App\Http\Controllers\Download;

use App\Http\Controllers\Controller;
use App\Models\transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function Download_transaksi()
    {
        return view('transaksi.download_pdf', [
            'date' => Carbon::today(),
            'transaksi' => transaksi::latest()->get(),
        ]);
    }

}
