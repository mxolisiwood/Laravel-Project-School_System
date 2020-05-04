<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassSchedulingRequest;
use App\Http\Requests\UpdateClassSchedulingRequest;
use App\Repositories\ClassSchedulingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
//Adding all our model classes here
use App\models\Batche;
use App\models\Classes;
use App\models\Classroom;
use App\models\Course;
use App\models\Day;
use App\models\Level;
use App\models\Shift;
use App\models\Time;
use App\models\Teacher;

class ClassSchedulingController extends AppBaseController
{
    /** @var  ClassSchedulingRepository */
    private $classSchedulingRepository;

    public function __construct(ClassSchedulingRepository $classSchedulingRepo)
    {
        $this->classSchedulingRepository = $classSchedulingRepo;
    }

    /**
     * Display a listing of the ClassScheduling.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $batche = Batche::all();
        $class = Classes::all();
        $course = Course::all();
        $day = Day::all();
        $level = Level::all();
        $shift = Shift::all();
        $time = Time::all();
        $teacher = Teacher::all();
        $classroom = Classroom::all();
        
        $classSchedulings = $this->classSchedulingRepository->all();

        //DB relationships
        $classScheduling = DB::table('class_schedulings')->select(
                                                                  'courses.*',
                                                                  'levels.*',
                                                                  'days.*',
                                                                  'batches.*',
                                                                  //'classes.*',
                                                                  'shifts.*',
                                                                  'times.*',
                                                                  'teachers.*',
                                                                  'classrooms.*'
                                                                )
                                                                ->join('courses','courses.course_id','=','class_schedulings.course_id')
                                                                ->join('batches','batches.batch_id','=','class_schedulings.batch_id')
                                                                //->join('classes','classes.class_id','=','class_schedulings.class_id')
                                                                ->join('days','days.day_id','=','class_schedulings.day_id')
                                                                ->join('levels','levels.level_id','=','class_schedulings.level_id')
                                                                ->join('shifts','shifts.shift_id','=','class_schedulings.shift_id')
                                                                ->join('times','times.time_id','=','class_schedulings.time_id')
                                                                ->join('teachers','teachers.teacher_id','=','class_schedulings.teacher_id')
                                                                ->join('classrooms','classrooms.classroom_id','=','class_schedulings.classroom_id')
                                                                ->get();

        return view('class_schedulings.index', compact('batche', 'class', 'course', 'day', 'level', 'shift', 'time', 'teacher', 'classroom'))
            ->with('classSchedulings', $classSchedulings);
    }

    /**
     * Show the form for creating a new ClassScheduling.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedulings.create');
    }

    /**
     * Store a newly created ClassScheduling in storage.
     *
     * @param CreateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSchedulingRequest $request)
    {
        $input = $request->all();

        $classScheduling = $this->classSchedulingRepository->create($input);

        Flash::success('Class Scheduling saved successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Display the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.show')->with('classScheduling', $classScheduling);
    }

    /**
     * Show the form for editing the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.edit')->with('classScheduling', $classScheduling);
    }

    /**
     * Update the specified ClassScheduling in storage.
     *
     * @param int $id
     * @param UpdateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassSchedulingRequest $request)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $classScheduling = $this->classSchedulingRepository->update($request->all(), $id);

        Flash::success('Class Scheduling updated successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Remove the specified ClassScheduling from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $this->classSchedulingRepository->delete($id);

        Flash::success('Class Scheduling deleted successfully.');

        return redirect(route('classSchedulings.index'));
    }
}
