<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\PageContents;
use App\Models\Tips;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function index()
    {
        $contents = PageContents::all();
        $sortedMenu = collect($contents['0']->items['menu'])->sortBy('order');
        return view('web.landing.index', compact('contents', 'sortedMenu'));
    }

    public function tips($slug)
    {
        $contents = PageContents::all();
        $sortedMenu = collect($contents['0']->items['menu'])->sortBy('order');

        $tips = new Tips();
        $selectedCards = $tips->randomCards($slug);

        if ($slug == 'clear-goal') {
            return view('web.landing.pages.tips.clearGoal', compact('contents', 'sortedMenu', 'selectedCards'));
        } elseif ($slug == 'quality-content') {
            return view('web.landing.pages.tips.qualityContent', compact('contents', 'sortedMenu', 'selectedCards'));
        } elseif ($slug == 'user-friendly') {
            return view('web.landing.pages.tips.userFriendly', compact('contents', 'sortedMenu', 'selectedCards'));
        } elseif ($slug == 'easy-navigation') {
            return view('web.landing.pages.tips.easyNavigation', compact('contents', 'sortedMenu', 'selectedCards'));
        } elseif ($slug == 'seo-optimization') {
            return view('web.landing.pages.tips.seoOptimization', compact('contents', 'sortedMenu', 'selectedCards'));
        } elseif ($slug == 'responsive-design') {
            return view('web.landing.pages.tips.responsiveDesign', compact('contents', 'sortedMenu', 'selectedCards'));
        }
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);
        Feedback::create($request->all());
        return response()->json(['message' => 'Feedback submitted successfully', 'success' => true]);
    }


    // public function removeBackground(Request $request)
    // {
    //     $request->validate([
    //         'file' => 'required|image',
    //     ]);

    //     $file = $request->file('file');
    //     $filePath = $file->getPathname();

    //     $secretKey = config('services.background_removal.secret_key');
    //     $response = Http::withHeaders([
    //         'X-Api-Key' => $secretKey
    //     ])->attach(
    //         'file',
    //         file_get_contents($filePath),
    //         $file->getClientOriginalName()
    //     )->post('http://localhost:5000/remove_background');

    //     if ($response->failed()) {
    //         return response()->json(['error' => 'Error processing the image.'], 500);
    //     }

    //     return response($response->body(), 200)->header('Content-Type', 'image/png');
    // }
}
