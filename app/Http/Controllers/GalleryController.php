<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery.index');
    }

    public function store(Request $data)
    {
        $this->validate($data, [
            'gallery-images' => 'required'
        ],
            [
                'gallery-images.required' => 'Nav izvēlēts neviens attēls.'
            ],
        );
        try {
            foreach ($data['gallery-images'] as $image) {
                if ($image !== null) {
                    Storage::disk('public')->move($image, 'gallery/'.basename($image));
                    Image::create([
                        'name' => basename($image),
                    ]);
                }
            }
            return back()->with('success', 'Pievienots.');
        } catch (\Throwable $th) {
            Log::error($th);
            return back()->with('error', 'Kļūda! Mēģini vēlreiz.');
        }
    }

    public function upload(Request $data): bool|string
    {
        $fileTypes = [
            'gallery-images'
        ];
        foreach ($fileTypes as $fileType) {
            if ($data->hasFile($fileType)) {
                $files = $data->file($fileType);
                foreach ($files as $file) {
                    return $file->store('temp', 'public');
                }
            }
        }
        Log::error('Upload failed');
        return 'Upload failed';
    }

    public function delete(Request $data): string
    {
        Storage::delete('public/'.$data->getContent());
        return 'Image deleted';
    }
}
