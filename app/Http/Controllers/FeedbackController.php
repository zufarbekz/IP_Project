<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback() {
        return view('feedback');
    }

    public function feedbackConfirm(Request $request) {
        $request->validate([
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
        ]);

        $feedback = new Feedback;

        $feedback->subject = request('subject');
        $feedback->name = request('name');
        $feedback->email = request('email');
        $feedback->message = request('message');

        $feedback->save();

        return redirect()->route('index');
    }
}
