@foreach ($details as $feed)

<?php
$metatitle = $feed->posttitle;
$metalink = $feed->postlink;
$metadescription = $feed->description;
$metaimage = $feed->imagepath;
$metaurl = "https://mobilemasala.com/";
?>

@endforeach

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="max-image-preview:large">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0, user-scalable=1">

<!-- fb & Whatsapp -->
<meta property="og:locale" content="en_us" />
<!-- Site Name, Title, and Description to be displayed -->
<meta property="og:site_name" content="<?php echo $metatitle; ?>">
<meta property="og:title" content="<?php echo $metatitle; ?>">
<meta property="og:description" content="<?php echo substr(strip_tags($metadescription), 0, 100); ?>">

<!-- Image to display -->
<meta property="og:image" content="<?php echo $metaimage; ?>">

<!-- No need to change anything here -->
<meta property="og:type" content="website" />
<meta property="og:image:type" content="image/jpeg">

<!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<!-- Website to visit when clicked in fb or WhatsApp-->
<meta property="og:url" content="https://mobilemasala.com/">
</head>
<body>
    <input type="hidden" value="<?php echo $metalink; ?>" id="article_link">
    <script>
        var postlink = document.getElementById('article_link').value;
        // console.log(postlink);
        location.href = "https://mobilemasala.com/post-single&id="+postlink;
    </script>
</body>
</html>