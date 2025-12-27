<!-- Menu Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'cafe');
                        $query = "SELECT * FROM `add_items`";
                        $res = mysqli_query($conn, $query);
                        if ($res) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                $product_id = $row['product_id'];
                                $product_name = $row['product_name'];
                                $product_img = $row['product_img'];
                                $product_price = $row['product_price'];
                                echo '<div class="col-lg-6">';
                                echo '<div class="d-flex align-items-center">';
                                if ($product_img != null) {
                                    echo '<img class="flex-shrink-0 img-fluid rounded" src="img/' . $product_img . '" alt="' . $product_name . '" style="width: 80px;">';
                                } else {
                                    echo '<img class="flex-shrink-0 img-fluid rounded" src="img/profile/logo.jpg" alt="img" style="width: 80px;">';
                                }
                                echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                                echo '<h5 class="d-flex justify-content-between border-bottom pb-4">';
                                if ($product_name != null) {
                                    echo '<span class="text-capitalize">' . $product_name . '</span>';
                                } else {
                                    echo 'Un-Known';
                                }
                                echo '<span class="text-secondary"><i class="fa fa-coins"></i> Rs. <strong class="text-primary">' . $product_price . '</strong></span>';
                                echo '</h5>';
                                echo '</div>';
                                //Buttons Start
                                echo '<div class="d-flex justify-content-end mx-2">';
                                echo '<button type="button" class="btn btn-dark btn-sm-square mx-2"><i class="fa fa-store" data-toggle="modal" data-target="#exampleModal"></i></button>';
                                echo '<button type="button" class="btn btn-primary btn-sm-square mx-2"><i class="fas fa-shopping-cart"></i></button>';
                                echo '</div>';
                                //Buttons End
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Shop Now</h5>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                Still Work In Progress.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>
<!-- Modal End-->
<style>
.popup {
    height: 100vh;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(black, 0.7);
    z-index: 100;
    opacity: 0;
    visibility: hidden;
}

.popup:target {
    opacity: 1;
    visibility: visible
}
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>