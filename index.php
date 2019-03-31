<?php
$query = $_SERVER["QUERY_STRING"];
if ( !empty($query) ) {
    echo $query;
} else {
?><!DOCTYPE html><html><body><script>t=location.hash.substr(1),t&&location.replace(t),(document.title=t),document.body.appendChild((function(a){a.href=t||'javascript:history.back()',a.innerText='Click here to continue';return a})(document.createElement('a')))</script></body></html><?php
}
?>