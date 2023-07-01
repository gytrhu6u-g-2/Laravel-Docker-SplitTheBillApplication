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

    /**
     * 内容入力ページへ遷移
     * @param id
     * @return view
     */
    public function showAmount($id) {
        $persons = Person::get();
        $person = Person::find($id);
        if (empty($person)) {
            return redirect(route('index.top'))->with('err_msg','idが見つかりませんでした。');
        }
        // $datas = Content::where('name', '=', $person['name'])->get();
        return view('index.enterAmount', ['person' => [$person], 'persons'=>$persons]);
    }


    /**
     * 内容追加処理
     * @param name
     * @return view
     */
    public function exeAdd($name) {
        $persons = Person::get();
        $PersonName = Person::where('name', $name)->first();
        $person = Person::find($PersonName->id);
        // dd($person);
        DB::beginTransaction();
        try {
            Content::create([
                'name'=>$PersonName->name,
                'content'=> "",
                'cost'=> 0,
            ]);
            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();
            abort(500);
        }
        $datas = Content::where('name', $name)->get();
        return view('index.enterAmount', ['person' => [$person], 'datas' => $datas, 'persons'=>$persons]);
    }

    /**
     * 内容削除処理
     * @param id
     * @return view
     */
    public function exeDeleteContent($id) {
        $content = Content::find($id);
        $persons = Person::get();
        $PersonName = Person::where('name', $content['name'])->first();
        $person = Person::find($PersonName->id);
        $datas = Content::where('name', $content['name'])->get();

        if (!empty($content)) {
            $content->delete();
            return redirect(route('amount', ['id' => $person->id, 'person' => [$person], 'datas' => $datas, 'persons'=>$persons]))->with('success_msg', '削除に成功しました。');
            // return view('index.enterAmount', ['person' => [$person], 'datas' => $datas, 'persons'=>$persons])->with('success_msg', '削除に成功しました。');
        }
        return redirect(route('amount', ['id' => $person->id, 'person' => [$person], 'datas' => $datas, 'persons'=>$persons]))->with('err_msg', '削除に失敗しました。');
    }

    /**
     * 内容追加処理
     * @param request
     * @return view
     */
    public function exeContentStore(Request $requests) {
        $datas = $requests->all();
        $persons = Person::get();
        // dd($datas);
        $person = Person::where('name',$datas['name'][0]['name'])->get();
        // dd($person[0]->id);
        // 配列の数を数える
    //    $count = count($datas['contents']);
        // 配列のキーを取り出す（1番目）
       $count = key($datas['contents']);
        // dd($count);
        DB::beginTransaction();
        try {
            for($i=0;$i<=$count;$i++){
                if(isset($datas['contents'][$i]['content'])) {
                    Content::create([
                        'name' => $datas['name'][0]['name'],
                        'content' => $datas['contents'][$i]['content'],
                        'cost' => (int) $datas['contents'][$i]['cost'],
                    ]);
                    DB::commit();
                }
            }
        }
        catch (\Exception $e) {
            abort('500');
            DB::rollBack();
        }
        // session()->flash('success_msg','データの登録完了しました');
        // return view('index.enterAmount',['person'=>$person, 'persons'=>$persons]);
        return redirect(route('amount', ['id' => $person[0]->id]))->with('success_msg','データの登録完了しました');
    }
}

