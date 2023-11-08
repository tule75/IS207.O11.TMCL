const addressBtns = document.querySelectorAll('.js-address');
const form = document.querySelector('.js-form');

function showAddressForm() {
    form.classList.add('open')
};

for(const addressBtn of addressBtns) {
    addressBtn.addEventListener('click', showAddressForm)
}


// addressBtn.addEventListener('click', showAddressForm);

const payBtn = document.querySelector('.js-proceed');
const modalAddress = document.querySelector('.modal-address');
const modalAddressClose = document.querySelector('.modal_header-ic');
const modalContainer = document.querySelector('.modal_container');

function showModalAddress() {
    modalAddress.classList.add('show')
};

function closeModalAddress() {
    modalAddress.classList.remove('show')
};

payBtn.addEventListener('click', showModalAddress)

modalAddressClose.addEventListener('click', closeModalAddress)

modalAddress.addEventListener('click',  closeModalAddress)

modalContainer.addEventListener('click', function(event) {
    event.stopPropagation()
})

// ===========================

const countinueBtn = document.querySelector('.js-address-btn');
const modalPayMethod = document.querySelector('.modal-method');
const containerPayMethod = document.querySelector('.modal-method_container');
const payMethodClose = document.querySelector('.modal-method_header-ic');

function showModalMethod() {
    modalPayMethod.classList.add('show')
    modalAddress.classList.remove('show')
};

function closeModalMethod() {
    modalPayMethod.classList.remove('show')
};

countinueBtn.addEventListener('click', showModalMethod)

payMethodClose.addEventListener('click', closeModalMethod)

modalPayMethod.addEventListener('click',  closeModalMethod)

containerPayMethod.addEventListener('click', function(event) {
    event.stopPropagation()
})