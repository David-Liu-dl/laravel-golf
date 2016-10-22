var Util = Util || {};


Util.getQueryString = function(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return decodeURIComponent(r[2]);
    return null;
}

Util.getQuery = function() {
    var url = window.location.search.substr(1);
    var urlArr = url.split('&');
    var len = urlArr.length;
    var params = [];
    for (var i = 0; i < len; i++) {
        var keyArr = urlArr[i].split('=');
        if (keyArr.length == 2) {
            params[keyArr[0]] = decodeURIComponent(keyArr[1]);
        } else {
            params[keyArr[0]] = null;
        }
    }
    return params;
};

/**
 * 模板引擎
 * <%= user.name %>
 * <% for (var i = 0; i < list.length; i++) { %>
 * <% } %>
 * @param  {[String]} str  [模板字符串，建议写在script type="text/template"]
 * @param  {[Object]} data [需要显示的变量，为json]
 * @return {[String]}      [根据变量生成的模板字符]
 */
Util.tmpl = function(str, data) {
    var fn = !/\W/.test(str) ? cache[str] = cache[str] ||
        tmpl(document.getElementById(str).innerHTML) : // Generate a reusable function that will serve as a template

        new Function("obj", "var p=[],print=function(){p.push.apply(p,arguments);};" +

            // Introduce the data as local variables using with(){}
            "with(obj){p.push('" +

            // Convert the template into pure JavaScript
            str.replace(/[\r\t\n]/g, " ").split("<%").join("\t").replace(/((^|%>)[^\t]*)'/g, "$1\r").replace(/\t=(.*?)%>/g, "',$1,'").split("\t").join("');").split("%>").join("p.push('").split("\r").join("\\'") +
            "');}return p.join('');");
    // Provide some basic currying to the user
    return data ? fn(data) : fn;
};




/**
 * 创建横向滚动动画的css
 * @param  {[type]} id [description]
 * @return {[type]}    [description]
 */
Util.createCss = function(id){
    var css = {};
    var percent = id * 100;
    css['-webkit-transform'] = 'translate3d(' + percent  +'%, 0px, 0px); -webkit-transition-duration: 0.7s';
    css['transform'] = 'translate3d('+ percent + '%, 0px, 0px); transition-duration: 0.7s';
    return css;
};

