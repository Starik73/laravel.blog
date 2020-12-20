<?php

namespace App\Http\Controllers\Blog\Admin;


use App\Models\BlogCategory;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = BlogCategory::paginate(6);
        return view('blog.admin.categories.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(__METHOD__);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(__METHOD__);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = BlogCategory::findOrFail($id);
        $categoryList = BlogCategory::all();

        return view('blog.admin.categories.edit', compact('item', 'categoryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = BlogCategory::find($id);
        if (empty($item)){
            return back()
                ->withErrors(['msg' => "Запись ID = [{$id}] не найдена"])
                ->withInput();
        }

        $data = $request->input();

        if ($request->hasFile('img')) {
            $extensions= ['jpg', 'png', 'PNG', 'JPG', 'jpeg', 'JPEG'];
            if (in_array($request->file('img')->getClientOriginalExtension(), $extensions)) {
                $destinationPath = 'uploads/img/categories';
                $file = $request->file('img');
                $file_name = 'category' . $id . 'logo.' . $file->getClientOriginalExtension();
                $file->move($destinationPath , $file_name);
                $data['img'] =  $file_name;
            } else {
                return back()
                    ->withErrors(['msg' => 'Расширение логотипа не поддерживается, допустимые форматы: jpg, jpeg, png.'])
                    ->withInput();
            }
        }

        $result = $item
            ->fill($data)
            ->save();
        if ($result){
            return redirect()
                ->route('blog.admin.categories.edit', $item->id)
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd(__METHOD__);
    }
}
