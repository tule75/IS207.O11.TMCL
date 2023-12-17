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
// const modalAddress = document.querySelector('.modal-address');
// const modalAddressClose = document.querySelector('.modal_header-ic');
// const modalContainer = document.querySelector('.modal_container');

// function showModalAddress() {
//     modalAddress.classList.add('show')
// };

// function closeModalAddress() {
//     modalAddress.classList.remove('show')
// };

// payBtn.addEventListener('click', showModalAddress)

// modalAddressClose.addEventListener('click', closeModalAddress)

// modalAddress.addEventListener('click',  closeModalAddress)

// modalContainer.addEventListener('click', function(event) {
//     event.stopPropagation()
// })

// ===========================

// const countinueBtn = document.querySelector('.js-address-btn');
// const modalPayMethod = document.querySelector('.modal-method');
// const containerPayMethod = document.querySelector('.modal-method_container');
// const payMethodClose = document.querySelector('.modal-method_header-ic');

// function showModalMethod() {
//     modalPayMethod.classList.add('show')
//     modalAddress.classList.remove('show')
// };

// function closeModalMethod() {
//     modalPayMethod.classList.remove('show')
// };

// countinueBtn.addEventListener('click', showModalMethod)

// payMethodClose.addEventListener('click', closeModalMethod)

// modalPayMethod.addEventListener('click',  closeModalMethod)

// containerPayMethod.addEventListener('click', function(event) {
//     event.stopPropagation()
// })

//jquery to shipment
$(document).ready(function() {
    let csrf = $('meta[name="csrf-token"]').attr('content');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf
        }

    });
    let total_price = 0;
    let watch_id = [];
    let quantity = [];
    $('.pay_items').each(function (index) {
        watch_id[index] = $(this).find('.pay_item').first().find('.pay_item-cnt').attr('id');
        let q = $(this).find('.pay_item').first().find('.pay_item-cnt').first().find('.quantity').text();
        quantity[index] = q;
        total_price += parseInt(q) * parseInt($(this).find('.pay_item').first().find('.pay_item-cnt').first().find('.item-price').text().replace(/\./g, '').replace(' đ'));
        console.log( parseInt(q) * parseInt($(this).find('.pay_item').first().find('.pay_item-cnt').first().find('.item-price').text().replace(/\./g, '').replace(' đ')));
    })


   
    $.ajax({
        url: '/ship/cal',
        method: 'post',
        data: {
            'address_id': $('#address-choose').find(':selected').val(),
        },
        success: function (data) {
            $('.delivery-price').text(Intl.NumberFormat("de-DE").format(parseInt(data))) ;
            $('.total-price').text( Intl.NumberFormat("de-DE").format(total_price + parseInt(data)));
        }
    })

    $('#address-choose').on('selected', function () {
        $.ajax({
            url: '/ship/cal',
            method: 'post',
            data: {
                'address_id': $('#address-choose').find(':selected').val(),
            },
            success: function (data) {
                $('.delivery-price').text(Intl.NumberFormat("de-DE").format(parseInt(data))) ;
                $('.total-price').text( Intl.NumberFormat("de-DE").format(total_price + parseInt(data)));
            }
        })
    })

    $('button.pay_btn.js-proceed').on('click', function () {
        let address_id = $('#address-choose').find(':selected').val();
        
        let ship_fee = parseInt($('.delivery').first().find('.delivery-price').text().replace(/\./g, ''));
        if ($('.ship_method').first().find('form').first().find('input:checked').attr('value') == 'COD')
        {
            $.ajax({
                url: '/order/buy',
                method: 'POST',
                data: {
                    address_id: address_id,
                    watches_id: watch_id,
                    quantity: quantity,
                    ship_fee: ship_fee,
                },
                success: function (data) {
                    window.location = '/';
                }
            })
        }
        else if ($('.ship_method').first().find('form').first().find('input:checked').attr('value') == 'Momo') {
            console.log(1);
            $.ajax({
                url: '/payment/momo',
                method: 'POST',
                data: {
                    address_id: address_id,
                    watches_id: watch_id,
                    amount: parseInt($('.total-price').text().replace(/\./g, '')),
                    quantity: quantity,
                    ship_fee: ship_fee,
                },
                success: function (data) {
                    window.location.href = data;
                    console.log(data);
                },
                error: function (xhr, status, err) {
                    console.log(xhr.responseJSON.message);
                    alert('Error: ' + xhr.responseJSON.message);
                }
            })
        }
    })
});