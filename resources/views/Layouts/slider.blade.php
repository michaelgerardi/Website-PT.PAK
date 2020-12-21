<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
* {
box-sizing: border-box;
}
.Slide {
display: none;
}
img {
width: 1250px;
height: 400px;
}
.slideContainer {

}
.prevBtn,
.nextBtn {
position: absolute;
top: 50%;
width: auto;
padding: 10px;
background-color: rgb(255, 255, 75);
color: rgb(50, 0, 116);
font-weight: bolder;
font-size: 18px;
}
.nextBtn {
right: 0;
}
.Caption {
color: #fbff09;
font-weight: bold;
font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
font-size: 25px;
padding: 8px 12px;
position: absolute;
bottom: 8px;
width: 100%;
text-align: center;
}
.Navdot {
cursor: pointer;
height: 15px;
width: 15px;
margin: 0 2px;
background-color: rgb(54, 5, 117);
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}
.selected,
.Navdot:hover {
background-color: #d9ff00;
}
@media only screen and (max-width: 450px) {
.prevBtn,
.nextBtn,
.Caption {
font-size: 16px;
}
}
</style>
</head>
<body>
<div class="slideContainer">
<div class="Slide">
<img src="Admin/css/WEB PT PAK/Slide1.jpg" />
<div class="Caption">Photo 1</div>
</div>
<div class="Slide">
<img src="Admin/css/WEB PT PAK/Slide2.jpg" />
<div class="Caption">Photo 2</div>
</div>
<div class="Slide">
<img src="Admin/css/WEB PT PAK/Slide3.jpg" />
<div class="Caption">Photo 3</div>
</div>
<a class="prevBtn">&#10094;</a>
<a class="nextBtn">&#10095;</a>
</div>
<br />
<div style="text-align:center">
<span class="Navdot" onclick="currentSlide(1)"></span>
<span class="Navdot" onclick="currentSlide(2)"></span>
<span class="Navdot" onclick="currentSlide(3)"></span>
</div>
<script>
document.querySelector(".prevBtn").addEventListener("click", () => {
changeSlides(-1);
});
document.querySelector(".nextBtn").addEventListener("click", () => {
changeSlides(1);
});
var slideIndex = 1;
showSlides(slideIndex);
function changeSlides(n) {
showSlides((slideIndex += n));
}
function currentSlide(n) {
showSlides((slideIndex = n));
}
function showSlides(n) {
var i;
var slides = document.getElementsByClassName("Slide");
var dots = document.getElementsByClassName("Navdot");
if (n > slides.length) {
slideIndex = 1;
}
if (n < 1) {
slideIndex = slides.length;
}
Array.from(slides).forEach(item => (item.style.display = "none"));
Array.from(dots).forEach(
item => (item.className = item.className.replace(" selected", ""))
);
slides[slideIndex - 1].style.display = "block";
dots[slideIndex - 1].className += " selected";
}
</script>
</body>
</html>
</body>
</html>