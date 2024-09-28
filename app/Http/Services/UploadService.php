<?php


namespace App\Http\Services;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
class UploadService
{
    public function store($request)
    {
        if ($request->file('file')->isValid()) {
            try {
                $image = $request->file('file');
                $imageName = date("Y_m_d").'_'.$request->file('file')->getClientOriginalName();
                $thumbName = 'thumb_'.date("Y_m_d").'_'.$request->file('file')->getClientOriginalName();
                $folder = $request->folder;
                $pathFull = 'uploads/'.$folder;
                
                $dataSize = getimagesize($image);
                $width = $dataSize[0]; 
                $height = $dataSize[1];
                
                $image->move('public/' . $pathFull, $imageName);
              
                $manager = new ImageManager(new Driver());
                
                $thumbImage = $manager->read('public/' . $pathFull.'/'.$imageName);
                $thumbImage->resize(200, 200);

                $thumbImage->save(public_path('/storage/uploads/'.$folder.'/'.$thumbName));
               
                return [
                    'path' => '/public/'.$pathFull.'/'. $imageName,
                    'thumb' => '/storage/'.$pathFull.'/'. $thumbName,
                    'width' => $width,
                    'height' => $height,
                ];

            } catch (\Exception $error) {
                return false;
            }
        }
    }
}
