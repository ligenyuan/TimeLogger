<?php
/**
 * Created by PhpStorm.
 * User: 术与道
 * Date: 2019/7/15
 * Time: 11:54
 */
?>

<!--
请保留以下版权信息

主题:TimeLogger
By 术与道  2019-07
www.shuyudao.top
-->

<div id="footer">
    <p>©2019 <a href="http://www.shuyudao.top">术与道</a> By <a href="http://typecho.org/" style="text-decoration: none;color: #8f8f8f;">typecho</a> &
        <a href="#" style="text-decoration: none;color: #8f8f8f;">TimeLogger</a>.</p>
</div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('static/js/js.js');?>"></script>
<?php if ($this->is('post')||$this->is('page')) : ?>
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.15.8/build/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
<?php endif; ?>

</html>