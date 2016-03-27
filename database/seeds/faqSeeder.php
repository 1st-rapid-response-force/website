<?php

use Illuminate\Database\Seeder;
use App\Models\Site\faq;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faq = new faq;
        $faq->create([
        'question' => 'What are the requirements to be a member of the 1st RRF',
        'answer' => '<h5>Membership Criteria</h5>
                        <ul>
                            <li>
                                Members must own a legal copy of ARMA 3 and expansions.
                            </li>
                            <li>
                                Members must have a clean Steam VAC and BattlEye Record
                            </li>
                            <li>Members must be over the age of 18.</li>
                            <li>Members will be required to be citizens of a NATO member country to partake.</li>
                            <li>Members will need to be able to commit to a weekly operations and training schedule.</li>
                            <li>Members will need speak english in order to properly communicate with the unit.</li>
                        </ul>',
            'order'=>1,
            'published'=> true
        ]);
        $faq->create([
            'question' => 'Why am I required to login with Steam?',
            'answer' => '1st Rapid Response Force systems use Steam Open ID authentication for login. For more information <a href="http://steamcommunity.com/dev">click here.</a>',
            'order'=>2,
            'published'=> true
        ]);
        $faq->create([
            'question' => 'How do I download the modpack?',
            'answer' => '<p>You can download the mods using our official launcher Infil, <a href="/modpack">Modpack Instructions</a></p>',
            'order'=>34,
            'published'=> true
        ]);
    }
}
