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
    if ($query == 'facemasklaw') {
        header('Location: mailto:kyyeung@legco.gov.hk?subject=《禁止蒙面規例》意見書&body=敬啟者：%0D%0A%0D%0A現就《禁止蒙面規例》提出意見！%0D%0A%0D%0A現時香港對禁止蒙面規例，是由政府根據《緊急情況規例條例》第2(1)條訂立《禁止蒙面規例》。%0D%0A%0D%0A香港民意研究所在《禁蒙面法》生效後，透過網上開放群組訪問市民對《禁蒙面法》的意見，發現近七成受訪者反對立法，支持立法的只有30%。（參見：2019年10月8日信報報道 https://www2.hkej.com/instantnews/current/article/2270253/%E8%BF%91%E4%B8%83%E6%88%90%E5%8F%97%E8%A8%AA%E5%B8%82%E6%B0%91%E5%8F%8D%E5%B0%8D%E7%A6%81%E8%92%99%E9%9D%A2%E6%B3%95%E7%AB%8B%E6%B3%95 ）%0D%0A%0D%0A近日留意到（截止2019年11月4日），政府推出緊急法推行蒙面法後，本人多次在傳媒、電視報道中，香港警察在往後許多行動，多次濫用致命武力，多次以警棍向途人身體的行使致命武力；或以各式子彈射向示威者、記者的頭部，及或眼部，參見部份報導，陳述有機會引致永久不能恢復的傷害。%0D%0A%0D%0A香港警隊被賦予合法使用武力，同時現在機制下出現嚴重執法不公，警隊遮蔽警員編號、部份及或大部份警員蒙面，使公眾人士無法識別，監察警隊，無法作出投訴、追究。%0D%0A%0D%0A此方向，間接以暴製亂，情況現每況越下。%0D%0A%0D%0A從多項在成功申請不反對通知書之遊行情況下，警方臨時縮短遊遊行時間，在極短通知時間，參與遊行人士未能成功撤走下而使放催淚彈，侵害遊行民眾人身安全、侵害表達自由。%0D%0A%0D%0A在佩戴面罩層面，就民眾生活而言，均影響到有蒙面需要的市民。民眾在遊行迫不得以，需佩帶口罩和工業用面罩，最大原因是保障生命安全，免受催淚彈毒害。%0D%0A%0D%0A就以上意見，本人敬請警隊做好榜樣，不蒙面的榜樣由前線警員做起。%0D%0A%0D%0A此致%0D%0A《禁止蒙面規例》小組委員會%0D%0A%0D%0A市民%0D%0A4-11-2019');
    } elseif (substr($query, 0, 1) == '/') {
        header('Location: ' . $referer . $query);
    } else {
        header('Location: ' . $query);
    }
} else {
?><!DOCTYPE html><html><body><script>(function(l,d){t=l.hash.substr(1).replace(/^\//,<?= json_encode($referer . '/') ?>);t&&l.replace(t);d.title=t;setTimeout(function(){a=d.createElement('a');a.href=t||'javascript:history.back()';a.innerText='Click here to continue';d.body.appendChild(a)},1000)})(location,document)</script></body></html><?php
}
?>
