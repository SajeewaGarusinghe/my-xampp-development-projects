<?php include('includes/header.php') ?>

<h2>cookies</h2>

<img src="img/cookies.png"  style="width:60%" alt="" srcset=""><br><br>
<img src="img/getcookie.png"  style="width:60%"  alt="" srcset="">
<script>
    document.cookie = "email=sajeeva616@gmail.com;";
    document.cookie = "user=sajeewa";
    //delete cookie
    setTimeout(() => document.cookie = "email=sajeeva616@gmail.com;max-age=-1", 4000);
    // document.cookie="email=sajeeva616@gmail.com;max-age=-1"

    //set expire date for cokkie
    let expiration = new Date();
    expiration.setFullYear(expiration.getFullYear() + 1);
    expiration = expiration.toUTCString();
    document.cookie = "id=1000;expires=" + expiration;
    console.log(expiration);

    //Reading from document.cookie
    console.log(document.cookie); // cookie1=value1; cookie2=value2;...
    // returns the cookie with the given name,
    // or undefined if not found
    function getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }
    //document.cookie = "user=sajeewa;max-age=-1";
    setTimeout(() => alert(`hi ${getCookie("user")} welcome abroad !`), 5000);
</script>
<pre>
    <?php
    print_r($_COOKIE); //read cookie data from server side
    ?>
</pre>

<?php


include('includes/footer.php')
?>