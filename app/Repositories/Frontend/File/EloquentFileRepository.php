<?php namespace App\Repositories\Frontend\File;


use App\Models\Access\User\User;
use App\Models\File\File;

/**
 * Class EloquentFileRepository
 * @package App\Repositories\Frontend\File
 */
class EloquentFileRepository implements FileContract
{
    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function find($id)
    {
        return File::findOrFail($id);
    }

    /**
     * @param User $user
     * @param array $data
     * @return mixed
     */
    public function create(User $user, array $data)
    {
        return $user->file()->create($data);
    }

    /**
     * @param $id
     * @param $input
     * @return bool|int
     */
    public function update($id, $input)
    {
        $file = $this->find($id);
        return $file->update($input);
    }

    /**
     * @param $id
     * @return bool
     * @throws \Exception
     */
    public function delete($id)
    {
        $file = $this->find($id);
        $file->delete();
        return true;
    }

}