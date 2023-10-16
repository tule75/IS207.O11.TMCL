const products = document.querySelector('.products-container');
const product_list = document.querySelectorAll('.product-object');
let this_page = 1;
let limit = 6;


function loadProduct() {
    let begin = limit * (this_page - 1);
    let end = (limit * this_page) - 1;
    product_list.forEach((item, index) => {
        if(index >= begin && index <= end) {
            item.style.display ='block';
        } else {
            item.style.display = 'none';
        }
    })
    loadList();
}
loadProduct()
function loadList() {
    let count = Math.ceil(product_list.length/limit);
    document.querySelector('.pagination').innerHTML = "";
    for( let i=1; i <= count; i++) {
        let newPage = document.createElement("li");
        newPage.innerText = i;
        newPage.setAttribute("class", "pagination-item");
        if(i== this_page) {
            newPage.classList.add("active");
        }
        newPage.setAttribute("onclick", "changePage("+i+")");
        document.querySelector(".pagination").appendChild(newPage);
    }
   
}

function changePage(i) {
    this_page = i;
    loadProduct();
}