<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubjectTypeResource;
use App\Models\SubjectType;
use Illuminate\Http\Request;

class ApiSubjectTypeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $subjectTypes = SubjectType::all();
        return SubjectTypeResource::collection($subjectTypes);
    }
}
