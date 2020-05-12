<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassAssigningRequest;
use App\Http\Requests\UpdateClassAssigningRequest;
use App\Repositories\ClassAssigningRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
//Adding All our model classes
use App\models\Batche;
use App\models\Classroom;
use App\models\Course;
use App\models\Level;
use App\models\Shift;
use App\models\Time;


class ClassAssigningController extends AppBaseController
{
    /** @var  ClassAssigningRepository */
    private $classAssigningRepository;

    public function __construct(ClassAssigningRepository $classAssigningRepo)
    {
        $this->classAssigningRepository = $classAssigningRepo;
    }
    protected $primaryKey = 'assign_id';

    /**
     * Display a listing of the ClassAssigning.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $batche = Batche::all();
        $course = Course::all();
        $level = Level::all();
        $shift = Shift::all();
        $time = Time::all();
        $classroom = Classroom::all();

        $classAssignings = $this->classAssigningRepository->all();

         //DB relationships
         $classSchedulings = DB::table('class_assignings')->select(
            'courses.*',
            'levels.*',
           // 'days.*',
            'batches.*',
            //'classes.*',
            'shifts.*',
            'times.*',
           // 'teachers.*',
            'classrooms.*',
            'assign_id'
          )
          ->join('courses','courses.course_id','=','class_assignings.course_id')
          ->join('batches','batches.batch_id','=','class_assignings.batch_id')
          //->join('classes','classes.class_id','=','class_schedulings.class_id')
         // ->join('days','days.day_id','=','class_schedulings.day_id')
          ->join('levels','levels.level_id','=','class_assignings.level_id')
          ->join('shifts','shifts.shift_id','=','class_assignings.shift_id')
          ->join('times','times.time_id','=','class_assignings.time_id')
         // ->join('teachers','teachers.teacher_id','=','class_schedulings.teacher_id')
          ->join('classrooms','classrooms.classroom_id','=','class_assignings.classroom_id')
          ->get();

        return view('class_assignings.index', compact('classAssignings','batche', 'course', 'level', 'shift', 'time', 'classroom'))
            ->with('classAssignings', $classAssignings);
    }

    /**
     * Show the form for creating a new ClassAssigning.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_assignings.create');
    }

    /**
     * Store a newly created ClassAssigning in storage.
     *
     * @param CreateClassAssigningRequest $request
     *
     * @return Response
     */
    public function store(CreateClassAssigningRequest $request)
    {
        $input = $request->all();

        $classAssigning = $this->classAssigningRepository->create($input);

        Flash::success('Class Assigning saved successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Display the specified ClassAssigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.show')->with('classAssigning', $classAssigning);
    }

    /**
     * Show the form for editing the specified ClassAssigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.edit')->with('classAssigning', $classAssigning);
    }

    /**
     * Update the specified ClassAssigning in storage.
     *
     * @param int $id
     * @param UpdateClassAssigningRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassAssigningRequest $request)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        $classAssigning = $this->classAssigningRepository->update($request->all(), $id);

        Flash::success('Class Assigning updated successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Remove the specified ClassAssigning from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        $this->classAssigningRepository->delete($id);

        Flash::success('Class Assigning deleted successfully.');

        return redirect(route('classAssignings.index'));
    }
}
