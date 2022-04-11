const listBox = document.querySelectorAll('.box');
const wrapperBox = document.querySelector('.review-box');
const btnLeft = document.querySelector('.btnLeft');
const btnRight = document.querySelector('.btnRight');
const reviewDiv = document.querySelector('.review');


document.addEventListener("DOMContentLoaded", function(){

    //responsive
    console.log(window.innerWidth);
    window.addEventListener("resize", function(){
        if(window.innerWidth >= 1366)
        {
            make_slide(3);
        }
        else if(window.innerWidth >= 992){
            make_slide(2);
        }
        else{
            make_slide(1);
        }
    });
    const media = [
        window.matchMedia('(min-width: 1366px)'),
        window.matchMedia('(min-width: 992px)'),

    ];
    if(media[0].matches){
        make_slide(3);
    }
    else if(media[1].matches){
        make_slide(2);
    }
    else{
        make_slide(1);
    }

});

function make_slide(amountSlideAppear){
    const widthItemAndMargin = reviewDiv.offsetWidth / amountSlideAppear;
    
    let widthAllBox = widthItemAndMargin * listBox.length;
    wrapperBox.style.width = `${widthAllBox}px`;

    listBox.forEach(element => {
        element.style.marginRight = '20px';
        element.style.width = `${widthItemAndMargin - 20}px`;
    });


    //handle slide button

    let count = 0;
    let spacing = widthAllBox - widthItemAndMargin * amountSlideAppear;
    btnRight.addEventListener("click",function(){
        count += widthItemAndMargin;
        if(count > spacing){
            count = 0;
        }
        wrapperBox.style.transform = `translateX(${-count}px)`;
    });
    btnLeft.addEventListener("click",function(){
        count -= widthItemAndMargin;
        if(count < 0){
            count = spacing;
        }
        wrapperBox.style.transform = `translateX(${-count}px)`;
        console.log(count);
    });
}