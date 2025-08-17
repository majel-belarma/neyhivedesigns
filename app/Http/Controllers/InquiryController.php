<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreInquiryRequest;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function store(StoreInquiryRequest $request)
    {
       $data = $request->validated();
    $data['pain_points'] = $data['pain_points'] ?? [];
    $inquiry = \App\Models\Inquiry::create($data);

    return redirect()->route('get-started.thankyou')
        ->with('status', 'Thanks! We received your details. #'.$inquiry->id);
    }
}
