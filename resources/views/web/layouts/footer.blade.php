<footer class="site-footer section-padding" id="contact">
    <div class="container-footer">
        <div class="row">
            <!-- Opening Hours -->
            <div class="col-lg-5 me-auto col-12">
                <h5 class="mb-lg-4 mb-3">Opening Hours</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex">
                        Sunday : Closed
                    </li>
                    <li class="list-group-item d-flex">
                        Monday, Tuesday - Friday
                        <span class="ms-auto">8:00 AM - 3:30 PM</span>
                    </li>
                    <li class="list-group-item d-flex">
                        Saturday
                        <span class="ms-auto">10:30 AM - 5:30 PM</span>
                    </li>
                </ul>
            </div>

            <!-- Our Clinic -->
            <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                <h5 class="mb-lg-4 mb-3">Our Clinic</h5>
                <p><a href="mailto:hello@company.co">hello@company.co</a></p>
                <p>123 Digital Art Street, San Diego, CA 92123</p>
            </div>

            <!-- Socials -->
            <div class="col-lg-3 col-md-6 col-12 ms-auto">
                <h5 class="mb-lg-4 mb-3">Socials</h5>
                <ul class="social-icon">
                    <li><a href="#" class="social-icon-link bi-facebook"></a></li>
                    <li><a href="#" class="social-icon-link bi-twitter"></a></li>
                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                </ul>
            </div>

            <!-- Copyright -->
            <div class="col-lg-3 col-12 ms-auto mt-4 mt-lg-0">
                <p class="copyright-text">Copyright © Medic Care 2021
                    <br><br>Design: <a href="https://templatemo.com" target="_parent">TemplateMo</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- JAVASCRIPT FILES -->
<script src="{{asset('web-template/js/jquery.min.js')}}"></script>
<script src="{{asset('web-template/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('web-template/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('web-template/js/scrollspy.min.js')}}"></script>
<script src="{{asset('web-template/js/custom.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Sayfa yüklendiğinde ilk butona ve tüm kartlara aktiflik ekleyin
        const firstButton = document.querySelector('.service1-nav-btn');
        const firstPlanGroup = document.querySelectorAll(`[data-plan-group="${firstButton.getAttribute('data-plan')}"]`);

        if (firstButton && firstPlanGroup.length > 0) {
            firstButton.classList.add('service1-active');
            firstPlanGroup.forEach(card => {
                card.style.display = 'flex'; // Tüm ilgili kartları göster
            });
        }
    });

    document.querySelectorAll('.service1-nav-btn').forEach(button => {
        button.addEventListener('click', () => {
            // 1. Aktif butonu değiştir
            document.querySelectorAll('.service1-nav-btn').forEach(btn => btn.classList.remove('service1-active'));
            button.classList.add('service1-active');

            // 2. Tüm plan gruplarını gizle
            document.querySelectorAll('.service1-pricing-cards').forEach(card => {
                card.style.display = 'none'; // Tüm plan gruplarını gizler
            });

            // 3. Seçilen plan grubunu göster
            const selectedPlan = button.getAttribute('data-plan');
            document.querySelectorAll(`[data-plan-group="${selectedPlan}"]`).forEach(card => {
                card.style.display = 'flex'; // İlgili grubu görünür yapar
            });
        });
    });
</script>


</body>
</html>
