<div class="header">
  <div>
    <a data-pjax href="{{ route('root') }}">
      <img src="{{ asset('assets/logo.png')}}" />
    </a>
  </div>
  <div class="type">
    <div class="type-active">
      <img src="{{ asset('/assets/home.png') }}" />
      <span onclick="window.location.href=`{{ route('root') }}`"><a data-pjax
           href="{{ route('root') }}">Forum</a></span>
    </div>
    <div>
      <img src="{{ asset('/assets/gift.png') }}" />
      <span><a data-pjax href="https://www.flexispot.com/freetrial_return">Testting</a></span>
    </div>
    <div>
      <img src="{{ asset('/assets/uplod.png') }}" />
      <span>
        @if (is_mobile())
        <a data-pjax href="{{ route('topics.create') }}">Topic</a>
        @else
        <a data-pjax href="https://www.flexispot.com/">Shop</a>
        @endif
      </span>
    </div>
  </div>
  @guest
  <div class="login">
    <div class="login-not">
      {{--
      <div class="new_post">
        <a href="./new.html">
          <span class="plus-img"></span>
        </a>
        <span style="margin: 0 4px; color: #999">|</span>
      </div>
      --}}
      <div class="login-box">
        <a data-pjax href="{{ route('login') }}"><span style="color: #fff">Log in</span></a>
      </div>
      <span class="hamburg-menu" onclick="toggleMenu()">
        <span></span><span></span><span></span>
      </span>
    </div>
  </div>
  @else
  <div class="login">
    <div class="new_post">
      <a data-pjax href="{{ route('topics.create') }}">
        <span class="plus-img"></span>
      </a>
      <span style="margin: 0 4px; color: #999">|</span>
    </div>

    <div class="login-yes">
      <a data-pjax href="{{ route('notifications.index') }}"
         class="{{ Auth::user()->notification_count > 0 ? 'message-red' : 'message' }}">{{ Auth::user()->notification_count }}</a>
      <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" id="avatars">
    </div>

    <div id="news">
      <div class="news-title">
        <div class="news-title-line">
          <a data-pjax href="{{ route('users.show', Auth::id()) }}"
             class="{{ active_navbar_class(if_route('users.show',Auth::id()) && if_query('tab',null)) }}">
            <img src="{{ asset('assets/login.png')}}" alt="">
            Individual
          </a>
        </div>

        <div class="news-title-line">
          <a data-pjax href="{{ route('users.show',[Auth::id(), 'tab' => 'collects'])}}"
             class="{{ active_navbar_class(if_query('tab', 'collects')) }}">
            <img src="/assets/collect.png" alt="">Collect
          </a>
        </div>

        <div class="news-title-line">
          <a data-pjax href="{{ route('users.edit', Auth::id()) }}"
             class="{{ active_navbar_class(if_route('users.edit',Auth::id())) }}">
            <img src="/assets/pen.png" alt="">
            Edit
          </a>
        </div>
      </div>

      <div class="news-bottom">
        <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Are you sure to log out?');">
          @csrf
          <button type="submit">QUit</button>
        </form>
      </div>

    </div>
  </div>
  @endguest
</div>
@auth
<script src="{{ asset('js/header.js') }}"></script>
@endauth
