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
        return redirect(route('top'));
    }

    /**
     * 削除機能
     * @param id
     * @return view
     */
    public function exeDelete($id) {
        $person = Person::find($id);
        if (!empty($id)) {
            $person->delete();
            return redirect(route('top'))->with('success_msg','削除しました。');
        }
        return redirect(route('top'))->with('err_msg','削除失敗しました。');
    }
}

