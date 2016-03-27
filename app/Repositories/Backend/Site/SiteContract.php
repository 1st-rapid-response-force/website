<?php namespace App\Repositories\Backend\Site;


/**
 * Interface SiteContract
 * @package App\Repositories\Backend\Site
 */
interface SiteContract
{
    /**
     * @return mixed
     */
    public function getAllFAQs();

    /**
     * @param $id
     * @return mixed
     */
    public function getFAQ($id);

    /**
     * @param $input
     * @return mixed
     */
    public function createFAQ($input);

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
    public function deleteFAQ($id);
}