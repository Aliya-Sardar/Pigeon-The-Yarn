
<!-- link to external css for index page only -->
<head>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

@extends('Template.app')

@section('main_Content')

    <!-- Slide Show -->
    <div class="Slides">
        <div id="Home-Carousel" class="carousel slide" data-ride="carousel">

            <!-- The indicators at the bottom of the slide show -->
            <ol class="carousel-indicators">
                <li data-target="#Home-Carousel" data-slide-to="0" class="active"></li>
                <li data-target="#Home-Carousel" data-slide-to="1" ></li>
                <li data-target="#Home-Carousel" data-slide-to="2" ></li>
            </ol>

            <!-- The pictures in the slide -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="\images\Pigeon_knit.png" alt="First Image" class="SlideShow">
                    <div class="to-right">
                        <h3>We Help You Knit Your Dreams To Reality</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="\images\Gloves_knit.png" alt="Second Image" class="SlideShow">
                    <div class="to-left">
                        <h3>Our Goal Is To Bring You Warmth</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="\images\Sheep_Cardigan.png" alt="Third Image" class="SlideShow">
                    <div class="to-left">
                        <h3>Unique And Custom Made Just For You</h3>
                    </div>
                </div>
            </div>

            <!-- The buttons on the slider -->
            <a class="carousel-control-prev" href="#Home-Carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#Home-Carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- End of Slide Show -->



    <!-- Items Section -->
    <div class="container div-Content">
        <h1>Knitted Ware</h1>

        <!-- Item 1 -->
        <div class="card item">
            <img class="card-img-top" src="images\Cardigan.jpg" alt="item-1">
            <div>
                <button class="btn btn-block btn-lg" onclick="AddToCart(this.id)" id="Cardigan">Cardigan</button>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="card item">
            <img class="card-img-top" src="images\Shoes.jpg" alt="item-2">
            <div>
                <button class="btn btn-block btn-lg" onclick="AddToCart(this.id)" id="Shoes">Shoes</button>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="card item">
            <img class="card-img-top" src="images\Gloves.jpg" alt="item-3">
            <div>
                <button class="btn btn-block btn-lg" onclick="AddToCart(this.id)" id="Gloves">Gloves</button>
            </div>
        </div>

        <!-- Item 4 -->
        <div class="card item">
            <img class="card-img-top" src="images\Hat.jpg" alt="item-4">
            <div>
                <button class="btn btn-block btn-lg" onclick="AddToCart(this.id)" id="Hat">Hat</button>
            </div>
        </div>

        <!-- Item 5 -->
        <div class="card item">
            <img class="card-img-top" src="images\Jacket.jpg" alt="item-5">
            <div>
                <button class="btn btn-block btn-lg" onclick="AddToCart(this.id)" id="Jacket">Jacket</button>
            </div>
        </div>

        <!-- Item 6 -->
        <div class="card item">
            <img class="card-img-top" src="images\Scarf.jpg" alt="item-6">
            <div>
                <button class="btn btn-block btn-lg" onclick="AddToCart(this.id)" id="Scarf">Scarf</button>
            </div>
        </div>

        <!-- Item 7 -->
        <div class="card item">
            <img class="card-img-top" src="images\Dino.jpg" alt="item-7">
            <div>
                <button class="btn btn-block btn-lg"  onclick="AddToCart(this.id)" id="Toy">Toy</button>
            </div>
        </div>

        <!-- Item 8 -->
        <div class="card item">
            <img class="card-img-top" src="images\Bag.png" alt="item-8">
            <div>
                <button class="btn btn-block btn-lg"  onclick="AddToCart(this.id)" id="Bag">Bag</button>
            </div>
        </div>

        <!-- Item 9 -->
        <div class="card item">
            <img class="card-img-top" src="images\EarPhones.jpg" alt="item-9">
            <div>
                <button class="btn btn-block btn-lg" onclick="AddToCart(this.id)" id="Accessories">Accessories</button>
            </div>
        </div>
    </div>
    
@endsection


<!-- Javascript Code -->
<script>
    const items = {Cardigan : 0, Shoes : 0, Gloves : 0,
                     Hat : 0, Jacket : 0, Scarf : 0,
                     Toy : 0, Bag : 0, Accessories : 0 };
    
    const item_price = {Cardigan : 500, Shoes : 200, Gloves : 200,
                        Hat : 250, Jacket : 500, Scarf : 200,
                        Toy : 300, Bag : 350, Accessories : 150};
    
    
    // add items to cart
    function AddToCart(id)
    {
        items[id] ++;
    }

    // print cart
    function ReturnCart()
    {
        // replace the old node with the new node inside form tag
        let old_node = document.getElementById('cart');
        let new_node = document.createElement('div');

        document.getElementById('form').replaceChild(new_node , old_node);
        new_node.id= 'cart';
        
        // loop over all the items that had been clicked
        for (const item in items)
        {
            if(items[item] > 0)
            {
                let price = items[item]* item_price[item];

                let div = document.createElement('div');
                div.className = 'form-group';

                let text_area = document.createElement('textarea');
                text_area.className = 'form-control'
                text_area.setAttribute("name", item);
                text_area.setAttribute("row", "1");

                var textArea_text = document.createTextNode(item +" x "+items[item] + " Rs "+ price);
                text_area.appendChild(textArea_text);
                div.appendChild(text_area);
                document.getElementById('cart').appendChild(div);
                
            }
        }
    }


</script>