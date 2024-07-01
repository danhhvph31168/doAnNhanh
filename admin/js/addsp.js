function addsp() {
    let name = document.getElementById('name');
    let tb = document.getElementsByClassName('tb');
    if (name.value == "" || name.value == null) {
        tb[0].innerHTML = "chua co ten";
    } else {
        tb[0].innerHTML = "";
    }
}