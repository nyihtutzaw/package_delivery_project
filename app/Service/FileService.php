<?php 
    namespace App\Service;
    use Illuminate\Support\Facades\Storage;
    class FileService 
    {
        public static function save($file,$location)
        {
            $file->store("public/".$location);
            return $file->hashName();
        }

        public static function remove($filename,$location)
        {
            if ($filename)
            {
                Storage::delete("public/".$location.'/'.$filename);
            }
        }

    }
?>