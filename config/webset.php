<?php
return array (
  'webname' => 'FREEKAN自动采集影视系统',
  'websubname' => '免vip看全网影视',
  'webdomin' => 'www.ys.com',
  'webkeywords' => 'vip,免费,解析',
  'webdesc' => '我觉得这是一个很好的网站',
  'webdir' => 'admin',
  'webicp' => 'icp86786786',
  'webmail' => 'huijingdandan@gmail.com',
  'copyright' => '淡心心心',
  'webtemplate' => 'kano',
  'cy' => '<div id="SOHUCS"></div>
                        <script type="text/javascript">
                            (function () {
                                var appid = \'cytmACfPz\';
                                var conf = \'prod_fa582cf6c12ef221bcd46c4e0f8a05a5\';
                                var width = window.innerWidth || document.documentElement.clientWidth;
                                if (width < 960) {
                                    window.document.write(\'<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=\' + appid + \'&conf=\' + conf + \'"><\\/script>\');
                                } else {
                                    var loadJs = function (d, a) {
                                        var c = document.getElementsByTagName("head")[0] || document.head || document.documentElement;
                                        var b = document.createElement("script");
                                        b.setAttribute("type", "text/javascript");
                                        b.setAttribute("charset", "UTF-8");
                                        b.setAttribute("src", d);
                                        if (typeof a === "function") {
                                            if (window.attachEvent) {
                                                b.onreadystatechange = function () {
                                                    var e = b.readyState;
                                                    if (e === "loaded" || e === "complete") {
                                                        b.onreadystatechange = null;
                                                        a()
                                                    }
                                                }
                                            } else {
                                                b.onload = a
                                            }
                                        }
                                        c.appendChild(b)
                                    };
                                    loadJs("http://changyan.sohu.com/upload/changyan.js", function () {
                                        window.changyan.api.config({appid: appid, conf: conf})
                                    });
                                }
                            })(); </script>',
  'webtongji' => NULL,
  'weblogo' => 'wapian/images/logo.png',
);