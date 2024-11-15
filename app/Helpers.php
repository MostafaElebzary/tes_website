<?php

use App\Models\Page;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

// send fcm notification
function send_notification($title, $body, $details, $image, $data, $token)
{

    $message = $body;
    $path_to_fcm = 'https://fcm.googleapis.com/fcm/send';
    $server_key = "AAAA31ep5NE:APA91bFGi2zgaq3HwWcMz6Q77Me3CnFcxKms93YaC4GKoPQMwNWnwt3vV-58SXlg1HWKH800Li2FLoqhD9RLJvOeVCu-J93aC4T-MTtg6X30f6KVYIZt7sqmxGxjuXboFLc61HF6qjho";

    $headers = array(
        'Authorization:key=' . $server_key,
        'Content-Type:application/json'
    );

    $fields = array('registration_ids' => $token,
        'notification' => array('title' => $title, 'body' => strip_tags($message), 'details' => $details, 'image' => $image));

    $payload = json_encode($fields);
    $curl_session = curl_init();
    curl_setopt($curl_session, CURLOPT_URL, $path_to_fcm);
    curl_setopt($curl_session, CURLOPT_POST, true);
    curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURLOPT_IPRESOLVE);
    curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);
    $result = curl_exec($curl_session);
    curl_close($curl_session);
    return $result;
}


if (!function_exists('sendResponse')) {
    function sendResponse($status = null, $msg = null, $data = null)
    {
        return response(
            [
                'status' => $status,
                'msg' => $msg,
                'data' => $data
            ]
        );
    }
}
if (!function_exists('validationErrorsToString')) {
    function validationErrorsToString($errArray)
    {
        $valArr = array();
        foreach ($errArray->toArray() as $key => $value) {
            $errStr = $value[0];
            array_push($valArr, $errStr);
        }
        return $valArr;
    }
}
if (!function_exists('makeValidate')) {
    function makeValidate($inputs, $rules)
    {
        $validator = Validator::make($inputs, $rules);
        if ($validator->fails()) {
            return validationErrorsToString($validator->messages());
        } else {
            return true;
        }
    }
}


function checkLang()
{
    if (!isset(getallheaders()['lang'])) {
        return response()->json(['status' => 401, 'msg' => 'The language is Required']);
    }
}


function check_api_token($api_token)
{
    if ($api_token != null && $api_token != "") {

        return \App\Models\User::where("api_token", $api_token)->first();
    } else {
        return null;
    }
}


function msgdata($request, $status, $key, $data)
{
    $msg['status'] = $status;
    $msg['msg'] = $key;
    $msg['data'] = $data;
    return $msg;
}


function msg($request, $status, $key)
{
    $msg['status'] = $status;
    $msg['msg'] = $key;
    return $msg;
}

function send($tokens, $title = "رسالة جديدة", $msg = "رسالة جديدة فى البريد", $type = 'mail', $chat = null)
{
    $key = 'AAAA31ep5NE:APA91bFGi2zgaq3HwWcMz6Q77Me3CnFcxKms93YaC4GKoPQMwNWnwt3vV-58SXlg1HWKH800Li2FLoqhD9RLJvOeVCu-J93aC4T-MTtg6X30f6KVYIZt7sqmxGxjuXboFLc61HF6qjho';

    $fields = array
    (
        "registration_ids" => (array)$tokens,  //array of user token whom notification sent to
        "priority" => 10,
        'data' => [
            'title' => $title,
            'body' => strip_tags($msg),
            'id' => $chat,
            'type' => $type,
            'icon' => 'myIcon',
            'sound' => 'mySound',
        ],
        'notification' => [
            'title' => $title,
            'body' => strip_tags($msg),
            'id' => $chat,
            'type' => $type,
            'icon' => 'myIcon',
            'sound' => 'mySound',
        ],
        'vibrate' => 1,
        'sound' => 1
    );

    $headers = array
    (
        'accept: application/json',
        'Content-Type: application/json',
        'Authorization: key=' . $key
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);


    if ($result === FALSE) {
        die('Curl failed: ' . curl_error($ch));
    }


    curl_close($ch);
    return $result;
}


