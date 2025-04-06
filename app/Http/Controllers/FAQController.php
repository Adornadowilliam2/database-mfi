<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
class FAQController extends Controller
{
    /**
     * Insert a new FAQ
     */
    public function insert(Request $request){
        $validator = validator($request->all(), [
            'question' => 'required|unique:faqs,question',
            'paragraph' => 'required|unique:faqs,paragraph',
            'enroll' => 'sometimes',
            'cta' => 'required',
            'program' => 'required|in:general question,short course,dts program,senior high,gt foundation,tesda-twsp,others scholarship'
        ]);

        if($validator->fails()){
            return response()->json([
                'ok' => false,
                'message' => 'Add Failed',
                'errors' => $validator->errors()
            ], 400);
        }
        $faq = FAQ::create($validator->validated());
        return response()->json([
            'ok' => true,
            'message' => 'Add Success',
            'data' => $faq
        ], 201);
    }

    /**
     * Retrieve all FAQs
     */
    public function retrieve(){
        return response()->json([
            'ok' => true,
            'message' => 'Retrieved Successfully',
            'data' => FAQ::all()
        ], 200);
    }

    /**
     * Update a FAQ
     */
    public function update(Request $request, FAQ $faq){
        $validator = validator($request->all(), [
            'question' => 'required',
            'paragraph' => 'required',
            'enroll' => 'sometimes',
            'cta' => 'required',
            'program' => 'required|in:general question,short course,dts program,senior high,gt foundation,tesda-twsp,others scholarship'
        ]);

        if($validator->fails()){
            return response()->json([
                'ok' => false,
                'message' => "Request didn't pass validation",
                'errors' => $validator->errors()
            ], 400);
        }

        $faq->update($validator->validated());
        return response()->json([
            'ok' => true,
            'message' => 'Updated Success',
            'data' => $faq
        ], 201);
    }


    /**
     * Delete a FAQ
     */
    public function delete(FAQ $faq){
        $faq->delete();
        return response()->json([
            'ok' => true,
            'message' => 'Deleted Successfully'
        ], 200);
    }
}
