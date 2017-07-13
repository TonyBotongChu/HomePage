<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>自制导航页</title>
</head>

<body>
    <style type="text/css">
        .weather {
            background-color: #aaaaff;
        }
        
        h2 {
            text-align: center;
            color: #3385ff;
        }
        
        .web_address td {
            width: 200px;
            overflow: hidden
        }
        
        .web_address {
            margin: auto;
            border: 1px solid #4169E1;
            width: fit-content;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 20px;
        }
        
        a {
            color: blue;
            text-decoration: none
        }
        
        a:hover {
            text-decoration: underline
        }
        
        #baidu button {
            width: 100px;
            height: 40px;
            background: #3385ff;
            color: #fff;
            border: none;
        }
    </style>
    <div class="weather" style="padding-left:20px;">
        <div>
            <iframe class="weather" width="420" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=3"></iframe>
        </div>
    </div>
    <h2>自制网址导航</h2>
    <form id="baidu" action="http://www.baidu.com/baidu" target="_blank">
        <table bgcolor="#FFFFFF" align="center">
            <tr>
                <td align="center" valign="bottom">
                    <input style="height:40px" id="search" type="search" autocomplete="off" autofocus="on" name=word maxlength="100" size=60>
                    <button>百度搜索</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <br>
    <div class="web_address">
        <table bgcolor="#FFFFFF" border="0" width="1000" align="center">
            <tr>
                <td align="center"><a href="https://www.baidu.com/">百度</a></td>
                <td align="center"><a href="http://www.sina.com.cn/"> 新浪 </a><em>·</em><a href="http://weibo.com/"> 微博 </a></td>
                <td align="center"><a href="http://www.sohu.com/">搜狐</a></td>
                <td align="center"><a href="http://www.qq.com/">腾讯</a></td>
                <td align="center"><a href="http://www.163.com/">网易</a></td>
            </tr>
            <tr>
                <td align="center"> <a href="http://www.ifeng.com/"> 凤凰 </a> <em>·</em> <a href="http://news.ifeng.com/"> 军事 </a></td>
                <td align="center"><a href="http://www.people.com.cn/"> 人民 </a> <em>·</em> <a href="http://www.xinhuanet.com/"> 新华 </a> </td>
                <td align="center"><a href="http://www.eastmoney.com/"> 东方财富 </a></td>
                <td align="center"><a href="https://www.taobao.com/"> 淘宝 </a></td>
                <td align="center"><a href="http://www.12306.cn/mormhweb/">火车票-12306</a></td>
            </tr>
            <tr>
                <td align="center"><a href="http://email.163.com/">163邮箱</a></td>
                <td align="center"><a href="http://www.126.com/">126邮箱</a></td>
                <td align="center"><a href="http://mail.qq.com/" class=" " cid="30904" rd="1">QQ邮箱</a></td>
                <td align="center"><a href="http://mail.sina.com.cn/">新浪邮箱</a></td>
            </tr>
        </table>
    </div>
</body>

</html>