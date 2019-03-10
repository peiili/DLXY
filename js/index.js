
//轮播图
var swiper = new Swiper('.swiper-container', {
    pagination:  {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },//////////////0
    // nextButton: '.swiper-button-next',
    // prevButton: '.swiper-button-prev',2
    paginationClickable: true,
    spaceBetween: 20,
    centeredSlides: true,
    //循环轮播
    loop:true,
    //自动轮播
    autoplay: 4000,
    //轮播切换时间
    speed:2000,
    autoplayDisableOnInteraction: false,
});

//异步获取友情链接数据

$.get({
    url:"./api/friendlink.php",
    success:function(obj){
        const html = template('firendlink',{list:JSON.parse(obj).friendLink})
        const linknav = $('.bottom ul')[0]
        linknav.innerHTML = html
    }
})

