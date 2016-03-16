<?php

use Illuminate\Database\Seeder;

class RankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        $ranks = [
            // 1
            [
                'abbreviation' => 'PV1',
                'name' => 'Private',
                'pay_grade' => 'E-1',
                'weight' => 1,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 2,
                'teamspeak_group' => 10,
                'image' => '/images/ranks/no-image.png',
            ],
            // 2
            [
                'abbreviation' => 'PV2',
                'name' => 'Private',
                'pay_grade' => 'E-2',
                'weight' => 2,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 3,
                'teamspeak_group' => 11,
                'image' => '/images/ranks/pv2.png',
            ],
            // 3
            [
                'abbreviation' => 'PFC',
                'name' => 'Private First Class',
                'pay_grade' => 'E-3',
                'weight' => 3,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 4,
                'teamspeak_group' => 12,
                'image' => '/images/ranks/pfc.png',
            ],
            // 4
            [
                'abbreviation' => 'SPC',
                'name' => 'Specialist',
                'pay_grade' => 'E-4',
                'weight' => 4,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 6,
                'teamspeak_group' => 13,
                'image' => '/images/ranks/spc.png',
            ],
            // 5
            [
                'abbreviation' => 'CPL',
                'name' => 'Corporal',
                'pay_grade' => 'E-4',
                'weight' => 4,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 6,
                'teamspeak_group' => 14,
                'image' => '/images/ranks/cpl.png',
            ],
            // 6
            [
                'abbreviation' => 'SGT',
                'name' => 'Sergeant',
                'pay_grade' => 'E-5',
                'weight' => 6,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 7,
                'teamspeak_group' => 15,
                'image' => '/images/ranks/sgt.png',
            ],
            // 7
            [
                'abbreviation' => 'SSG',
                'name' => 'Staff Sergeant',
                'pay_grade' => 'E-6',
                'weight' => 7,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 8,
                'teamspeak_group' => 16,
                'image' => '/images/ranks/ssg.png',
            ],
            // 8
            [
                'abbreviation' => 'SFC',
                'name' => 'Sergeant First Class',
                'pay_grade' => 'E-7',
                'weight' => 8,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 9,
                'teamspeak_group' => 17,
                'image' => '/images/ranks/sfc.png',
            ],
            // 9
            [
                'abbreviation' => 'MSG',
                'name' => 'Master Sergeant',
                'pay_grade' => 'E-8',
                'weight' => 9,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 11,
                'teamspeak_group' => 18,
                'image' => '/images/ranks/msg.png',
            ],
            // 10
            [
                'abbreviation' => '1SG',
                'name' => 'First Sergeant',
                'pay_grade' => 'E-8',
                'weight' => 10,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => null,
                'teamspeak_group' => 19,
                'image' => '/images/ranks/1sg.png',
            ],
            // 11
            [
                'abbreviation' => 'SGM',
                'name' => 'Sergeant Major',
                'pay_grade' => 'E-9',
                'weight' => 11,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => null,
                'teamspeak_group' => 20,
                'image' => '/images/ranks/sgm.png',
            ],
            // 12
            [
                'abbreviation' => 'CSM',
                'name' => 'Command Sergeant Major',
                'pay_grade' => 'E-9',
                'weight' => 12,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => null,
                'teamspeak_group' => 21,
                'image' => '/images/ranks/csm.png',
            ],
            // 13
            [
                'abbreviation' => 'WO1',
                'name' => 'Warrant Officer 1',
                'pay_grade' => 'W-1',
                'weight' => 13,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 14,
                'teamspeak_group' => 22,
                'image' => '/images/ranks/wo1.png',
            ],
            // 14
            [
                'abbreviation' => 'CW2',
                'name' => 'Chief Warrant Officer 2',
                'pay_grade' => 'W-2',
                'weight' => 14,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 15,
                'teamspeak_group' => 23,
                'image' => '/images/ranks/cw2.png',
            ],
            // 15
            [
                'abbreviation' => 'CW3',
                'name' => 'Chief Warrant Officer 3',
                'pay_grade' => 'W-3',
                'weight' => 15,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 16,
                'teamspeak_group' => 24,
                'image' => '/images/ranks/cw3.png',
            ],
            // 16
            [
                'abbreviation' => 'CW4',
                'name' => 'Chief Warrant Officer 4',
                'pay_grade' => 'W-4',
                'weight' => 16,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 17,
                'teamspeak_group' => 25,
                'image' => '/images/ranks/cw4.png',
            ],
            // 17
            [
                'abbreviation' => 'CW5',
                'name' => 'Chief Warrant Officer 5',
                'pay_grade' => 'W-5',
                'weight' => 17,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => null,
                'teamspeak_group' => 26,
                'image' => '/images/ranks/cw5.png',
            ],
            // 18
            [
                'abbreviation' => '2LT',
                'name' => 'Second Lieutenant',
                'pay_grade' => 'O-1',
                'weight' => 18,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 19,
                'teamspeak_group' => 27,
                'image' => '/images/ranks/2lt.png',
            ],
            // 19
            [
                'abbreviation' => '1LT',
                'name' => 'First Lieutenant',
                'pay_grade' => 'O-2',
                'weight' => 19,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 20,
                'teamspeak_group' => 28,
                'image' => '/images/ranks/1lt.png',
            ],
            // 20
            [
                'abbreviation' => 'CPT',
                'name' => 'Captain',
                'pay_grade' => 'O-3',
                'weight' => 20,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 21,
                'teamspeak_group' => 29,
                'image' => '/images/ranks/cpt.png',
            ],
            // 21
            [
                'abbreviation' => 'MAJ',
                'name' => 'Major',
                'pay_grade' => 'O-4',
                'weight' => 21,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 22,
                'teamspeak_group' => 30,
                'image' => '/images/ranks/maj.png',
            ],
            // 22
            [
                'abbreviation' => 'LTC',
                'name' => 'Lieutenant Colonel',
                'pay_grade' => 'O-5',
                'weight' => 22,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => 23,
                'teamspeak_group' => 31,
                'image' => '/images/ranks/ltc.png',
            ],
            // 23
            [
                'abbreviation' => 'COL',
                'name' => 'Colonel',
                'pay_grade' => 'O-6',
                'weight' => 23,
                'promotion_points' => 0,
                'time_in_grade' => 0,
                'next_rank' => null,
                'teamspeak_group' => 32,
                'image' => '/images/ranks/col.png',
            ],
        ];

        DB::table('ranks')->insert($ranks);

        if (env('DB_CONNECTION') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
