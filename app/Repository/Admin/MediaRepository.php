<?php

namespace App\Repository\Admin;

use Illuminate\Support\Str;
use App\Interfaces\Admin\MediaInterface;
use App\Services\Images\ImageServices;
use App\Models\Admin\AdminMediaModel;

class MediaRepository implements MediaInterface
{
    private $imageService;
    
    public function __construct(ImageServices $imageService ) {
        $this->imageService = $imageService;
    }

    /*
    |--------------------------------------------------------------------------
    | Media images listing
    |--------------------------------------------------------------------------
    */
    public function photoList($search) {
        if ($search != '') {
            $media = AdminMediaModel::select('*')->where('apr_media.media_name', 'like', '%'.$search.'%')->where('media_type','image')->orderBy('created_at', 'desc')->paginate(6);
            $media->appends(['search' => $search]);
        } else {
            $media = AdminMediaModel::select('*')->where('media_type','image')->orderBy('created_at', 'desc')->paginate(6);
        }
        return $media;
    }

    /*
    |--------------------------------------------------------------------------
    | Media videos listing
    |--------------------------------------------------------------------------
    */
    public function videoList($search) {
        if ($search != '') {
            $media = AdminMediaModel::select('*')->where('apr_media.media_name', 'like', '%'.$search.'%')->where('media_type','video')->orderBy('created_at', 'desc')->paginate(6);
            $media->appends(['search' => $search]);
        } else {
            $media = AdminMediaModel::select('*')->where('media_type','video')->orderBy('created_at', 'desc')->paginate(6);
        }
        return $media;
    }
    
    /*
    |--------------------------------------------------------------------------
    | Image uploading
    |--------------------------------------------------------------------------
    */
    public function photoUpload($request) {
        $media = new AdminMediaModel;
        $media->media_name = $request['media_name'];
        $media->media_type = $request['media_type'];
        $media_path = $request['media_path'];
        $imageUploadPath = 'assets/admin/media/photos';
        $newImageName = str_replace(' ', '_', $request['media_name']);
        $uploadedImageName = $this->imageService->uploadImageAdmin($media_path,$imageUploadPath,$newImageName);
        $uploadedImagePathMedia = $imageUploadPath.'/'.$uploadedImageName;
        $media->media_path = $uploadedImagePathMedia;
        $media->save();
    }

    /*
    |--------------------------------------------------------------------------
    | Images update
    |--------------------------------------------------------------------------
    */
    public function photoUploadEdit($request,$id) {
        if (isset($request['media_path'])) {
            if ($request['media_path'] != '') {
                $media_path = $request['media_path'];
                $imageUploadPath = 'assets/admin/media/photos';
                $newImageName = str_replace(' ', '_', $request['media_name']);
                $uploadedImageName = $this->imageService->uploadImageAdmin($media_path,$imageUploadPath,$newImageName);
                $uploadedImagePathMedia = $imageUploadPath.'/'.$uploadedImageName;
                $media_image = $uploadedImagePathMedia;
            }
        } else {
            $existMediaImg = AdminMediaModel::where('id',$id)->select('media_path')->first();
            $media_image = $existMediaImg->media_path;
        }
        $mediaArr = Array(
            'media_name' => $request['media_name'],
            'media_path' => $media_image
        );
        AdminMediaModel::where('id',$id)->update($mediaArr);
    }

    /*
    |--------------------------------------------------------------------------
    | Video uploading
    |--------------------------------------------------------------------------
    */
    public function videoUpload($request) {
        $media = new AdminMediaModel;
        $media->media_name = $request['media_name'];
        $media->media_type = $request['media_type'];
        $media_path = $request['media_path'];
        $imageUploadPath = 'assets/admin/media/videos/thumbs';
        $newImageName = str_replace(' ', '_', $request['media_name']);
        $uploadedImageName = $this->imageService->uploadImageAdmin($media_path,$imageUploadPath,$newImageName);
        $uploadedImagePathMedia = $imageUploadPath.'/'.$uploadedImageName;
        $media->media_thumb = $uploadedImagePathMedia;
        $video = $request['media_path_vid'];
        $ext = $video->extension();
        $video_move = str_replace(' ','_',$request['media_name']).time().'.'.$ext;
        $temp = $request['media_path_vid']->move(public_path('assets/admin/media/videos/'), $video_move);
        $video_path = 'assets/admin/media/videos/'.$video_move;
        $media->media_path = $video_path;
        $media->save();
    }

