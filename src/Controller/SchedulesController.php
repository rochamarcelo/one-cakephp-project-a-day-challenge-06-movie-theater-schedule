<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\I18n\Date;

/**
 * Schedules Controller
 *
 * @property \App\Model\Table\SchedulesTable $Schedules
 * @method \App\Model\Entity\Schedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SchedulesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $date = [
            'year' => $this->request->getParam('year'),
            'month' => $this->request->getParam('month'),
            'day' => $this->request->getParam('day'),
        ];
        $scheduledMovies = $this->Schedules->find('onDate', [
            'date' => $date['year'] ? $date : null,
        ]);

        $this->set(compact('scheduledMovies'));
    }
}
