<?php

namespace App\Helper;

use Illuminate\Support\Str;

class Helper {
    // Upload Image
    public static function fileUpload($file, $folder, $name) {
        $imageName = Str::slug($name) . '.' . $file->extension();
        $file->move(public_path('uploads/' . $folder), $imageName);
        $path = 'uploads/' . $folder . '/' . $imageName;
        return $path;
    }

    // Make Slug
    public static function makeSlug($modal, $title) {
        $slug = $modal::where('slug', Str::slug($title))->first();
        if ($slug) {
            $randomString = Str::random(5);
            $slug         = Str::slug($title) . $randomString;
        } else {
            $slug = Str::slug($title);
        }

        return $slug;
    }

}