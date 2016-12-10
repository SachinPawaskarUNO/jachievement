<?php

namespace App\Http\Controllers;

use Log;
use Session;
use Auth;
use DB;

use App\FAQ;
use App\Http\Requests\FAQRequest;

use Illuminate\Http\Request;


class FAQController extends Controller
{
    public function __construct()
    {
        $this->user = Auth::user();
        $this->faqs = FAQ::all();
        $this->heading = "Frequently Asked Questions";
        $this->viewData = ['user' => $this->user, 'faqs' => $this->faqs, 'heading' => $this->heading];
    }

    public function index()
    {
        $this->middleware('role:admin|superadmin');
        Log::info('FAQController.index: Start -');
        $faqs = FAQ::all();
        $this->viewData['faqs'] = $faqs;

        return view('faqs.index', $this->viewData);
    }

    public function create()
    {
        $this->middleware('role:admin|superadmin');
        Log::info('FAQController.create: ');
        $this->viewData['heading'] = "New FAQ";

        return view('faqs.create', $this->viewData);
    }

    public function edit(FAQ $faqs)
    {
        $this->middleware('role:admin|superadmin');
        $object = $faqs;
        Log::info('FAQController.edit: ' . $object->id . '|' . $object->question);
        $this->viewData['faq'] = $object;
        $this->viewData['heading'] = "Edit FAQ: " . $object->question;

        return view('faqs.edit', $this->viewData);
    }

    public function update(FAQ $faqs, FAQRequest $request)
    {
        $this->middleware('role:admin|superadmin');
        $object = $faqs;
        Log::info('FAQController.update - Start: ' . $object->id . '|' . $object->question);
        $this->populateUpdateFields($request);
        /*$request['active'] = $request['active'] == '' ? false : true;*/
        $object->update($request->all());
        Session::flash('flash_message', 'FAQ successfully updated!');
        Log::info('FAQController.update - End: ' . $object->id . '|' . $object->question);
        return redirect('/faqs');
    }

    public function store(FAQRequest $request)
    {
        $this->middleware('role:admin|superadmin');
        Log::info('FAQController.store - Start: ');
        $input = $request->all();
        $this->populateCreateFields($input);
        $object = FAQ::create($input);
        Session::flash('flash_message', 'FAQ successfully added!');
        Log::info('FAQController.store - End: ' . $object->id . '|' . $object->question);
        return redirect('/faqs');
    }

    public function destroy(Request $request, FAQ $faqs)
    {
        $this->middleware('role:admin|superadmin');
        $object = $faqs;
        Log::info('FAQController.destroy: Start: ' . $object->id . '|' . $object->question);
        $object->delete();
        Session::flash('flash_message', 'FAQ successfully deleted!');
        Log::info('FAQController.destroy: End: ');
        return redirect('/faqs');
    }

    public function view()
    {
        $faqs = DB::table('faqs')
            ->select(DB::raw('faqs.question as question,faqs.answer as answer, 
                    faqs.category as category'))
            ->orderBY('question', 'asc')
            ->whereNull('deleted_at')
            ->get();

        $categories = DB::table('faqs')
            ->distinct()
            ->select(DB::raw('faqs.category as cat'))
            ->whereNull('deleted_at')
            ->get();

        return view('faqs.view', compact('faqs', 'categories'));

    }
}

