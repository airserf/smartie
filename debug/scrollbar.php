<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery.ui.touch-punch.min.js"></script>

<script>

jQuery(document).ready(function(){
    jQuery('.scrollbar-inner').scrollbar();
});

</script>



<style type="text/css">


.scroll-wrapper {
    overflow: hidden !important;
    padding: 0 !important;
    position: relative;
}
 
.scroll-wrapper > .scroll-content {
    border: none !important;
    box-sizing: content-box !important;
    height: auto;
    left: 0;
    margin: 0;
    max-height: none !important;
    max-width: none !important;
    overflow: scroll !important;
    padding: 0;
    position: relative !important;
    top: 0;
    width: auto !important;
}
 
.scroll-wrapper > .scroll-content::-webkit-scrollbar {
    height: 0;
    width: 0;
}
 
.scroll-element {
    display: none;
}
.scroll-element, .scroll-element div {
    box-sizing: content-box;
}
 
.scroll-element.scroll-x.scroll-scrollx_visible,
.scroll-element.scroll-y.scroll-scrolly_visible {
    display: block;
}
 
.scroll-element .scroll-bar,
.scroll-element .scroll-arrow {
    cursor: default;
}
 
.scroll-textarea {
    border: 1px solid #cccccc;
    border-top-color: #999999;
}
.scroll-textarea > .scroll-content {
    overflow: hidden !important;
}
.scroll-textarea > .scroll-content > textarea {
    border: none !important;
    box-sizing: border-box;
    height: 100% !important;
    margin: 0;
    max-height: none !important;
    max-width: none !important;
    overflow: scroll !important;
    outline: none;
    padding: 2px;
    position: relative !important;
    top: 0;
    width: 100% !important;
}
.scroll-textarea > .scroll-content > textarea::-webkit-scrollbar {
    height: 0;
    width: 0;
}
 
 
 
 
/*************** SIMPLE INNER SCROLLBAR ***************/
 
.scrollbar-inner > .scroll-element,
.scrollbar-inner > .scroll-element div
{
    border: none;
    margin: 0;
    padding: 0;
    position: absolute;
    z-index: 10;
}
 
.scrollbar-inner > .scroll-element div {
    display: block;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
}
 
.scrollbar-inner > .scroll-element.scroll-x {
    bottom: 2px;
    height: 8px;
    left: 0;
    width: 100%;
}
 
.scrollbar-inner > .scroll-element.scroll-y {
    height: 100%;
    right: 2px;
    top: 0;
    width: 8px;
}
 
.scrollbar-inner > .scroll-element .scroll-element_outer {
    overflow: hidden;
}
 
.scrollbar-inner > .scroll-element .scroll-element_outer,
.scrollbar-inner > .scroll-element .scroll-element_track,
.scrollbar-inner > .scroll-element .scroll-bar {
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
}
 
.scrollbar-inner > .scroll-element .scroll-element_track,
.scrollbar-inner > .scroll-element .scroll-bar {
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";
    filter: alpha(opacity=40);
    opacity: 0.4;
}
 
.scrollbar-inner > .scroll-element .scroll-element_track { background-color: #e0e0e0; }
.scrollbar-inner > .scroll-element .scroll-bar { background-color: #c2c2c2; }
.scrollbar-inner > .scroll-element:hover .scroll-bar { background-color: #919191; }
.scrollbar-inner > .scroll-element.scroll-draggable .scroll-bar { background-color: #919191; }
 
 
/* update scrollbar offset if both scrolls are visible */
 
.scrollbar-inner > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_track { left: -12px; }
.scrollbar-inner > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_track { top: -12px; }
 
 
.scrollbar-inner > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_size { left: -12px; }
.scrollbar-inner > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_size { top: -12px; }

</style>
</head>

<body>

<div class="scrollbar-inner">
    <p class="permanent">
        Simple inner scrollbar over content
    </p>
    <p class="permanent">
        <a href="#anchor">Click to test #anchors</a><br><br>
        <input type="text" value="Use TAB to focus next input" style="max-width:220px; width: 100%;">
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
        scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
        Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel
        hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue,
        pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam
        sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare,
        ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget
        nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam
        viverra nisi, in interdum massa nibh nec erat.
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
        scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
        Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel
        hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue,
        pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam
        sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare,
        ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget
        nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam
        viverra nisi, in interdum massa nibh nec erat.
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
        scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
        Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel
        hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue,
        pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam
        sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare,
        ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget
        nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam
        viverra nisi, in interdum massa nibh nec erat.
    </p>
    <input type="text"><br>
    <h3 id="anchor">Anchor</h3>
</div>

</body>
</html>