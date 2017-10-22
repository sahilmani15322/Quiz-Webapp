<!DOCTYPE html>
<html>
<head>
<style>
html {
  box-sizing: border-box;
}


*, *:before, *:after {
  box-sizing: inherit;
}
body{
  background-image: url("background/11.jpg");
  background-size: 100% 720px;
  background-position: center;
  background-attachment: fixed;
  background-repeat: no-repeat;
}
.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
  height:450px;
}

.card {
  box-shadow: 0 8px 8px 0 rgba(0, 100, 150, 0.8);
  padding-bottom: 2px;
  background-color: white;
  width: 90%;
  height:510px;

}

.container {
  padding: 0 16px;
  height:200px;
}


.title {
  color: grey;
}

.button {
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
p.home{
    font-size: 30px;
    margin-top: -0.1%;
  }
div.row{
  margin-top: -1%;
}
</style>
</head>
<body>

<p class="home"><a href="mainpage.php"><img src="icon/home-icon2.png" height=50 width=50></a>Home Page</p>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="sahil.jpg" alt="Sahil" style="width:100%">
      <div class="container">
        <h2>Sahil Mani</h2>
        <p>TE IT(4338)</p>
        <p>sahilfranky08.mntl@gmail.com</p>
        <a href="https://www.facebook.com/sahil.mani.180">
        <img id="img" src="icon/fb.png" height=70 width=70 style="cursor: pointer;">
        </a>
        <a href="https://www.instagram.com/sahilfranky08/">
        <img id="img" src="icon/insta.jpg" height=70 width=70 style="cursor: pointer;">
        </a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="adhish.jpg" alt="Adhish" style="width:100%">
      <div class="container">
        <h2>Adhish Singh</h2>
        <p>TE IT(4358)</p>
        <p>adhish@gmail.com</p>
        <a href="https://www.facebook.com/adhish.singh.73">
        <img id="img" src="icon/fb.png" height=70 width=70 style="cursor: pointer;">
        </a>
        <a href="https://www.instagram.com/adhish1997/">
        <img id="img" src="icon/insta.jpg" height=70 width=70 style="cursor: pointer;">
        </a>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="hare.jpg" alt="Hare" style="width:100%">
      <div class="container">
        <h2>Hare Shyam Sharma</h2>
        <p>TE IT(4353)</p>
        <p>shyamshrma@gmail.com</p>
        <a href="https://www.facebook.com/profile.php?id=100009754815522">
        <img id="img" src="icon/fb.png" height=70 width=70 style="cursor: pointer;">
        </a>
        <a href="=">
        <img id="img" src="icon/insta.jpg" height=70 width=70 style="cursor: pointer;">
        </a>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="ajit.jpg" alt="Ajit" style="width:100%">
      <div class="container">
        <h2>Ajit Singh</h2>
        <p>TE IT(4356)</p>
        <p>sheokand@yahoo.com</p>
        <a href="https://www.facebook.com/ajit.sheokand.718">
        <img id="img" src="icon/fb.png" height=70 width=70 style="cursor: pointer;">
        </a>
        <a href="https://www.instagram.com/singh_shady7/">
        <img id="img" src="icon/insta.jpg" height=70 width=70 style="cursor: pointer;">
        </a>
      </div>
    </div>
  </div>
</div>

</body>
</html>