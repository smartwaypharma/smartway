<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'post_body',
        'hero_image_for_desktop',
        'hero_image_for_mobile',
        'first_team_member_image',
        'first_team_member_name',
        'first_team_member_position',
        'first_team_member_text',
        'second_team_member_image',
        'second_team_member_name',
        'second_team_member_position',
        'second_team_member_text',
        'text_under_pdf',
        'first_post_id',
        'second_post_id',
        'third_post_id',
        'pdf',
        'webinar_link'
    ];

    public function tags()
    {
        return $this->belongsToMany(Filter::class, 'post_tags', 'post_id', 'tag_id')
            ->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getShortPostBody($count = 50)
    {
        $content = strip_tags($this->post_body);

        for ($i = 50; $i < strlen($content); $i += 50) {
            $temp = substr($content, 0, $i);

            $len = count(explode(' ', strip_tags($temp)));

            if ($len > $count) {
                $tidy = tidy_parse_string($temp . '...');
                $tidy->cleanRepair();
                $body = $tidy->Body();

                return substr($body, 6, -8);
            }
        }

        return $content;
    }
}
