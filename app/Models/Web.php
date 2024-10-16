<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    use HasFactory;
    private static $web, $image, $imageName, $directory, $imageUrl, $extension;

    public static function saveProject($request)
    {
        self::$web = new Web();
        self::$web->name   = $request->name;
        self::$web->image  = self::getImageUrl($request);
        self::$web->save();
    }

    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$extension    = self::$image->extension();
        self::$imageName    = rand().'.'.self::$extension;
        self::$directory    = 'admin/image/web/';
        self::$imageUrl     = self::$directory.self::$imageName;
        self::$image->move(self::$directory, self::$imageName);
        return self::$imageUrl;
    }

    public static function updateProject($request, $id)
    {
        self::$web = Web::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$web->image))
            {
                unlink(self::$web->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$web->image;
        }

        self::$web->name   = $request->name;
        self::$web->image  = self::$imageUrl;
        self::$web->save();
    }

    public static function deleteProject($id)
    {
        self::$web = Web::find($id);
        if (file_exists(self::$web->image))
        {
            unlink(self::$web->image);
        }
        self::$web->delete();
    }
}
