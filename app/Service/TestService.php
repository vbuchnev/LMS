<?php

namespace App\Service;

use App\Models\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestService
{
    public function store($data)
    {
        try {
            Db::beginTransaction();

            if(isset($data['question_ids'])) {
                $questionIds = $data['question_ids'];
                unset($data['question_ids']);
            }
            $test = Test::firstOrCreate($data);

            if(isset($questionIds)) {
                $test->questions()->attach($questionIds);
            }
            DB::commit();
        }
        catch (\Exception $exception)
        {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $test)
    {
        try {
            Db::beginTransaction();

            if(isset($data['question_ids'])) {
                $questionIds = $data['question_ids'];
                unset($data['question_ids']);
            }

            $test->update($data);

            if(isset($questionIds)) {
                $test->questions()->sync($questionIds);
            }
            DB::commit();
        }
        catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $test;
    }
}
