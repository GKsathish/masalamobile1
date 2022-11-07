<?php
$get_pubished_article = DB::table('post')->where('status','Publish')->orderBy('published_date','DESC')->limit(1)->get();
foreach($get_pubished_article as $post)
{
    $get_tokens = DB::table('noti_token')->get();
    foreach($get_tokens as $token)
    {
        $url ="https://fcm.googleapis.com/fcm/send";
        $fields=array(
            "to"=>$token->token_id,
            "notification"=>array(
                "body"=> substr(strip_tags($post->description), 0, 100),
                "title"=>substr(strip_tags($post->posttitle), 0, 100),
                "icon"=>"https://mobilemasala.com/assets/noti_icon.png",
                "image"=>$post->imagepath,
                "click_action"=>"https://mobilemasala.com/post-single&id=".$post->postlink
            )
        );

        $headers=array(
            'Authorization: key=AAAAwiHg65s:APA91bHAeQZBGeMvPqAMVP85Y8lW3wW-Wg0kTXq_rC4UFvCxMQeRHTZeJfjjPYNrmaFr7x0mcdYRZfIayAdHwL9uhtPwrZKFz-39LZ9HuAA0r7bJqn3Z5LLOzj2FNd5BtadzkhTYDu6H',
            'Content-Type:application/json'
        );

        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
        $result=curl_exec($ch);
        // print_r($result);
        curl_close($ch);
        // echo "Token : ".$token->token_id."</br>";
    }
}
// sendNotification();
?>
<script>
  location.href='posts';
</script>