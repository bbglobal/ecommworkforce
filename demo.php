<?php
include 'header.php';
head("Book A Demo");
?>
<section id="help-header">
    <div class="circle-right" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"></div>
    <div class="header-section">
        <div class="header-content">
            <h1 class="h1 text-white">Book a Demo</h1>
        </div>
    </div>
    <div class="circle-left" data-aos="fade-up" data-aos-duration="2000"></div>
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
                <button type="submit" name="demo" class="btn btn-outline-dark">Book</button>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>