function success()
{
    return 200;
}

function failed()
{
    return 401;
}

function not_authoize()
{
    return 403;
}

function not_acceptable()
{
    return 406;
}

function not_found()
{
    return 404;
}

function not_active()
{
    return 405;
}


function upload($file, $dir)
{
    $image = time() . uniqid() . '.' . $file->getClientOriginalExtension();
    $file->move('public/uploads' . '/' . $dir, $image);
    return $image;
}

function upload_multiple($file, $dir)
{
    $image = time() . uniqid() . '.' . $file->getClientOriginalExtension();
    $destinationPath = $dir;
    $file->storeAs($destinationPath, $image, 'my_upload');
    return $image;
}


if (!function_exists('HttpPost')) {
    function HttpPost($url_path, $data = [])
    {
        $apiURL = 'https://accept.paymob.com/api/' . $url_path;
        // Create curl resource
        $ch = curl_init($apiURL);
        // Request headers
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        // Return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // $output contains the output string
        $output = curl_exec($ch);

        // Close curl resource to free up system resources
        curl_close($ch);
        return json_decode($output);
    }


}

function settings_image($key)
{

    return Cache::get('settings')->where('key', $key)->first()->image;

//    return Setting::where('key', $key)->first()->image;
}

function settings_value($key)
{
    return Cache::get('settings')->where('key', $key)->first()->value;
//    return   Setting::where('key',$key)->first()->value;

}


function about_us()
{
    return Page::where('id', 2)->first();

}

function AbstractHTMLContents($html, $maxLength = 100)
{
    mb_internal_encoding("UTF-8");
    $printedLength = 0;
    $position = 0;
    $tags = array();
    $newContent = '';

    $html = $content = preg_replace("/<img[^>]+\>/i", "", $html);

    while ($printedLength < $maxLength && preg_match('{</?([a-z]+)[^>]*>|&#?[a-zA-Z0-9]+;}', $html, $match, PREG_OFFSET_CAPTURE, $position)) {
        list($tag, $tagPosition) = $match[0];
        // Print text leading up to the tag.
        $str = mb_strcut($html, $position, $tagPosition - $position);
        if ($printedLength + mb_strlen($str) > $maxLength) {
            $newstr = mb_strcut($str, 0, $maxLength - $printedLength);
            $newstr = preg_replace('~\s+\S+$~', '', $newstr);
            $newContent .= $newstr;
            $printedLength = $maxLength;
            break;
        }
        $newContent .= $str;
        $printedLength += mb_strlen($str);
        if ($tag[0] == '&') {
            // Handle the entity.
            $newContent .= $tag;
            $printedLength++;
        } else {
            // Handle the tag.
            $tagName = $match[1][0];
            if ($tag[1] == '/') {
                // This is a closing tag.
                $openingTag = array_pop($tags);
                assert($openingTag == $tagName); // check that tags are properly nested.
                $newContent .= $tag;
            } else if ($tag[mb_strlen($tag) - 2] == '/') {
                // Self-closing tag.
                $newContent .= $tag;
            } else {
                // Opening tag.
                $newContent .= $tag;
                $tags[] = $tagName;
            }
        }

        // Continue after the tag.
        $position = $tagPosition + mb_strlen($tag);
    }

    // Print any remaining text.
    if ($printedLength < $maxLength && $position < mb_strlen($html)) {
        $newstr = mb_strcut($html, $position, $maxLength - $printedLength);
        $newstr = preg_replace('~\s+\S+$~', '', $newstr);
        $newContent .= $newstr;
    }

    // Close any open tags.
    while (!empty($tags)) {
        $newContent .= sprintf('</%s>', array_pop($tags));
    }

    return $newContent;
}
