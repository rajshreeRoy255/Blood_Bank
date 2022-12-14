<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
</head>
<body>
<section id="text">
            <p>Hello,I am</p>
            <h1>Rajshree Roy</h1>
            <p>And I am a <span class="ani"></span></p>
            <button class="c-btn">Hire me</button>
        </section>

<script>
    var typed = new Typed('.ani', {
  strings: ["PROGRAMMER.", "FULL-STACK.","DEVELOPER."],
  typeSpeed: 30,
  backSpeed: 30,
  loop: true,
});
</script>
<script src="js/tilt.jquery.min.js"></script>
</body>
</html>