/**
 * Books page js
 */

/**
 * Initialize checkout and cart
 * 
 * Currently not using a cart
 */
var initializeCart = function() {
    var $atcNumberInputs = $('.atc-number');
    var $atcButtons = $('.atc-button');
    var $checkoutBox = $('.box-checkout');
    var $checkoutTable = $checkoutBox.find('.order-table');
    
    var validBookIds = ['aitpd'];
    var order = {};
    
    $atcButtons.click(function() {
       var $button = $(this);
       var $container = $button.parent();
       var $numberInput = $container.find('.atc-number');
       
       var book = $container.data('book');
       var quantity = $numberInput.val();
       
       // Check if book id is valid
       if ($.inArray(book, validBookIds) === -1) {
           return false;
       }
       
       // Check if number is valid, no more than 100
       if (quantity < 1 || quantity > 100) {
           return false;
       }
       
       updateOrder(book, quantity);
    });
    
    function updateOrder(bookId, quantity) {
        order[bookId] = quantity;
        
        // Display checkout and content
        if ($.isEmptyObject(order)) {
            // No orders, don't display checkout box
            $checkoutBox.removeClass('active');
        } else {
            $checkoutBox.addClass('active');
            
            var orderHtml = "";
            var total = 0;
            
            $.each(order, function(bookId, quantity) {
                if (bookId == "aitpd") {
                    orderHtml += "<tr><td class='title'>Ants in the Pants Dance</td> <td class='quantity'>x "+quantity+"</td> <td class='price'>$17.50 ea.</td></tr>";
                    
                    var price = 17.5;
                    total += price * quantity;
                }
            });
            
            orderHtml += "<tr class='mt-sm'><td class='bold'>Total</td> <td></td> <td class='bold'>$"+total.toFixed(2)+"</td></tr>"
            
            $checkoutTable.html(orderHtml);
        }
    }
};

var initializeOrdering = function() {
    var $quantityInput = $('.order-quantity');
    var $startOrderButton = $('.start-order');
    var $confirmOrderContainer = $('.confirm-order-container');
    var $stripeButtonContainer = $('.stripe-button-container');
    
    var quantity = $quantityInput.val();
    
    $startOrderButton.click(function(e) {
        e.preventDefault();
        
        var $quantity = $confirmOrderContainer.find('.quantity');
        var $price = $confirmOrderContainer.find('.price');
        var $total = $confirmOrderContainer.find('.total');
        var $shipping = $confirmOrderContainer.find('.shipping');
        
        quantity = $quantityInput.val();
        var price = $price.data('price');
        var total = (quantity * price).toFixed(2);
        
        if (quantity > 100) {
            quantity = 100;
        }
        
        $quantity.html(quantity);
        $total.html("$"+total);
        
        // Shipping free over $70
        if (total > 70) {
            $shipping.hide();
            total = total * 1.06;
        } else {
            $shipping.show();
            total = total * 1.06;
            total += 5;
        }
        
        var stripeScript = '<script ' +
            'src="https://checkout.stripe.com/checkout.js" class="stripe-button" ' +
            'data-key="pk_live_u79NszOKWa9VuffRUbUb0X0B" ' +
            'data-amount="'+(total * 100)+'" ' +
            'data-name="Ants in the Pants Dance" ' +
            'data-description="Children\'s Book" ' +
            'data-image="https://stripe.com/img/documentation/checkout/marketplace.png" ' +
            'data-shipping-address="true" ' +
            'data-locale="auto" ' +
            'data-quantity="true" ' +
            'data-label="Confirm Order">' +
        '</script>'
        
        $stripeButtonContainer.html(stripeScript);
        
        $confirmOrderContainer.slideDown();
    })
}

function initializeAlert() {
    var $alert = $('.alert');
    
    if ($alert.hasClass('active')) {
        setTimeout(function() {
            $alert.removeClass('active');
        }, 3000);
    }
}

initializeOrdering();
initializeAlert();
//initializeCart();