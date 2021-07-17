<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Schedules seed.
 */
class SchedulesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'movie_id' => 10,
                'screen_id' => 1,
                'start_time' => date('Y-m-d') . ' 12:00:00',
                'close_time' => date('Y-m-d') . ' 15:09:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 1,
                'start_time' => date('Y-m-d') . ' 15:10:00',
                'close_time' => date('Y-m-d') . ' 18:19:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 1,
                'start_time' => date('Y-m-d') . ' 18:20:00',
                'close_time' => date('Y-m-d') . ' 21:39:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 2,
                'start_time' => date('Y-m-d') . ' 13:00:00',
                'close_time' => date('Y-m-d') . ' 16:09:59',
            ],
            [
                'movie_id' => 15,
                'screen_id' => 2,
                'start_time' => date('Y-m-d') . ' 16:10:00',
                'close_time' => date('Y-m-d') . ' 18:39:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 2,
                'start_time' => date('Y-m-d') . ' 18:40:00',
                'close_time' => date('Y-m-d') . ' 21:59:59',
            ],
            [
                'movie_id' => 20,
                'screen_id' => 4,
                'start_time' => date('Y-m-d') . ' 12:00:00',
                'close_time' => date('Y-m-d') . ' 15:09:59',
            ],
            [
                'movie_id' => 20,
                'screen_id' => 4,
                'start_time' => date('Y-m-d') . ' 15:10:00',
                'close_time' => date('Y-m-d') . ' 18:19:59',
            ],
            [
                'movie_id' => 20,
                'screen_id' => 4,
                'start_time' => date('Y-m-d') . ' 18:20:00',
                'close_time' => date('Y-m-d') . ' 21:39:59',
            ],
            [
                'movie_id' => 20,
                'screen_id' => 5,
                'start_time' => date('Y-m-d') . ' 16:30:00',
                'close_time' => date('Y-m-d') . ' 19:29:59',
            ],
            [
                'movie_id' => 20,
                'screen_id' => 5,
                'start_time' => date('Y-m-d') . ' 19:30:00',
                'close_time' => date('Y-m-d') . ' 22:49:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 1,
                'start_time' => date('Y-m-d', strtotime('+1 day')) . ' 12:00:00',
                'close_time' => date('Y-m-d', strtotime('+1 day')) . ' 15:09:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 1,
                'start_time' => date('Y-m-d', strtotime('+1 day')) . ' 15:10:00',
                'close_time' => date('Y-m-d', strtotime('+1 day')) . ' 18:19:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 1,
                'start_time' => date('Y-m-d', strtotime('+1 day')) . ' 18:20:00',
                'close_time' => date('Y-m-d', strtotime('+1 day')) . ' 21:39:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 2,
                'start_time' => date('Y-m-d', strtotime('+1 day')) . ' 13:00:00',
                'close_time' => date('Y-m-d', strtotime('+1 day')) . ' 16:09:59',
            ],
            [
                'movie_id' => 15,
                'screen_id' => 2,
                'start_time' => date('Y-m-d', strtotime('+1 day')) . ' 16:10:00',
                'close_time' => date('Y-m-d', strtotime('+1 day')) . ' 18:39:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 2,
                'start_time' => date('Y-m-d', strtotime('+1 day')) . ' 18:40:00',
                'close_time' => date('Y-m-d', strtotime('+1 day')) . ' 21:59:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 1,
                'start_time' => date('Y-m-d', strtotime('+2 days')) . ' 15:10:00',
                'close_time' => date('Y-m-d', strtotime('+2 days')) . ' 18:19:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 1,
                'start_time' => date('Y-m-d', strtotime('+2 days')) . ' 18:20:00',
                'close_time' => date('Y-m-d', strtotime('+2 days')) . ' 21:39:59',
            ],
            [
                'movie_id' => 10,
                'screen_id' => 2,
                'start_time' => date('Y-m-d', strtotime('+2 days')) . ' 13:00:00',
                'close_time' => date('Y-m-d', strtotime('+2 days')) . ' 16:09:59',
            ],
            [
                'movie_id' => 15,
                'screen_id' => 2,
                'start_time' => date('Y-m-d', strtotime('+2 days')) . ' 16:10:00',
                'close_time' => date('Y-m-d', strtotime('+2 days')) . ' 18:39:59',
            ],
        ];

        $table = $this->table('schedules');
        $table->insert($data)->save();
    }
}
