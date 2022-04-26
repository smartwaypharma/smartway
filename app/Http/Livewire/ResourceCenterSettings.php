<?php

namespace App\Http\Livewire;

use App\Models\Settings;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ResourceCenterSettings extends Component
{
    public $latestBlogTitle;
    public $ourLatestBlogLink;
    public $data;

    public $rules = [
        'latestBlogTitle.value' => 'required|string',
        'ourLatestBlogLink.value' => 'required|url',
    ];

    public function render()
    {
        return view('livewire.resource-center-settings');
    }

    public function mount()
    {
        $this->latestBlogTitle = Settings::where('key', 'latest-blog-title')->first();
        $this->ourLatestBlogLink = Settings::where('key', 'our-latest-blog-link')->first();

        if (!$this->latestBlogTitle) {
            $this->latestBlogTitle = new Settings();
        }

        if (!$this->ourLatestBlogLink) {
            $this->ourLatestBlogLink = new Settings();
        }
    }

    public function save()
    {
        $this->validate();

        $this->latestBlogTitle->key = 'latest-blog-title';
        $this->latestBlogTitle->save();

        $this->ourLatestBlogLink->key = 'our-latest-blog-link';
        $this->ourLatestBlogLink->save();
    }
}
