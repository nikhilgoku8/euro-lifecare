<?php include('includes/header.php'); ?>



<div class="products_list_page">

<div class="products_wrapper">
    <div class="container">
    
        <!-- <div class="heading">All Products</div> -->

        <div class="inner_container">
            
            <div class="left_pane">
                <div class="categories_wrapper">
                    <div class="title">Categories</div>
                    <ul>
                        <li><a href="#">All</a></li>
                        <li><a href="#">Pain Management</a></li>
                        <li><a href="#">Anti-infectives</a></li>
                        <li><a href="#">Nutritional Supplements</a></li>
                        <li><a href="#">Anti-Allergic</a></li>
                        <li><a href="#">Anti-Fungal</a></li>
                        <li><a href="#">Cough Management</a></li>
                        <li><a href="#">Gastrointestinals</a></li>
                        <li><a href="#">Anti-aging</a></li>
                        <li><a href="#">Anti-psoriasis</a></li>
                        <li><a href="#">Probiotics</a></li>
                        <li><a href="#">Moisturizers</a></li>
                        <li><a href="#">Hair-regrowth</a></li>
                        <li><a href="#">Immunity Booster</a></li>
                    </ul>
                </div>
            </div>
            <div class="right_pane">
                <div class="header_wrapper">
                    <div class="heading">Category Title</div>
                    <div class="total_count_text">
                        Showing 1 to 10 of 100 results
                    </div>
                </div>
                <!-- <div class="list_heading">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a class="txt" href="{{ route('electrical') }}">Home</a></li>
                            <li><span class="txt">categoryTitle</span></li>
                        </ul>
                    </div>
                    <div class="total_count_text">
                        Showing 1 to 10 of 100 results
                    </div>
                </div> -->
                <!-- @if(count($products)) -->
                <div class="products_list">
                    <!-- @foreach($products as $product) -->
                    <?php for($i=1;$i<=6;$i++){ ?>
                        <a href="product-details.php" class="product_box">
                            <div class="img_box">
                                <img src="images/products/<?php echo $i; ?>.webp">
                            </div>
                            <div class="text_box">
                                <div class="product_title">Calcicare Advance </div>
                                <div class="sub_category_title">Dietary Supplement / Moisturizers</div>
                            </div>
                        </a>
                    <?php } ?>
                    <!-- @endforeach -->
                </div>
                <div class="page_links">
                    <!-- {{ $products->withQueryString()->links('pagination.numbers') }} -->
                </div>
                <!-- @else
                    <br>
                    <br>
                    <div class="title red">No results found.</div>
                @endif -->
            </div>

        </div>
    </div>
</div>
<!-- products_wrapper end -->

</div>
<!-- products_list_page end -->

<script>
// $( function() {
//   $( "#accordion" ).accordion({
//     collapsible: true
//   });
// } );

$("#accordion").accordion({
    collapsible: true,
    active: false,
    heightStyle: "content"
}).accordion("destroy"); // remove built-in behavior

// Custom multiple open toggle
$("#accordion div").hide();

// Open panels that have any checked checkbox
$("#accordion h3").each(function () {
    if ($(this).next().find("input[type='checkbox']:checked").length > 0) {
        $(this).next().show();        // Show the panel
        $(this).addClass("ui-state-active"); // Optional: jQuery UI style active
    }
});
    
$("#accordion h3").click(function () {
    $(this).toggleClass("ui-state-active");
    $(this).next().slideToggle();
});

</script>

<?php include('includes/footer.php'); ?>