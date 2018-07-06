<!-- This file is part of the site's template; see /template/README.md for more information -->

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Author" content="Diane Murray">

	<!-- Jquery (must go before bootstrap) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Site-specific -->
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">

	<!-- Personal toolkit -->
	<link rel="stylesheet" type="text/css" href="http://www.dmurring.com/personal-resources/css/toolkit.css">

	<!-- Google Analytics -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-75284256-1', 'auto');
	ga('require', 'linkid');
	ga('send', 'pageview');
	</script>

	<!-- Google Search -->
	<script type="application/ld+json">
	{
	  "@context": "http://schema.org",
	  "@type": "WebSite",
	  "url": "http://www.spoonieliving.com/",
		"logo": "http://www.spoonieliving.com/img/logo_image.png",
		"sameAs": [
	    "http://www.facebook.com/spoonieliving",
	    "http://www.twitter.com/spoonieliving",
	    "http://spoonie-living.tumblr.com",
	    "http://pinterest.com/spoonieliving"
  	],
	  "potentialAction": {
	    "@type": "SearchAction",
	    "target": "http://blog.spoonieliving.com/search/{search_term_string}",
	    "query-input": "required name=search_term_string"
		}
  }
	</script>

	<!-- Tumblr follow button -->
	<!-- TODO (low priority): this is over-engineered; is there way to do this more simply? -->
	<style type=text/css>*{margin:10;padding:0}#follow-button{display:inline-block;box-sizing:border-box;height:20px;border-radius:3px;text-decoration:none;font:bold 12px "Helvetica Neue",Helvetica,Arial,Sans-serif;line-height:18px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}#follow-button .inner{height:100%;padding:0 5px}#follow-button .tumblr-follow-label{display:inline-block;height:100%;max-width:172px;padding-left:6px;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}#follow-button .logo-container{float:left;padding-top:2px;width:9px}#follow-button .logo-svg{height:12px}#follow-button.blue{background-color:#36465d;color:#fff;border:1px solid #36465d}#follow-button.blue .logo-svg{fill:#fff}#follow-button.white{background-color:#fff;color:#36465d;border:1px solid #d0d0d0}#follow-button.white .logo-svg{fill:#36465d}#follow-button.black{background-color:#444;color:#fff;border:1px solid #444}#follow-button.black .logo-svg{fill:#fff}</style>
	<script type=text/javascript>var FollowButton=(function(){var i;var b=document.location.search.substring(1);var d={};var a=(document.cookie.indexOf("logged_in=1")!=-1);var e=window.navigator.userLanguage||window.navigator.language;var h={color:"blue",type:"follow",tumblelog:"spoonie-living",language:"en-us"};var g={"en-us":{follow:"Follow"},"de-de":{follow:"Folgen"},"fr-fr":{follow:"S'abonner"},"it-it":{follow:"Segui"},"ja-jp":{follow:"フォロー"},"tr-tr":{follow:"Takip et"},"es-es":{follow:"Seguir"},"ru-ru":{follow:"Читать"},"pl-pl":{follow:"Obserwuj"},"pt-pt":{follow:"Seguir"},"pt-br":{follow:"Seguir"},"nl-nl":{follow:"Volgen"},"ko-kr":{follow:"팔로우"},"zh-cn":{follow:"关注"},"zh-tw":{follow:"追蹤"}};function f(m){var l=String(m).replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;");return l}function j(m){var l={};m.replace(new RegExp("([^?=&]+)(=([^&]*))?","g"),function(o,n,q,p){l[n]=p});return l}function k(){if(b.length){d=j(b);if(d.tumblelog){d.tumblelog=f(unescape(d.tumblelog))}}}function c(){var l={blue:1,black:1,white:1};var r={follow:1,"follow-blog":1};var n=(l[d.color])?d.color:h.color;var o=(r[d.type])?d.type:h.type;var p=d.tumblelog||h.tumblelog;var q=d.language||e;var m=g[q.toLowerCase()]||g[h.language];i.className=n+" "+o;i.href="https://www.tumblr.com/"+(a?"":"register/")+"follow/"+p;if(d.type==="follow-blog"){document.getElementById("tumblr-follow-label").innerHTML=p}else{document.getElementById("tumblr-follow-label").innerHTML=m.follow}}return{initialize:function(){i=document.getElementById("follow-button");d=h;k();c()}}})();</script>
	<!-- End Tumblr follow button -->

	<!-- Facebook follow button -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=14386828201";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- End Facebook follow button -->
