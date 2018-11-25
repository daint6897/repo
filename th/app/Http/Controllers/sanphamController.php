<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesanphamRequest;
use App\Http\Requests\UpdatesanphamRequest;
use App\Repositories\sanphamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class sanphamController extends AppBaseController
{
    /** @var  sanphamRepository */
    private $sanphamRepository;

    public function __construct(sanphamRepository $sanphamRepo)
    {
        $this->sanphamRepository = $sanphamRepo;
    }

    /**
     * Display a listing of the sanpham.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sanphamRepository->pushCriteria(new RequestCriteria($request));
        $sanphams = $this->sanphamRepository->all();

        return view('sanphams.index')
            ->with('sanphams', $sanphams);
    }

    /**
     * Show the form for creating a new sanpham.
     *
     * @return Response
     */
    public function create()
    {
        return view('sanphams.create');
    }

    /**
     * Store a newly created sanpham in storage.
     *
     * @param CreatesanphamRequest $request
     *
     * @return Response
     */
    public function store(CreatesanphamRequest $request)
    {
        $input = $request->all();

        $sanpham = $this->sanphamRepository->create($input);

        Flash::success('Sanpham saved successfully.');

        return redirect(route('sanphams.index'));
    }

    /**
     * Display the specified sanpham.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sanpham = $this->sanphamRepository->findWithoutFail($id);

        if (empty($sanpham)) {
            Flash::error('Sanpham not found');

            return redirect(route('sanphams.index'));
        }

        return view('sanphams.show')->with('sanpham', $sanpham);
    }

    /**
     * Show the form for editing the specified sanpham.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sanpham = $this->sanphamRepository->findWithoutFail($id);

        if (empty($sanpham)) {
            Flash::error('Sanpham not found');

            return redirect(route('sanphams.index'));
        }

        return view('sanphams.edit')->with('sanpham', $sanpham);
    }

    /**
     * Update the specified sanpham in storage.
     *
     * @param  int              $id
     * @param UpdatesanphamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesanphamRequest $request)
    {
        $sanpham = $this->sanphamRepository->findWithoutFail($id);

        if (empty($sanpham)) {
            Flash::error('Sanpham not found');

            return redirect(route('sanphams.index'));
        }

        $sanpham = $this->sanphamRepository->update($request->all(), $id);

        Flash::success('Sanpham updated successfully.');

        return redirect(route('sanphams.index'));
    }

    /**
     * Remove the specified sanpham from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sanpham = $this->sanphamRepository->findWithoutFail($id);

        if (empty($sanpham)) {
            Flash::error('Sanpham not found');

            return redirect(route('sanphams.index'));
        }

        $this->sanphamRepository->delete($id);

        Flash::success('Sanpham deleted successfully.');

        return redirect(route('sanphams.index'));
    }
}
