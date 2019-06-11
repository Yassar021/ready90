<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider as S;
use App\Berita as B;
use App\Partner as P;
use App\Karir as K;
use App\Automotif as A;
use App\Trade as Tr;
use App\Mining as Mn;
use App\Property as Pr;
use App\TestDrive as TD;
use Session;
use App;

class KumalaController extends Controller
{
    public function index()
    {
        $slide = S::latest()->get();
        $berita = B::latest()->paginate(4);
        $partner = P::latest()->get();

        return view('inde')->withSlides($slide)->withBerita($berita)->withPartner($partner);
    }

    public function berita()
    {
        $berita = B::latest()->paginate(6);

        return view('listberita')->withBerita($berita);
    }

    public function karir()
    {
        $karir = K::latest()->paginate(6);

        return view('karir')->withKarir($karir);
    }

    public function otomotif()
    {

        return view('otomotif');
    }

    public function oto($oto)
    {

        if ($oto == 'masda' || $oto == 'wuling' || $oto == 'honda' || $oto == 'hyno' || $oto == 'mercedes') {
            $data = A::where('merek', $oto)->latest()->paginate(9);
            $nama = A::where('merek', $oto)->latest()->first();

            return view('list_otomotif')->withData($data)->withNama($nama);
        }

        return abort(404);
    }

    public function otom($id)
    {
        $data = A::findOrFail($id);

        return view('detail_otomotif')->withData($data);
    }

    public function beritaja($id)
    {
        $data = B::findOrFail($id);

        return view('detail_berita')->withData($data);
    }

    public function trading($id)
    {
        $data = Tr::findOrFail($id);

        return view('detail_trade')->withData($data);
    }

    public function trade()
    {
        $data = Tr::latest()->paginate(6);

        return view('trading')->withData($data);
    }
    
    public function min($id)
    {
        $data = Mn::findOrFail($id);

        return view('detail_min')->withData($data);
    }

    public function proper($id)
    {
        $data = Pr::findOrFail($id);

        return view('detail_proper')->withData($data);
    }

    public function mining()
    {
        $data = Mn::latest()->paginate(6);

        return view('mining')->withData($data);
    }

    public function property()
    {
        $data = Pr::latest()->paginate(6);

        return view('properti')->withData($data);
    }

    public function uji(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'nama' => 'required',
            'jk' => 'required',
            'hp' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'daerah' => 'required',
            'dealer' => 'required'
        ]);

        $data = new TD();
        $data->email = $request->email;
        $data->nama = $request->nama;
        $data->jk = $request->jk;
        $data->hp = $request->hp;
        $data->kota = $request->kota;
        $data->alamat = $request->alamat;
        $data->daerah = $request->daerah;
        $data->dealer = $request->dealer;
        $data->verify = 0;
        $data->save();

        return back()->with('success', 'Congratulation!');;
    }
}