    /*
    |--------------------------------------------------------------------------
    | Video edit based on id
    |--------------------------------------------------------------------------
    */
    public function videoUploadEdit($request,$id) {
        if (isset($request['media_path'])) {
            if ($request['media_path'] != '') {
                $media_path = $request['media_path'];
                $imageUploadPath = 'assets/admin/media/videos/thumbs';
                $newImageName = str_replace(' ', '_', $request['media_name']);
                $uploadedImageName = $this->imageService->uploadImageAdmin($media_path,$imageUploadPath,$newImageName);
                $uploadedImagePathMedia = $imageUploadPath.'/'.$uploadedImageName;
                $media_thumb = $uploadedImagePathMedia;
            }
        } else {
            $existMediaThumb = AdminMediaModel::where('id',$id)->select('media_thumb')->first();
            $media_thumb = $existMediaThumb->media_thumb;
        }
        if (isset($request['media_path_vid'])) {
            if ($request['media_path_vid'] != '') {
                $video = $request['media_path_vid'];
                $ext = $video->extension();
                $video_move = str_replace(' ','_',$request['media_name']).time().'.'.$ext;
                $temp = $request['media_path_vid']->move(public_path('assets/admin/media/videos/'), $video_move);
                $video_path = 'assets/admin/media/videos/'.$video_move;
            }
        } else {
            $existMediaVid = AdminMediaModel::where('id',$id)->select('media_path')->first();
            $video_path = $existMediaVid->media_path;
        }
        $mediaArr = Array(
            'media_name' => $request['media_name'],
            'media_path' => $video_path,
            'media_thumb' => $media_thumb
        );
        AdminMediaModel::where('id',$id)->update($mediaArr);
    }

    /*
    |--------------------------------------------------------------------------
    | News listing
    |--------------------------------------------------------------------------
    */
    public function newsList($search) {
        if ($search != '') {
            $news = AdminMediaModel::select('*')->where('apr_media.media_name', 'like', '%'.$search.'%')->where('media_type','news')->orderBy('created_at', 'desc')->paginate(6);
            $news->appends(['search' => $search]);
        } else {
            $news = AdminMediaModel::select('*')->where('media_type','news')->orderBy('created_at', 'desc')->paginate(6);
        }
        return $news;
    }

    /*
    |--------------------------------------------------------------------------
    | News upload
    |--------------------------------------------------------------------------
    */
    public function mediaNewsStore($request) {
        $media = new AdminMediaModel;
        $media->media_name = $request['media_name'];
        $media->media_type = $request['media_type'];
        $media->media_news = $request['media_news'];
        $media->media_meta_desc = $request['media_meta_desc'];
        $media->media_slug = Str::slug($request['media_name']);
        $media_path = $request['media_path'];
        $imageUploadPath = 'assets/admin/media/news';
        $newImageName = str_replace(' ', '_', $request['media_name']);
        $uploadedImageName = $this->imageService->uploadImageAdmin($media_path,$imageUploadPath,$newImageName);
        $uploadedImagePathMedia = $imageUploadPath.'/'.$uploadedImageName;
        $media->media_path = $uploadedImagePathMedia;
        $media->save();
    }

    /*
    |--------------------------------------------------------------------------
    | News edit
    |--------------------------------------------------------------------------
    */
    public function mediaNewsEdit($request,$id) {
        if (isset($request['media_path'])) {
            if ($request['media_path'] != '') {
                $media_path = $request['media_path'];
                $imageUploadPath = 'assets/admin/media/news';
                $newImageName = str_replace(' ', '_', $request['media_name']);
                $uploadedImageName = $this->imageService->uploadImageAdmin($media_path,$imageUploadPath,$newImageName);
                $uploadedImagePathMedia = $imageUploadPath.'/'.$uploadedImageName;
                $media_image = $uploadedImagePathMedia;
            }
        } else {
            $existMediaImg = AdminMediaModel::where('id',$id)->select('media_path')->first();
            $media_image = $existMediaImg->media_path;
        }
        
        $newsArr = Array(
            'media_name' => $request['media_name'],
            'media_type' => $request['media_type'],
            'media_news' => $request['media_news'],
            'media_path' => $media_image,
            'media_meta_desc' => $request['media_meta_desc'],
            'media_slug' => Str::slug($request['media_name'])
        );
        AdminMediaModel::where('id',$id)->update($newsArr);
    }

    /*
    |--------------------------------------------------------------------------
    | Fetch a single media
    |--------------------------------------------------------------------------
    */
    public function singleRecord($id) {
        return AdminMediaModel::find($id);
    }
}
?>