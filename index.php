<?php
$referer = $_SERVER['HTTP_REFERER'];
if ( !empty($referer) ) {
    $url_array = parse_url($referer);
    $schema = empty($url_array['scheme']) ? 'https' : $url_array['scheme'];
    $port = empty($url_array['port']) || intval($url_array['port']) == 80 ? '' : ':' . $url_array['port'];
    $referer = $schema . '://' . $url_array['host'] . $port;
}

$query = $_SERVER['QUERY_STRING'];

if ( !empty($query) ) {
    if (substr($query, 0, 1) == '/') {
        header('Location: ' . $referer . $query);
    } else {
        header('Location: ' . $query);
    }
} else {
?><!DOCTYPE html><html><body><script>(function(l,d){t=l.hash.substr(1);t&&l.replace(t);d.title=t;setTimeout(function(){a=d.createElement('a');a.href=(t||'javascript:history.back()').replace(/^\//,<?= json_encode($referer . '/') ?>);a.innerText='Click here to continue';d.body.appendChild(a)},1000)})(location,document)</script></body></html><?php
}
?>