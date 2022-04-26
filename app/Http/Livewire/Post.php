<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Post extends Component
{
    public function render()
    {
        return view('livewire.post', [
            'records' => \App\Models\Post::paginate(20),
        ]);
    }

    public function delete($id)
    {
        $post = \App\Models\Post::find($id);

        Storage::disk('public')->delete([
            $post->hero_image_for_desktop,
            $post->hero_image_for_mobile,
            $post->first_team_member_image,
            $post->second_team_member_image
        ]);

        $post->delete();

        session()->flash('message', 'Post successfully deleted.');
    }
}
