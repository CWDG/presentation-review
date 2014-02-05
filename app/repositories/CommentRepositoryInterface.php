<?php

interface CommentRepositoryInterface
{
    public function all();

    public function find($id);

    public function create($input);

}