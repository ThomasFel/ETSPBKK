<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
        return view('pages.admin.list_news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.list_news_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:news,id',
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        try {
            $news = News::create([
                'id' => $request->id,
                'title' => $request->title,
                'description' => $request->description
            ]);
    
            return redirect()->back()->with(['success' => "News Creation Succeeded!"]);
        }
        
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('pages.admin.list_news_edit', compact('news'));
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
        $this->validate($request, [
            'id' => 'required|exists:news,id',
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        try {
            $news = News::where('id', $id)->first();

            $news->update([
                'id' => $request->id,
                'title' => $request->title,
                'description' => $request->description
            ]);

            $news->save();
    
            return redirect()->back()->with(['success' => "News Updated!"]);
        }
        
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
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
        $news = News::findOrFail($id);
        $news->delete();
        return redirect(route('admin.news'))->with(['success' => "News Deletion Succeeded!"]);
    }
}
