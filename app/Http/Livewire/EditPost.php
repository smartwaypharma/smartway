<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPost extends Component
{
    use WithFileUploads;

    public $model;
    public $tags;
    public $heroImageForDesktop;
    public $heroImageForMobile;
    public $moreArticles;
    public $articlesData;
    public $firstTeamMemberImage;
    public $secondTeamMemberImage;
    public $pdf;
    public $post_body;
    public $text_under_pdf;

    public $rules = [
        'model.title' => 'required|string|max:255|unique:posts,title',
        'model.slug' => 'required|string|max:255|unique:posts,slug',
        'model.category_id' => 'required',
        'tags' => 'required',
        'moreArticles' => 'nullable|array|max:3',
        'heroImageForDesktop' => 'nullable|image|max:5000',
        'heroImageForMobile' => 'nullable|image|max:5000',
        'post_body' => 'required',
        'text_under_pdf' => 'nullable|string|max:65535',
        'firstTeamMemberImage' => 'nullable|image|max:5000',
        'model.first_team_member_name' => 'nullable|string',
        'model.first_team_member_position' => 'nullable|string',
        'model.first_team_member_text' => 'nullable|string|max:65535',
        'secondTeamMemberImage' => 'nullable|image|max:5000',
        'model.second_team_member_name' => 'nullable|string',
        'model.second_team_member_position' => 'nullable|string',
        'model.second_team_member_text' => 'nullable|string|max:65535',
        'pdf' => 'nullable|mimes:pdf|max:2000',
        'model.webinar_link' => 'nullable|url',
        'model.contactus_popup' => 'nullable',
        'model.metaTitle' => 'required|nullable|string',
        'model.metaDescription' => 'required|nullable|string',
        'model.metaKeyword' => 'required|nullable|string'
    ];

    public function render()
    {
        $categories = \App\Models\Category::all();
        $filters = \App\Models\Filter::all();

        return view('livewire.edit-post', compact('categories', 'filters'));
    }

    public function mount($id)
    {
        $this->model = \App\Models\Post::find($id);
        $this->tags = $this->model->tags->pluck('id');
        $this->moreArticles = array_filter([
            $this->model->first_post_id,
            $this->model->second_post_id,
            $this->model->third_post_id,
        ]);
        $this->post_body = $this->model->post_body;
        $this->text_under_pdf = $this->model->text_under_pdf;
        $this->articlesData = \App\Models\Post::select('id', 'title as text')
            ->whereIn('id', $this->moreArticles)
            ->get()
            ->toArray();

        $this->rules['model.title'] .= ',' . $id;
        $this->rules['model.slug'] .= ',' . $id;
    }

    public function slugify()
    {
        $this->model->slug = Str::slug($this->model->title);
    }

    public function save()
    {
        $this->validate();

        if ($this->model->category_id == 2) {
            $this->validate([
                'model.text_under_pdf' => 'required|string|max:65535'
            ]);
        }

        if ($this->model->category_id == 3) {
            $this->validate([
                'model.webinar_link' => 'required|url'
            ]);
        }

        if ($this->model->category_id == 2 || $this->model->category_id == 3) {
            $this->validate([
                'model.first_team_member_name' => 'required|string',
                'model.first_team_member_position' => 'required|string',
                'model.first_team_member_text' => 'required|string|max:65535',
                'model.second_team_member_name' => 'required|string',
                'model.second_team_member_position' => 'required|string',
                'model.second_team_member_text' => 'required|string|max:65535',
            ]);
        }

        if ($this->heroImageForDesktop) {
            Storage::disk('public')->delete($this->model->hero_image_for_desktop);

            $filename = uniqid() . '.' . $this->heroImageForDesktop->getClientOriginalExtension();
            $this->model->hero_image_for_desktop = $this->heroImageForDesktop->storeAs('posts', $filename, 'public');
        }

        if ($this->heroImageForMobile) {
            Storage::disk('public')->delete($this->model->hero_image_for_mobile);

            $filename = uniqid() . '.' . $this->heroImageForMobile->getClientOriginalExtension();
            $this->model->hero_image_for_mobile = $this->heroImageForMobile->storeAs('posts', $filename, 'public');
        }

        if ($this->firstTeamMemberImage) {
            Storage::disk('public')->delete($this->model->first_team_member_image);

            $filename = uniqid() . '.' . $this->firstTeamMemberImage->getClientOriginalExtension();
            $this->model->first_team_member_image = $this->firstTeamMemberImage->storeAs('team-members', $filename, 'public');
        }

        if ($this->secondTeamMemberImage) {
            Storage::disk('public')->delete($this->model->second_team_member_image);

            $filename = uniqid() . '.' . $this->secondTeamMemberImage->getClientOriginalExtension();
            $this->model->second_team_member_image = $this->secondTeamMemberImage->storeAs('team-members', $filename, 'public');
        }

        if ($this->pdf) {
            Storage::disk('public')->delete($this->model->pdf);

            $filename = uniqid() . '.' . $this->pdf->getClientOriginalExtension();
            $this->model->pdf = $this->pdf->storeAs('pdf', $filename, 'public');
        }
        if($this->post_body){
            $this->model->post_body = $this->post_body;
        }

        $this->model->text_under_pdf = $this->text_under_pdf;

        if ($this->moreArticles) {
            foreach ($this->moreArticles as $key => $value) {
                switch ($key){
                    case 0:
                        $this->model->first_post_id = $value;
                        break;
                    case 1:
                        $this->model->second_post_id = $value;
                        break;
                    case 2:
                        $this->model->third_post_id = $value;
                        break;
                }
            }
        }
        if($this->model->contactus_popup == ""){
            $this->model->contactus_popup = Null;
        }

        /*$this->model->post_body = $this->post_body;
        $this->model->text_under_pdf = $this->text_under_pdf;*/
        if ($this->model->save()) {
            $this->model->tags()->sync($this->tags);
        }

        session()->flash('message', 'Post successfully updated.');

        return redirect()->route('admin.post');
    }
}
