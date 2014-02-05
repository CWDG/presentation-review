<?php

class DatabaseCommentRepository implements CommentRepositoryInterface
{
    public function all()
    {
        return Comment::all();
    }

    public function find($id)
    {
        return Comment::find($id);
    }

    public function create($input)
    {
        return Comment::create($input);
    }
}