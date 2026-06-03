window.addEventListener('scroll',function()  {
    var hiddenBlock = document.getElementById('hiddenBlock') ;
    var scrollPoision = window.scrollY ;
    if(scrollPoision >300) {
        hiddenBlock.style.display ='block';
    }
    else{
        hiddenBlock.style.display ='none';
    }
});
function goToLogin(){
    window.location.href ="login.html"
}
function goToRegister(){
    window.location.href ='register.html'
}
document.addEventListener("DOMContentLoaded", function() {
    var home = document.getElementById('home');
    var tab_hidden =document.getElementById('tab_hidden')
    var menu = document.querySelector('.menu_hidden');
            home.addEventListener('click', function() {
            menu.style.display = "block"; 
        });
        
            tab_hidden.addEventListener('click', function() {
            menu.style.display = "none";
        });
});
// window.addEventListener('load',function(){
//     var Container_dryFood  = document.querySelector('.dry-food');
//     var items =document.querySelectorAll('.dry-food__child');
//     var Width_container = Container_dryFood.offsetWidth;
//     var width_item = items[0].offsetWidth;
//     var display_Item = Math.floor(Width_container/width_item);
//     items.forEach((item,index)=>{
//         if(index >= display_Item){
//             item.style.opacity ='0';
//             item.style.pointerEvents ='none'
//         }
//         else{
//             item.style.opacity ='1';
//             item.style.pointerEvents ='auto'
//         }
//     });
// });

//sử lý tính tổng cột giá thành
document.addEventListener('DOMContentLoaded', function () {
    let table = document.getElementById('myTable'); // Lấy bảng
    let rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr'); // Lấy tất cả các hàng
    let total = 0;

    for (let i = 0; i < rows.length; i++) {
        let cell = rows[i].getElementsByTagName('td')[5]; // Lấy cột thứ 3 (index = 2)
        if (cell) {
            total += parseFloat(cell.textContent) || 0; // Chuyển giá trị sang số và cộng vào tổng
        }
    }

    document.getElementById('total').textContent = total; 
});