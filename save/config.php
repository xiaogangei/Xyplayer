<?php
$CONFIG=array (
  'ver' => '3.7',
  'user' => 'xiaogang',
  'pass' => '3bbc7d95be0c7bd563d336ff11b85398',
  'TITLE' => ' 智能解析',
  'resou' => '',
  'sitetime' => '2014/05/22 14:30:00',
  'keywords' => '',
  'description' => '',
  'HEADER' => 'PG1ldGEgaHR0cC1lcXVpdj0iQWNjZXNzLUNvbnRyb2wtQWxsb3ctT3JpZ2luIiBjb250ZW50PSIqIj48IS0tIOWFgeiuuOi3qOWfn+iuv+mXriAtLT4KPG1ldGEgbmFtZT0icmVmZXJyZXIiIGNvbnRlbnQ9Im5ldmVyIj48IS0tIOWPkemAgXJlZmVycmVy77yM56qB56C0NDAz6ZmQ5Yi2LOe7lei/h+mYsuebl+mTviAtLT4KPG1ldGEgaHR0cC1lcXVpdj0icHJhZ21hIiBjb250ZW50PSJuby1jYWNoZSIgLz48bWV0YSBodHRwLWVxdWl2PSJleHBpcmVzIiBjb250ZW50PSIwIiAvPiAgICA8IS0tIOS4jee8k+WtmOe9kemhtSAtLT4KPG1ldGEgbmFtZT0ieDUtZnVsbHNjcmVlbiIgY29udGVudD0idHJ1ZSIgLz48bWV0YSBuYW1lPSJ4NS1wYWdlLW1vZGUiIGNvbnRlbnQ9ImFwcCIgIC8+IDwhLS0gWDUgIOWFqOWxj+WkhOeQhiAtLT4KPG1ldGEgbmFtZT0iZnVsbC1zY3JlZW4iIGNvbnRlbnQ9InllcyIgLz48bWV0YSBuYW1lPSJicm93c2VybW9kZSIgY29udGVudD0iYXBwbGljYXRpb24iIC8+ICA8IS0tIFVDIOWFqOWxj+W6lOeUqOaooeW8jyAtLT4KPG1ldGEgbmFtZT3igJ1hcHBsZS1tb2JpbGUtd2ViLWFwcC1jYXBhYmxl4oCdIGNvbnRlbnQ94oCdeWVz4oCdIC8+IDxtZXRhIG5hbWU94oCdYXBwbGUtbW9iaWxlLXdlYi1hcHAtc3RhdHVzLWJhci1zdHlsZeKAnSBjb250ZW50PeKAnWJsYWNrLXRyYW5zbHVjZW504oCdIC8+IDwhLS0gIOiLueaenOWFqOWxj+W6lOeUqOaooeW8jyAtLT4=',
  'API_PATH' => 'api.php',
  'ROOT_PATH' => '',
  'templets' => 
  array (
    'off' => '0',
    'html' => 'html',
    'css' => '',
    'pc' => 'byg',
    'wap' => 'byg',
  ),
  'chche_config' => 
  array (
    'type' => '1',
    'prot' => '6379',
    'time' => '24h',
  ),
  'BOOK_INFO' => 
  array (
    'off' => '0',
    'info' => 'PGZvbnQgY29sb3I9IiMwMEZGMDAiPuWmguaenOaSreaUvuWksei0pe+8jOivt+WIh+aNouS4jeWQjOe6v+i3ryHkupHmkq3mlL7lt7LmlK/mjIHnvJPlrZjnp5LliqDovb3vvIzmrKLov47kvb/nlKghPC9mb250Pg==',
  ),
  'timecookie' => '24',
  'timeout' => '8',
  'from_timeout' => '5',
  'BLACKLIST' => 
  array (
    'off' => '1',
    'match' => 
    array (
      0 => 
      array (
        'off' => '0',
        'type' => '0',
        'for' => '',
        'val' => 
        array (
          0 => 'localhost',
        ),
        'black' => '0',
        'name' => '授权网站',
        'match' => '0',
        'num' => '100',
      ),
      1 => 
      array (
        'off' => '0',
        'type' => '1',
        'val' => 
        array (
          0 => 'av.com',
        ),
        'black' => '1',
        'name' => '视频黑名单',
        'match' => '1',
        'num' => '10',
      ),
      2 => 
      array (
        'off' => '0',
        'type' => '0',
        'val' => 
        array (
          0 => 'av.com',
        ),
        'black' => '2',
        'name' => '域名黑名单',
        'match' => '1',
        'num' => '6',
      ),
      3 => 
      array (
        'off' => '0',
        'type' => '3',
        'val' => 
        array (
          0 => '127.0.0.1',
        ),
        'black' => '0',
        'name' => 'IP黑名单',
        'match' => '1',
        'num' => '100',
      ),
      4 => 
      array (
        'off' => '0',
        'type' => '2',
        'val' => 
        array (
          0 => 'xysoft',
        ),
        'black' => '0',
        'name' => '授权APP',
        'match' => '0',
        'num' => '110',
      ),
      5 => 
      array (
        'off' => '0',
        'type' => '1',
        'for' => '',
        'val' => 
        array (
          0 => '.*?qq.com/x/cover/brq7blajvjhrcit.*?(?#流浪地球)',
          1 => '.*?qq.com/x/cover/wu1e7mrffzvibjy.*?',
        ),
        'black' => '6',
        'name' => '开启版权保护',
        'match' => '1',
        'num' => '100',
      ),
      6 => 
      array (
        'off' => '0',
        'type' => '0',
        'for' => '',
        'val' => 
        array (
          0 => '',
        ),
        'black' => '7',
        'name' => '开启框架访问',
        'match' => '1',
        'num' => '100',
      ),
      7 => 
      array (
        'off' => '0',
        'type' => '0',
        'for' => 'api.php|/video/index.php|/video/m3u8.php|/video/ts.php',
        'val' => 
        array (
          0 => '$host',
          1 => 'qq.com',
        ),
        'black' => '8',
        'name' => '开启API防盗',
        'match' => '0',
        'num' => '80',
      ),
    ),
    'black' => 
    array (
      0 => 
      array (
        'type' => '1',
        'action' => '1',
        'info' => 'ZWNobyAi5pys56uZ5bey5byA5ZCv6Ziy55uX6ZO+77yM6I635Y+W5o6I5p2D6K+36IGU57O75pys56uZ566h55CG5ZGYIjs=',
        'name' => '提示防盗链',
      ),
      1 => 
      array (
        'type' => '1',
        'action' => '1',
        'info' => 'ZWNobyAi55uu5qCH572R56uZ5raJ5auM6Z2e5rOV5L+h5oGvLOacjeWKoeWZqOW3suaLkue7neino+aekCI7',
        'name' => '提示非法信息',
      ),
      2 => 
      array (
        'type' => '1',
        'action' => '1',
        'info' => 'ZWNobyAi55uu5qCH572R56uZ5Zyo6buR5ZCN5Y2V5LitLOivt+iBlOezu+e9keermeeuoeeQhuWRmOino+mZpO+8gSI7',
        'name' => '提示黑名单',
      ),
      3 => 
      array (
        'type' => '1',
        'action' => '1',
        'info' => 'ZWNobyAi5pys56uZ5bey5byA5ZCv6Ziy55uX6ZO+77yM6I635Y+W5o6I5p2D6K+36IGU57O75pys56uZ566h55CG5ZGYIjsKICAgICAgIGhlYWRlcigiUmVmcmVzaDozO3VybD1odHRwOi8vbm9oYWNrcy5jbiIpOw==',
        'name' => '跳转首页',
      ),
      4 => 
      array (
        'type' => '1',
        'action' => '1',
        'info' => 'aGVhZGVyKCJIVFRQLzEuMSA0MDQgTm90IEZvdW5kIik7ZXhpdCgiNDA0LOaWh+S7tuacquaJvuWIsCIpOw==',
        'name' => '提示404',
      ),
      5 => 
      array (
        'type' => '0',
        'action' => '0',
        'info' => 'PHNjcmlwdD4gCnZhciBfaG10ID0gX2htdCB8fCBbXTsKICAgKGZ1bmN0aW9uKCkgewogICAgdmFyIGhtID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgic2NyaXB0Iik7CiAgICBobS5zcmMgPSAiaHR0cHM6Ly9obS5iYWlkdS5jb20vaG0uanM/ZGVhNmJhZDEwNTc4NjFhOGYwZWMyYjZmODMzMmVlYzEiOwogICAgdmFyIHMgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgic2NyaXB0IilbMF07IAogICAgcy5wYXJlbnROb2RlLmluc2VydEJlZm9yZShobSxzKTsKfSkoKTsKPC9zY3JpcHQ+',
        'name' => '植入广告',
      ),
      6 => 
      array (
        'type' => '1',
        'action' => '1',
        'info' => 'ZWNobyAi55uu5qCH6KeG6aKR5Y+X54mI5p2D5L+d5oqkLOacjeWKoeWZqOW3suaLkue7neino+aekCI7',
        'name' => '提示版权保护',
      ),
      7 => 
      array (
        'type' => '1',
        'action' => '1',
        'info' => 'ZWNobyAiPGZvbnQgc3R5bGU9J2NvbG9yOnJlZDsnPuS4jeaUr+aMgeebtOaOpeiuv+mXrizor7flnKjmoYbmnrbkuK3osIPnlKjmnKzop6PmnpA8L2ZvbnQ+Ijs=',
        'name' => '提示框架访问',
      ),
      8 => 
      array (
        'type' => '1',
        'action' => '1',
        'info' => 'ZWNobyAi6K+35Yu/6Z2e5rOV6LCD55So77yM6I635Y+W5o6I5p2D6K+36IGU57O75pys56uZ566h55CG5ZGYIjs=',
        'name' => '提示非法调用',
      ),
    ),
    'adblack' => 
    array (
      'match' => 
      array (
        0 => 
        array (
          'off' => '1',
          'name' => '干掉所有JS代码',
          'target' => 'Lio=',
          'ref' => '',
          'num' => '1000',
          'val' => 
          array (
            '<script>[\\S\\s]*<\\/script>' => '',
          ),
        ),
      ),
      'name' => 'jx',
    ),
    'type' => NULL,
  ),
  'NULL_URL' => 
  array (
    'type' => '2',
    'url' => 'so.php',
    'info' => 'IDxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+CiAgICBIMXttYXJnaW46MTAlIDAgYXV0bzsgY29sb3I6I0M3NjM2QzsgdGV4dC1hbGlnbjpjZW50ZXI7IGZvbnQtZmFtaWx5OiBNaWNyb3NvZnQgSmhlbmdoZWk7fQogICAgcHtmb250LXNpemU6IDEuMnJlbTsvKjEuMiDDlyAxMHB4ID0gMTJweCAqLzt0ZXh0LWFsaWduOmNlbnRlcjsgZm9udC1mYW1pbHk6IE1pY3Jvc29mdCBKaGVuZ2hlaTt9CiAgICA8L3N0eWxlPiAgCiAgIDxoMT7or7floavlhpl1cmzlnLDlnYA8L2gxPgogICA8cD7mnKzop6PmnpDmjqXlj6Pku4XnlKjkuo7lrabkuaDkuqTmtYHvvIznm5fnlKjlv4XnqbbvvIF+PC9wPg==',
  ),
  'HEADER_CODE' => '',
  'FOOTER_CODE' => '',
  'LINK_URL' => 
  array (
    0 => 
    array (
      'off' => '0',
      'type' => '1',
      'api' => '1',
      'match' => 'e1wkXC5wb3N0XCgiKC4rPykifQ==',
      'num' => '999',
      'name' => '官方CMS插件接口',
      'path' => 'http://mov.baidu.com/parse/api.php',
      'shell' => '',
      'html' => '',
      'fields' => 'IHVybD0kdXJs',
      'strtr' => 'JHVybA==',
      'cookie' => '',
      'proxy' => '',
      'val_off' => '0',
      'header' => NULL,
      'add' => NULL,
      'val' => NULL,
    ),
    1 => 
    array (
      'off' => 0,
      'type' => '0',
      'api' => '0',
      'match' => 'e1wkXC5wb3N0XCgiKC4rPykiLChcey4qXH0pLH0=',
      'num' => '100',
      'name' => '思古解析',
      'path' => 'https://api.bbbbbb.me/zy/?url=',
      'shell' => 'JHVybD1iYXNlNjRfZW5jb2RlKCR1cmwpOwoka2V5PSRfQ09PS0lFWydrZXknXTs=',
      'html' => 'PGh0bWw+CjxoZWFkPgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSJodHRwczovL2Nkbi5ib290Y3NzLmNvbS9jcnlwdG8tanMvMy4xLjkvY3J5cHRvLWpzLmpzIj48L3NjcmlwdD4KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLi4vaW5jbHVkZS9jbGFzcy5jb29raWUuanMiPjwvc2NyaXB0Pgo8L2hlYWQ+Cjxib2R5Pgo8c2NyaXB0Pgp2YXIgX18weDJiYmNiID0gWydNUmZDaHc9PScsICdZMExEb01LU1FYUENvY09HJywgJ3dwZ1h3by9EaXNLV1lNT3BQUT09JywgJ3dwd013cGpEbThLUk04S3BmTUtSd3FIQ25UYkRnekxEbk1PYndwN0Rzc09CUXNLdXdwNVhFeFBDaFNOdkdWUmthY0svd3BERHFBNU8nLCAndzVFOUJzT0QnLCAnd3FURHM4T0x3NVFvJywgJ0Q4S0xjY0s2YkdoVU5nPT0nLCAnQmNLTXdvTEN1Zz09JywgJ3c2N0RxY09hdzVsaEhXY0cnLCAnQlNiRGdNS0R3cTNDaFhNV1ZjT1R3cnA3d29RPScsICdWaUhDdE1PT0RzSzV3NUZxZUN2Q3IzNXh3cGdVdzdBPScsICd3N1J4d3B2RG9rM0Nvc09CRTMvQ24ycE13cVV2d3JQRG5BPT0nLCAnd3JrOHc1az0nLCAnYXNPUndybz0nLCAnY3pSMHc2b2UnLCAnV2NPbHc3VT0nLCAnd3BIRHFzSy93b0U9JywgJ3dvUVp3cDdEbU1LSCcsICdjeUZPSlE9PScsICdTc09Xd3B3PSddOwooZnVuY3Rpb24oXzB4NGFmMTRhLCBfMHg1YzIyN2IpIHsKCXZhciBfMHg1OTRjZWQgPSBmdW5jdGlvbihfMHg0MWMxODEpIHsKCQkJd2hpbGUgKC0tXzB4NDFjMTgxKSB7CgkJCQlfMHg0YWYxNGFbJ3B1c2gnXShfMHg0YWYxNGFbJ3NoaWZ0J10oKSk7CgkJCX0KCQl9OwoJXzB4NTk0Y2VkKCsrXzB4NWMyMjdiKTsKfShfXzB4MmJiY2IsIDB4MWFjKSk7CnZhciBfMHg4MWJiID0gZnVuY3Rpb24oXzB4YmZhODYwLCBfMHg0ZmI0MTIpIHsKCQlfMHhiZmE4NjAgPSBfMHhiZmE4NjAgLSAweDA7CgkJdmFyIF8weDIxMGI5NSA9IF9fMHgyYmJjYltfMHhiZmE4NjBdOwoJCWlmIChfMHg4MWJiWydpbml0aWFsaXplZCddID09PSB1bmRlZmluZWQpIHsKCQkJKGZ1bmN0aW9uKCkgewoJCQkJdmFyIF8weDUyNjMzYyA9IHR5cGVvZiB3aW5kb3cgIT09ICd1bmRlZmluZWQnID8gd2luZG93IDogdHlwZW9mIHByb2Nlc3MgPT09ICdvYmplY3QnICYmIHR5cGVvZiByZXF1aXJlID09PSAnZnVuY3Rpb24nICYmIHR5cGVvZiBnbG9iYWwgPT09ICdvYmplY3QnID8gZ2xvYmFsIDogdGhpczsKCQkJCXZhciBfMHgyOTVjZTQgPSAnQUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODkrLz0nOwoJCQkJXzB4NTI2MzNjWydhdG9iJ10gfHwgKF8weDUyNjMzY1snYXRvYiddID0gZnVuY3Rpb24oXzB4NGYyMWM5KSB7CgkJCQkJdmFyIF8weDU5YzgwMiA9IFN0cmluZyhfMHg0ZjIxYzkpWydyZXBsYWNlJ10oLz0rJC8sICcnKTsKCQkJCQlmb3IgKHZhciBfMHg1MWJjMTEgPSAweDAsIF8weDM1MjM3OSwgXzB4MmU4N2NiLCBfMHgyOGQwYjAgPSAweDAsIF8weDVhNzhjNSA9ICcnOyBfMHgyZTg3Y2IgPSBfMHg1OWM4MDJbJ2NoYXJBdCddKF8weDI4ZDBiMCsrKTt+XzB4MmU4N2NiICYmIChfMHgzNTIzNzkgPSBfMHg1MWJjMTEgJSAweDQgPyBfMHgzNTIzNzkgKiAweDQwICsgXzB4MmU4N2NiIDogXzB4MmU4N2NiLCBfMHg1MWJjMTErKyAlIDB4NCkgPyBfMHg1YTc4YzUgKz0gU3RyaW5nWydmcm9tQ2hhckNvZGUnXSgweGZmICYgXzB4MzUyMzc5ID4+ICgtMHgyICogXzB4NTFiYzExICYgMHg2KSkgOiAweDApIHsKCQkJCQkJXzB4MmU4N2NiID0gXzB4Mjk1Y2U0WydpbmRleE9mJ10oXzB4MmU4N2NiKTsKCQkJCQl9CgkJCQkJcmV0dXJuIF8weDVhNzhjNTsKCQkJCX0pOwoJCQl9KCkpOwoJCQl2YXIgXzB4MTU5YTgzID0gZnVuY3Rpb24oXzB4NDNlZmE0LCBfMHgyNGY2YjMpIHsKCQkJCQl2YXIgXzB4NThlNDQ4ID0gW10sCgkJCQkJCV8weDU4MGYzNCA9IDB4MCwKCQkJCQkJXzB4MTU0MDE3LCBfMHgxNDI4MzggPSAnJywKCQkJCQkJXzB4Mjc3MTE5ID0gJyc7CgkJCQkJXzB4NDNlZmE0ID0gYXRvYihfMHg0M2VmYTQpOwoJCQkJCWZvciAodmFyIF8weDQ4YTZlZSA9IDB4MCwgXzB4MTdiYzE0ID0gXzB4NDNlZmE0WydsZW5ndGgnXTsgXzB4NDhhNmVlIDwgXzB4MTdiYzE0OyBfMHg0OGE2ZWUrKykgewoJCQkJCQlfMHgyNzcxMTkgKz0gJyUnICsgKCcwMCcgKyBfMHg0M2VmYTRbJ2NoYXJDb2RlQXQnXShfMHg0OGE2ZWUpWyd0b1N0cmluZyddKDB4MTApKVsnc2xpY2UnXSgtMHgyKTsKCQkJCQl9CgkJCQkJXzB4NDNlZmE0ID0gZGVjb2RlVVJJQ29tcG9uZW50KF8weDI3NzExOSk7CgkJCQkJZm9yICh2YXIgXzB4M2U3NjZmID0gMHgwOyBfMHgzZTc2NmYgPCAweDEwMDsgXzB4M2U3NjZmKyspIHsKCQkJCQkJXzB4NThlNDQ4W18weDNlNzY2Zl0gPSBfMHgzZTc2NmY7CgkJCQkJfQoJCQkJCWZvciAoXzB4M2U3NjZmID0gMHgwOyBfMHgzZTc2NmYgPCAweDEwMDsgXzB4M2U3NjZmKyspIHsKCQkJCQkJXzB4NTgwZjM0ID0gKF8weDU4MGYzNCArIF8weDU4ZTQ0OFtfMHgzZTc2NmZdICsgXzB4MjRmNmIzWydjaGFyQ29kZUF0J10oXzB4M2U3NjZmICUgXzB4MjRmNmIzWydsZW5ndGgnXSkpICUgMHgxMDA7CgkJCQkJCV8weDE1NDAxNyA9IF8weDU4ZTQ0OFtfMHgzZTc2NmZdOwoJCQkJCQlfMHg1OGU0NDhbXzB4M2U3NjZmXSA9IF8weDU4ZTQ0OFtfMHg1ODBmMzRdOwoJCQkJCQlfMHg1OGU0NDhbXzB4NTgwZjM0XSA9IF8weDE1NDAxNzsKCQkJCQl9CgkJCQkJXzB4M2U3NjZmID0gMHgwOwoJCQkJCV8weDU4MGYzNCA9IDB4MDsKCQkJCQlmb3IgKHZhciBfMHgxOTYyYjMgPSAweDA7IF8weDE5NjJiMyA8IF8weDQzZWZhNFsnbGVuZ3RoJ107IF8weDE5NjJiMysrKSB7CgkJCQkJCV8weDNlNzY2ZiA9IChfMHgzZTc2NmYgKyAweDEpICUgMHgxMDA7CgkJCQkJCV8weDU4MGYzNCA9IChfMHg1ODBmMzQgKyBfMHg1OGU0NDhbXzB4M2U3NjZmXSkgJSAweDEwMDsKCQkJCQkJXzB4MTU0MDE3ID0gXzB4NThlNDQ4W18weDNlNzY2Zl07CgkJCQkJCV8weDU4ZTQ0OFtfMHgzZTc2NmZdID0gXzB4NThlNDQ4W18weDU4MGYzNF07CgkJCQkJCV8weDU4ZTQ0OFtfMHg1ODBmMzRdID0gXzB4MTU0MDE3OwoJCQkJCQlfMHgxNDI4MzggKz0gU3RyaW5nWydmcm9tQ2hhckNvZGUnXShfMHg0M2VmYTRbJ2NoYXJDb2RlQXQnXShfMHgxOTYyYjMpIF4gXzB4NThlNDQ4WyhfMHg1OGU0NDhbXzB4M2U3NjZmXSArIF8weDU4ZTQ0OFtfMHg1ODBmMzRdKSAlIDB4MTAwXSk7CgkJCQkJfQoJCQkJCXJldHVybiBfMHgxNDI4Mzg7CgkJCQl9OwoJCQlfMHg4MWJiWydyYzQnXSA9IF8weDE1OWE4MzsKCQkJXzB4ODFiYlsnZGF0YSddID0ge307CgkJCV8weDgxYmJbJ2luaXRpYWxpemVkJ10gPSAhISBbXTsKCQl9CgkJdmFyIF8weDJiNzU0NiA9IF8weDgxYmJbJ2RhdGEnXVtfMHhiZmE4NjBdOwoJCWlmIChfMHgyYjc1NDYgPT09IHVuZGVmaW5lZCkgewoJCQlpZiAoXzB4ODFiYlsnb25jZSddID09PSB1bmRlZmluZWQpIHsKCQkJCV8weDgxYmJbJ29uY2UnXSA9ICEhIFtdOwoJCQl9CgkJCV8weDIxMGI5NSA9IF8weDgxYmJbJ3JjNCddKF8weDIxMGI5NSwgXzB4NGZiNDEyKTsKCQkJXzB4ODFiYlsnZGF0YSddW18weGJmYTg2MF0gPSBfMHgyMTBiOTU7CgkJfSBlbHNlIHsKCQkJXzB4MjEwYjk1ID0gXzB4MmI3NTQ2OwoJCX0KCQlyZXR1cm4gXzB4MjEwYjk1OwoJfTsKCQoJdmFyIGtleV9iYXNlID0gXzB4ODFiYignMHgyJywgJ20wMU4nKTsKCXZhciBpdl9iYXNlID0gXzB4ODFiYignMHgzJywgJ1FoQ0InKTsKCXZhciBzaWd1ID0gZnVuY3Rpb24oXzB4ODYzZGM2KSB7CgkJCXZhciBfMHhkZDkxOTIgPSBDcnlwdG9KU1tfMHg4MWJiKCcweDQnLCAnJkxTMicpXShrZXlfYmFzZSk7CgkJCXZhciBfMHhhYmIyYmYgPSBDcnlwdG9KU1tfMHg4MWJiKCcweDUnLCAnNDdCaScpXVsnVXRmOCddW18weDgxYmIoJzB4NicsICckKG0hJyldKF8weGRkOTE5Mik7CgkJCXZhciBfMHg0YTQwZWIgPSBDcnlwdG9KU1tfMHg4MWJiKCcweDcnLCAnNipqIScpXVtfMHg4MWJiKCcweDgnLCAnTHhYcScpXVtfMHg4MWJiKCcweDknLCAnJkxTMicpXShpdl9iYXNlKTsKCQkJdmFyIF8weDUyNDM0MyA9IENyeXB0b0pTWydBRVMnXVsnZW5jcnlwdCddKF8weDg2M2RjNiwgXzB4YWJiMmJmLCB7CgkJCQknaXYnOiBfMHg0YTQwZWIsCgkJCQknbW9kZSc6IENyeXB0b0pTW18weDgxYmIoJzB4YScsICd4ZnBTJyldW18weDgxYmIoJzB4YicsICc3JGRUJyldLAoJCQkJJ3BhZGRpbmcnOiBDcnlwdG9KU1tfMHg4MWJiKCcweGMnLCAna1l6SCcpXVsnWmVyb1BhZGRpbmcnXQoJCQl9KTsKCQkJcmV0dXJuIF8weDUyNDM0M1tfMHg4MWJiKCcweGQnLCAnVFI3WScpXSgpOwoJCX07Cgp2YXIgc3RyPSRmaWVsZHM7CkNvb2tpZS5zZXQoImtleSIsc3RyLmtleSx7ZXhwaXJlczoiNXMiLHBhdGg6Ii8ifSk7CkNvb2tpZS51cGRhdGUoKTsKLy9jb25zb2xlLmxvZyhDb29raWUuZ2V0KCJrZXkiKSk7Cjwvc2NyaXB0PgoKPC9ib2R5Pgo8L2h0bWw+',
      'fields' => 'dXJsPSR1cmwma2V5PSRrZXk=',
      'strtr' => 'JHVybCwka2V5',
      'cookie' => '',
      'proxy' => '',
      'val_off' => '1',
      'header' => 
      array (
        'Content-Type' => 'application/x-www-form-urlencoded',
      ),
      'add' => NULL,
      'val' => 
      array (
        'url' => 'url',
        'code' => 'code',
        'play' => 'type',
      ),
    ),
    2 => 
    array (
      'off' => '0',
      'type' => '0',
      'api' => '0',
      'match' => 'e1wkXC5wb3N0XCgiKC4rPykiLChcey4qXH0pLH0=',
      'num' => '100',
      'name' => 'PPS解析',
      'path' => 'http://jx.arpps.com/pps/?url=',
      'shell' => 'JG1kNT0kX0NPT0tJRVsibWQ1Il07IAoka2V5PSRfQ09PS0lFWyJrZXkiXTsgCg==',
      'html' => 'PGh0bWw+CjxoZWFkPgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSJodHRwOi8vanguYXJwcHMuY29tL3Bwcy9ja3BsYXllci9tZDUubWluLmpzIj48L3NjcmlwdD4KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cDovL2p4LmFycHBzLmNvbS9wcHMvY2twbGF5ZXIvQXV0aENvZGUuanMiPjwvc2NyaXB0Pgo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSIuL2luY2x1ZGUvY29va2llLmpzIj48L3NjcmlwdD4KPC9oZWFkPgo8Ym9keT4KPHNjcmlwdD4KCnZhciBzdHI9JGZpZWxkczsKQ29va2llLnNldCgibWQ1IixzaWduKHN0ci5rZXkpLHtleHBpcmVzOiI1cyIscGF0aDoiLyJ9KTsKQ29va2llLnNldCgia2V5IixzdHIua2V5LHtleHBpcmVzOiI1cyIscGF0aDoiLyJ9KTsKQ29va2llLnVwZGF0ZSgpOwoKY29uc29sZS5sb2coc2lnbihzdHIua2V5KSk7CmNvbnNvbGUubG9nKHN0ci5rZXkpOwoKPC9zY3JpcHQ+Cgo8L2JvZHk+CjwvaHRtbD4K',
      'fields' => 'aWQ9JHVybCZtZDU9JG1kNSZrZXk9JGtleQ==',
      'strtr' => 'JHVybCwkbWQ1LCRrZXk=',
      'cookie' => '',
      'proxy' => '',
      'val_off' => '0',
      'header' => 
      array (
        'Content-Type' => 'application/x-www-form-urlencoded',
      ),
      'add' => NULL,
      'val' => 
      array (
        'url' => 'url',
      ),
    ),
  ),
  'jx_url' => 
  array (
    0 => '推荐线路=>https://z1.m1907.cn/?jx=',
    1 => '推荐线路2=>https://jx.618g.com/?url=',
    2 => '17云=>https://www.1717yun.com/jx/ty.php?url=',
    3 => '思古3=>https://jsap.attakids.com/?url=',
    4 => '百域=>https://jx.618g.com/?url=',
  ),
  'jx_link' => 
  array (
    '视频搜索' => 'xyplay.href("so.php?url="+xyplay.url);',
  ),
  'live_url' => 
  array (
  ),
  'play' => 
  array (
    'off' => 
    array (
      'yun' => '0',
      'link' => '0',
      'live' => '0',
      'help' => '1',
      'debug' => '0',
      'log' => '1',
      'autolist' => '0',
      'ckplay' => '1',
      'jmp' => '0',
      'autoline' => NULL,
      'autoflag' => '0',
      'mylink' => '0',
      'lshttps' => '0',
      'jx' => '1',
      'posterr' => '1',
    ),
    'line' => 
    array (
      'pc' => 
      array (
        'line' => '1',
        'adtime' => '0',
        'adPage' => 'source/plug/pc.html',
        'info' => '服务器正在解析中,请稍后....',
        'infotime' => '2',
      ),
      'wap' => 
      array (
        'line' => '1',
        'adtime' => '0',
        'adPage' => 'source/plug/pc.html',
        'info' => '服务器正在解析中,请稍后....',
        'infotime' => '2',
      ),
      'all' => 
      array (
        'autoline' => 
        array (
          'off' => '0',
          'val' => 
          array (
            'iqiyi.com' => '2',
            'v.qq.com' => '3',
          ),
        ),
      ),
    ),
    'play' => 
    array (
      'pc' => 
      array (
        'player' => 'dplayer',
        'autoplay' => '1',
        'player_diy' => '',
      ),
      'wap' => 
      array (
        'player' => 'ckplayerx',
        'autoplay' => '1',
        'player_diy' => '',
      ),
      'all' => 
      array (
        'autoline' => 
        array (
          'off' => '0',
          'val' => 
          array (
            'iqiyi.com' => 'ckplayerx',
            'v.qq.com' => 'dplayer',
          ),
        ),
        'headtime' => NULL,
        'endtime' => NULL,
        'ver' => '1',
        'p2pinfo' => '0',
        'seektime' => '1',
        'logo_off' => '0',
        'logo_style' => 'bGVmdDowcHg7IHRvcDo1MHB4O21heC13aWR0aDoxMDBweDttYXgtaGVpZ2h0OjEwMHB4',
        'danmaku' => '0',
      ),
    ),
    'all' => 
    array (
      'AppName' => 'xysoft|xyplayer',
      'ver' => '智能解析 X4.0',
      'by' => '本接口仅供测试学习，请勿用于非法用途',
      'info' => '如果播放失败，请切换不同线路!',
      'decode' => 'IC8vbG9jYXRpb24uaHJlZj0iaHR0cDovL25vaGFja3MuY24iOyAgLy/ot7PovaznvZHnq5kKeHlwbGF5LmVjaG8oIjxicj48YnI+PGJyPuajgOa1i+WIsOmdnuazleiwg+ivlSzor7flhbPpl63lkI7liLfmlrDph43or5UhIik7ICAvL+eUqOaIt+eql+WPo+aYvuekuuS/oeaBrwpzZXRJbnRlcnZhbCgiZGVidWdnZXI7Y29uc29sZS5sb2coXCfor7fli7/pnZ7ms5XosIPor5Us6LSt5Lmw6K+36IGU57O7UVE6MjM0NTMxNjFcJyk7Iik7ICAgICAgLy/osIPor5Xnqpflj6PmmL7npLrkv6Hmga8J',
      'link_info' => '服务器正在解析中,请稍后....',
      'yun_info' => '正在匹配资源,请稍后....',
      'yun_title' => '云播放',
      'defile_info' => '解析失败，请切换线路！',
      'jx_info' => '服务器正在解析中,请稍后....',
    ),
    'style' => 
    array (
      'logo_show' => '1',
      'line_show' => '1',
      'list_show' => '1',
      'flaglist_show' => '1',
      'playlist_show' => '1',
      'line_style' => 'color:#2693FF;border:1px solid #2693FF;',
      'line_hover' => 'color:#FFF;background-color:#2693FF;',
      'line_on' => 'color:#FFF;background-color:#2693FF;',
      'play_style' => 'color:#FFF;border:1px solid #2693FF;',
      'play_hover' => 'color:#FFF;background-color:#2693FF;',
      'play_on' => 'color:#FFF;background-color:#2693FF;',
      'off' => NULL,
    ),
    'match' => 
    array (
      'yunflag' => '',
      'video' => '',
      'urljmp' => 'BGM->http://api.jp255.com/api/?url=',
      'urlurl' => '/share/',
      'urlflag' => 'url|yun|ziyuan',
      'playflag' => 'ogg|mp4|webm|m3u8|ck',
      'flagjmp' => 'fooyun->http://www.fooyun.xyz/share/',
    ),
    'define' => 
    array (
    ),
  ),
);
