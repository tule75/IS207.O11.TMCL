const bar = document.querySelector('.icon-bars');
const inputSearch = document.querySelector('.input-box');
const mainLeft = document.querySelector('.main-left');
const selectList = document.querySelector('.selection');
const selects = document.querySelectorAll('.select-click');
const selectContents = document.querySelectorAll('.select-container');

bar.addEventListener('click',() => {
    if(inputSearch.classList.contains('hidden')) {
        inputSearch.classList.remove('hidden');
        selectList.classList.remove('hidden');
        mainLeft.style.width = '350px';
    } else {
        inputSearch.classList.add('hidden');
        selectList.classList.add('hidden');
        mainLeft.style.width = '90px';
    }
})


selects.forEach((item,index) => {
    const content = selectContents[index];
    item.onclick = () => {
        // Xóa lớp 'active' khỏi tất cả các phần tử .select-click
        document.querySelectorAll('.select-click.active').forEach((element) => {
            element.classList.remove('active');
        });
        
        // Xóa lớp 'active' khỏi tất cả các phần tử .select-container
        document.querySelectorAll('.select-container.active').forEach((element) => {
            element.classList.remove('active');
        });
        item.classList.add("active");
        content.classList.add("active");
    }
})

// click subpage 
const subpage_Clicks = document.querySelectorAll('.subpage-product-item-click');
const subpage_Containers = document.querySelectorAll('.subpage-product-container');
subpage_Clicks.forEach((product,index) => {
    const content = subpage_Containers[index];
    product.onclick = () => {
        // Xóa lớp 'active' khỏi tất cả các phần tử .select-click
        document.querySelectorAll('.subpage-product-item-click.click').forEach((element) => {
            element.classList.remove('click');
        });
        // Xóa lớp 'active' khỏi tất cả các phần tử .select-container
        document.querySelectorAll('.subpage-product-container.click').forEach((element) => {
            element.classList.remove('click');
        });
        product.classList.add("click");
        content.classList.add("click");
        console.log(content,product);
    }
})