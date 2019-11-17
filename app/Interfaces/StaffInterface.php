<?php

namespace App\Interfaces;

interface StaffInterface
{
    public function addEmployee($request);
    public function updateEmployee($id, $request);
    public function deleteEmployee($id);
}
