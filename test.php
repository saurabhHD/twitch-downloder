<?php

$request_type = $_SERVER['REQUEST_METHOD'];
require_once("simple_html_dom.php");
if($request_type === "POST"){
    $url  = $_POST['country'];
    $pointer = base64_decode("aHR0cHM6Ly90d2l0dGVyLXRyZW5kcy5pYW1yb2hpdC5pbi8=");
    if($url =="india")
    {
        $html = file_get_html($pointer.$url);

        foreach($html->find("a[class=tweet]") as $element)
        {
            $item['tweet'] = $element->plaintext;
            $item['rank'] = $element->rank;
            $item['tweetcount'] = $element->tweetcount;
            $item['tweetcount_round'] = $element->tweetc;
            $item['redirect_url'] = $element->href;
            $item['location'] = "india";
            $items[] = $item;
        }

        $json = json_encode($items,JSON_FORCE_OBJECT);
        http_response_code(200);
        echo $json;
        }
        else{
            $html = file_get_html($pointer.$url);

            foreach($html->find("a[class=tweet]") as $element)
            {
                $item['tweet'] = $element->plaintext;
                $item['rank'] = $element->rank;
                $item['tweetcount'] = $element->tweetcount;
                $item['tweetcount_round'] = $element->tweetc;
                $item['redirect_url'] = $element->href;
                $item['location'] = $url;
                $items[] = $item;
            }

            $json = json_encode($items,JSON_FORCE_OBJECT);
            http_response_code(200);
            echo $json;
        }

}
else{
    http_response_code(401);
    echo "Unauthorized"; #this is my open book 
}


?>