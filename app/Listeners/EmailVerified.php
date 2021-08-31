<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EmailVerified
{
    public function handle(Verified $event)
    {
        // 会话里闪存认证成功后的消息提醒 邮箱验证成功
        session()->flash('success', 'Email verification succeeded! ^_^');
    }
}
