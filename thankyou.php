<!doctype html>
<html>


<head>
  <meta charset="utf-8">
  <title>IIGJ Admission Open 2024</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="images/iigj/logo/fevicon.png" rel="icon">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

</head>


<body>
  <canvas class="grey darken-4" id="canvas" width="" height="">
  </canvas>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
      background: #4A146D;
    }

    img {
      max-width: 100%
    }

    #canvas {
      width: 100%;
      height: 100%;
    }

    .text span {
      font-weight: 500;
    }

    .btn {
      margin: 40px auto 0;
      width: 200px;
      position: relative;
    }

    .text span.complete {
      font-weight: bold;
      margin: 19px 0 7px;
      display: inline-block;
      font-size: 30px;
    }

    .btn::before {
      content: "";
      margin: 40px auto 0;
      width: 73px;
      background-image: url(images/degree.png);
      position: absolute;
      left: -55px;
      bottom: -5px;
      height: 50px;
      background-size: 70px;
      background-repeat: no-repeat;
    }

    .text {
      font-size: 24px;
      text-align: center;
      font-weight: 100;
      color: #fff;
    }

    .tankyou {
      max-width: 700px;
      margin: auto;
      position: absolute;
      transform: translate(-50%, -50%);
      left: 50%;
      top: 50%;
    }

    .logo {
      width: 200px;
      margin: 0 90px 40px;
      position: relative;
      z-index: 9;
    }

    /*
  .tankyou::before {
   content: "";
   background-image: url(./img/bg1.jpg);
   position: absolute;
   width: 260px;
   height: 240px;
   background-size: 100%;
   top: -80px;
   right: -50px;
  }

  .tankyou::after {
   content: "";
   background-image: url(./img/bg2.jpg);
   position: absolute;
   width: 190px;
   height: 210px;
   background-size: 100%;
   left: -240px;
   bottom: -100px;
  }
*/

    .btn a {
      background: #EB731E;
      color: #fff;
      text-decoration: none;
      padding: 9px 40px;
      border-radius: 50px;
      text-transform: uppercase;
      font-size: 19px;
      font-weight: bold;
    }

    .btn a:hover {
      background: #1a1a1a;
    }

    @media screen and (max-width:480px) {
      .text span.complete {

        font-size: 26px;
        line-height: 25px;
      }

      .text {
        font-size: 15px;
        text-align: center;
        font-weight: 100;
        line-height: 22px;
      }
    }
  </style>

  <div class="tankyou">
    <div class="logo"><img src="images/iigj/thankyou/1.png" alt="logo"> </div>
    <div class="logo"><img src="images/iigj/thankyou/2.png" alt="Congratulations"> </div>


    <div class="text">

      You have successfully completed<br>
      <span>your Step 1 towards Application at IIGJ.</span><br>
      <!-- <span class="complete">To complete your application</span> -->
    </div>

    <div class="btn">

      <!-- <a href="https://www.mituniversity.ac.in/2023/Apply_Now" target="_blank">Click Here</a> -->
    </div>
  </div>


  <script>
    var canvas = document.getElementById('canvas');
    var c = canvas.getContext('2d');

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    var mouse = {
      x: undefined,
      y: undefined
    }

    window.addEventListener('mousemove', function (e) {
      mouse.x = e.x;
      mouse.y = e.y;
    });

    window.addEventListener('resize', function () {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });

    function getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
    }

    function Circle() {
      this.radius = getRandomInt(10);
      this.originalSize = this.radius;
      this.x = Math.random() * (innerWidth - this.radius * 2) + this.radius;
      this.y = Math.random() * (innerHeight - this.radius * 2) + this.radius;
      this.gradient = Math.random();
      this.color = 'rgba(' + getRandomInt(255) + ',' + getRandomInt(255) + ',' + getRandomInt(255) + ',' + this
        .gradient + ')';
      this.xVelocity = 5 * (Math.random() - Math.random());
      this.yVelocity = 5 * (Math.random() - Math.random());
      this.draw = function () {
        // c.font = 'lighter 80px sans-serif';
        // c.fillStyle = '#dedede';
        // c.textAlign = 'center';
        // c.fillText('Bouncing Bubbles', canvas.width/2, canvas.height/2);
        c.beginPath();
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
        c.strokeStyle = this.color;
        c.stroke();
        c.fillStyle = this.color;
        c.fill();
        this.update();
      }
      this.update = function () {
        if (this.x + this.radius > innerWidth || this.x - this.radius < 0) {
          this.xVelocity = -this.xVelocity;
        }
        if (this.y + this.radius > innerHeight || this.y - this.radius < 0) {
          this.yVelocity = -this.yVelocity;
        }
        this.x += this.xVelocity;
        this.y += this.yVelocity;

        if (mouse.x - this.x < 50 && mouse.x - this.x > -50 &&
          mouse.y - this.y < 10 && mouse.y - this.y > -50) {
          if (this.radius < 100) {
            this.radius += 2;
          }
        } else if (this.radius !== this.originalSize) {
          this.radius -= 2;
        }
      }
    }

    var circleArray = [];

    for (var i = 0; i < 30; i++) {
      circleArray.push(new Circle());
    }

    function animate() {
      c.clearRect(0, 0, innerWidth, innerHeight);
      for (var i = 0; i < circleArray.length; i++) {
        circleArray[i].draw();
      }
      requestAnimationFrame(animate);
    }
    animate();
  </script>

</body>

</html>