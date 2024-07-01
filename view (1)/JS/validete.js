function checkEmail(){
    let email = document.getElementById('email');
    let regexEmail = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    let checkEmail = regexEmail.test(email.value);
    if (email.value == "" || email.value == null) {
        thongBao[2].innerHTML = 'Bạn chưa nhập email';
        return;
    } else if (!checkEmail) {
        thongBao[2].innerHTML = 'Bạn nhập sai email';
        return;
    } else {
        thongBao[2].innerHTML = '';
        console.log(email.value);
    }
}