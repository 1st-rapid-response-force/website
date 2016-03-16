<?php namespace App\Repositories\Frontend\User;


use App\Models\Access\User\User;

/**
 * Interface ApplicationContract
 * @package App\Repositories\Frontend\User
 */
interface ApplicationContract
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @param User $user
     * @param array $data
     * @return mixed
     */
    public function create(User $user, array $data);

    /**
     * @param $id
     * @param $input
     * @return mixed
     */
    public function update($id, $input);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);



}