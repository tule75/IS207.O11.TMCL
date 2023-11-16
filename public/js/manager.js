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

// start mouse move over/seeter
const subpageProduct = document.querySelector('.subpage-click');
subpageProduct.addEventListener('mouseleave', () => {
    document.querySelector('.subpage-product-appear').style.display = 'none';
});
subpageProduct.addEventListener('mouseenter', () => {
    document.querySelector('.subpage-product-appear').style.display = 'block';
})

const subpageHuman = document.querySelector('.subpage-human');
subpageHuman.addEventListener('mouseleave', () => {
    document.querySelector('.subpage-human-appear').style.display = 'none';
});
subpageHuman.addEventListener('mouseenter', () => {
    document.querySelector('.subpage-human-appear').style.display = 'block';
})
// end mouse 
// click subpage product
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
// click subpage human
const subpage_humans = document.querySelectorAll('.subpage-human-item-click click')
const subpage_Human_Containers = document.querySelectorAll('.subpage-human-container');
subpage_humans.forEach((human,index) => {
    const contentHuman = subpage_Human_Containers[index];
    human.onclick = () => {
        // Xóa lớp 'active' khỏi tất cả các phần tử .select-click
        document.querySelectorAll('.subpage-product-item-click.click').forEach((element) => {
            element.classList.remove('click');
        });
        // Xóa lớp 'active' khỏi tất cả các phần tử .select-container
        document.querySelectorAll('.subpage-product-container.click').forEach((element) => {
            element.classList.remove('click');
        });
        contentHuman.classList.add("click");
        content.classList.add("click");
        console.log(content,product);
    }
})

// get item option
const dropItems = document.querySelectorAll('.cate-dropdown-content-item');

dropItems.forEach(dropItem => {
    dropItem.addEventListener('click', function() {
        console.log(this.value);
        
    })
});


// modify action
const productItems = document.querySelectorAll('.product-item');
const modifyActions = document.querySelectorAll('.product-actions');
const modifyForm = document.querySelector('.modify-form');
modifyActions.forEach((ItemClick) => {
    ItemClick.addEventListener('click', function() {
        modifyForm.style.display = 'block';
    })
})

// delete action btn
const deleteActions = document.querySelectorAll('.del-product-btn');

const modalConfirm = document.querySelector('.modal-container');
const cancel = document.querySelector('.cancel');

window.onclick = function(event) {
    if (event.target == modalConfirm) {
        modalConfirm.style.display = "none";
    }
}
function toggleModal() {
    
    if (modalConfirm.style.display === 'none' || modalConfirm.style.display === '') {
        modalConfirm.style.display = 'flex';
    } else {
        modalConfirm.style.display = 'none';
    }
}