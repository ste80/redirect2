<?php
$query = $_SERVER['QUERY_STRING'];
if ( !empty($query) ) {

    if (substr($query, 0, 1) == '/' && !empty($_SERVER['HTTP_REFERER'])) {
        $url_array = parse_url($_SERVER['HTTP_REFERER']);
        $port = empty($url_array['port']) || int($url_array['port']) == 80 ? '' ':' . $url_array['port'];
        $query = $url_array['scheme'] . '://' . $url_array['hostname'] . $port . $query;
    }

    header('Location: ' . $query);
} else {
?><!DOCTYPE html><html><body><script>t=location.hash.substr(1),t&&location.replace(t),(document.title=t),setTimeout(function(){document.body.appendChild((function(a){a.href=t||'javascript:history.back()',a.innerText='Click here to continue';return a})(document.createElement('a')))},1000)</script></body></html><?php
}
?>