<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Models\BlogPost;
use App\Http\Requests\BlogPostUpdateRequest;
use App\Http\Requests\BlogPostCreateRequest;
use Illuminate\Support\Str;
use App\Repositories\BlogPostRepository;

/**
 * Управление категориями блога
 *
 * @package App\Http\Controllers\Blog\Admin
 */
class PostController extends BaseController
{
    /** @var BlogPostRepository */
    private $blogPostRepository;

    public function __construct()
    {
        parent::__construct();

        $this->blogPostRepository = app(BlogPostRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = $this->blogPostRepository->getAllWithPagenate();
        return view('blog.admin.posts.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new BlogPost();
        $PostList
            = $this->blogPostRepository->getForComboBox();

        return view('blog.admin.Post.edit',
            compact('item', 'PostList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogPostCreateRequest $request)
    {
        $data = $request->input();
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $item = new BlogPost($data);

        if ($item){
            return redirect()
                ->route('blog.admin.Post.edit', $item->id)
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }

        $item->save();
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
     * @param  BlogPostRepository $PostRepository
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->blogPostRepository->getEdit($id);
        if (empty($post)) {
            abort(404);
        }

        $postsList = $this->blogPostRepository->getForComboBox();

        return view('blog.admin.posts.edit', compact('post', 'postsList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogPostUpdateRequest $request, $id)
    {
        $data = $request->input();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $item = $this->blogPostRepository->getEdit($id);

        if (empty($item)){
            return back()
                ->withErrors(['msg' => "Запись ID = [{$id}] не найдена"])
                ->withInput();
        }

        if ($request->hasFile('img')) {
            $extensions= ['jpg', 'png', 'PNG', 'JPG', 'jpeg', 'JPEG'];
            if (in_array($request->file('img')->getClientOriginalExtension(), $extensions)) {
                $destinationPath = 'uploads/img/Post';
                $file = $request->file('img');
                $file_name = 'Post' . $id . 'logo.' . $file->getClientOriginalExtension();
                $file->move($destinationPath , $file_name);
                $data['img'] =  $file_name;
            } else {
                return back()
                    ->withErrors(['msg' => 'Расширение логотипа не поддерживается, допустимые форматы: jpg, jpeg, png.'])
                    ->withInput();
            }
        }

        $result = $item->update($data);
//            ->fill($data)
//            ->save();

        if ($result){
            return redirect()
                ->route('blog.admin.Post.edit', $item->id)
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
        $result = $this->blogPostRepository->getEdit($id);
        $result->delete();
        if ($result){
            return redirect()
                ->route('blog.admin.posts.index')
                ->with(['success' => 'Успешно удалено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка Удаления'])
                ->withInput();
        }
    }
}
