<div class="every-column">
    <div class="every-column-image">
        <a href="{{ route('users.show', $notification->data['user_id']) }}">
            <img alt="{{ $notification->data['user_name'] }}" src="{{ $notification->data['user_avatar'] }}" style="width:57px;height:57px;border-radius: 50%;" />
        </a>
    </div>

    <div class="every-column-content">
        <div class="title">
            <a href="{{ route('users.show', $notification->data['user_id']) }}">{{ '@'.$notification->data['user_name'] }}</a>
            <span>Praise your Topic</span>
            <a href="{{ $notification->data['topic_link'] }}" class="topic-title" target="_blank">{{ $notification->data['topic_title'] }}</a>
        </div>
        {{--<div class="content">{!! $notification->data['reply_content'] !!}</div>--}}
    </div>

    <div class="every-column-data">
        {{ $notification->created_at->diffForHumans() }}
    </div>
</div>
