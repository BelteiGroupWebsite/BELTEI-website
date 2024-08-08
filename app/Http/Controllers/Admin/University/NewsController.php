<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\University\News;
use App\Models\University\NewsDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $news = News::paginate(100);

        return view('web.admin.share.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('web.admin.share.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $languages = Language::get();
        $news = new News;

        $news->date = $request['date'];
        $news->category = $request['category'];

        // Handling file uploads
        if ($request->hasFile('images')) {
            $newsImgs = $request->file('images');
            $newsImgPaths = [];

            // Temporarily save the news to generate the ID
            $news->save();

            foreach ($newsImgs as $newsImg) {
                if ($newsImg->isValid()) {
                    $newImageName = substr(Str::uuid(), 0, 10) . '.' . $newsImg->getClientOriginalExtension();
                    $newsImg->move(public_path('uploaded/university/news/images/' . $news->id), $newImageName);
                    $newsImgPaths[] = $newImageName;
                } else {
                    // Handle invalid file upload
                    return back()->withErrors(['message' => 'Invalid file upload.']);
                }
            }

            // Update the news record with the image paths
            $news->image = implode(',', $newsImgPaths);
            $news->save();
        } else {
            $news->image = '';
            $news->save();
        }

        // Handling multilingual news details
        foreach ($languages as $language) {
            $newsDetail = new NewsDetail();
            $newsDetail->news_id = $news->id;
            $newsDetail->header = $request['header-' . $language->key];
            $newsDetail->description = $request['description-' . $language->key];
            $newsDetail->language_id = $language->id;
            $newsDetail->save();
        }

        return back()->with(['success' => "The News has been created !"]);
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::findOrfail($id);
        $categories = [
            1 => 'contruction_news',
            2 => 'school',
            3 => 'beltei_university',
            4 => 'bir_news',
            5 => 'tour_news',
            6 => 'testcenter_news',
            7 => 'charity_news',
            8 => 'beltei_university',
            9 => 'beltei_university',
            10 => 'beltei_university',
        ];

        // Get the category name based on the news category
        $categoryKey = $news->category;
        if (array_key_exists($categoryKey, $categories)) {
            $category = $categories[$categoryKey];
        } else {
            // Handle case where the category is not found in the array
            abort(404, 'Category not found');
        }
        // Return the appropriate view
        return view("web.client.beltei_university.news.detail", compact('news' , 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $news = News::findOrfail($id);


        return view('web.admin.share.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $languages = Language::get();
        $news = News::findOrFail($id); // Retrieve the existing news record by ID

        $news->date = $request['date'];
        $news->category = $request['category'];

        // Handling file uploads
        if ($request->hasFile('images')) {
            $newsImgs = $request->file('images');
            $newsImgPaths = [];

            foreach (explode(',', $news->image) as $image) {
                $imagePath = public_path('uploaded/university/news/images/' . $news->id . '/' . $image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }


            foreach ($newsImgs as $newsImg) {
                if ($newsImg->isValid()) {
                    $newImageName = substr(Str::uuid(), 0, 10) . '.' . $newsImg->getClientOriginalExtension();
                    $newsImg->move(public_path('uploaded/university/news/images/' . $news->id), $newImageName);
                    $newsImgPaths[] = $newImageName;
                } else {
                    // Handle invalid file upload
                    return back()->withErrors(['message' => 'Invalid file upload.']);
                }
            }

            // Update the news record with the new image paths
            $news->image = implode(',', $newsImgPaths);
        }

        // Update the news record
        $news->save();

        // Handling multilingual news details
        foreach ($languages as $language) {
            $newsDetail = NewsDetail::where('news_id', $news->id)
                ->where('language_id', $language->id)
                ->first();

            if (!$newsDetail) {
                $newsDetail = new NewsDetail();
                $newsDetail->news_id = $news->id;
                $newsDetail->language_id = $language->id;
            }

            $newsDetail->header = $request['header-' . $language->key];
            $newsDetail->description = $request['description-' . $language->key];
            $newsDetail->save();
        }

        return redirect()->route('admin.university.news.index')->with('success', 'News updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
