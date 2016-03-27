<?php namespace App\Repositories\Backend\User;



use App\Models\Access\User\Application;
use App\Models\Access\User\User;

/**
 * Class EloquentApplicationRepository
 * @package App\Repositories\Frontend\User
 */
class EloquentApplicationRepository implements ApplicationContract
{
    /**
     * @return mixed
     */
    public function getAllActive()
    {
        return Application::active()->get();
    }

    /**
     * @return mixed
     */
    public function getAllDeclined()
    {
        return Application::declined()->get();
    }

    /**
     * @return mixed
     */
    public function getAllAccepted()
    {
        return Application::accepted()->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function find($id)
    {
        return Application::findOrFail($id);
    }

    /**
     * @param User $user
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(User $user, array $data)
    {
         return $user->application()->create($data);
    }

    /**
     * @param $id
     * @param $input
     * @return bool|int
     */
    public function update($id, $input)
    {
        $application = $this->find($id);
        return $application->update($input);
    }

    /**
     * @param $id
     * @return bool
     * @throws \Exception
     */
    public function delete($id)
    {
        $application = $this->find($id);
        $application->delete();
        return true;
    }

}