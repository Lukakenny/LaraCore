<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Repositories\CommentRepository;

class CommentController extends Controller
{
    protected $commentRepo;

    // Ubacujemo repozitorijum
    public function __construct(CommentRepository $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }


    public function store(StoreCommentRequest $request, string $id)
    {
        $this->commentRepo->createComment($id, $request->validated());
        return redirect()->back();
    }
}
