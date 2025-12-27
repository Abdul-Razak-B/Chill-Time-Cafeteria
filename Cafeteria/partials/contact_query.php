<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact For Any Query</h5>
            <h1 class="mb-5">Visit Us</h1>
        </div>
        <div class="row g-3">
            <div class="row g-6">
                <div class="col-12">
                    <div class="row gy-6">
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">Contact Cell Phone Number</h5>
                            <p><i class="fa fa-phone text-primary me-2"></i>+92 300 1234567</p>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">For Technical Issue</h5>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>chilltimecafe@resto.pk</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.216847966321!2d69.3083931743524!3d27.998084212610546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3936ed5deecbcd95%3A0xa81b339770e79d6f!2sShah%20Abdul%20Latif%20University%20Ghotki%20Campus!5e1!3m2!1sen!2s!4v1705426867180!5m2!1sen!2s"
                width="520" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="q_name" class="form-control" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="q_email" class="form-control" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="q_msg" placeholder="Leave a message here" style="height: 150px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <?php
                            $conn=new mysqli('localhost', 'root', '', 'cafe');
                            if (isset($_POST['submit'])) {
                                $q_name = $_POST['q_name'];
                                $q_email = $_POST['q_email'];
                                $q_msg = $_POST['q_msg'];

                                $sql = "INSERT INTO `query` (`q_name`, `q_email`, `q_date`, `q_msg`)
                                        values('$q_name', '$q_email', now(), '$q_msg')";
                                $result = mysqli_query($conn, $sql);
                                if (!$result) {
                                    die(mysqli_error($conn));
                                }
                                else{
                                    //echo '<script>alert("Query Sent Successfully");</script>';
                                    //echo '<div class="alert-dark text-center">Message Successfully Sent!</div>';
                                    ?>
                                        <script>
                                            alertify.set('notifier','position', 'top-center');
                                            alertify.warning('Message Successfully Sent');
                                        </script>
                                    <?php
                                }
                            }
                            ?>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->