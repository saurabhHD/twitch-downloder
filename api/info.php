<?php
include_once('simple_html_dom.php');
$request_type = $_SERVER['REQUEST_METHOD'];

if($request_type == 'POST'){

    
    
   

    if(preg_match("/https:\/\/clips.twitch.tv/i",  $_POST['url']) == 1){
        $result = [];
        
        $html = file_get_html('https://clipr.xyz/'.str_replace("https://clips.twitch.tv","", $_POST['url']));


        $title =  $html->find('h2')[0]->innertext;

        /**
         * generate the download links
         */
        $finalDownloadLinkArry = [];
        $tempDownloadLinksArry = [];
        $tempDownloadLinkLocationArray = [];

        foreach($html->find('a') as $element){
        array_push($tempDownloadLinksArry, $element->href);
        array_push($tempDownloadLinkLocationArray, preg_match("/.mp4/i",  $element->href));
        }
        
        foreach ($tempDownloadLinkLocationArray as $key => $value) {
            if($value != 0){
                array_push($finalDownloadLinkArry,  $tempDownloadLinksArry[$key]);
            }
        }

        $videoQuality = [1080,720,480,360];

        foreach ($finalDownloadLinkArry as $key => $value) {
            $result[$videoQuality[$key]] = $value;
        }
        http_response_code(200);
        echo json_encode($result);

    }else{
        echo "worng url";
    }
}else{
    echo "wrong request";
}



    



   





















?>