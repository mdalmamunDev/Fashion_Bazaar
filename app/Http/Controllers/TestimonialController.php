<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\TestimonialLike;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $tests = Testimonial::with('user', 'likes')->get();

            return response()->json(['success' => true, 'message' => 'All testimonials are fetched.', 'result' => $tests]);
        }catch (\Exception $exception){
            return response()->json([
                'data' => $exception->getMessage(),
                'status' => 5000,
                'message' => 'Something Wrong'
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:500',
        ]);


        Testimonial::create([
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
        ]);

        Toastr::success('Your message send successfully.', 'Message send!', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->back()->with('success', 'Testimonial deleted successfully.');
    }


    public function doLike($testId, $userId) {
        try {
            $likeExists = TestimonialLike::where('testimonial_id', $testId)
                ->where('user_id', $userId)
                ->first();

            if (!$likeExists) {
                // If the like doesn't exist, create a new like
                TestimonialLike::create([
                    'testimonial_id' => $testId,
                    'user_id' => $userId
                ]);
            } else {
                // If the like exists, remove it (unlike)
                $likeExists->delete();
            }

            // Get the updated like count
            $likes = TestimonialLike::where('testimonial_id', $testId)->get();

            return response()->json(['success' => true, 'message' => ($likeExists ? 'unlike' : 'like') . ' this testimonial', 'result' => $likes, 'isLiked' => !$likeExists]);
        }catch (\Exception $exception){
            return response()->json([
                'data' => $exception->getMessage(),
                'status' => 5000,
                'message' => 'Something Wrong'
            ]);
        }
    }
}
