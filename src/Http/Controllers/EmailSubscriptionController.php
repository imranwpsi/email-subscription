<?php
namespace HossainVendor\EmailSubscription\Http\Controllers;
use HossainVendor\EmailSubscription\Models\EmailSubscription;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailSubscriptionController extends Controller {

    public function index()
    {
        return view('email_subscription::subscription');
    }

    public function emailSubscription(Request $request)
    {
        $request->validate([
            'email' => 'email|required|unique:email_subscriptions|max:255',
        ]);

        EmailSubscription::create($request->all());

        return redirect(route('subscription'))->with(['message' => 'Email Subscription Successfully']);
    }

}
