<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>系统发生错误</title>
    <meta name="robots" content="noindex,nofollow" />
    <style>
        /* Base */
        body {
            color: #333;
            font: 16px Verdana, "Helvetica Neue", helvetica, Arial, 'Microsoft YaHei', sans-serif;
            margin: 0px;
            padding: 0 20px 20px;
        }
        h1{
            margin: 10px 0 0;
            font-size: 28px;
            font-weight: 500;
            line-height: 32px;
        }
        h2{
            color: #4288ce;
            font-weight: 400;
            padding: 6px 0;
            margin: 6px 0 0;
            font-size: 18px;
            border-bottom: 1px solid #eee;
        }
        h3{
            margin: 12px;
            font-size: 16px;
            font-weight: bold;
        }
        abbr{
            cursor: help;
            text-decoration: underline;
            text-decoration-style: dotted;
        }
        a{
            color: #868686;
            cursor: pointer;
        }
        a:hover{
            text-decoration: underline;
        }
        .line-error{
            background: #f8cbcb;
        }

        .echo table {
            width: 100%;
        }

        .echo pre {
            padding: 16px;
            overflow: auto;
            font-size: 85%;
            line-height: 1.45;
            background-color: #f7f7f7;
            border: 0;
            border-radius: 3px;
            font-family: Consolas, "Liberation Mono", Menlo, Courier, monospace;
        }

        .echo pre > pre {
            padding: 0;
            margin: 0;
        }
    
        /* Exception Info */
        .exception {
            margin-top: 20px;
        }
        .exception .message{
            padding: 12px;
            border: 1px solid #ddd;
            border-bottom: 0 none;
            line-height: 18px;
            font-size:16px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            font-family: Consolas,"Liberation Mono",Courier,Verdana,"微软雅黑";
        }

        .exception .code{
            float: left;
            text-align: center;
            color: #fff;
            margin-right: 12px;
            padding: 16px;
            border-radius: 4px;
            background: #999;
        }
        .exception .source-code{
            padding: 6px;
            border: 1px solid #ddd;

            background: #f9f9f9;
            overflow-x: auto;

        }
        .exception .source-code pre{
            margin: 0;
        }
        .exception .source-code pre ol{
            margin: 0;
            color: #4288ce;
            display: inline-block;
            min-width: 100%;
            box-sizing: border-box;
        font-size:14px;
            font-family: "Century Gothic",Consolas,"Liberation Mono",Courier,Verdana;
            padding-left: 56px;
        }
        .exception .source-code pre li{
            border-left: 1px solid #ddd;
            height: 18px;
            line-height: 18px;
        }
        .exception .source-code pre code{
            color: #333;
            height: 100%;
            display: inline-block;
            border-left: 1px solid #fff;
        font-size:14px;
            font-family: Consolas,"Liberation Mono",Courier,Verdana,"微软雅黑";
        }
        .exception .trace{
            padding: 6px;
            border: 1px solid #ddd;
            border-top: 0 none;
            line-height: 16px;
        font-size:14px;
            font-family: Consolas,"Liberation Mono",Courier,Verdana,"微软雅黑";
        }
        .exception .trace ol{
            margin: 12px;
        }
        .exception .trace ol li{
            padding: 2px 4px;
        }
        .exception div:last-child{
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        /* Exception Variables */
        .exception-var table{
            width: 100%;
            margin: 12px 0;
            box-sizing: border-box;
        }
        .exception-var table caption{
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            padding: 6px 0;
        }
        .exception-var table caption small{
            font-weight: 300;
            display: inline-block;
            margin-left: 10px;
            color: #ccc;
        }
        .exception-var table tbody{
            font-size: 13px;
            font-family: Consolas,"Liberation Mono",Courier,"微软雅黑";
        }
        .exception-var table td{
            padding: 0 6px;
            vertical-align: top;
            word-break: break-word;
        }
        .exception-var table td:first-child{
            width: 12px;
            font-weight: bold;
            white-space: nowrap;
        }
        .exception-var table td pre{
            margin: 0;
        }

        /* Copyright Info */
        .copyright{
            margin-top: 24px;
            padding: 12px 0;
            border-top: 1px solid #eee;
        }

        /* SPAN elements with the classes below are added by prettyprint. */
        pre.prettyprint .pln { color: #000 }  /* plain text */
        pre.prettyprint .str { color: #080 }  /* string content */
        pre.prettyprint .kwd { color: #008 }  /* a keyword */
        pre.prettyprint .com { color: #800 }  /* a comment */
        pre.prettyprint .typ { color: #606 }  /* a type name */
        pre.prettyprint .lit { color: #066 }  /* a literal value */
        /* punctuation, lisp open bracket, lisp close bracket */
        pre.prettyprint .pun, pre.prettyprint .opn, pre.prettyprint .clo { color: #660 }
        pre.prettyprint .tag { color: #008 }  /* a markup tag name */
        pre.prettyprint .atn { color: #606 }  /* a markup attribute name */
        pre.prettyprint .atv { color: #080 }  /* a markup attribute value */
        pre.prettyprint .dec, pre.prettyprint .var { color: #606 }  /* a declaration; a variable name */
        pre.prettyprint .fun { color: red }  /* a function name */
    </style>
</head>
<body>
    <div class="echo">
            </div>
        <div class="exception">
    <div class="message">
        
            <div class="info">
                <div>
                    <h2>[0] <abbr title="think\exception\HttpException">HttpException</abbr> in <a class="toggle" title="/data/home/hyu3516210001/htdocs/thinkphp/library/think/App.php line 340">App.php line 340</a></h2>
                </div>
                <div><h1>方法不存在 :app\index\controller\Course-&gt;js</h1></div>
            </div>
        
    </div>
	        <div class="source-code">
            <pre class="prettyprint lang-php"><ol start="331"><li class="line-331"><code>
</code></li><li class="line-332"><code>            $data = self::invokeMethod($call);
</code></li><li class="line-333"><code>        } catch (\ReflectionException $e) {
</code></li><li class="line-334"><code>            // 操作不存在
</code></li><li class="line-335"><code>            if (method_exists($instance, '_empty')) {
</code></li><li class="line-336"><code>                $method = new \ReflectionMethod($instance, '_empty');
</code></li><li class="line-337"><code>                $data   = $method-&gt;invokeArgs($instance, [$action, '']);
</code></li><li class="line-338"><code>                self::$debug &amp;&amp; Log::record('[ RUN ] ' . $method-&gt;getFileName(), 'info');
</code></li><li class="line-339"><code>            } else {
</code></li><li class="line-340"><code>                throw new HttpException(404, 'method not exists:' . (new \ReflectionClass($instance))-&gt;getName() . '-&gt;' . $action);
</code></li><li class="line-341"><code>            }
</code></li><li class="line-342"><code>        }
</code></li><li class="line-343"><code>        return $data;
</code></li><li class="line-344"><code>    }
</code></li><li class="line-345"><code>
</code></li><li class="line-346"><code>    /**
</code></li><li class="line-347"><code>     * 初始化应用
</code></li><li class="line-348"><code>     */
</code></li><li class="line-349"><code>    public static function initCommon()
</code></li></ol></pre>
        </div>
	        <div class="trace">
            <h2>Call Stack</h2>
            <ol>
                <li>in <a class="toggle" title="/data/home/hyu3516210001/htdocs/thinkphp/library/think/App.php line 340">App.php line 340</a></li>
                                <li>
                at <abbr title="think\App">App</abbr>::module(['index', 'course', 'js'], ['app_namespace' => 'app', 'app_debug' => <em>true</em>, 'app_trace' => <em>false</em>, ...], <em>null</em>) in <a class="toggle" title="/data/home/hyu3516210001/htdocs/thinkphp/library/think/App.php line 115">App.php line 115</a>                </li>
                                <li>
                at <abbr title="think\App">App</abbr>::run() in <a class="toggle" title="/data/home/hyu3516210001/htdocs/index.php line 26">index.php line 26</a>                </li>
                            </ol>
        </div>
    </div>
        
    
        <div class="exception-var">
        <h2>Environment Variables</h2>
                <table>
                        <caption>GET Data<small>empty</small></caption>
                    </table>
                <table>
                        <caption>POST Data<small>empty</small></caption>
                    </table>
                <table>
                        <caption>Files<small>empty</small></caption>
                    </table>
                <table>
                        <caption>Cookies</caption>
            <tbody>
                                <tr>
                    <td>think_var</td>
                    <td>
                        zh-cn                    </td>
                </tr>
                                <tr>
                    <td>tp_lang</td>
                    <td>
                        zh-cn                    </td>
                </tr>
                            </tbody>
                    </table>
                <table>
                        <caption>Session<small>empty</small></caption>
                    </table>
                <table>
                        <caption>Server/Request Data</caption>
            <tbody>
                                <tr>
                    <td>DOCUMENT_ROOT</td>
                    <td>
                        /usr/home/hyu3516210001/htdocs                    </td>
                </tr>
                                <tr>
                    <td>GATEWAY_INTERFACE</td>
                    <td>
                        CGI/1.1                    </td>
                </tr>
                                <tr>
                    <td>HTTP_ACCEPT</td>
                    <td>
                        */*                    </td>
                </tr>
                                <tr>
                    <td>HTTP_ACCEPT_ENCODING</td>
                    <td>
                        gzip, deflate                    </td>
                </tr>
                                <tr>
                    <td>HTTP_ACCEPT_LANGUAGE</td>
                    <td>
                        zh-CN,zh;q=0.9                    </td>
                </tr>
                                <tr>
                    <td>HTTP_HOST</td>
                    <td>
                        www.chhcollege.org                    </td>
                </tr>
                                <tr>
                    <td>HTTP_REFERER</td>
                    <td>
                        http://www.chhcollege.org/index/course/js/html5.js                    </td>
                </tr>
                                <tr>
                    <td>HTTP_USER_AGENT</td>
                    <td>
                        Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36                    </td>
                </tr>
                                <tr>
                    <td>PATH</td>
                    <td>
                        /bin:/usr/bin                    </td>
                </tr>
                                <tr>
                    <td>PHPRC</td>
                    <td>
                        /var/www/php55/hichina_ini/hyu3516210001                    </td>
                </tr>
                                <tr>
                    <td>QUERY_STRING</td>
                    <td>
                                            </td>
                </tr>
                                <tr>
                    <td>REDIRECT_DOCUMENT_ROOT</td>
                    <td>
                        /usr/home/hyu3516210001/htdocs                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_GATEWAY_INTERFACE</td>
                    <td>
                        CGI/1.1                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_HTTP_ACCEPT</td>
                    <td>
                        */*                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_HTTP_ACCEPT_ENCODING</td>
                    <td>
                        gzip, deflate                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_HTTP_ACCEPT_LANGUAGE</td>
                    <td>
                        zh-CN,zh;q=0.9                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_HTTP_HOST</td>
                    <td>
                        www.chhcollege.org                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_HTTP_REFERER</td>
                    <td>
                        http://www.chhcollege.org/index/course/js/html5.js                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_HTTP_USER_AGENT</td>
                    <td>
                        Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_PATH</td>
                    <td>
                        /sbin:/usr/sbin:/bin:/usr/bin                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_PATH_INFO</td>
                    <td>
                        /course/js/html5.js                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_PATH_TRANSLATED</td>
                    <td>
                        redirect:/index.php/course/js/html5.js/js/html5.js                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_QUERY_STRING</td>
                    <td>
                                            </td>
                </tr>
                                <tr>
                    <td>REDIRECT_REMOTE_ADDR</td>
                    <td>
                        183.192.44.50                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_REMOTE_PORT</td>
                    <td>
                        2350                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_REQUEST_METHOD</td>
                    <td>
                        GET                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_REQUEST_URI</td>
                    <td>
                        /index/course/js/html5.js                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_SCRIPT_FILENAME</td>
                    <td>
                        /usr/home/hyu3516210001/htdocs/index                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_SCRIPT_NAME</td>
                    <td>
                        /index                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_SERVER_ADDR</td>
                    <td>
                        47.97.1.152                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_SERVER_ADMIN</td>
                    <td>
                        webmaster@hyu3516210001.my3w.com                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_SERVER_NAME</td>
                    <td>
                        www.chhcollege.org                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_SERVER_PORT</td>
                    <td>
                        80                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_SERVER_PROTOCOL</td>
                    <td>
                        HTTP/1.1                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_SERVER_SIGNATURE</td>
                    <td>
                                            </td>
                </tr>
                                <tr>
                    <td>REDIRECT_SERVER_SOFTWARE</td>
                    <td>
                        Apache                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_STATUS</td>
                    <td>
                        200                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_UNIQUE_ID</td>
                    <td>
                        XXIEzQpRUuIAAFAhqiwAAAAM                    </td>
                </tr>
                                <tr>
                    <td>REDIRECT_URL</td>
                    <td>
                        /index/course/js/html5.js                    </td>
                </tr>
                                <tr>
                    <td>REMOTE_ADDR</td>
                    <td>
                        183.192.44.50                    </td>
                </tr>
                                <tr>
                    <td>REMOTE_PORT</td>
                    <td>
                        2350                    </td>
                </tr>
                                <tr>
                    <td>REQUEST_METHOD</td>
                    <td>
                        GET                    </td>
                </tr>
                                <tr>
                    <td>REQUEST_URI</td>
                    <td>
                        /index/course/js/html5.js                    </td>
                </tr>
                                <tr>
                    <td>SCRIPT_FILENAME</td>
                    <td>
                        /usr/home/hyu3516210001/htdocs/index.php                    </td>
                </tr>
                                <tr>
                    <td>SCRIPT_NAME</td>
                    <td>
                        /index.php                    </td>
                </tr>
                                <tr>
                    <td>SERVER_ADDR</td>
                    <td>
                        47.97.1.152                    </td>
                </tr>
                                <tr>
                    <td>SERVER_ADMIN</td>
                    <td>
                        webmaster@hyu3516210001.my3w.com                    </td>
                </tr>
                                <tr>
                    <td>SERVER_NAME</td>
                    <td>
                        www.chhcollege.org                    </td>
                </tr>
                                <tr>
                    <td>SERVER_PORT</td>
                    <td>
                        80                    </td>
                </tr>
                                <tr>
                    <td>SERVER_PROTOCOL</td>
                    <td>
                        HTTP/1.1                    </td>
                </tr>
                                <tr>
                    <td>SERVER_SIGNATURE</td>
                    <td>
                                            </td>
                </tr>
                                <tr>
                    <td>SERVER_SOFTWARE</td>
                    <td>
                        Apache                    </td>
                </tr>
                                <tr>
                    <td>UNIQUE_ID</td>
                    <td>
                        XXIEzQpRUuIAAFAhqiwAAAAM                    </td>
                </tr>
                                <tr>
                    <td>ORIG_PATH_INFO</td>
                    <td>
                        /index/course/js/html5.js                    </td>
                </tr>
                                <tr>
                    <td>ORIG_PATH_TRANSLATED</td>
                    <td>
                        /usr/home/hyu3516210001/htdocs/index.php                    </td>
                </tr>
                                <tr>
                    <td>PHP_SELF</td>
                    <td>
                        /index.php                    </td>
                </tr>
                                <tr>
                    <td>REQUEST_TIME_FLOAT</td>
                    <td>
                        1567753421.6422                    </td>
                </tr>
                                <tr>
                    <td>REQUEST_TIME</td>
                    <td>
                        1567753421                    </td>
                </tr>
                                <tr>
                    <td>PATH_INFO</td>
                    <td>
                        /index/course/js/html5.js                    </td>
                </tr>
                            </tbody>
                    </table>
                <table>
                        <caption>Environment Variables<small>empty</small></caption>
                    </table>
                <table>
                        <caption>ThinkPHP Constants</caption>
            <tbody>
                                <tr>
                    <td>APP_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/application/                    </td>
                </tr>
                                <tr>
                    <td>THINK_VERSION</td>
                    <td>
                        5.0.0 RC4                    </td>
                </tr>
                                <tr>
                    <td>THINK_START_TIME</td>
                    <td>
                        1567753421.64263606                    </td>
                </tr>
                                <tr>
                    <td>THINK_START_MEM</td>
                    <td>
                        264536                    </td>
                </tr>
                                <tr>
                    <td>EXT</td>
                    <td>
                        .php                    </td>
                </tr>
                                <tr>
                    <td>DS</td>
                    <td>
                        /                    </td>
                </tr>
                                <tr>
                    <td>THINK_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/thinkphp/                    </td>
                </tr>
                                <tr>
                    <td>LIB_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/thinkphp/library/                    </td>
                </tr>
                                <tr>
                    <td>CORE_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/thinkphp/library/think/                    </td>
                </tr>
                                <tr>
                    <td>TRAIT_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/thinkphp/library/traits/                    </td>
                </tr>
                                <tr>
                    <td>ROOT_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/                    </td>
                </tr>
                                <tr>
                    <td>EXTEND_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/extend/                    </td>
                </tr>
                                <tr>
                    <td>VENDOR_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/vendor/                    </td>
                </tr>
                                <tr>
                    <td>RUNTIME_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/runtime/                    </td>
                </tr>
                                <tr>
                    <td>LOG_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/runtime/log/                    </td>
                </tr>
                                <tr>
                    <td>CACHE_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/runtime/cache/                    </td>
                </tr>
                                <tr>
                    <td>TEMP_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/runtime/temp/                    </td>
                </tr>
                                <tr>
                    <td>CONF_PATH</td>
                    <td>
                        /data/home/hyu3516210001/htdocs/application/                    </td>
                </tr>
                                <tr>
                    <td>CONF_EXT</td>
                    <td>
                        .php                    </td>
                </tr>
                                <tr>
                    <td>ENV_PREFIX</td>
                    <td>
                        PHP_                    </td>
                </tr>
                                <tr>
                    <td>IS_CLI</td>
                    <td>
                        false                    </td>
                </tr>
                                <tr>
                    <td>IS_WIN</td>
                    <td>
                        false                    </td>
                </tr>
                            </tbody>
                    </table>
            </div>
    
    <div class="copyright">
        <a title="官方网站" href="http://www.thinkphp.cn">ThinkPHP</a> 
        <span>V5.0.0 RC4</span> 
        <span>{ 十年磨一剑-为API开发设计的高性能框架 }</span>
    </div>
        <script>
        var LINE = 340;

        function $(selector, node){
            var elements;

            node = node || document;
            if(document.querySelectorAll){
                elements = node.querySelectorAll(selector);
            } else {
                switch(selector.substr(0, 1)){
                    case '#':
                        elements = [node.getElementById(selector.substr(1))];
                        break;
                    case '.':
                        if(document.getElementsByClassName){
                            elements = node.getElementsByClassName(selector.substr(1));
                        } else {
                            elements = get_elements_by_class(selector.substr(1), node);
                        }
                        break;
                    default:
                        elements = node.getElementsByTagName();
                }
            }
            return elements;

            function get_elements_by_class(search_class, node, tag) {
                var elements = [], eles, 
                    pattern  = new RegExp('(^|\\s)' + search_class + '(\\s|$)');

                node = node || document;
                tag  = tag  || '*';

                eles = node.getElementsByTagName(tag);
                for(var i = 0; i < eles.length; i++) {
                    if(pattern.test(eles[i].className)) {
                        elements.push(eles[i])
                    }
                }

                return elements;
            }
        }

        $.getScript = function(src, func){
            var script = document.createElement('script');
            
            script.async  = 'async';
            script.src    = src;
            script.onload = func || function(){};
            
            $('head')[0].appendChild(script);
        }

        ;(function(){
            var files = $('.toggle');
            var ol    = $('ol', $('.prettyprint')[0]);
            var li    = $('li', ol[0]);   

            // 短路径和长路径变换
            for(var i = 0; i < files.length; i++){
                files[i].ondblclick = function(){
                    var title = this.title;

                    this.title = this.innerHTML;
                    this.innerHTML = title;
                }
            }

            // 设置出错行
            var err_line = $('.line-' + LINE, ol[0])[0];
            err_line.className = err_line.className + ' line-error';

            $.getScript('//cdn.bootcss.com/prettify/r298/prettify.min.js', function(){
                prettyPrint();

                // 解决Firefox浏览器一个很诡异的问题
                // 当代码高亮后，ol的行号莫名其妙的错位
                // 但是只要刷新li里面的html重新渲染就没有问题了
                if(window.navigator.userAgent.indexOf('Firefox') >= 0){
                    ol[0].innerHTML = ol[0].innerHTML;
                }
            });

        })();
    </script>
    </body>
</html>