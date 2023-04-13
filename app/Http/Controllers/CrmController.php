<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class CrmController extends BaseController
{
    public function index()
    {
        $data = User::
        join('countries', 'users.country_id', '=', 'countries.id')
            ->join('documents', 'users.document_id', '=', 'documents.id')
            ->select(
                'countries.country_code',
                'countries.country',
                'documents.passport_number',
                'documents.issued_by',
                'documents.date_of_issue',
                'documents.passport_id',
                'users.phone_number',
                'users.name'
            )
            ->get();

        return view('index', compact('data'));
    }
}