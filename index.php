<?php
$query = $_SERVER['QUERY_STRING'];
if ( !empty($query) ) {
    // $ref = '';

    // if (substr($query, 0, 1) == '/' && !empty($_SERVER['HTTP_REFERER'])) {
    //     $url_array = parse_url($_SERVER['HTTP_REFERER']);
    //     $schema = empty($url_array['scheme']) ? 'https' : $url_array['scheme'];
    //     $port = empty($url_array['port']) || intval($url_array['port']) == 80 ? '' ':' . $url_array['port'];
    //     $ref = schema . '://' . $url_array['hostname'] . $port;
    //     $query = $ref . $query;
    // }

    header('Location: ' . $query);
} else {
?><!DOCTYPE html><html><body><script>t=location.hash.substr(1),t&&location.replace(t),(document.title=t),setTimeout(function(){document.body.appendChild((function(a){a.href=t||'javascript:history.back()',a.innerText='Click here to continue';return a})(document.createElement('a')))},1000)</script></body></html><?php
}
?>