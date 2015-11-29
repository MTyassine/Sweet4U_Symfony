<?php

/* PISweet4uBundle:Client:afficher.html.twig */
class __TwigTemplate_72ca67aa48a3ff36fdc4aade9d262d7a9c738c18fd49a885d6fcf0d8d8d627b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en-US\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"Content-Type\" content=\"text/html\">
        <title>User Profile with Content Tabs - Design Shack Demo</title>
        <meta name=\"author\" content=\"Jake Rocheleau\">
        
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/profil.css"), "html", null, true);
        echo "\">
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    </head>

    <body>
        <div id=\"topbar\">
            <b style=\"font-size: 15px;\">Profil personnel</b>
        </div>

        <div id=\"w\">
            <div id=\"content\" class=\"clearfix\">
                <h1>A propos de Client</h1>

                <nav id=\"profiletabs\">
                    <ul class=\"clearfix\">
                        <li><a href=\"#settings\">Affichage de données</a></li>
                    </ul>
                </nav>

                <section id=\"settings\" class=\"hidden\">

                    <p class=\"setting\"><span>E-mail Address </span> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>

                    <p class=\"setting\"><span>Nom </span> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>

                    <p class=\"setting\"><span>Prenom </span> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</p>

                    <p class=\"setting\"><span>Cin </span> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cin", array()), "html", null, true);
        echo "</p>

                    <p class=\"setting\"><span>adresse </span>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "</p>
                    <p class=\"setting\"><span>login </span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
                      <p class=\"setting\"><span>NomPatisserie</span>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nompatisserie", array()), "html", null, true);
        echo "</p>
                    
                </section>
            </div><!-- @end #content -->
        </div><!-- @end #w -->
        <script type=\"text/javascript\">
            \$(function () {
                \$('#profiletabs ul li a').on('click', function (e) {
                    e.preventDefault();
                    var newcontent = \$(this).attr('href');

                    \$('#profiletabs ul li a').removeClass('sel');
                    \$(this).addClass('sel');

                    \$('#content section').each(function () {
                        if (!\$(this).hasClass('hidden')) {
                            \$(this).addClass('hidden');
                        }
                    });

                    \$(newcontent).removeClass('hidden');
                });
            });
        </script>
    
