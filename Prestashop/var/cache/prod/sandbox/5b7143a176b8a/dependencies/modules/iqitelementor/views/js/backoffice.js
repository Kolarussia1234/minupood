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

            if (typeof elementorPageType !== 'undefined') {
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

                if (elementorPageType == 'category') {
                    var $form = $( "#category_form" );
                    $form.submit(function( event ) {
                        $.ajax({
                            type: 'POST',
                            url: elementorAjaxUrl,
                            data: {
                                action: 'categoryLayout',
                                categoryId: $form.find("input[name='id_category']").val(),
                                justElementor: $form.find("input[name='justElementor']:checked").val()
                            },
                            success: function(resp) {},
                            error: function() {
                                console.log("error");
                            }
                        });

                    });

                }
            }

        }

        return {init: init};

    })();

    iqitElementorButton.init();


});

},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJ2aWV3cy9fZGV2L2pzL2JhY2tvZmZpY2UvYmFja29mZmljZS5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQ0FBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oKXtmdW5jdGlvbiByKGUsbix0KXtmdW5jdGlvbiBvKGksZil7aWYoIW5baV0pe2lmKCFlW2ldKXt2YXIgYz1cImZ1bmN0aW9uXCI9PXR5cGVvZiByZXF1aXJlJiZyZXF1aXJlO2lmKCFmJiZjKXJldHVybiBjKGksITApO2lmKHUpcmV0dXJuIHUoaSwhMCk7dmFyIGE9bmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIitpK1wiJ1wiKTt0aHJvdyBhLmNvZGU9XCJNT0RVTEVfTk9UX0ZPVU5EXCIsYX12YXIgcD1uW2ldPXtleHBvcnRzOnt9fTtlW2ldWzBdLmNhbGwocC5leHBvcnRzLGZ1bmN0aW9uKHIpe3ZhciBuPWVbaV1bMV1bcl07cmV0dXJuIG8obnx8cil9LHAscC5leHBvcnRzLHIsZSxuLHQpfXJldHVybiBuW2ldLmV4cG9ydHN9Zm9yKHZhciB1PVwiZnVuY3Rpb25cIj09dHlwZW9mIHJlcXVpcmUmJnJlcXVpcmUsaT0wO2k8dC5sZW5ndGg7aSsrKW8odFtpXSk7cmV0dXJuIG99cmV0dXJuIHJ9KSgpIiwidmFyIGlxaXRFbGVtZW50b3JCdXR0b247XG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcblxuICAgIGlxaXRFbGVtZW50b3JCdXR0b24gPSAoZnVuY3Rpb24gKCkge1xuXG4gICAgICAgIHZhciAkd3JhcHBlckNtcyA9ICQoJyNjbXNfZm9ybScpLmZpbmQoJy5mb3JtLXdyYXBwZXInKS5maXJzdCgpLFxuICAgICAgICAgICAgJHdyYXBwZXJQcm9kdWN0ID0gJCgnI2ZlYXR1cmVzJyksXG4gICAgICAgICAgICAkd3JhcHBlckJsb2cgPSAkKCcjZWxlbWVudG9yLWJ1dHRvbi1ibG9nLXdyYXBwZXInKSxcbiAgICAgICAgICAgICR3cmFwcGVyQ2F0ZWdvcnkgPSAkKCcjY2F0ZWdvcnlfZm9ybScpLmZpbmQoJy5mb3JtLWdyb3VwJykuZmlyc3QoKSxcbiAgICAgICAgICAgICRidG5UZW1wbGF0ZSA9ICQoJyN0bXBsLWJ0bi1lZGl0LXdpdGgtZWxlbWVudG9yJyksXG4gICAgICAgICAgICAkYnRuVGVtcGxhdGVQcm9kdWN0ID0gJCgnI3RtcGwtYnRuLWVkaXQtd2l0aC1lbGVtZW50b3ItcHJvZHVjdCcpLFxuICAgICAgICAgICAgJGJ0blRlbXBsYXRlQmxvZyA9ICQoJyN0bXBsLWJ0bi1lZGl0LXdpdGgtZWxlbWVudG9yLWJsb2cnKSxcbiAgICAgICAgICAgICRidG5UZW1wbGF0ZUNhdGVnb3J5ID0gJCgnI3RtcGwtYnRuLWVkaXQtd2l0aC1lbGVtZW50b3ItY2F0ZWdvcnknKTtcblxuICAgICAgICBmdW5jdGlvbiBpbml0KCkge1xuICAgICAgICAgICAgJHdyYXBwZXJDbXMucHJlcGVuZCgkYnRuVGVtcGxhdGUuaHRtbCgpKTtcbiAgICAgICAgICAgICR3cmFwcGVyUHJvZHVjdC5wcmVwZW5kKCRidG5UZW1wbGF0ZVByb2R1Y3QuaHRtbCgpKTtcbiAgICAgICAgICAgICR3cmFwcGVyQmxvZy5wcmVwZW5kKCRidG5UZW1wbGF0ZUJsb2cuaHRtbCgpKTtcbiAgICAgICAgICAgICR3cmFwcGVyQ2F0ZWdvcnkucHJlcGVuZCgkYnRuVGVtcGxhdGVDYXRlZ29yeS5odG1sKCkpO1xuXG4gICAgICAgICAgICBpZiAodHlwZW9mIGVsZW1lbnRvclBhZ2VUeXBlICE9PSAndW5kZWZpbmVkJykge1xuICAgICAgICAgICAgaWYgKGVsZW1lbnRvclBhZ2VUeXBlID09ICdjbXMnIHx8IGVsZW1lbnRvclBhZ2VUeXBlID09ICdibG9nJykge1xuICAgICAgICAgICAgICAgIHZhciAgaGlkZUVkaXRvciA9IGZhbHNlO1xuICAgICAgICAgICAgICAgIGpRdWVyeS5lYWNoKG9ubHlFbGVtZW50b3IsIGZ1bmN0aW9uKGksIHZhbCkge1xuICAgICAgICAgICAgICAgICAgICBpZih2YWwpe1xuICAgICAgICAgICAgICAgICAgICAgICAgaGlkZUVkaXRvciA9IHRydWU7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICBpZiAoaGlkZUVkaXRvcil7XG4gICAgICAgICAgICAgICAgICAgICQoXCJbaWRePWNvbnRlbnRfXVwiKS5maXJzdCgpLnBhcmVudHMoJy5mb3JtLWdyb3VwJykubGFzdCgpLnJlbW92ZSgpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIGlmIChlbGVtZW50b3JQYWdlVHlwZSA9PSAnY2F0ZWdvcnknKSB7XG4gICAgICAgICAgICAgICAgICAgIHZhciAkZm9ybSA9ICQoIFwiI2NhdGVnb3J5X2Zvcm1cIiApO1xuICAgICAgICAgICAgICAgICAgICAkZm9ybS5zdWJtaXQoZnVuY3Rpb24oIGV2ZW50ICkge1xuICAgICAgICAgICAgICAgICAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdXJsOiBlbGVtZW50b3JBamF4VXJsLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYWN0aW9uOiAnY2F0ZWdvcnlMYXlvdXQnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjYXRlZ29yeUlkOiAkZm9ybS5maW5kKFwiaW5wdXRbbmFtZT0naWRfY2F0ZWdvcnknXVwiKS52YWwoKSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAganVzdEVsZW1lbnRvcjogJGZvcm0uZmluZChcImlucHV0W25hbWU9J2p1c3RFbGVtZW50b3InXTpjaGVja2VkXCIpLnZhbCgpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbihyZXNwKSB7fSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBlcnJvcjogZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiZXJyb3JcIik7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgfVxuXG4gICAgICAgIHJldHVybiB7aW5pdDogaW5pdH07XG5cbiAgICB9KSgpO1xuXG4gICAgaXFpdEVsZW1lbnRvckJ1dHRvbi5pbml0KCk7XG5cblxufSk7XG4iXX0=
