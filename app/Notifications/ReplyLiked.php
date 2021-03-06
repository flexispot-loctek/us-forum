<?php

namespace App\Notifications;

use Auth;
use App\Models\Reply;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ReplyLiked extends Notification
{
    use Queueable;
    public $reply;

    public function __construct(Reply $reply)
    {
        $this->reply = $reply;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        $topic = $this->reply->topic;
        $link =  $topic->link(['#reply' . $this->reply->id]);

        // 存入数据库里的数据
        return [
            'reply_id' => $this->reply->id,
            'reply_content' => $this->reply->excerpt,
            'user_id' => Auth::id(),
            'user_name' => Auth::user()->name,
            'user_avatar' => Auth::user()->avatar,
            'topic_link' => $link,
            'topic_id' => $topic->id,
            'topic_title' => $topic->title,
        ];
    }
}
