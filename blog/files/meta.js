(function() {
	var Realmac = Realmac || {};

	Realmac.meta = {
		
		// Set the browser title
		//
		// @var String text
		setTitle: function(text) {
			return document.title = text;
		},
		
		// Set the content attribute of a meta tag
		//
		// @var String name
		// @var String content
		setTagContent: function(tag, content){
			// If the tag being set is title
			// return the result of setTitle
			if ( tag === 'title' )
			{
				return this.setTitle(content);
			}
			
			// Otherwise try and find the meta tag
			var tag = this.getTag(tag);
			
			// If we have a tag, set the content
			if ( tag !== false )
			{
				return tag.setAttribute('content', content);
			}
			
			return false;
		},
		
		// Find a meta tag
		//
		// @var String name
		getTag: function(name) {
			var meta = document.querySelectorAll('meta');
			
			for ( var i=0; i<meta.length; i++ )
			{
				if (meta[i].name == name){
					return meta[i];
				}
			}
			
			var tag = document.createElement('meta');
			tag.name = name;
			document.getElementsByTagName('head')[0].appendChild(tag);
			
			return tag;
		}
	};
 
	// Object containing all website meta info
	var websiteMeta = {"archive-december-2015.html":"Archives for December 2015","category-android.html":"A list of posts in category &ldquo;Android&rdquo;","category-canvas.html":"A list of posts in category &ldquo;Canvas&rdquo;","category-animation.html":"A list of posts in category &ldquo;Animation&rdquo;","category-fun.html":"A list of posts in category &ldquo;fun&rdquo;","2ba688daa773d278406f0d1132deba5d-22.html":"(No title)","258851dc247afe70855a534f1ea5b07a-16.html":"本文会带来什么？\n\t•\txml如何自定义圆角 shapeDrawable？环形？三角形？\n\t•\tdrawable有多少种？用法是什么？\n\t•\t绘制圆弧用法，原理？\n上面的统统没有！只说将一个关于Drawable不常用到的用法<br>","archive-june-2016.html":"Archives for June 2016","category-archive.html":"A list of posts in category &ldquo;archive&rdquo;","category-drawable.html":"A list of posts in category &ldquo;Drawable&rdquo;","category-work.html":"A list of posts in category &ldquo;Work&rdquo;","category-personal.html":"A list of posts in category &ldquo;Personal&rdquo;"};
 
	// pageId must match the key in websiteMeta object
	var url = window.location.pathname;
	var pageId = url.substring(url.lastIndexOf('/')+1);
	if (!pageId || pageId.length == 0){
		pageId = 'index.html';
	}
	pageMeta = websiteMeta[pageId];
 
	// If we have meta for this page
	if (pageMeta){
		Realmac.meta.setTagContent('description', pageMeta);
	}
 
 })();