(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
var iqitElementorButton;

$(document).ready(function () {

    iqitElementorButton = (function () {

        var $wrapperCms = $('#cms_form').find('.form-wrapper').first(),
            $wrapperProduct = $('#features'),
            $wrapperBlog = $('#elementor-button-blog-wrapper'),
            $wrapperCategory = $('#category_form').find('.form-group').first(),
            $btnTemplate = $('#tmpl-btn-edit-with-elementor'),
            $btnTemplateProduct = $('#tmpl-btn-edit-with-elementor-product'),
            $btnTemplateBlog = $('#tmpl-btn-edit-with-elementor-blog'),
            $btnTemplateCategory = $('#tmpl-btn-edit-with-elementor-category');

        function init() {
            $wrapperCms.prepend($btnTemplate.html());
            $wrapperProduct.prepend($btnTemplateProduct.html());
            $wrapperBlog.prepend($btnTemplateBlog.html());
            $wrapperCategory.prepend($btnTemplateCategory.html());


            if (elementorPageType == 'cms' || elementorPageType == 'blog') {
                var  hideEditor = false;
                jQuery.each(onlyElementor, function(i, val) {
                    if(val){
                        hideEditor = true;
                    }
                });
                if (hideEditor){
                    $("[id^=content_]").first().parents('.form-group').last().remove();
                }
            }

        }

        return {init: init};

    })();

    iqitElementorButton.init();


});

},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJ2aWV3cy9fZGV2L2pzL2JhY2tvZmZpY2UvYmFja29mZmljZS5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQ0FBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJnZW5lcmF0ZWQuanMiLCJzb3VyY2VSb290IjoiIiwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uKCl7ZnVuY3Rpb24gcihlLG4sdCl7ZnVuY3Rpb24gbyhpLGYpe2lmKCFuW2ldKXtpZighZVtpXSl7dmFyIGM9XCJmdW5jdGlvblwiPT10eXBlb2YgcmVxdWlyZSYmcmVxdWlyZTtpZighZiYmYylyZXR1cm4gYyhpLCEwKTtpZih1KXJldHVybiB1KGksITApO3ZhciBhPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIraStcIidcIik7dGhyb3cgYS5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGF9dmFyIHA9bltpXT17ZXhwb3J0czp7fX07ZVtpXVswXS5jYWxsKHAuZXhwb3J0cyxmdW5jdGlvbihyKXt2YXIgbj1lW2ldWzFdW3JdO3JldHVybiBvKG58fHIpfSxwLHAuZXhwb3J0cyxyLGUsbix0KX1yZXR1cm4gbltpXS5leHBvcnRzfWZvcih2YXIgdT1cImZ1bmN0aW9uXCI9PXR5cGVvZiByZXF1aXJlJiZyZXF1aXJlLGk9MDtpPHQubGVuZ3RoO2krKylvKHRbaV0pO3JldHVybiBvfXJldHVybiByfSkoKSIsInZhciBpcWl0RWxlbWVudG9yQnV0dG9uO1xuXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XG5cbiAgICBpcWl0RWxlbWVudG9yQnV0dG9uID0gKGZ1bmN0aW9uICgpIHtcblxuICAgICAgICB2YXIgJHdyYXBwZXJDbXMgPSAkKCcjY21zX2Zvcm0nKS5maW5kKCcuZm9ybS13cmFwcGVyJykuZmlyc3QoKSxcbiAgICAgICAgICAgICR3cmFwcGVyUHJvZHVjdCA9ICQoJyNmZWF0dXJlcycpLFxuICAgICAgICAgICAgJHdyYXBwZXJCbG9nID0gJCgnI2VsZW1lbnRvci1idXR0b24tYmxvZy13cmFwcGVyJyksXG4gICAgICAgICAgICAkd3JhcHBlckNhdGVnb3J5ID0gJCgnI2NhdGVnb3J5X2Zvcm0nKS5maW5kKCcuZm9ybS1ncm91cCcpLmZpcnN0KCksXG4gICAgICAgICAgICAkYnRuVGVtcGxhdGUgPSAkKCcjdG1wbC1idG4tZWRpdC13aXRoLWVsZW1lbnRvcicpLFxuICAgICAgICAgICAgJGJ0blRlbXBsYXRlUHJvZHVjdCA9ICQoJyN0bXBsLWJ0bi1lZGl0LXdpdGgtZWxlbWVudG9yLXByb2R1Y3QnKSxcbiAgICAgICAgICAgICRidG5UZW1wbGF0ZUJsb2cgPSAkKCcjdG1wbC1idG4tZWRpdC13aXRoLWVsZW1lbnRvci1ibG9nJyksXG4gICAgICAgICAgICAkYnRuVGVtcGxhdGVDYXRlZ29yeSA9ICQoJyN0bXBsLWJ0bi1lZGl0LXdpdGgtZWxlbWVudG9yLWNhdGVnb3J5Jyk7XG5cbiAgICAgICAgZnVuY3Rpb24gaW5pdCgpIHtcbiAgICAgICAgICAgICR3cmFwcGVyQ21zLnByZXBlbmQoJGJ0blRlbXBsYXRlLmh0bWwoKSk7XG4gICAgICAgICAgICAkd3JhcHBlclByb2R1Y3QucHJlcGVuZCgkYnRuVGVtcGxhdGVQcm9kdWN0Lmh0bWwoKSk7XG4gICAgICAgICAgICAkd3JhcHBlckJsb2cucHJlcGVuZCgkYnRuVGVtcGxhdGVCbG9nLmh0bWwoKSk7XG4gICAgICAgICAgICAkd3JhcHBlckNhdGVnb3J5LnByZXBlbmQoJGJ0blRlbXBsYXRlQ2F0ZWdvcnkuaHRtbCgpKTtcblxuXG4gICAgICAgICAgICBpZiAoZWxlbWVudG9yUGFnZVR5cGUgPT0gJ2NtcycgfHwgZWxlbWVudG9yUGFnZVR5cGUgPT0gJ2Jsb2cnKSB7XG4gICAgICAgICAgICAgICAgdmFyICBoaWRlRWRpdG9yID0gZmFsc2U7XG4gICAgICAgICAgICAgICAgalF1ZXJ5LmVhY2gob25seUVsZW1lbnRvciwgZnVuY3Rpb24oaSwgdmFsKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmKHZhbCl7XG4gICAgICAgICAgICAgICAgICAgICAgICBoaWRlRWRpdG9yID0gdHJ1ZTtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIGlmIChoaWRlRWRpdG9yKXtcbiAgICAgICAgICAgICAgICAgICAgJChcIltpZF49Y29udGVudF9dXCIpLmZpcnN0KCkucGFyZW50cygnLmZvcm0tZ3JvdXAnKS5sYXN0KCkucmVtb3ZlKCk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuXG4gICAgICAgIH1cblxuICAgICAgICByZXR1cm4ge2luaXQ6IGluaXR9O1xuXG4gICAgfSkoKTtcblxuICAgIGlxaXRFbGVtZW50b3JCdXR0b24uaW5pdCgpO1xuXG5cbn0pO1xuIl19
