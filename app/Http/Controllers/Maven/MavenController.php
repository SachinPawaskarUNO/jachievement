<?php

namespace App\Http\Controllers\Maven;

use Illuminate\Http\Request;

use App\Http\Requests;
use Sukohi\Maven\Maven;
use Sukohi\Maven\MavenFaq;
use Sukohi\Maven\MavenLocale;
use Sukohi\Maven\MavenTag;
use Sukohi\Maven\MavenUniqueKey;
use DB;

class MavenController extends \App\Http\Controllers\Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|superadmin',['except' => 'view']);
    }

    public function index() {
        $message = '';
        $maven_items = MavenUniqueKey::with('faq.tags')
            ->neatness()
            ->smoothness()
            ->orderBy('sort')
            ->paginate(config('maven.per_page'));

        return view('maven.index', [
            'page_title' => trans('maven.list'),
            'maven_items' => $maven_items,
            'sort_values' => [],
            'tag_values' => [],
            'message' => $message,
            'current_locale' => Maven::getLocale()
        ]);

    }
    public function view() {

        $message = '';

        $maven_items= DB::table('maven_faqs')
            ->join('maven_tags','maven_faqs.id','=','maven_tags.faq_id')
            ->select(DB::raw('maven_faqs.question as question,maven_faqs.answer as answer, maven_tags.tag as tag'))
            ->whereNull('maven_faqs.deleted_at')
            ->get();

        $maven_tags = DB::table('maven_tags')
            ->distinct()
            ->select(DB::raw('maven_tags.tag as tag'))
            ->get();

/*        $maven_items = MavenUniqueKey::with('faq.tags')
            ->neatness()
            ->smoothness()
            ->orderBy('sort')
            ->paginate(config('maven.per_page'));*/

/*        return view('maven.view', [
            'page_title' => trans('maven.list'),
            'maven_items' => $maven_items,
            'sort_values' => [],
            'tag_values' => [],
            'message' => $message,
            'current_locale' => Maven::getLocale()
        ]);*/
        return view('maven.view',compact('maven_items','maven_tags'));

    }
    public function create() {
        $maven_item = new MavenUniqueKey;

        return view('maven.input', [
            'page_title' => trans('maven.add'),
            'sort_options' => MavenUniqueKey::selectOptions(),
            'tag_values' => [],
            'locales' => MavenLocale::options(),
            'current_locale' => Maven::getLocale(),
            'maven_item' => $maven_item,
            'mode' => 'store'
        ]);

    }

    public function store(Requests\MavenRequest $request) {
        $unique_key = new MavenUniqueKey;
        $unique_key->unique_key = $this->getUniqueKey();
        $unique_key->sort = $request->sort;
        $unique_key->draft_flag = $request->has('draft_flag');
        $unique_key->save();
        $this->saveSubData($unique_key->id, $request);

        \Cahen::move($unique_key)->to('sort', $request->sort);
        /*return redirect()->route('maven.edit', $unique_key->id)->with('success', trans('maven.complete'));*/
        return redirect()->route('maven.index')->with('success', trans('maven.complete'));
    }

    public function edit($id) {
        $maven_item = MavenUniqueKey::with('faqs')->find($id);
        $faqs = $maven_item->faqs->keyBy('locale');

        return view('maven.input', [
            'page_title' => trans('maven.edit'),
            'sort_options' => MavenUniqueKey::selectOptions(),
            'tag_values' => [],
            'locales' => MavenLocale::options(),
            'current_locale' => Maven::getLocale(),
            'maven_item' => $maven_item,
            'faqs' => $faqs,
            'mode' => 'update'
        ]);

    }

    public function update(Request $request, $id) {
        $unique_key = MavenUniqueKey::find($id);
        $unique_key->unique_key = $this->getUniqueKey();
        $unique_key->sort = $request->sort;
        $unique_key->draft_flag = $request->has('draft_flag');
        $unique_key->save();
        $this->saveSubData($unique_key->id, $request);

        \Cahen::move($unique_key)->to('sort', $request->sort);
        /*return back()->with('success', trans('maven.complete'));*/
        return redirect()->route('maven.index')->with('success', trans('maven.complete'));
    }

    public function destroy($id) {
        $maven_item = MavenUniqueKey::find($id);
        $maven_item->delete();

        $maven_items = MavenUniqueKey::orderBy('sort')->get();
        \Cahen::align($maven_items, 'sort');

        /*return back()->with('success', trans('maven.complete'));*/
        return redirect()->route('maven.index')->with('success', trans('maven.complete'));

    }

    public function locale($locale) {

        Maven::setLocale($locale);
        return redirect()->route('maven.index');

    }

    private function getUniqueKey() {

        return str_random(32);

    }

    private function saveSubData($unique_key_id, $request) {

        foreach (config('maven.locales') as $locale => $name) {

            $faq = MavenFaq::FirstOrNew([
                'unique_key_id' => $unique_key_id,
                'locale' => $locale
            ]);
            $faq->unique_key_id = $unique_key_id;
            $faq->question = $request->questions[$locale];
            $faq->answer = $request->answers[$locale];
            $faq->locale = $locale;
            $faq->save();

            MavenTag::where('faq_id', $faq->id)->delete();

            if(!empty($request->tags[$locale])) {

                $locale_tags = explode(',', $request->tags[$locale]);

                foreach ($locale_tags as $locale_tag) {

                    $tag = new MavenTag;
                    $tag->unique_key_id = $unique_key_id;
                    $tag->faq_id = $faq->id;
                    $tag->tag = $locale_tag;
                    $tag->save();

                }

            }

        }

    }

}
