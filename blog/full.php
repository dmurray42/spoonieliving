<!DOCTYPE html>
<!--[if IE 8]><html class="lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>

  <!--Begin Top-->
  <!-- Tumblr-specific --> <!--TODO: Clean this up-->
  {MobileAppHeaders}
  <meta charset="utf-8">
  <title>{Title}{block:SearchPage} ({lang:Search results for SearchQuery}){/block:SearchPage}{block:PermalinkPage}{block:PostSummary} — {PostSummary}{/block:PostSummary}{/block:PermalinkPage}</title>
  {block:Description}
  <meta name="description" content="{MetaDescription}">
  {/block:Description}

  <meta name="theme-color" content="#35465D">
  <link rel="shortcut icon" href="{Favicon}">
  <link rel="apple-touch-icon-precomposed" href="{PortraitURL-128}">
  <link rel="alternate" type="application/rss+xml" href="{RSS}">

  <link rel="stylesheet" href="http://static.tumblr.com/27gzhx7/HGHobgabe/main-min.css">
  {block:IfSyntaxHighlighting}
  <link rel="stylesheet" href="http://static.tumblr.com/ehm1tdz/2VWnye81h/tumblr-highlightjs.css">
  {/block:IfSyntaxHighlighting}

  <!-- HTML5 Shiv -->
  <!--[if lt IE 9]>
  <script src="http://static.tumblr.com/hriofhd/Qj0m8pn7q/html5shiv.js"></script>
  <![endif]-->

  <style>

  /* Colors */
  body {
    background: {BackgroundColor};
  }

  .blog-title {
    font-family: {TitleFont}, "Helvetica Neue", HelveticaNeue, Arial, sans-serif;
    font-weight: {TitleFontWeight};
  }

  .blog-title a,
  .description,
  .search-no-results,
  .likes-no-likes {
    color: {TitleColor};
  }

  a {
    color: {AccentColor};
  }

  #pagination a,
  .nav-wrapper .nav-item .label {
    color: {AccentColor};
  }

  #pagination a.next:after {
    border-left-color: {AccentColor};
  }

  #pagination a.previous:after {
    border-right-color: {AccentColor};
  }

  .loader .loader-bar {
    background-color: {TitleColor};
  }

  .header-image.cover {
    background-image: url({HeaderImage});
  }

  .user-avatar {
    background-color: {BackgroundColor};
    border-color: {BackgroundColor};
  }

  .avatar-style-square .user-avatar {
    -webkit-box-shadow: 0 0 0 4px {BackgroundColor};
    box-shadow: 0 0 0 4px {BackgroundColor};
  }

  .no-header-image .logo-wrapper,
  .contain-header-image .logo-wrapper {
    color: {AccentColor};
  }

  /* Adjust logo for light accents on light backgrounds */
  .light-on-light.no-header-image .logo-wrapper,
  .light-on-light.contain-header-image .logo-wrapper {
    color: #444;
  }

  /* Adjust logo for dark accents on dark backgrounds */
  .dark-on-dark.no-header-image .logo-wrapper,
  .dark-on-dark.contain-header-image .logo-wrapper {
    color: #fff;
  }

  .related-posts-wrapper > h2 {
    color: {TitleColor};
  }

  @media screen and (max-device-width: 568px) {
    .header-image.cover {
      background-image: url({HeaderImage-640});
      -webkit-background-size: cover;
      background-size: cover;
    }

    .avatar-style-square .user-avatar {
      -webkit-box-shadow: 0 0 0 3px {BackgroundColor};
      -moz-box-shadow: 0 0 0 3px {BackgroundColor};
      box-shadow: 0 0 0 3px {BackgroundColor};
    }

  }

  /* Custom CSS */
  {CustomCSS}
  </style>
  <script>
  document.createElement( "picture" );
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Author" content="Diane Murray">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="/css/stylesheet.css">

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75284256-1', 'auto');
  ga('require', 'linkid');
  ga('send', 'pageview');

  </script>

  <!-- Project Wonderful Ad Box Loader -->
  <script type="text/javascript">
  (function(){function pw_load(){
    if(arguments.callee.z)return;else arguments.callee.z=true;
    var d=document;var s=d.createElement('script');
    var x=d.getElementsByTagName('script')[0];
    s.type='text/javascript';s.async=true;
    s.src='//www.projectwonderful.com/pwa.js';
    x.parentNode.insertBefore(s,x);}
    if (window.attachEvent){
      window.attachEvent('DOMContentLoaded',pw_load);
      window.attachEvent('onload',pw_load);}
      else{
        window.addEventListener('DOMContentLoaded',pw_load,false);
        window.addEventListener('load',pw_load,false);}})();
        </script>
        <!-- End Project Wonderful Ad Box Loader -->


        <!--End Top-->

      </head>

      <body data-urlencoded-name="{URLEncodedName}" class="{select:Layout}{block:IndexPage} index-page{/block:IndexPage}{block:PermalinkPage} permalink{/block:PermalinkPage}{block:LikesPage} likes-page{/block:LikesPage}{block:FollowingPage} following-page{/block:FollowingPage}{block:SearchPage} search-page{block:NoSearchResults} no-results{/block:NoSearchResults}{block:NoLikes} no-likes{/block:NoLikes}{block:NoPosts} no-posts{/block:NoPosts}{block:NoFollowing} no-following{/block:NoFollowing}{/block:SearchPage}{block:HideHeaderImage} no-header-image{/block:HideHeaderImage}{block:NoStretchHeaderImage} contain-header-image{/block:NoStretchHeaderImage}{block:IfRelatedPosts} display-related-posts{/block:IfRelatedPosts}">

        <!--Begin Middle-->
        <div class="container">

          <div class="row">

            <div id="header">
              <div class="col-xs-12 col-md-12">
                <a href="http://blog.spoonieliving.com">
                  <picture>
                    <source srcset="../img/header.png" media="(min-width: 800px)" alt="Spoonie Living">
                      <source srcset="../img/headermobile.png">
                        <img srcset="../img/headermobile.png" alt="Spoonie Living">
                      </picture>
                    </a>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-md-12">
                    <div id="navigation" class="navbar navbar-default" role="navigation">

                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-collapse">

                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                      <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                          <li class="nav-item"><a href="http://blog.spoonieliving.com/about">About</a></li>
                          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<b class="caret"></b></a>

                            <ul class="dropdown-menu">
                              <li><a href="http://blog.spoonieliving.com/">Blog Home</a></li>
                              <li><a href="http://blog.spoonieliving.com/tagged/advice">Advice</a></li>
                              <li><a href="http://blog.spoonieliving.com/tagged/review">Reviews</a></li>
                              <li><a href="http://blog.spoonieliving.com/tagged/diy">DIY</a></li>
                              <li><a href="http://blog.spoonieliving.com/tagged/fashion">Fashion</a></li>
                              <li><a href="http://blog.spoonieliving.com/ask">Ask</a></li>
                              <li><a href="http://blog.spoonieliving.com/submit">Submit</a></li>
                            </ul>
                          </li>
                          <li class="nav-item"><a href="../consulting/">Consulting</a></li>
                          <!-- <li class="nav-item"><a href="https://papaly.com/9/vHE5">Resources</a></li> -->
                          <li class="nav-item"><a href="https://dmurring.itch.io/chronicallybadass">Zine</a></li>
                          <li class="nav-item"><a href="http://blog.spoonieliving.com/post/144817718323/image-description-top-banner-reads-introducing">App</a></li>
                          <!-- <li class="nav-item"><a href="../shop">Shop</a></li> -->
                        </ul>

                        <form class="navbar-form navbar-right" role="search" onsubmit="location.href='http://blog.spoonieliving.com/search/' + document.getElementById('myInput').value; return false;">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search"
                            id="myInput">
                          </div>
                          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </form>

                      </div>


                    </div>
                  </div>

                </div>
              </div>


              <div class="row">
                <div id="content">
                  <div class="col-xs-12 col-md-9">
                    <div class="hidden-lg hidden-md">
                      <center>
                        <!-- Project Wonderful Ad Box Code -->
                        <div id="pw_adbox_79494_6_0"></div>
                        <script type="text/javascript"></script>
                        <noscript><map name="admap79494" id="admap79494"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=79494&type=6" shape="rect" coords="0,0,234,60" title="" alt="" target="_blank" rel="noopener noreferrer" /></map>
                          <table cellpadding="0" cellspacing="0" style="width:234px;border-style:none;background-color:#ffffff;"><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=79494&type=6" style="width:234px;height:60px;border-style:none;" usemap="#admap79494" alt="" /></td></tr><tr><td style="background-color:#ffffff;" colspan="1"><center><a style="font-size:10px;color:#8C4646;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=79494&type=6&tag=117806" target="_blank">Ads by Project Wonderful!  Your ad could be here, right now.</a></center></td></tr></table>
                        </noscript>
                        <!-- End Project Wonderful Ad Box Code -->
                      </center>
                    </div>

                    <!--End Middle-->

                    <section id="page">
                      <div class="logo-wrapper">
                        <a class="t-logo" href="https://www.tumblr.com/?referring_blog={URLEncodedName}&amp;referer=optica" target="_blank">
                          <svg class="svg-logo" width="29px" height="39px" viewBox="0 0 29 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <path class="large-shadow" d="M21.9956664,26.3 L21.9956664,19.0055544 L27.9954227,19.0055542 L27.9954227,13.0048828 L27.9954227,11.0108643 L23.522766,11.0108643 L23.5540067,11.6669807 L23.7388305,15.5486452 L17.6832886,15.4792482 L17.4,24 C17.5,26.3 18.8,26.5 19.8,26.5 C20.2,26.5 21.4956664,26.4 21.9956664,26.3 Z M18.7154541,4.00225829 L17.4,2.9 L17.4,8 L22.000122,7.34490957 L22.000122,4.00225829 L18.7154541,4.00225829 Z M24.3,29.6 L24.9,31.5 C23.8,32.9 21,34 18.4,34 L18.1,34 C16.3,34 14.8,33.7 13.6,33.2 C15,35.4 17.5999998,38.0021971 21.7999998,38.0021971 C21.7999996,38.6099361 22.0022113,38.0021971 22.0999998,38.0021971 C24.6999998,38.0021971 27.4,36.1 28.6,34.7 L26.7,28.8 C26,29.2 25.1,29.5 24.3,29.6 Z" id="Shape" fill="#000000"></path>
                              <path class="inner" d="M18.5,33.6 L18.3,33.6 C11.1,33.6 9,28.2005493 9,25.0005493 L9,15 C8.58245849,15 4.99298096,15 5,15 L4.99298096,10.0285034 C4.99298096,9.92850342 5.1,9.9 5.2,9.9 C8.9,8.5 11.3,6.7 11.9,2.3 C11.8,2 12,2 12,2 L16.8,2 L17,2 L17,9.00006104 L23.012207,9.00006104 L23.012207,15 L17,15 L17,24.0839844 C17,26.1839844 17.8,27.3 19.8,27.3 C20.6,27.3 21.5,27.1 22.4,26.8 C22.5,26.8 22.6,26.8 22.6,26.9 L24.1,31.3 L24.1,31.7 C23,32.8 20.7,33.6 18.5,33.6 Z"></path>
                              <path class="outer" d="M26.1,32.2 L26.3,31.9 L23.9,25.1 C23.9,25 23.8,25 23.8,25 L19.2,25 C19.1,25 19,25.1 19,25 C18.9,24.8 19,24.4 19,24.1 L19,17 L25,17 L25,7 C25,7 19,7 19,7 L19,0 L8,0 C7.3,0 6.4,0.8 6.3,1.8 C5.8,5.9 4.1,7.5 0.5,8.7 L0.1,8.8 C0,8.9 0,8.9 0,9 L0,17.0000006 C0,17.1000006 0.1,17 0.1,17 L4,17 L4,24.8 C4,31.8 8.46560059,36.0067139 17.3656006,36.0067139 C22.0656006,36.0067139 25,33.7 26.1,32.2 Z M18.5,33.6 L18.3,33.6 C11.1,33.6 9,28.2005493 9,25.0005493 L9,15 C8.58245849,15 4.99298096,15 5,15 L4.99298096,10.0285034 C4.99298096,9.92850342 5.1,9.9 5.2,9.9 C8.9,8.5 11.3,6.7 11.9,2.3 C11.8,2 12,2 12,2 L16.8,2 L17,2 L17,9.00006104 L23.012207,9.00006104 L23.012207,15 L17,15 L17,24.0839844 C17,26.1839844 17.8,27.3 19.8,27.3 C20.6,27.3 21.5,27.1 22.4,26.8 C22.5,26.8 22.6,26.8 22.6,26.9 L24.1,31.3 L24.1,31.7 C23,32.8 20.7,33.6 18.5,33.6 Z"></path>
                              <path class="small-shadow" d="M4,19 L7,19 L7,17.0833333 C7,17 6.9,17 6.9,17 L4,17 L4,19 L4,19 Z" opacity="0.5" fill="#37465D"></path>
                            </g>
                          </svg>
                        </a>
                      </div>
                      <div class="header-wrapper
                      {block:HideTitle}{block:HideDescription}no-title-desc {/block:HideDescription}{/block:HideTitle}
                      {block:HideHeaderImage}no-image {/block:HideHeaderImage}
                      {block:HideAvatar}avatar-hidden{/block:HideAvatar}
                      {block:ShowAvatar}avatar-style-{AvatarShape}{/block:ShowAvatar}">

                      <header id="header" class="top-blog-header">
                        {block:ShowHeaderImage}
                        <div class="header-image-wrapper {block:NoStretchHeaderImage}contain{/block:NoStretchHeaderImage}">
                          <a href="/" class="header-image {block:IfSlidingHeader}parallax{/block:IfSlidingHeader} {block:StretchHeaderImage}cover{/block:StretchHeaderImage} {block:NoStretchHeaderImage}contain{/block:NoStretchHeaderImage}" data-bg-image="{HeaderImage}">
                            {block:NoStretchHeaderImage}
                            <img src="{HeaderImage}" alt="">
                            {/block:NoStretchHeaderImage}
                          </a>
                          <div class="loader-bg"></div>
                        </div>
                        {/block:ShowHeaderImage}

                        <div class="blog-title-wrapper content">
                          <figure class="avatar-wrapper{block:IndexPage} animate{/block:IndexPage}">
                            <a href="/" style="background-image: url({PortraitURL-128})" class="user-avatar"><img src="{PortraitURL-128}" alt="" class="print-only invisible"></a>
                          </figure>

                          <div class="title-group{block:IndexPage} animate{/block:IndexPage}">
                            {block:ShowTitle}
                            <h1 class="blog-title"><a href="/">{Title}</a></h1>
                            {/block:ShowTitle}
                            {block:ShowDescription}
                            <span class="description">
                              {Description}
                            </span>
                            {/block:ShowDescription}

                          </div>
                        </div>
                      </header>
                    </div>
                    {block:SearchPage}
                    {block:NoSearchResults}
                    <div class="search-no-results content">
                      {lang:Sorry no search results found}.
                    </div>
                    {/block:NoSearchResults}
                    {/block:SearchPage}
                    {block:LikesPage}
                    {block:NoLikes}
                    <div class="likes-no-likes content"></div>
                    {/block:NoLikes}
                    {/block:LikesPage}
                    {block:FollowingPage}
                    {block:NoFollowing}
                    <div class="following-no-following content"></div>
                    {/block:NoFollowing}
                    {/block:FollowingPage}
                    {block:IndexPage}
                    {block:NoPosts}
                    <div class="posts-no-posts content"></div>
                    {/block:NoPosts}
                    {/block:IndexPage}

                    <section id="posts" class="content clearfix {block:HideTitle}{block:HideDescription}no-title-desc {/block:HideDescription}{/block:HideTitle}{block:HideHeaderImage}no-image {/block:HideHeaderImage} {block:ShowAvatar}avatar-style-{AvatarShape}{/block:ShowAvatar} {block:HideAvatar}avatar-hidden{/block:HideAvatar} {block:IfShowNavigation}show-nav{/block:IfShowNavigation}">

                      <div>
                        {block:Posts inlineMediaWidth="700" inlineNestedMediaWidth="700"}
                        {block:Date}
                        <a href="{Permalink}" title="{TimeAgo}" class="meta-item post-date">{ShortMonth} {DayOfMonth}{DayOfMonthSuffix}, {Year}</a>
                        <br>
                        {/block:Date}
                        <article class="{block:Text}text {/block:Text}{block:Photoset}photoset {/block:Photoset}{block:Photo}photo {/block:Photo}{block:RebloggedFrom}reblogged {/block:RebloggedFrom}{block:Quote}quote {/block:Quote}{block:Link}link {/block:Link}{block:Chat}chat {/block:Chat}{block:Audio}audio {/block:Audio}{block:Video}video {/block:Video}{block:Answer}answer {/block:Answer}{block:Date}not-page post-{PostID}{/block:Date} {block:PermalinkPage} active exposed{/block:PermalinkPage}" {block:Date}data-post-id="{PostID}"{/block:Date}>
                          <div class="post-wrapper clearfix">

                            <header class="post-header">
                              {block:LikesPage}
                              <a class="post-blog" href="{Permalink}"><img class="blog-avatar" src="{PostBlogPortraitURL-30}">{PostBlogName}</a>
                              {/block:LikesPage}
                              {block:RebloggedFrom}
                              <a class="reblog-link" href="{ReblogParentURL}"><i class="reblog_sm"></i>{ReblogParentName}</a>
                              {/block:RebloggedFrom}
                            </header>


                            <section class="post">

                              {block:Text}
                              <div class="post-content">
                                {block:Title}<h2 class="title"><a href="{Permalink}">{Title}</a></h2>{/block:Title}
                                {block:Body}
                                <div class="body-text">
                                  {Body}
                                </div>
                                {/block:Body}
                              </div>
                              {/block:Text}

                              {block:Photo}
                              <figure class="post-content {block:HighRes}high-res{/block:HighRes}{block:Caption} with-caption{/block:Caption}" data-photo-width="{PhotoWidth-HighRes}">
                                <div class="photo-wrapper">
                                  <div class="photo-wrapper-inner">
                                    {LinkOpenTag}<img src="{PhotoURL-HighRes}" alt="{PhotoAlt}" width="{PhotoWidth-HighRes}" height="{PhotoHeight-HighRes}"{block:LivePhoto}data-live-photo="{LivePhotoURL}" data-live-photo-still-image-time="{LivePhotoStillImageTime}"{/block:LivePhoto}>{LinkCloseTag}
                                  </div>
                                </div>
                                {block:Caption}
                                <figcaption class="caption">
                                  {Caption}
                                </figcaption>
                                {/block:Caption}
                              </figure>
                              {/block:Photo}

                              {block:Photoset}
                              <figure class="post-content photoset {block:Caption}with-caption{/block:Caption}">
                                {Photoset}
                                {block:Caption}
                                <figcaption class="caption">
                                  {Caption}
                                </figcaption>
                                {/block:Caption}
                              </figure>
                              {/block:Photoset}

                              {block:Quote}
                              <div class="post-content">
                                <blockquote class="{Length}">
                                  {Quote}
                                </blockquote>
                                {block:Source}
                                <div class="source">{Source}</div>
                                {/block:Source}
                              </div>
                              {/block:Quote}


                              {block:Link}
                              <div class="post-content{block:Description} with-caption{/block:Description}{block:Thumbnail} with-thumbnail{/block:Thumbnail}">
                                <div class="link-wrapper">
                                  <a {Target} href="{URL}" class="link">
                                    {block:Thumbnail}
                                    <div class="link-thumbnail"><img src="{Thumbnail-HighRes}" alt="" /></div>
                                    {/block:Thumbnail}
                                    <div class="link-text-wrapper clearfix">
                                      <div class="link-text">
                                        {block:Host}
                                        <div class="link-host">{Host}</div>
                                        {/block:Host}
                                        <h2 class="link-title">{Name}</h2>
                                        {block:Excerpt}
                                        <div class="link-excerpt">{Excerpt}</div>
                                        {/block:Excerpt}
                                        {block:Author}
                                        <div class="link-author">{Author}</div>
                                        {/block:Author}
                                      </div>
                                    </div>
                                  </a>
                                </div>
                                {block:Description}
                                <div class="caption">
                                  {Description}
                                </div>
                                {/block:Description}
                              </div>
                              {/block:Link}


                              {block:Chat}
                              <div class="post-content">
                                {block:Title}<h2 class="title"><a href="{Permalink}">{Title}</a></h2>{/block:Title}
                                <ul class="conversation">
                                  {block:Lines}
                                  <li class="chat-{Alt}">{block:Label}<span class="label">{Label}</span>{/block:Label} {Line}</li>
                                  {/block:Lines}
                                </ul>
                              </div>
                              {/block:Chat}


                              {block:Audio}
                              <div class="post-content {block:Caption}with-caption{/block:Caption}">
                                <div class="audio_container">
                                  {block:AudioEmbed}
                                  {AudioEmbed color="white"}
                                  {/block:AudioEmbed}
                                </div>
                                {block:Caption}
                                <div class="caption">
                                  {Caption}
                                </div>
                                {/block:Caption}
                              </div>
                              {/block:Audio}


                              {block:Video}
                              <figure class="post-content {block:Caption}with-caption{/block:Caption}">
                                <div class="video-wrapper">
                                  {Video-700}
                                </div>
                                {block:Caption}
                                <figcaption class="caption">
                                  {Caption}
                                </figcaption>
                                {/block:Caption}
                              </figure>
                              {/block:Video}

                              {block:Answer}
                              <div class="post-content">
                                <div class="note-item note-item-asker">
                                  <div class="text">
                                    <p class="asker"><strong>{Asker}</strong> asked:</p>
                                    <div class="asker-question">
                                      {Question}
                                    </div>
                                  </div>
                                  <div class="avatar">
                                    <img class="asker-avatar" src="{AskerPortraitURL-96}" alt="">
                                  </div>
                                </div>

                                {block:Answerer}
                                <div class="note-item note-item-answerer">
                                  <div class="text">
                                    <p class="answerer"><strong>{Answerer}</strong> answered:</p>
                                    <div class="answerer-answer">
                                      {Answer}
                                    </div>
                                  </div>
                                  <div class="avatar">
                                    <img class="answerer-avatar" src="{AnswererPortraitURL-96}" alt="">
                                  </div>
                                </div>
                                {/block:Answerer}

                                <div class="replies">
                                  {Replies}
                                </div>
                              </div>
                              {/block:Answer}

                              <section class="inline-meta post-extra{block:RebloggedFrom} has-reblog{/block:RebloggedFrom}{block:ContentSource} has-source{/block:ContentSource}{block:HasTags} has-tags{/block:HasTags}">
                                {block:RebloggedFrom}
                                <a class="meta-item reblog-link" href="{ReblogParentURL}"><i class="reblog_sm"></i>{ReblogParentName}</a>
                                {/block:RebloggedFrom}
                                {block:ContentSource}
                                <a class="meta-item source-link" href="{SourceURL}">{lang:Source}: {SourceTitle}</a>
                                {/block:ContentSource}
                                {block:HasTags}
                                {block:Tags}
                                <a class="meta-item tag-link" href="{TagURL}">{Tag}</a>
                                {/block:Tags}
                                {/block:HasTags}
                              </section>

                            </section>

                            {block:Date}
                            <section class="panel">
                              <footer class="post-footer">
                                <section class="inline-meta date-notes">
                                  <div class="date-note-wrapper">
                                    {block:NoteCount}
                                    <span class="notes-pop-container">
                                      <a href="{Permalink}#notes" class="meta-item post-notes">{NoteCountWithLabel}</a>
                                    </span>
                                    {/block:NoteCount}

                                  </div>
                                </section>

                                <section class="post-controls">
                                  <div class="controls-wrapper">
                                    <div class="control share-control">
                                      <nav class="pop">
                                        <a href="#" class="share selector"></a>
                                        <div class="pop-menu share-menu south" id="share_{PostID}">
                                          <ul>
                                            <li class="open-in-app"><a href="#" class="share-item open-in-app" data-post="{PostID}">{lang:Open in app}</a></li>
                                            <li><a href="http://facebook.com/sharer.php?u={URLEncodedPermalink}&amp;t={URLEncodedTitle}" class="share-item facebook" target="_blank">{lang:Facebook}</a></li>
                                            <li><a href="https://twitter.com/intent/tweet?text={URLEncodedTweetSummary}" class="share-item twitter" target="_blank">{lang:Tweet}</a></li>
                                            {block:Photo}
                                            <li><a href="//www.pinterest.com/pin/create/button/?url={URLEncodedPermalink}&amp;media={PhotoURL-500}" class="share-item pinterest" target="_blank">{lang:Pinterest}</a></li>
                                            {/block:Photo}
                                            {block:Video}{block:VideoThumbnail}
                                            <li><a href="//www.pinterest.com/pin/create/button/?url={URLEncodedPermalink}&amp;media={VideoThumbnailURL}&amp;is_video=true" class="share-item pinterest" target="_blank">{lang:Pinterest}</a></li>
                                            {/block:VideoThumbnail}{/block:Video}
                                            <li><a href="https://reddit.com/submit?url={URLEncodedPermalink}" class="share-item reddit" target="_blank">{lang:Reddit}</a></li>
                                            <li><a href="mailto:?subject={URLEncodedShareString}&amp;body={URLEncodedMailSummary}" class="share-item mail">{lang:Mail}</a></li>
                                            <li><a href="{EmbedUrl}" class="share-item permalink">{lang:Embed}</a></li>
                                            <li><a href="{Permalink}" class="share-item permalink">{lang:Permalink} <i class="arrow"></i></a></li>
                                          </ul>
                                        </div>
                                      </nav>
                                    </div>
                                    <div class="control reblog-control">{ReblogButton size="24" color="black"}</div>
                                    <div class="control like-control">{LikeButton size="24" color="black"}</div>
                                  </div>
                                </section>
                              </footer>
                            </section>
                            {/block:Date}
                            {block:PermalinkPage}
                            {block:PostNotes}
                            {PostNotes-64}
                            {/block:PostNotes}

                            {block:Date}

                            {block:IfDisqusShortname}
                            <section class="comments">
                              <div id="disqus_thread"></div>
                              <script type="text/javascript">
                              (function() {
                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                dsq.src = 'http://{text:Disqus Shortname}.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                              })();
                              </script>
                              <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript={text:Disqus Shortname}">comments powered by Disqus.</a></noscript>
                              <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
                            </section>
                            {/block:IfDisqusShortname}

                            {/block:Date}

                            {/block:PermalinkPage}
                          </div>
                        </article>
                        {/block:Posts}
                        {block:FollowingPage}
                        {block:Blogs}
                        <div class="blog-card" style="background-color: {BackgroundColor};">
                          <div class="indash-tumblelog-compact">
                            <div class="indash-header-wrapper{block:HideHeaderImage} no-header-image{/block:HideHeaderImage}" style="color: {TitleColor}">
                              <div class="navigation">
                                <div class="navigation-inner">
                                  <h3>
                                    <a href="{BlogURL}" target="_blank" class="blog-name" {block:HideHeaderImage}style="color: {AccentColor};"{/block:HideHeaderImage}>
                                      <span class="name">{Username}</span>
                                    </a>
                                  </h3>
                                </div>
                              </div>
                              {block:ShowHeaderImage}
                              <div class="header-image-wrapper">
                                <div class="header-image{block:StretchHeaderImage} cover{/block:StretchHeaderImage}{block:NoStretchHeaderImage} contain{/block:NoStretchHeaderImage}" style="background-image:url('{HeaderImage}')">
                                  <a href="{BlogURL}" target="_blank">
                                    <img src="{HeaderImage}" alt="{Title}">
                                  </a>
                                </div>
                              </div>
                              {/block:ShowHeaderImage}
                              {Block:ShowAvatar}
                              <div class="avatar {AvatarShape}" style="background-color: {BackgroundColor}; background-image:url('{PortraitURL-128}'); color: {BackgroundColor}">
                                <a href="{BlogURL}" target="_blank"><img src="{PortraitURL-128}" alt="{Title}"></a>
                              </div>
                              {/Block:ShowAvatar}
                              <div class="info-wrapper">
                                <div class="info">
                                  {block:ShowTitle}
                                  <h1 class="title" style="font-family:'{TitleFont}', sans-serif; font-weight: {TitleFontWeight}">{Title}</h1>
                                  {/block:ShowTitle}
                                  {block:ShowDescription}
                                  <div class="description" style="color: {TitleColor}">
                                    <div class="description-inner">{Description}</div>
                                  </div>
                                  {/block:ShowDescription}
                                </div>
                              </div>
                            </div>
                            <div class="description-gradient" style="background: linear-gradient(rgba({RGBBackgroundColor}, 0), {BackgroundColor});"></div>
                          </div>
                          <div class="highlighted-posts">
                            {Block:HighlightedPosts}
                            <div class="post post-micro post-type-{PostType}" data-type="{PostType}">
                              <div class="post-content">
                                <div class="post-content-inner">
                                  <div class="post-thumbnail-container" style="background-image: url('{PhotoURL-250}');"></div>
                                </div>
                              </div>
                              <div class="post-glass post-micro-glass">
                                <a target="_blank" class="permalink" href="{Permalink}"></a>
                              </div>
                            </div>
                            {/Block:HighlightedPosts}
                          </div>
                        </div>
                        {/block:Blogs}
                        {/block:FollowingPage}
                      </div>
                    </section>
                    {block:NewCta}
                    {block:PermalinkPage}
                    <div class="install-banner">
                      <div class="install-banner-inner">
                        <div class="copy">
                          <div>{lang:You scrolled this far}</div>
                          <div>{lang:Check out the Tumblr app}</div>
                        </div>



                        <a href="https://go.onelink.me/893408789" class="install-button" target="_blank">{lang:Get the app}</a>
                      </div>
                    </div>
                    {/block:PermalinkPage}
                    {/block:NewCta}
                    {block:IfRelatedPosts}
                    {block:RelatedPosts}
                    <section class="related-posts-wrapper">
                      <h2>{lang:More you might like}</h2>
                      <div class="related-posts grid">
                        {block:Posts inlineMediaWidth="700" inlineNestedMediaWidth="700"}
                        <article class="{block:Text}text {/block:Text}{block:Photoset}photoset {/block:Photoset}{block:Photo}photo {/block:Photo}{block:RebloggedFrom}reblogged {/block:RebloggedFrom}{block:Quote}quote {/block:Quote}{block:Link}link {/block:Link}{block:Chat}chat {/block:Chat}{block:Audio}audio {/block:Audio}{block:Video}video {/block:Video}{block:Answer}answer {/block:Answer}{block:Date}not-page post-{PostID}{/block:Date} {block:PermalinkPage} active exposed{/block:PermalinkPage}" {block:Date}data-post-id="{PostID}"{/block:Date}>
                          <div class="post-wrapper clearfix">
                            {block:RebloggedFrom}
                            <header class="post-header">
                              <a class="reblog-link" href="{ReblogParentURL}"><i class="reblog-icon"></i>{ReblogParentName}</a>
                            </header>
                            {/block:RebloggedFrom}
                            <section class="post">
                              {block:Text}
                              <div class="post-content">
                                {block:Title}<h2 class="title"><a href="{Permalink}">{Title}</a></h2>{/block:Title}
                                {block:Body}
                                <div class="body-text">
                                  {Body}
                                </div>
                                {/block:Body}
                              </div>
                              {/block:Text}

                              {block:Photo}
                              <figure class="post-content {block:HighRes}high-res{/block:HighRes}{block:Caption} with-caption{/block:Caption}" data-photo-width="{PhotoWidth-HighRes}">
                                <div class="photo-wrapper">
                                  <div class="photo-wrapper-inner">
                                    <a href="{Permalink}"><img src="{PhotoURL-HighRes}" alt="{PhotoAlt}" width="{PhotoWidth-HighRes}" height="{PhotoHeight-HighRes}" {block:LivePhoto}data-live-photo="{LivePhotoURL}" data-live-photo-still-image-time="{LivePhotoStillImageTime}"{/block:LivePhoto}></a>
                                  </div>
                                </div>
                                {block:Caption}
                                <figcaption class="caption">
                                  {Caption}
                                </figcaption>
                                {/block:Caption}
                              </figure>
                              {/block:Photo}

                              {block:Photoset}
                              <figure class="post-content photoset {block:Caption}with-caption{/block:Caption}">
                                {Photoset}
                                {block:Caption}
                                <figcaption class="caption">
                                  {Caption}
                                </figcaption>
                                {/block:Caption}
                              </figure>
                              {/block:Photoset}

                              {block:Quote}
                              <div class="post-content">
                                <blockquote class="{Length}">
                                  {Quote}
                                </blockquote>
                                {block:Source}
                                <div class="source">{Source}</div>
                                {/block:Source}
                              </div>
                              {/block:Quote}


                              {block:Link}
                              <div class="post-content{block:Description} with-caption{/block:Description}{block:Thumbnail} with-thumbnail{/block:Thumbnail}">
                                <div class="link-wrapper">
                                  <a {Target} href="{URL}" class="link">
                                    {block:Thumbnail}
                                    <div class="link-thumbnail"><img src="{Thumbnail-HighRes}" alt="" /></div>
                                    {/block:Thumbnail}
                                    <div class="link-text-wrapper clearfix">
                                      <div class="link-text">
                                        {block:Host}
                                        <div class="link-host">{Host}</div>
                                        {/block:Host}
                                        <h2 class="link-title">{Name}</h2>
                                        {block:Excerpt}
                                        <div class="link-excerpt">{Excerpt}</div>
                                        {/block:Excerpt}
                                        {block:Author}
                                        <div class="link-author">{Author}</div>
                                        {/block:Author}
                                      </div>
                                    </div>
                                  </a>
                                </div>
                                {block:Description}
                                <div class="caption">
                                  {Description}
                                </div>
                                {/block:Description}
                              </div>
                              {/block:Link}

                              {block:Chat}
                              <div class="post-content">
                                {block:Title}<h2 class="title"><a href="{Permalink}">{Title}</a></h2>{/block:Title}
                                <ul class="conversation">
                                  {block:Lines}
                                  <li class="chat-{Alt}">{block:Label}<span class="label">{Label}</span>{/block:Label} {Line}</li>
                                  {/block:Lines}
                                </ul>
                              </div>
                              {/block:Chat}

                              {block:Audio}
                              <div class="post-content {block:Caption}with-caption{/block:Caption}">
                                <div class="audio_container">
                                  {block:AudioEmbed}
                                  {AudioEmbed color="white"}
                                  {/block:AudioEmbed}
                                </div>
                                {block:Caption}
                                <div class="caption">
                                  {Caption}
                                </div>
                                {/block:Caption}
                              </div>
                              {/block:Audio}

                              {block:Video}
                              <figure class="post-content {block:Caption}with-caption{/block:Caption}">
                                <div class="video-wrapper">
                                  {Video-700}
                                </div>
                                {block:Caption}
                                <figcaption class="caption">
                                  {Caption}
                                </figcaption>
                                {/block:Caption}
                              </figure>
                              {/block:Video}

                              {block:Answer}
                              <div class="post-content">
                                <div class="note-item note-item-asker">
                                  <div class="text">
                                    <p class="asker"><strong>{Asker}</strong> asked:</p>
                                    <div class="asker-question">
                                      {Question}
                                    </div>
                                  </div>
                                  <div class="avatar">
                                    <img class="asker-avatar" src="{AskerPortraitURL-96}" alt="">
                                  </div>
                                </div>

                                {block:Answerer}
                                <div class="note-item note-item-answerer">
                                  <div class="text">
                                    <p class="answerer"><strong>{Answerer}</strong> answered:</p>
                                    <div class="answerer-answer">
                                      {Answer}
                                    </div>
                                  </div>
                                  <div class="avatar">
                                    <img class="answerer-avatar" src="{AnswererPortraitURL-96}" alt="">
                                  </div>
                                </div>
                                {/block:Answerer}

                                <div class="replies">
                                  {Replies}
                                </div>
                              </div>
                              {/block:Answer}

                              <section class="inline-meta post-extra{block:RebloggedFrom} has-reblog{/block:RebloggedFrom}{block:ContentSource} has-source{/block:ContentSource}{block:HasTags} has-tags{/block:HasTags}">
                                {block:RebloggedFrom}
                                <a class="meta-item reblog-link" href="{ReblogParentURL}"><i class="reblog_sm"></i>{ReblogParentName}</a>
                                {/block:RebloggedFrom}
                                {block:ContentSource}
                                <a class="meta-item source-link" href="{SourceURL}">{lang:Source}: {SourceTitle}</a>
                                {/block:ContentSource}
                                {block:HasTags}
                                {block:Tags}
                                <a class="meta-item tag-link" href="{TagURL}">{Tag}</a>
                                {/block:Tags}
                                {/block:HasTags}
                              </section>

                            </section>

                            {block:Date}
                            <section class="panel">
                              <footer class="post-footer">
                                <section class="inline-meta date-notes">
                                  <div class="date-note-wrapper">
                                    {block:NoteCount}
                                    <a href="{Permalink}#notes" class="meta-item post-notes">{NoteCountWithLabel}</a>
                                    {/block:NoteCount}
                                  </div>
                                </section>

                                <section class="post-controls">
                                  <div class="controls-wrapper">


                                    <div class="control share-control">

                                      <nav class="pop">
                                        <a href="#" class="share selector"></a>
                                        <div class="pop-menu share-menu south" id="share_{PostID}">
                                          <ul>
                                            <li class="open-in-app"><a href="#" class="share-item open-in-app" data-post="{PostID}">{lang:Open in app}</a></li>
                                            <li><a href="http://facebook.com/sharer.php?u={URLEncodedPermalink}&amp;t={URLEncodedTitle}" class="share-item facebook" target="_blank">{lang:Facebook}</a></li>
                                            <li><a href="https://twitter.com/intent/tweet?text={URLEncodedTweetSummary}" class="share-item twitter" target="_blank">{lang:Tweet}</a></li>
                                            {block:Photo}
                                            <li><a href="//www.pinterest.com/pin/create/button/?url={URLEncodedPermalink}&amp;media={PhotoURL-500}" class="share-item pinterest" target="_blank">{lang:Pinterest}</a></li>
                                            {/block:Photo}
                                            {block:Video}{block:VideoThumbnail}
                                            <li><a href="//www.pinterest.com/pin/create/button/?url={URLEncodedPermalink}&amp;media={VideoThumbnailURL}&amp;is_video=true" class="share-item pinterest" target="_blank">{lang:Pinterest}</a></li>
                                            {/block:VideoThumbnail}{/block:Video}
                                            <li><a href="https://reddit.com/submit?url={URLEncodedPermalink}" class="share-item reddit" target="_blank">{lang:Reddit}</a></li>
                                            <li><a href="mailto:?subject={URLEncodedShareString}&amp;body={URLEncodedMailSummary}" class="share-item mail">{lang:Mail}</a></li>
                                            <li><a href="{EmbedUrl}" class="share-item permalink">{lang:Embed}</a></li>
                                            <li><a href="{Permalink}" class="share-item permalink">{lang:Permalink} <i class="arrow"></i></a></li>
                                          </ul>
                                        </div>
                                      </nav>

                                    </div>

                                    <div class="control reblog-control">{ReblogButton size="24" color="black"}</div>
                                    <div class="control like-control">{LikeButton size="24" color="black"}</div>
                                  </div>
                                </section>
                              </footer>
                            </section>
                            {/block:Date}
                          </div>
                        </article>
                        {/block:Posts}
                      </div>
                      <div class="related-posts-cta content">
                        <!-- @todo: translate these strings -->
                        <a class="related-post-cta button bordered open-in-app">{lang:See this in the app}</a>
                        <a class="related-post-cta see-more button bordered" href="/">{lang:Show more}</a>
                      </div>
                    </section>
                    {/block:RelatedPosts}
                    {/block:IfRelatedPosts}
                    <footer id="footer" class="content clearfix">
                      {block:IndexPage}
                      {block:Pagination}
                      <div id="pagination">
                        {block:PreviousPage}
                        <a href="{PreviousPage}" class="previous" data-current-page="{CurrentPage}" data-total-pages="{TotalPages}">{lang:Previous}<span class="bg"></span></a>
                        {/block:PreviousPage}
                        {block:NextPage}
                        <a href="{NextPage}" class="next" data-current-page="{CurrentPage}" data-total-pages="{TotalPages}">{lang:Next}<span class="bg"></span></a>
                        {/block:NextPage}
                        <div class="loader"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div>
                      </div>
                      {/block:Pagination}
                      {/block:IndexPage}
                    </footer>
                  </section>
                  <script>
                  var Optica = {};
                  Optica.ENDLESS_SCROLLING = {block:IfEndlessScrolling}true{/block:IfEndlessScrolling}{block:IfNotEndlessScrolling}false{/block:IfNotEndlessScrolling};
                  Optica.LAYOUT = "{select:Layout}";
                  Optica.GRID_LAYOUT = (Optica.LAYOUT === 'grid');
                  Optica.TITLE_COLOR = "{TitleColor}";
                  Optica.ACCENT_COLOR = "{AccentColor}";
                  Optica.BACKGROUND_COLOR = "{BackgroundColor}";
                  Optica.RELATED_POSTS_CTA_VARIANTS = [
                    {
                      variant: "C",
                      text: "{lang:Open In App CTA C}"
                    },
                    {
                      variant: "D",
                      text: "{lang:Open In App CTA D}"
                    },
                    {
                      variant: "E",
                      text: "{lang:Open In App CTA E}"
                    }
                  ];
                  Optica.NO_LIKES_VARIANTS = [
                    "{lang:This Tumblr hasnt liked any posts yet}",
                    "{lang:This Tumblr doesnt like anything yet}",
                    "{lang:No likes Sheesh}",
                    "{lang:Amazing This Tumblr doesnt like anything}",
                    "{lang:Incredible This Tumblr doesnt like anything}",
                    "{lang:Neat This Tumblr doesnt like anything}",
                    "{lang:Ta-da No likes}",
                    "{lang:Plink The sound of no likes}",
                    "{lang:Apparently this Tumblr is hard to please}",
                    "{lang:Wow This Tumblr hasnt liked anything ever}",
                    "{lang:This Tumblr hasnt liked anything yet How very intriguing}",
                    "{lang:This Tumblr has never met a post it didnt not like}",
                    "{lang:No likes here Just a howling wind}",
                    "{lang:Swoosh No likes}"
                  ];
                  Optica.NO_POSTS_VARIANTS = [
                    "{lang:This Tumblr hasnt made any posts}",
                    "{lang:This silly Tumblr hasnt posted anything yet}",
                    "{lang:This Tumblr is cool but empty}",
                    "{lang:This Tumblr is content-free}",
                    "{lang:This minimalist Tumblr has no posts}",
                    "{lang:Meditate for a while on this empty Tumblr}",
                    "{lang:Posts Nah}",
                    "{lang:This Tumblr has hardly any posts None at all in fact}",
                    "{lang:This Tumblr hasnt posted anything}"
                  ];
                  Optica.NO_FOLLOWING_VARIANTS = [
                    "{lang:This Tumblr hasnt followed any other Tumblrs}",
                    "{lang:Aw This Tumblr isnt following anyone}",
                    "{lang:Nope this Tumblr doesnt follow anyone}",
                    "{lang:This cool Tumblr doesnt follow anyone}",
                    "{lang:This far-out Tumblr doesnt follow anyone}",
                    "{lang:This fiercely independent Tumblr doesnt follow anyone}",
                    "{lang:This Tumblr doesnt follow anything except for its own rules}",
                    "{lang:This Tumblr doesnt really follow anything}"
                  ];
                  </script>
                  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                  <script>!window.jQuery && document.write(unescape('%3Cscript src="http://static.tumblr.com/vr9xgox/sBgmmjhyw/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>
                  <script src="http://static.tumblr.com/27gzhx7/h1Coblur6/main-min.js"></script>

                  {block:IfGoogleAnalyticsID}
                  <script>
                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                  ga('create', '{text:Google Analytics ID}', 'auto');
                  ga('send', 'pageview');
                  </script>
                  {/block:IfGoogleAnalyticsID}

                  {block:IfRelatedPosts}
                  {block:RelatedPosts}
                  <script src="https://secure.static.tumblr.com/t1owtkf/bSAnvroul/jquery.waypoints.min.js" type="text/javascript"></script>
                  <script type="text/javascript">
                  $(function() {
                    var trackingPixels = {TrackingPixels};

                    var analytics_frame = document.getElementById('ga_target');
                    var analytics_iframe_loaded;
                    var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
                    var eventer = window[eventMethod];
                    var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
                    eventer(messageEvent,function(e) {
                      var message = (e.data && e.data.split) ? e.data.split(';') : '';
                      if (message[0] == 'analytics_iframe_loaded') {
                        analytics_iframe_loaded = true;
                      }
                    });

                    $('.related-posts > article').waypoint(function() {
                      if (!analytics_iframe_loaded) {
                        return;
                      }

                      var post_id = $(this.element).data('post-id');
                      if (typeof trackingPixels[post_id] == 'undefined' || !trackingPixels[post_id]) {
                        return;
                      }

                      var trackingPixel = trackingPixels[post_id];

                      analytics_frame.contentWindow.postMessage(
                        ['tick_related_post', trackingPixel].join(';'),
                        analytics_frame.src.split('/analytics.html')[0]
                      );

                      trackingPixels[post_id] = null;
                    }, {
                      offset: '100%'
                    });
                  });
                  </script>
                  {/block:RelatedPosts}
                  {/block:IfRelatedPosts}
                  {block:IfSyntaxHighlighting}
                  <script type="text/javascript" src="http://static.tumblr.com/ehm1tdz/Mhunye5t3/highlight.pack.js"/></script>
                  <script type="text/javascript">
                  (function($) {
                    $(document).ready(function() {
                      $('.post-content pre code').each(function(i, block) {
                        hljs.highlightBlock(block);
                      });
                    });
                  })(window.jQuery);
                  </script>
                  {/block:IfSyntaxHighlighting}




                  <!--Begin Bottom-->
                </div>
              </div>

              <div id="sidebar">
                <div class="col-xs-12 col-md-3">

                  <div class="side-item">
                    <h3>Follow Us</h3>
                    <ul>
                      <li class="favicon"><a href="http://www.facebook.com/spoonieliving"><img src="../img/favicons/facebook.png"></a></li>
                      <li class="favicon"><a href="http://www.twitter.com/spoonieliving"><img src="../img/favicons/twitter.png"></a></li>
                      <li class="favicon"><a href="http://blog.spoonieliving.com"><img src="../img/favicons/tumblr.png"></a></li>
                      <li class="favicon"><a href="http://www.pinterest.com/spoonieliving"><img src="../img/favicons/pinterest.png"></a></li>
                      <li class="favicon"><a href="http://blog.spoonie-living.com/rss"><img src="../img/favicons/rss.png"></a></li>
                    </ul>
                    <hr/>
                  </div>

                  <div class="side-item">
                    <h3>Support the Editor</h3>
                    <a href="http://www.patreon.com/dmurring"><img src="../img/patreon.png"></a>
                    <br>
                    <a href="https://digitaltipjar.com/dmurring"><img src="../img/tipjar.png"></a>
                    <hr/>
                  </div>

                  <div class="hidden-xs hidden-sm">
                    <div class="side-item">
                      <!-- Project Wonderful Ad Box Code -->
                      <div id="pw_adbox_79495_4_0"></div>
                      <script type="text/javascript"></script>
                      <noscript><map name="admap79495" id="admap79495"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=79495&type=4" shape="rect" coords="0,0,125,125" title="" alt="" target="_blank" rel="noopener noreferrer" /></map>
                        <table cellpadding="0" cellspacing="0" style="width:125px;border-style:none;background-color:#ffffff;"><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=79495&type=4" style="width:125px;height:125px;border-style:none;" usemap="#admap79495" alt="" /></td></tr><tr><td style="background-color:#ffffff;" colspan="1"><center><a style="font-size:10px;color:#8C4646;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=79495&type=4&tag=117806" target="_blank">Ads by Project Wonderful!  Your ad could be here, right now.</a></center></td></tr></table>
                      </noscript>
                      <!-- End Project Wonderful Ad Box Code -->
                      <hr/>
                    </div>
                  </div>

                  <div class="side-item">
                    <h3>Our Cohort</h3>
                    <a href="http://chronicillnessbloggers.com/"> <img src="../img/ciblogo.jpg"></a>
                  </div>


                </div>
              </div>
            </div>
            <br>

            <hr/>

            <div class="row">
              <div id="footer">
                <div class="col-xs-12 col-md-12">
                  <p>All opinions expressed on this site are our own and in no way influenced by outside sponsorship.<br>
                    No original content should be construed as medical advice.</p>
                    <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Spoonie Living</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.
                    <!--
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" /></a>
                  -->

                  <!--End Bottom-->

                  <br><br>
                </div>
              </div>
            </div>


          </body>
          </html>


        </body>
        </html>
