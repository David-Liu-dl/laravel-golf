/**
 * Created by yuhaoliu on 12/11/2016.
 */

$(document).ready(function () {
    getEvents();
});

function getEvents() {
    $.ajax({
        url: '/getAllAvailableEvents',
        method: 'GET',
        dataType: 'json',
        success: function (dta) {
            if (!dta) {
                return;
            }

            //获取模板上的HTML
            var html = $('script[type="text/template"]').html();
            //定义一个数组，用来接收格式化合的数据
            var arr = [];

            //对数据进行遍历
            $.each(dta, function(i, o) {
                //这里取到o就是上面rows数组中的值, formatTemplate是最开始定义的方法.
                arr.push(formatTemplate(o, html));
            });
            //好了，最后把数组化成字符串，并添加到table中去。
            $('#event_block').append(arr.join(''));
            //走完这一步其实就完成了，不会吧，这么简单，不错，就是这么简单!! 不信就自己动手去试试!
        }

    });
}

function formatTemplate(dta, tmpl) {
    var format = {
        name: function(x) {
            return x;
        }
    };
    return tmpl.replace(/{(\w+)}/g, function(m1, m2) {

        if (!m2)
            return "";
        return (format && format[m2]) ? format[m2](dta[m2]) : dta[m2];
    });
}

