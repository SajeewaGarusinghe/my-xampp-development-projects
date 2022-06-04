//storing an item
localStorage.setItem("username", "sajeeva616");
localStorage.setItem("email", "sajeeva616@gmail.com");

if (localStorage.getItem('username')) {
    alert(`hi ${localStorage.getItem('username')} !`)
} else {
    localStorage.setItem("username", "sajeeva616");
}
//removing an item
//localStorage.removeItem('email')
setTimeout(() => {
    localStorage.removeItem('email');
}, 4000);
//lear all item in local storage
setTimeout(() => {
    localStorage.clear();
}, 8000);