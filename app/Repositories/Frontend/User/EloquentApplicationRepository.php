<?php
/**
 * Created by PhpStorm.
 * User: guillermo
 * Date: 3/16/16
 * Time: 2:02 AM
 */

namespace App\Repositories\Frontend\User;



use App\Models\Access\User\Application;
use App\Models\Access\User\User;

/**
 * Class EloquentApplicationRepository
 * @package App\Repositories\Frontend\User
 */
class EloquentApplicationRepository implements ApplicationContract
{
    /**
     * @param User $user
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(User $user, array $data)
    {
        $input = collect($data);
        $input->put('dob',\Carbon\Carbon::parse($input->get('dob')));
        $application = $user->application()->create($input->all());
        $user->application_id = $application->id;
        return $application;
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

}