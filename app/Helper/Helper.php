<?php

namespace App\Helper;

use Carbon\Carbon;
use Illuminate\Support\Str;

function timestamp()
{
    return Carbon::now()->format('Y-m-d-H-m-s-u');
}
class Helper
{
    // Upload Image
    public static function fileUpload($file, $folder, $name)
    {
        $imageName = Str::slug($name) . '.' . $file->extension();
        $file->move(public_path('uploads/' . $folder), $imageName);
        $path = 'uploads/' . $folder . '/' . $imageName;
        return $path;
    }

    // Make Slug
    public static function makeSlug($modal, $title)
    {
        $slug = $modal::where('slug', Str::slug($title))->first();
        if ($slug) {
            $randomString = Str::random(5);
            $slug = Str::slug($title) . $randomString;
        } else {
            $slug = Str::slug($title);
        }

        return $slug;
    }

    public static function saveImage($image, string $dir, ?string $prefix = '', string $oldImage = null, string $disk = 'public')
    {
        if ($image) {
            if ($prefix === '' || $prefix === null) {
                $prefix = str($image->getClientOriginalName())->slug();
            }
            $ext = $image->extension();
            $name = $prefix . "-" . timestamp() . '.' . $ext;
            $path = $image->move("uploads/$dir", $name, $disk);
            return $path;
        } else {
            return $oldImage;
        }
    }

    public static function deleteImage($image, $file)
    {
        if (isset($file)) {
            if (isset($image)) {
                unlink($image);
            } else {
                return false;
            }
        } else {
            return true;
        }

    }

}