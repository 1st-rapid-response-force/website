<?php namespace App\Repositories\Backend\Site;


use App\Models\Site\faq;

/**
 * Class EloquentSiteRepository
 * @package App\Repositories\Backend\Site
 */
class EloquentSiteRepository implements SiteContract
{
    public function getAllFAQs()
    {
        return faq::all();
    }

    public function getFAQ($id)
    {
        return faq::findOrFail($id);
    }

    public function createFAQ($input)
    {
        return faq::create($input);
    }

    public function update($id, $input)
    {
        return faq::find($id)->update($input);
    }

    public function deleteFAQ($id)
    {
        $application = $this->getFAQ($id);
        $application->delete();
        return true;
    }

}