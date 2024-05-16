<?php
include 'header.php';
head("Contact Us");
?>

<section id="help-header">
    <div class="circle-right" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"></div>
    <div class="header-section">
        <div class="header-content">
            <h1 class="h1 text-white">Contact Us</h1>
        </div>
    </div>
    <div class="circle-left" data-aos="fade-up" data-aos-duration="2000"></div>
</section>

<section id="demo">
    <div class="demo"></div>
</section>

<section id="contact">

    <div class="container">
        <div class="col-12">
            <form method="get" action="thanks.php" class="py-5">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="sub" class="form-label">Subject:</label>
                    <input type="text" class="form-control" id="sub" name="subject">
                </div>
                <div class="mb-3 mt-3">
                    <label for="comment">Comments:</label>
                    <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                </div>
                <button type="submit" name="contact" class="btn btn-outline-dark">Submit</button>
            </form>
        </div>
        <div class="col-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11802.465837045434!2d-0.2342805753702341!3d51.54691364560941!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876119ab2b607b5%3A0x2d19aee51502599a!2sEcommWorkForce!5e0!3m2!1sen!2s!4v1692786771183!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>