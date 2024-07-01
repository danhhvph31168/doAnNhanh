let auto;
let index=0;
function start1(){
    let inbanner=document.getElementsByClassName('inbanner');
    if(index>=inbanner.length){
        index=0;
    }
    if(index<0){
        index=inbanner.length-1;
    }
    for(let i=0;i<inbanner.length;i++){
        inbanner[i].style.display='none';
    }
    inbanner[index].style.display='block';
    index++
    auto=setTimeout(start1,3000);
}
function start2(){
    let inbanner2=document.getElementsByClassName('inbanner2');
    if(index>=inbanner2.length){
        index=0;
    }
    if(index<0){
        index=inbanner2.length-1;
    }
    for(let i=0;i<inbanner2.length;i++){
        inbanner2[i].style.display='none';
    }
    inbanner2[index].style.display='block';
    index++
    auto=setTimeout(start2,3000);
}
start1()
start2()
