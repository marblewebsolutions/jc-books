<div class="content-container">
    <div class="box box-pb box-aitpd">
        <h2 class="box-title">Ants In The Pants Dance</h2>
        
        <div class="box-content">
            <p class="img-container"><img src="../images/ants-in-the-pants-dance.jpg" alt="Ants In the Pants Dance"></p>
            
            <p><span class="bold">Ants in the Pants Dance!</span> appeals to children ages three to ten.  It’s about a young boy who heads to a family picnic, focusing his attention on the delicious spread of food. He fills his plate hoping to oblige his hearty appetite.  Just when he is about to take his first bite of home-baked goodness, he experiences the effects of some uninvited guests inside his shorts. As the boy “performs” a dance to try to rid himself of his pesky intruders, his relatives quickly take notice. Fortunately, he is finally rescued by his old sweet granny who gives him sage advice on how to rid the ten ants from his pants.</p>
            
            <p class="mt-med">Ants in the Pants Dance’s playful rhyming verses draw the reader to the young boy’s dilemma; one can even find themselves moving with the verses to help rid those bothersome ants from his pants.  Books with repetition, rhymes and patterns help children hear the sounds within words, building phonemic awareness and phonics understnding. Rhyming books also allow childrne to experience the rhythm of language…and they are fun to read!</p>
            
            <div class="order-container mt-med" data-book="aitpd">
                <form class="mt-med" action="{{action('CheckoutController@checkout')}}" method="POST">
                    <input type="hidden" name="book" value="Ants in the Pants Dance">
                    <input type="hidden" name="book_id" value="prod_E5D7IzDkiNGTRD">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity" value="1" class="order-quantity" min="1" max="100" />
                    </div>
                    
                    <button class="btn start-order">Order Book</button>
    
                    <div class="confirm-order-container">
                        <p class="bold mb-sm">Please confirm your order below.</p>
                        
                        <p class="mb-med">After confirming your order, you will enter your shipping and payment information.</p>
                        
                        <p class="bold mb-sm">Ants in the Pants Dance</p>
                        
                        <p class="mb-sm"><span class="price" data-price="19.0">$19.00</span> x <span class="quantity">1</span></span></p>
                        
                        <p class="bold mb-med">Total: <span class="total">$19.00</span> <span class="tax">+ tax</span></p>
                        
                        <div class="stripe-button-container">
                            <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_live_u79NszOKWa9VuffRUbUb0X0B"
                                data-amount="1900"
                                data-name="Ants in the Pants Dance"
                                data-description="Children's Book"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-shipping-address="true"
                                data-locale="auto"
                                data-quantity="true"
                                data-label="Confirm Order">
                            </script>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        @include('partials.bubbles-bl')
    </div>
    
    <div class="box">
        <h2 class="box-title">Mirabelle The Butterfly</h2>
        
        <div class="box-content">
            <p><i>Mirabelle the Butterfly</i> is the story of a young elephant that wakes up one morning with the desire to become a butterfly.  Despite her parents’ doubt, Mirabelle is confident with her pursuit.  Mirabelle’s transformation, through her use of observation and imagination, tenderly unfolds in the story.  By the end of the tale, Mirabelle’s parents discover that she has the determination and the belief to be anything she chooses to become.  Mirabelle’s story reinforces to children the importance of imagination and discovery, as well as belief in oneself.</p>
        </div>
        
        @include('partials.bubbles-tr')
    </div>
    
    <div class="box">
        <h2 class="box-title">Finnegan’s Journey</h2>
        
        <div class="box-content">
            <p><i>Finnegan’s Journey</i> is a whimsical story about an adventurous day in the life of a little mouse.  Having grown up in his family den hearing of the exploits of his daring uncle, Fred Finnegan, young Finnegan longs to have the same type of exploration.  As luck would have it, he seizes the opportunity early one morning jumping on the back of a boy’s backpack.  And he does get what he has always wished for: a grand adventure. Perhaps a bit too much of an adventure for his own good.  Along the way, Finnegan discovers that an adventurer’s life may be exciting but it is not all fun and games and, perhaps, just maybe his “ordinary life” back home may not be so bad after all.</p>
        </div>
        
        @include('partials.bubbles-bl')
    </div>
    
    <div class="box box-checkout">
        <h2 class="box-title">Checkout</h2>
        
        <div class="box-content">
            <table class="order-table"></table>
            
            
        </div>
    </div>
</div>