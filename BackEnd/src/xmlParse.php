<?php
print 'ok';
$xml = file_get_contents('https://lapute.lt/module/varle/feed?token=b51a7322836cbdc7ac8914ffb4a86148');
$xml_parse = simplexml_load_string($xml);
// print "<prev>";
// print_r($xml_parse);
// print "</prev>";

foreach ($xml_parse as $k => $v) {
    print "<pre>";
    print_r($v);
    print "<pre>";

    print $v->product->id . '<br>';
}