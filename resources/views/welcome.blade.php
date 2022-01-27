<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=OpenSans' rel='stylesheet'>
    <link href='/assets/css/style.css' rel='stylesheet'>
    <title>tweet</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>
<body>

<div class="tweet">
    <div class="thumbnail"></div>
    <div class="box" >
        <div class="header">
            <div class="dots"><img src="/assets/img/dots.png"></div>
            <img src="/assets/img/avatar.jpg" alt="" class="avatar">
            <div class="info">
                <span class="name">نگرش من</span>
                <span class="username">@negaresheman</span>
            </div>
        </div>
        <div class="flex-container">
            <p class="text">من ری اکت رو شروع کردم خیلی باحاله
            </p>

            <div class="translate">
                <img src="/assets/img/translate.jpg" alt="" width="200">
            </div>
        </div>

    </div>
</div>






<script>
    html2canvas(document.querySelector(".box")).then(canvas => {
        document.querySelector(".thumbnail").appendChild(canvas)
    });
</script>

</body>
</html>
