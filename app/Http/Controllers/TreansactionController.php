<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTreansactionRequest;
use App\Http\Requests\UpdateTreansactionRequest;
use App\Repositories\TreansactionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TreansactionController extends AppBaseController
{
    /** @var  TreansactionRepository */
    private $treansactionRepository;

    public function __construct(TreansactionRepository $treansactionRepo)
    {
        $this->treansactionRepository = $treansactionRepo;
    }

    /**
     * Display a listing of the Treansaction.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $treansactions = $this->treansactionRepository->all();

        return view('treansactions.index')
            ->with('treansactions', $treansactions);
    }

    /**
     * Show the form for creating a new Treansaction.
     *
     * @return Response
     */
    public function create()
    {
        return view('treansactions.create');
    }

    /**
     * Store a newly created Treansaction in storage.
     *
     * @param CreateTreansactionRequest $request
     *
     * @return Response
     */
    public function store(CreateTreansactionRequest $request)
    {
        $input = $request->all();

        $treansaction = $this->treansactionRepository->create($input);

        Flash::success('Treansaction saved successfully.');

        return redirect(route('treansactions.index'));
    }

    /**
     * Display the specified Treansaction.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $treansaction = $this->treansactionRepository->find($id);

        if (empty($treansaction)) {
            Flash::error('Treansaction not found');

            return redirect(route('treansactions.index'));
        }

        return view('treansactions.show')->with('treansaction', $treansaction);
    }

    /**
     * Show the form for editing the specified Treansaction.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $treansaction = $this->treansactionRepository->find($id);

        if (empty($treansaction)) {
            Flash::error('Treansaction not found');

            return redirect(route('treansactions.index'));
        }

        return view('treansactions.edit')->with('treansaction', $treansaction);
    }

    /**
     * Update the specified Treansaction in storage.
     *
     * @param int $id
     * @param UpdateTreansactionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTreansactionRequest $request)
    {
        $treansaction = $this->treansactionRepository->find($id);

        if (empty($treansaction)) {
            Flash::error('Treansaction not found');

            return redirect(route('treansactions.index'));
        }

        $treansaction = $this->treansactionRepository->update($request->all(), $id);

        Flash::success('Treansaction updated successfully.');

        return redirect(route('treansactions.index'));
    }

    /**
     * Remove the specified Treansaction from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $treansaction = $this->treansactionRepository->find($id);

        if (empty($treansaction)) {
            Flash::error('Treansaction not found');

            return redirect(route('treansactions.index'));
        }

        $this->treansactionRepository->delete($id);

        Flash::success('Treansaction deleted successfully.');

        return redirect(route('treansactions.index'));
    }
}
