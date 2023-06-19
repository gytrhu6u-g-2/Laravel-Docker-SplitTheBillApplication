<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Content;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\RedirectResponse;

use function PHPUnit\Framework\isNull;

class SpritTheBill extends Controller
{
    /**
     * トップ画面を表示する
     * @return view
     */
    public function showTop() {        
        $persons = Person::get();
        // dd($persons);
        return view('index.top', ['persons' => $persons]);
    }


    /**
     * 追加ボタン後の処理
     * @param request
     * @return view
     */
    public function exeStore(Request $request) {

        $request->validate([
            'name' => 'required',
        ]);

        $person = $request->all();
        DB::beginTransaction();
        try {
            Person::create($person);
            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();
            abort(500);
        }
        session()->flash('success_msg', '追加完了しました。');
        return redirect(route('top'));
    }
}

