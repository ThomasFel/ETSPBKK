<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('admin')->get();
        return view('pages.admin.list_news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = User::get();
        return view('pages.admin.list_news_create', compact('admins'));
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
            'title' => 'required|string',
            'body' => 'required',
            'admin_id' => 'required|exists:users,id',
            'photo' => 'required'
        ]);

        try {
            if ($request->hasFile('photo')) {
                $photo_name = $request->file('photo')->getClientOriginalName();
                $destination = base_path() . '/public/photos';
                $request->file('photo')->move($destination, $photo_name);
            }

            $news = News::create([
                'title' => $request->title,
                'body' => $request->body,
                'slug' => Str::slug($request->title, '-'),
                'admin_id' => $request->admin_id,
                'photo' => $photo_name
            ]);
    
            return redirect()->back()->with(['success' => "Posted!"]);
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
        return route('news.show', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = User::get();
        $news = News::with('admin')->findorFail($id);
        return view('pages.admin.list_news_edit', compact('news', 'admins'));
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
            'title' => 'required|string',
            'body' => 'required',
            'admin_id' => 'required|exists:users,id',
            'photo' => 'required',
        ]);

        try {
            $news = News::where('id', $id)->first();
            
            if ($request->hasFile('photo')) {
                $destination = base_path() . '/public/photos';

                if ($news->photo != ''  && $news->photo != null) {
                    $file_old = $destination.'/'.$news->photo;
                    unlink($file_old);
                }
                
                $photo_name = $request->file('photo')->getClientOriginalName();
                $request->file('photo')->move($destination, $photo_name);
                
                $news->update(['photo' => $photo_name]);
            }

            $news->update([
                'title' => $request->title,
                'body' => $request->body,
                'slug' => Str::slug($request->title, '-'),
                'admin_id' => $request->admin_id,
                'photo' => $photo_name
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
        try {
            $news = News::findOrFail($id);
            File::delete('photos/'.$news->photo);
            $news->delete();
            
            return redirect(route('admin.news'))->with(['success' => "News Deletion Succeeded!"]);
        }
        
        catch(\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