<div id=\"sfwdt7fe611\" class=\"sf-toolbar\" style=\"display: none\"></div><script>/*<![CDATA[*/    Sfjs = (function() {        \"use strict\";        var noop = function() {},            collectionToArray = function (collection) {                var length = collection.length || 0,                    results = new Array(length);                while (length--) {                    results[length] = collection[length];                }                return results;            },            profilerStorageKey = 'sf2/profiler/',            request = function(url, onSuccess, onError, payload, options) {                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');                options = options || {};                options.maxTries = options.maxTries || 0;                xhr.open(options.method || 'GET', url, true);                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');                xhr.onreadystatechange = function(state) {                    if (4 !== xhr.readyState) {                        return null;                    }                    if (xhr.status == 404 && options.maxTries > 1) {                        setTimeout(function(){                            options.maxTries--;                            request(url, onSuccess, onError, payload, options);                        }, 500);                        return null;                    }                    if (200 === xhr.status) {                        (onSuccess || noop)(xhr);                    } else {                        (onError || noop)(xhr);                    }                };                xhr.send(payload || '');            },            hasClass = function(el, klass) {                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));            },            removeClass = function(el, klass) {                if (el.className) {                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');                }            },            addClass = function(el, klass) {                if (!hasClass(el, klass)) {                    el.className += \" \" + klass;                }            },            getPreference = function(name) {                if (!window.localStorage) {                    return null;                }                return localStorage.getItem(profilerStorageKey + name);            },            setPreference = function(name, value) {                if (!window.localStorage) {                    return null;                }                localStorage.setItem(profilerStorageKey + name, value);            },            requestStack = [],            renderAjaxRequests = function() {                var requestCounter = document.querySelectorAll('.sf-toolbar-ajax-requests');                if (!requestCounter.length) {                    return;                }                var tbodies = document.querySelectorAll('.sf-toolbar-ajax-request-list');                var state = 'ok';                if (tbodies.length) {                    var tbody = tbodies[0];                    var rows = document.createDocumentFragment();                    if (requestStack.length) {                        for (var i = 0; i < requestStack.length; i++) {                            var request = requestStack[i];                            var row = document.createElement('tr');                            rows.appendChild(row);                            var methodCell = document.createElement('td');                            methodCell.textContent = request.method;                            row.appendChild(methodCell);                            var pathCell = document.createElement('td');                            pathCell.className = 'sf-ajax-request-url';                            pathCell.textContent = request.url;                            pathCell.setAttribute('title', request.url);                            row.appendChild(pathCell);                            var durationCell = document.createElement('td');                            durationCell.className = 'sf-ajax-request-duration';                            if (request.duration) {                                durationCell.textContent = request.duration + \"ms\";                            } else {                                durationCell.textContent = '-';                            }                            row.appendChild(durationCell);                            row.appendChild(document.createTextNode(' '));                            var profilerCell = document.createElement('td');                            if (request.profilerUrl) {                                var profilerLink = document.createElement('a');                                profilerLink.setAttribute('href', request.profilerUrl);                                profilerLink.textContent = request.profile;                                profilerCell.appendChild(profilerLink);                            } else {                                profilerCell.textContent = 'n/a';                            }                            row.appendChild(profilerCell);                            var requestState = 'ok';                            if (request.error) {                                requestState = 'error';                                if (state != \"loading\" && i > requestStack.length - 4) {                                    state = 'error';                                }                            } else if (request.loading) {                                requestState = 'loading';                                state = 'loading';                            }                            row.className = 'sf-ajax-request sf-ajax-request-' + requestState;                        }                        var infoSpan = document.querySelectorAll(\".sf-toolbar-ajax-info\")[0];                        var children = collectionToArray(tbody.children);                        for (var i = 0; i < children.length; i++) {                            tbody.removeChild(children[i]);                        }                        tbody.appendChild(rows);                        if (infoSpan) {                            var text = requestStack.length + ' call' + (requestStack.length > 1 ? 's' : '');                            infoSpan.textContent = text;                        }                    } else {                        var cell = document.createElement('td');                        cell.setAttribute('colspan', '4');                        cell.textContent = \"No AJAX requests yet.\";                        var row = document.createElement('tr');                        row.appendChild(cell);                        tbody.appendChild(row);                    }                }                requestCounter[0].textContent = requestStack.length;                var className = 'sf-toolbar-ajax-requests sf-toolbar-status';                if (state == 'ok') {                    className += ' sf-toolbar-status-green';                } else if (state == 'error') {                    className += ' sf-toolbar-status-red';                } else {                    className += ' sf-ajax-request-loading';                }                requestCounter[0].className = className;            };        var addEventListener;        var el = document.createElement('div');        if (!'addEventListener' in el) {            addEventListener = function (element, eventName, callback) {                element.attachEvent('on' + eventName, callback);            };        } else {            addEventListener = function (element, eventName, callback) {                element.addEventListener(eventName, callback, false);            };        }                    if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {                var proxied = XMLHttpRequest.prototype.open;                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {                    var self = this;                    /* prevent logging AJAX calls to static and inline files, like templates */                    var path = url;                    if (url.substr(0, 1) === '/') {                        if (0 === url.indexOf('\\x2FintegrationTemp\\x2Fweb')) {                            path = url.substr(20);                        }                    }                    else if (0 === url.indexOf('http\\x3A\\x2F\\x2Flocalhost\\x2FintegrationTemp\\x2Fweb')) {                        path = url.substr(36);                    }                    if (path.substr(0, 1) === '/' && !path.match(new RegExp(\"^\\/(app(_[\\\\w]+)?\\\\.php\\/)?_wdt\"))) {                        var stackElement = {                            loading: true,                            error: false,                            url: url,                            method: method,                            start: new Date()                        };                        requestStack.push(stackElement);                        this.addEventListener('readystatechange', function() {                            if (self.readyState == 4) {                                stackElement.duration = new Date() - stackElement.start;                                stackElement.loading = false;                                stackElement.error = self.status < 200 || self.status >= 400;                                stackElement.profile = self.getResponseHeader(\"X-Debug-Token\");                                stackElement.profilerUrl = self.getResponseHeader(\"X-Debug-Token-Link\");                                Sfjs.renderAjaxRequests();                            }                        }, false);                        Sfjs.renderAjaxRequests();                    }                    proxied.apply(this, Array.prototype.slice.call(arguments));                };            }                return {            hasClass: hasClass,            removeClass: removeClass,            addClass: addClass,            getPreference: getPreference,            setPreference: setPreference,            addEventListener: addEventListener,            request: request,            renderAjaxRequests: renderAjaxRequests,            load: function(selector, url, onSuccess, onError, options) {                var el = document.getElementById(selector);                if (el && el.getAttribute('data-sfurl') !== url) {                    request(                        url,                        function(xhr) {                            el.innerHTML = xhr.responseText;                            el.setAttribute('data-sfurl', url);                            removeClass(el, 'loading');                            (onSuccess || noop)(xhr, el);                        },                        function(xhr) { (onError || noop)(xhr, el); },                        '',                        options                    );                }                return this;            },            toggle: function(selector, elOn, elOff) {                var tmp = elOn.style.display,                    el = document.getElementById(selector);                elOn.style.display = elOff.style.display;                elOff.style.display = tmp;                if (el) {                    el.style.display = 'none' === tmp ? 'none' : 'block';                }                return this;            }        }    })();/*]]>*/</script><script>/*<![CDATA[*/    (function () {                Sfjs.load(            'sfwdt7fe611',            '/integrationTemp/web/app_dev.php/_wdt/7fe611',            function(xhr, el) {                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';                if (el.style.display == 'none') {                    return;                }                if (Sfjs.getPreference('toolbar/displayState') == 'none') {                    document.getElementById('sfToolbarMainContent-7fe611').style.display = 'none';                    document.getElementById('sfToolbarClearer-7fe611').style.display = 'none';                    document.getElementById('sfMiniToolbar-7fe611').style.display = 'block';                } else {                    document.getElementById('sfToolbarMainContent-7fe611').style.display = 'block';                    document.getElementById('sfToolbarClearer-7fe611').style.display = 'block';                    document.getElementById('sfMiniToolbar-7fe611').style.display = 'none';                }                Sfjs.renderAjaxRequests();                /* Handle toolbar-info position */                var toolbarBlocks = document.querySelectorAll('.sf-toolbar-block');                for (var i = 0; i < toolbarBlocks.length; i += 1) {                    toolbarBlocks[i].onmouseover = function () {                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];                        var pageWidth = document.body.clientWidth;                        var elementWidth = toolbarInfo.offsetWidth;                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;                        /* Reset right and left value, useful on window resize */                        toolbarInfo.style.right = '';                        toolbarInfo.style.left = '';                        if (leftValue > 0 && rightValue > 0) {                            toolbarInfo.style.right = (rightValue * -1) + 'px';                        } else if (leftValue < 0) {                            toolbarInfo.style.left = 0;                        } else {                            toolbarInfo.style.right = '-1px';                        }                    };                }            },            function(xhr) {                if (xhr.status !== 0) {                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '/integrationTemp/web/app_dev.php/_profiler/7fe611');                }            },            {'maxTries': 5}        );    })();/*]]>*/</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Client:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 40,  80 => 39,  76 => 38,  71 => 36,  66 => 34,  61 => 32,  56 => 30,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en-US">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="Content-Type" content="text/html">*/
/*         <title>User Profile with Content Tabs - Design Shack Demo</title>*/
/*         <meta name="author" content="Jake Rocheleau">*/
/*         */
/*         <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/profil.css')}}">*/
/*         <script type="text/javascript" src="{{asset('js/jquery-1.10.2.min.js')}}"></script>*/
/*     </head>*/
/* */
/*     <body>*/
/*         <div id="topbar">*/
/*             <b style="font-size: 15px;">Profil personnel</b>*/
/*         </div>*/
/* */
/*         <div id="w">*/
/*             <div id="content" class="clearfix">*/
/*                 <h1>A propos de Client</h1>*/
/* */
/*                 <nav id="profiletabs">*/
/*                     <ul class="clearfix">*/
/*                         <li><a href="#settings">Affichage de données</a></li>*/
/*                     </ul>*/
/*                 </nav>*/
/* */
/*                 <section id="settings" class="hidden">*/
/* */
/*                     <p class="setting"><span>E-mail Address </span> {{app.user.email}}</p>*/
/* */
/*                     <p class="setting"><span>Nom </span> {{app.user.nom}}</p>*/
/* */
/*                     <p class="setting"><span>Prenom </span> {{app.user.prenom}}</p>*/
/* */
/*                     <p class="setting"><span>Cin </span> {{app.user.cin}}</p>*/
/* */
/*                     <p class="setting"><span>adresse </span>{{app.user.adresse}}</p>*/
/*                     <p class="setting"><span>login </span>{{app.user.username}}</p>*/
/*                       <p class="setting"><span>NomPatisserie</span>{{app.user.nompatisserie}}</p>*/
/*                     */
/*                 </section>*/
/*             </div><!-- @end #content -->*/
/*         </div><!-- @end #w -->*/
/*         <script type="text/javascript">*/
/*             $(function () {*/
/*                 $('#profiletabs ul li a').on('click', function (e) {*/
/*                     e.preventDefault();*/
/*                     var newcontent = $(this).attr('href');*/
/* */
/*                     $('#profiletabs ul li a').removeClass('sel');*/
/*                     $(this).addClass('sel');*/
/* */
/*                     $('#content section').each(function () {*/
/*                         if (!$(this).hasClass('hidden')) {*/
/*                             $(this).addClass('hidden');*/
/*                         }*/
/*                     });*/
/* */
/*                     $(newcontent).removeClass('hidden');*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     */
/* <div id="sfwdt7fe611" class="sf-toolbar" style="display: none"></div><script>/*<![CDATA[*//*     Sfjs = (function() {        "use strict";        var noop = function() {},            collectionToArray = function (collection) {                var length = collection.length || 0,                    results = new Array(length);                while (length--) {                    results[length] = collection[length];                }                return results;            },            profilerStorageKey = 'sf2/profiler/',            request = function(url, onSuccess, onError, payload, options) {                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');                options = options || {};                options.maxTries = options.maxTries || 0;                xhr.open(options.method || 'GET', url, true);                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');                xhr.onreadystatechange = function(state) {                    if (4 !== xhr.readyState) {                        return null;                    }                    if (xhr.status == 404 && options.maxTries > 1) {                        setTimeout(function(){                            options.maxTries--;                            request(url, onSuccess, onError, payload, options);                        }, 500);                        return null;                    }                    if (200 === xhr.status) {                        (onSuccess || noop)(xhr);                    } else {                        (onError || noop)(xhr);                    }                };                xhr.send(payload || '');            },            hasClass = function(el, klass) {                return el.className && el.className.match(new RegExp('\\b' + klass + '\\b'));            },            removeClass = function(el, klass) {                if (el.className) {                    el.className = el.className.replace(new RegExp('\\b' + klass + '\\b'), ' ');                }            },            addClass = function(el, klass) {                if (!hasClass(el, klass)) {                    el.className += " " + klass;                }            },            getPreference = function(name) {                if (!window.localStorage) {                    return null;                }                return localStorage.getItem(profilerStorageKey + name);            },            setPreference = function(name, value) {                if (!window.localStorage) {                    return null;                }                localStorage.setItem(profilerStorageKey + name, value);            },            requestStack = [],            renderAjaxRequests = function() {                var requestCounter = document.querySelectorAll('.sf-toolbar-ajax-requests');                if (!requestCounter.length) {                    return;                }                var tbodies = document.querySelectorAll('.sf-toolbar-ajax-request-list');                var state = 'ok';                if (tbodies.length) {                    var tbody = tbodies[0];                    var rows = document.createDocumentFragment();                    if (requestStack.length) {                        for (var i = 0; i < requestStack.length; i++) {                            var request = requestStack[i];                            var row = document.createElement('tr');                            rows.appendChild(row);                            var methodCell = document.createElement('td');                            methodCell.textContent = request.method;                            row.appendChild(methodCell);                            var pathCell = document.createElement('td');                            pathCell.className = 'sf-ajax-request-url';                            pathCell.textContent = request.url;                            pathCell.setAttribute('title', request.url);                            row.appendChild(pathCell);                            var durationCell = document.createElement('td');                            durationCell.className = 'sf-ajax-request-duration';                            if (request.duration) {                                durationCell.textContent = request.duration + "ms";                            } else {                                durationCell.textContent = '-';                            }                            row.appendChild(durationCell);                            row.appendChild(document.createTextNode(' '));                            var profilerCell = document.createElement('td');                            if (request.profilerUrl) {                                var profilerLink = document.createElement('a');                                profilerLink.setAttribute('href', request.profilerUrl);                                profilerLink.textContent = request.profile;                                profilerCell.appendChild(profilerLink);                            } else {                                profilerCell.textContent = 'n/a';                            }                            row.appendChild(profilerCell);                            var requestState = 'ok';                            if (request.error) {                                requestState = 'error';                                if (state != "loading" && i > requestStack.length - 4) {                                    state = 'error';                                }                            } else if (request.loading) {                                requestState = 'loading';                                state = 'loading';                            }                            row.className = 'sf-ajax-request sf-ajax-request-' + requestState;                        }                        var infoSpan = document.querySelectorAll(".sf-toolbar-ajax-info")[0];                        var children = collectionToArray(tbody.children);                        for (var i = 0; i < children.length; i++) {                            tbody.removeChild(children[i]);                        }                        tbody.appendChild(rows);                        if (infoSpan) {                            var text = requestStack.length + ' call' + (requestStack.length > 1 ? 's' : '');                            infoSpan.textContent = text;                        }                    } else {                        var cell = document.createElement('td');                        cell.setAttribute('colspan', '4');                        cell.textContent = "No AJAX requests yet.";                        var row = document.createElement('tr');                        row.appendChild(cell);                        tbody.appendChild(row);                    }                }                requestCounter[0].textContent = requestStack.length;                var className = 'sf-toolbar-ajax-requests sf-toolbar-status';                if (state == 'ok') {                    className += ' sf-toolbar-status-green';                } else if (state == 'error') {                    className += ' sf-toolbar-status-red';                } else {                    className += ' sf-ajax-request-loading';                }                requestCounter[0].className = className;            };        var addEventListener;        var el = document.createElement('div');        if (!'addEventListener' in el) {            addEventListener = function (element, eventName, callback) {                element.attachEvent('on' + eventName, callback);            };        } else {            addEventListener = function (element, eventName, callback) {                element.addEventListener(eventName, callback, false);            };        }                    if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {                var proxied = XMLHttpRequest.prototype.open;                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {                    var self = this;                    /* prevent logging AJAX calls to static and inline files, like templates *//*                     var path = url;                    if (url.substr(0, 1) === '/') {                        if (0 === url.indexOf('\x2FintegrationTemp\x2Fweb')) {                            path = url.substr(20);                        }                    }                    else if (0 === url.indexOf('http\x3A\x2F\x2Flocalhost\x2FintegrationTemp\x2Fweb')) {                        path = url.substr(36);                    }                    if (path.substr(0, 1) === '/' && !path.match(new RegExp("^\/(app(_[\\w]+)?\\.php\/)?_wdt"))) {                        var stackElement = {                            loading: true,                            error: false,                            url: url,                            method: method,                            start: new Date()                        };                        requestStack.push(stackElement);                        this.addEventListener('readystatechange', function() {                            if (self.readyState == 4) {                                stackElement.duration = new Date() - stackElement.start;                                stackElement.loading = false;                                stackElement.error = self.status < 200 || self.status >= 400;                                stackElement.profile = self.getResponseHeader("X-Debug-Token");                                stackElement.profilerUrl = self.getResponseHeader("X-Debug-Token-Link");                                Sfjs.renderAjaxRequests();                            }                        }, false);                        Sfjs.renderAjaxRequests();                    }                    proxied.apply(this, Array.prototype.slice.call(arguments));                };            }                return {            hasClass: hasClass,            removeClass: removeClass,            addClass: addClass,            getPreference: getPreference,            setPreference: setPreference,            addEventListener: addEventListener,            request: request,            renderAjaxRequests: renderAjaxRequests,            load: function(selector, url, onSuccess, onError, options) {                var el = document.getElementById(selector);                if (el && el.getAttribute('data-sfurl') !== url) {                    request(                        url,                        function(xhr) {                            el.innerHTML = xhr.responseText;                            el.setAttribute('data-sfurl', url);                            removeClass(el, 'loading');                            (onSuccess || noop)(xhr, el);                        },                        function(xhr) { (onError || noop)(xhr, el); },                        '',                        options                    );                }                return this;            },            toggle: function(selector, elOn, elOff) {                var tmp = elOn.style.display,                    el = document.getElementById(selector);                elOn.style.display = elOff.style.display;                elOff.style.display = tmp;                if (el) {                    el.style.display = 'none' === tmp ? 'none' : 'block';                }                return this;            }        }    })();/*]]>*//* </script><script>/*<![CDATA[*//*     (function () {                Sfjs.load(            'sfwdt7fe611',            '/integrationTemp/web/app_dev.php/_wdt/7fe611',            function(xhr, el) {                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';                if (el.style.display == 'none') {                    return;                }                if (Sfjs.getPreference('toolbar/displayState') == 'none') {                    document.getElementById('sfToolbarMainContent-7fe611').style.display = 'none';                    document.getElementById('sfToolbarClearer-7fe611').style.display = 'none';                    document.getElementById('sfMiniToolbar-7fe611').style.display = 'block';                } else {                    document.getElementById('sfToolbarMainContent-7fe611').style.display = 'block';                    document.getElementById('sfToolbarClearer-7fe611').style.display = 'block';                    document.getElementById('sfMiniToolbar-7fe611').style.display = 'none';                }                Sfjs.renderAjaxRequests();                /* Handle toolbar-info position *//*                 var toolbarBlocks = document.querySelectorAll('.sf-toolbar-block');                for (var i = 0; i < toolbarBlocks.length; i += 1) {                    toolbarBlocks[i].onmouseover = function () {                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];                        var pageWidth = document.body.clientWidth;                        var elementWidth = toolbarInfo.offsetWidth;                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;                        /* Reset right and left value, useful on window resize *//*                         toolbarInfo.style.right = '';                        toolbarInfo.style.left = '';                        if (leftValue > 0 && rightValue > 0) {                            toolbarInfo.style.right = (rightValue * -1) + 'px';                        } else if (leftValue < 0) {                            toolbarInfo.style.left = 0;                        } else {                            toolbarInfo.style.right = '-1px';                        }                    };                }            },            function(xhr) {                if (xhr.status !== 0) {                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\n\nDo you want to open the profiler?') && (window.location = '/integrationTemp/web/app_dev.php/_profiler/7fe611');                }            },            {'maxTries': 5}        );    })();/*]]>*//* </script>*/
/* </body>*/
/* </html>*/
