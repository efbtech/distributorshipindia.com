<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Admin\MediaServiceInterface;
use Session;

class AdminMediaController extends Controller
{
    public function __construct(MediaServiceInterface $MediaServiceInterface) {
        $this->MediaServiceInterface = $MediaServiceInterface;
        $this->middleware('admin');
    }

    public function mediaPhotoList(Request $request) {
        $media = $this->MediaServiceInterface->photoList($request->search);
        return view('admin.media-photo',compact('media'));
    }

    public function mediaVideoList(Request $request) {
        $media = $this->MediaServiceInterface->videoList($request->search);
        return view('admin.media-video',compact('media'));
    }

    public function mediaNewsAdd() {
        return view('admin.add-news');
    }

    public function newsEdit($id) {
        $singleNews = $this->MediaServiceInterface->singleRecord($id);
        return view('admin.add-news',compact('singleNews'));
    }
    
    public function mediaNewsList(Request $request) {
        $news = $this->MediaServiceInterface->newsList($request->search);
        return view('admin.media-news',compact('news'));
    }
    
    public function mediaNewsSubmit(Request $request) {
        if ($request->news_edit != '') {
            $this->validate($request, [
                'media_name' => 'required',
                'media_path' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
                'media_news' => 'required',
                'media_meta_desc' => 'required',
            ],[
                'media_name.required' => 'Name is required',
                'media_news.required' => 'News Description is required',
                'media_meta_desc.required' => 'News Meta Description is required',
            ]);
            Session::flash('savenews','News '.$request->media_name.' is successfully updated!');
            $this->MediaServiceInterface->mediaNewsEdit($request->all(),$request->news_edit);
        } else {
            $this->validate($request, [
                'media_name' => 'required',
                'media_path' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
                'media_news' => 'required',
                'media_meta_desc' => 'required',
            ],[
                'media_name.required' => 'News Title is required',
                'media_path.required' => 'News Image is required',
                'media_news.required' => 'News Description is required',
                'media_meta_desc.required' => 'News Meta Description is required',
            ]);
            Session::flash('savenews','News '.$request->media_name.' is successfully added!');
            $this->MediaServiceInterface->mediaNewsStore($request->all());
        }
        return redirect('admin/media-news-list');
    }
    
    public function mediaPhotoUpload(Request $request) {
        if ($request->media_edit != '') {
            $this->validate($request, [
                'media_name' => 'required',
                'media_path' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
            ],[
                'media_name.required' => 'Name is required',
            ]);
            Session::flash('media','Media '.$request->media_name.' is successfully updated!');
            $this->MediaServiceInterface->photoUploadEdit($request->all(),$request->media_edit);
        } else {
            $this->validate($request, [
                'media_name' => 'required',
                'media_path' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
            ],[
                'media_name.required' => 'Name is required',
                'media_path.required' => 'Image is required'
            ]);
            Session::flash('media','Media '.$request->media_name.' is successfully added!');
            $this->MediaServiceInterface->photoUpload($request->all());
        }
        return redirect('admin/media-photo-list');
    }
    
    public function mediaVideoUpload(Request $request) {
        if ($request->media_edit != '') {
            $this->validate($request, [
                'media_name' => 'required',
                'media_path' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
            ],[
                'media_name.required' => 'Name is required',
            ]);
            Session::flash('media','Media '.$request->media_name.' is successfully updated!');
            $this->MediaServiceInterface->videoUploadEdit($request->all(),$request->media_edit);
        } else {
            $this->validate($request, [
                'media_name' => 'required',
                'media_path_vid' => 'required',
                'media_path' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
            ],[
                'media_name.required' => 'Name is required',
                'media_path.required' => 'Image is required'
            ]);
            Session::flash('media','Media '.$request->media_name.' is successfully added!');
            $this->MediaServiceInterface->videoUpload($request->all());
        }
        return redirect('admin/media-video-list');
    }
    
    public function singleRecord(Request $request) {
        return $this->MediaServiceInterface->singleRecord($request->id);
    }
}