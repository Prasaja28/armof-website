<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Koleksi;

class DownloadVerif
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  int  $id
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $id = $request->id;
        $detailKoleksi = Koleksi::where('id', $id)->get();
        if (Auth::guard('customer')->check()) {
            return redirect()->route('downloadPDF', $detailKoleksi->id);
        } else {
            return redirect('/koleksi');
        }
        return $next($request);
    }
}
