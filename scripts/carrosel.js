"use strict";
const loadImagems = () =>{
    const arrImg=[];
    for(let i=1; i<=5; i++){
        arrImg.push (`./imgSlide/imagem (${i}).jpg`);
    }
    return arrImg;
}
const insertImages = (images) =>{
    const htmlImg = images.map ( img => `<img class='images' src='${img}'>` ).join(" ");

    const $container = document.getElementById('containerSlide');
    const $containerImages = document.createElement('div');

    const $next = document.getElementById('next');

    $containerImages.id = 'containerImages';
    $containerImages.innerHTML = htmlImg;
    $container.insertBefore($containerImages, $next);
}    
    const next =()=>{
        const $img = document.querySelectorAll('.images')
        const max = ($img.length - 1)*(-60);
        let marginLeft = +($img[0].style.marginLeft.replace('vw',''));

        if(marginLeft == max){
            marginLeft = 60;
        }
        $img[0].style.marginLeft = (marginLeft - 60) + 'vw';
    }
    const prev =()=>{
        const $img = document.querySelectorAll('.images');
        const min = 0;
        let marginLeft = +($img[0].style.marginLeft.replace('vw',''));

        if(marginLeft == min){
            marginLeft = -300;
        }
        $img[0].style.marginLeft=(marginLeft+60)+'vw';
    }
    setInterval(next, 5000)
    insertImages(loadImagems())
    document.getElementById('prev').addEventListener('click',prev)
    document.getElementById('next').addEventListener('click',next);