<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    static $blog, $image, $imageName, $directory ;
    static function imageURL($imageData)
    {
        self::$image = $imageData->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'blog-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    static function createBlog($data)
    {
        self::$blog = new blog();
        self::$blog->title = $data->title;
        self::$blog->description = $data->description;
        self::$blog->image = self::imageURL($data);
        self::$blog->save();
    }
    static function updateBlog($updateData, $id)
    {
        $result = Blog::find($id);
        $result->title = $updateData->title;
        $result->description = $updateData->description;
        $result->image = self::imageURL($updateData);
        $result->save();
    }
}
