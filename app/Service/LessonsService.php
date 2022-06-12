<?php

namespace App\Service;

use App\Models\Lesson;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LessonsService
{
    public function store($data)
    {
        try {
            Db::beginTransaction();

            if(isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $lesson = Lesson::firstOrCreate($data);

            if(isset($tagIds)) {
                $lesson->tags()->attach($tagIds);
            }
            DB::commit();
        }
        catch (\Exception $exception)
        {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $lesson)
    {
        try {
            Db::beginTransaction();

            if(isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            if(isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            $lesson->update($data);
            if(isset($tagIds)) {
                $lesson->tags()->sync($tagIds);
            }
            DB::commit();
        }
        catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $lesson;
    }
}
