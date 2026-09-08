<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $query = Slider::query();
        
        if (request('q')) {
            $query->where('heading', 'like', '%' . request('q') . '%');
        }

        $sliders = $query->orderBy('priority', 'asc')->latest()->paginate(10);
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_desktop' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_tablet' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_mobile' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'image_caption' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'btn_text' => 'nullable|string|max:255',
            'btn_url' => 'nullable|string|max:255',
            'priority' => 'nullable|integer',
        ]);

        $data = $request->except(['_token', 'image_desktop', 'image_tablet', 'image_mobile']);
        $data['is_active'] = $request->has('is_active');
        $data['created_by'] = auth()->id();
        $data['priority'] = $request->priority ?? 0;

        if ($request->hasFile('image_desktop')) {
            $data['image_desktop'] = $request->file('image_desktop')->store('sliders', 'public');
        }
        if ($request->hasFile('image_tablet')) {
            $data['image_tablet'] = $request->file('image_tablet')->store('sliders', 'public');
        }
        if ($request->hasFile('image_mobile')) {
            $data['image_mobile'] = $request->file('image_mobile')->store('sliders', 'public');
        }

        Slider::create($data);

        return redirect()->route('admin.sliders.index')->with('status', 'Slider created successfully.');
    }

    public function show(Slider $slider)
    {
        return abort(404);
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'image_desktop' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_tablet' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_mobile' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'image_caption' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'btn_text' => 'nullable|string|max:255',
            'btn_url' => 'nullable|string|max:255',
            'priority' => 'nullable|integer',
        ]);

        $data = $request->except(['_token', '_method', 'image_desktop', 'image_tablet', 'image_mobile']);
        $data['is_active'] = $request->has('is_active');
        $data['priority'] = $request->priority ?? 0;

        if ($request->hasFile('image_desktop')) {
            if ($slider->image_desktop) Storage::disk('public')->delete($slider->image_desktop);
            $data['image_desktop'] = $request->file('image_desktop')->store('sliders', 'public');
        }
        if ($request->hasFile('image_tablet')) {
            if ($slider->image_tablet) Storage::disk('public')->delete($slider->image_tablet);
            $data['image_tablet'] = $request->file('image_tablet')->store('sliders', 'public');
        }
        if ($request->hasFile('image_mobile')) {
            if ($slider->image_mobile) Storage::disk('public')->delete($slider->image_mobile);
            $data['image_mobile'] = $request->file('image_mobile')->store('sliders', 'public');
        }

        $slider->update($data);

        return redirect()->route('admin.sliders.index')->with('status', 'Slider updated successfully.');
    }

    public function destroy(Slider $slider)
    {
        if ($slider->image_desktop) Storage::disk('public')->delete($slider->image_desktop);
        if ($slider->image_tablet) Storage::disk('public')->delete($slider->image_tablet);
        if ($slider->image_mobile) Storage::disk('public')->delete($slider->image_mobile);
        
        $slider->delete();
        return redirect()->route('admin.sliders.index')->with('status', 'Slider deleted successfully.');
    }
}
