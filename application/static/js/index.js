

//参数栏目移动
window.addEventListener("scroll",function(){
    if(document.documentElement.scrollTop > 45){
        var productContent = document.querySelector(".productContent");
        productContent.style.position = "fixed";
        productContent.style.top = "0px";
    }else{
        var productContent = document.querySelector(".productContent");
        productContent.style.position = "relative";
        productContent.style.top = "0px";
    }
})



//轮播图开始

var banner = document.getElementsByClassName("banner")[0];
var slideShow = document.getElementsByClassName("slideShow")[0];
var images = document.querySelectorAll(".banner .banners");
var bannerBar = document.getElementsByClassName("bannerBar")[0];
var imageWidth = (banner.clientWidth)*images.length;

//创建轮播图小按钮
for(var i = 0 ; i < images.length ; i++){
    images[i].style.width = banner.clientWidth+"px";
    var span = document.createElement("span");
    bannerBar.appendChild(span);
}

slideShow.style.width = imageWidth+"px";
slideShow.style.transition = "all 1s";

var spans = document.querySelectorAll(".bannerBar span");
let index = 0;
spans[index].style.background = "#fff";
spans[index].style.border = "1px solid skyblue";

for(let j = 0 ; j < images.length ; j++){
    spans[j].addEventListener("click",function () {
        index = j;
        for(let i = 0 ; i < images.length ; i++){
            spans[i].style.background = "#999";
            spans[i].style.border = "0px";
        }
        slideShow.style.left = (-index*banner.clientWidth)+"px";
        spans[index].style.background = "#fff";
        spans[index].style.border = "1px solid skyblue";
    })
}

var start = setInterval(function () {
    if (index == images.length){
        index=0;
    }
    for(let i = 0 ; i < images.length ; i++){
        spans[i].style.background = "#999";
        spans[i].style.border = "0px";
    }
    slideShow.style.left = (-index*banner.clientWidth)+"px";
    spans[index].style.background = "#fff";
    spans[index].style.border = "1px solid skyblue";
    index++;
},3000)

// var left = document.getElementsByClassName("left")[0];
// left.addEventListener("click",function () {
//     if(index == 0){
//         index = images.length-1;
//     }
//     index--;
//     slideShow.style.left = (-index*banner.clientWidth)+"px";
//     clearInterval(start);
//     setTimeout(start,1000);
// })
//
// var right = document.getElementsByClassName("right")[0];
// right.addEventListener("click",function () {
//     if(index == images.length-1){
//         index = 0;
//     }
//     index++;
//     console.log(1);
//     slideShow.style.left = (-index*banner.clientWidth)+"px";
//     clearInterval(start);
//     setTimeout(start,1000);
// })



