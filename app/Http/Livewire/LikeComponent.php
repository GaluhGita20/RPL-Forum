<?php

namespace App\Http\Livewire;

use App\Models\UserLikeTopic;
use App\Models\Topic;
use Livewire\Component;

class LikeComponent extends Component
{
    public $topicId;
    public $totalLike;
    public $isLiked;


    function mount()
    {
        $this->totalLike = UserLikeTopic::whereTopicId($this->topicId)->count();
        $this->isLiked();
    }

    public function render()
    {
        return view('livewire.like-component');
    }

    public function userLike()
    {
        if (!UserLikeTopic::whereUserId(auth()->user()->id)->whereTopicId($this->topicId)->exists()) {
            UserLikeTopic::create([
                'user_id' => auth()->user()->id,
                'topic_id' => $this->topicId,
            ]);
            Topic::where('id_topic', '=', $this->topicId)->increment('total_likes');
        } else {
            UserLikeTopic::whereUserId(auth()->user()->id)->whereTopicId($this->topicId)->delete();
            Topic::where('id_topic', '=', $this->topicId)->decrement('total_likes');
        }
        $this->totalLike = UserLikeTopic::whereTopicId($this->topicId)->count();
        $this->isLiked();
    }

    public function isLiked()
    {
        return $this->isLiked = UserLikeTopic::whereUserId(auth()->user()->id)->whereTopicId($this->topicId)->exists() ? true : false;
    }
}
