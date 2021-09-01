<div class="post_title">
  <span class="title_text">
    {{ $topic->title }}
    <span class="share_btn" onclick="openAlert()"></span>
  </span>
  <div class="copy_box">
    <span class="title">post #1</span>
    <span class="link">{{ Request::url() }}</span>
    <span class="icons">
      <a class="addthis_button_twitter" href="#"> <img src="/assets/bird.png"></a>
      <a class="addthis_button_facebook" href="#"><img src="/assets/face.png"> </a>
      <a class="linkedin_share" href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ Request::url() }}&amp;title={{ $topic->title }}">
      <img src="/assets/ins@2x.png"></a>
      <img src="/assets/x.png" onclick="closeAlert()" alt="">
    </span>
  </div>
</div>
<p class="tags">
  <a href="{{ route('categories.show',$topic->category) }}">
    <span class="tag">{{ $topic->category->name }}</span>
  </a>
  <span class="tag" style="background-color: #F65442;">Topic</span>
</p>
