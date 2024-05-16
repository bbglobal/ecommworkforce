<footer class="py-5 mt-5">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center">
            <div>
                <a href="index.php">
                    <img src="img/Ecommworkforce-w-logo.png" alt="logo" width="300px">
                </a>
            </div>
            <div>
                <ul class="d-flex align-items-center justify-content-center">
                    <li class="social-link">
                        <a href="https://www.facebook.com/EcommWorkForce" target="_blank" title="facebook">
                            <img src="img/facebook.png" alt="facebook" width="40px">
                        </a>
                    </li>
                    <li class="social-link">
                        <a href="https://www.instagram.com/eco_workforce/" target="_blank" title="instagram">
                            <img src="img/instagram.png" alt="instagram" width="45px">
                        </a>
                    </li>
                    <li class="social-link">
                        <a href="https://www.linkedin.com/company/ecommworkforce/" target="_blank" title="linkedin">
                            <img src="img/linkedin.png" alt="Linkedin" width="40px">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11802.465837045434!2d-0.2342805753702341!3d51.54691364560941!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876119ab2b607b5%3A0x2d19aee51502599a!2sEcommWorkForce!5e0!3m2!1sen!2s!4v1692786529661!5m2!1sen!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <ul>
                    <li>
                        <strong style="margin-left: 60px;">Reviews</strong>
                        <div class="stjr-review-carousel"></div>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <ul>
                    <li>
                        <strong>Contact Details</strong>
                    </li>
                    <li>
                        <a href="tel:13073379667">
                            <i class="fa fa-phone"></i>
                            +1 (307) 337 9667</a>
                    </li>
                    <li>
                        <a href="tel:447448971151">
                            <i class="fa fa-whatsapp"></i>
                            +447448971151</a>
                    </li>
                    <li>
                        <a href="#">5830 E. 2nd Street Casper, WY 82609</a>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    All Rights Reserved &copy; <span id="copy-right"></span> <a href="mailto:info@ecommworkforce.com">EcommWorkForce</a>
                </div>
                <div>
                    Designed & Developed By Brand Boosters Limited
                </div>
            </div>
        </div>
    </div>

    <div class="hiring" id="myHiring">
        <div class="hiring-content">
            <span class="close" id="closeHiring">&times;</span>
            <div class="col-12">
                <h2 style="color: #000;">Contact Us</h2>
                <form method="get" action="thanks.php" class="py-5">
                    <div class="mb-3 mt-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="text" class="form-control" id="sub" name="subject" placeholder="Subject">
                    </div>
                    <div class="mb-3 mt-3">
                        <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" name="contact" class="btn btn-outline-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

    (function(d, s, id, c) {
        var js, rC = [],
            uRC = [],
            r = 0;
        Array.from(document.querySelectorAll('[class*="stjr-"]')).forEach(r => {
            rC = [...rC, ...Array.from(r.classList).filter((cl) => {
                return /^stjr-/.test(cl);
            })]
        });
        uRC = [...new Set(rC)];
        t = d.getElementsByTagName(s)[0];
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://www.sitejabber.com/js/v2/6464ca8b9417f/widgets.js' + (uRC.length ? '?widget-classes=' + uRC.join("|") : '?widget-classes=stjr-base') + '';
        js.onload = js.onreadystatechange = function() {
            if (!r && (!this.readyState || this.readyState[0] == 'c')) {
                r = 1;
                c();
            }
        };
        t.parentNode.insertBefore(js, t);
    }(document, 'script', 'sj-widget', function() {}));

    // Get the modal and close button element
    const modal = document.getElementById('myHiring');
    const closeModal = document.getElementById('closeHiring');

    // Function to open the modal
    function openModal() {
        modal.style.display = 'block';
    }

    // Function to close the modal
    function close() {
        modal.style.display = 'none';
    }

    // Event listeners
    window.onload = function() {
        setTimeout(openModal, 10000);
    };
    closeModal.addEventListener('click', close); // Close the modal when the close button is clicked
</script>
</body>

</html>