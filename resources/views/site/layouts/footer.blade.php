<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0 contact">
                <div class="info" style="color: #9e9e9e;">
                    <div>
                        <i class="ri-mail-send-line"></i>
                        <p>info@mohammedinthebible.com taha@mohammedinthebible.com</p>
                    </div>

                    <div>
                        @if (session()->get('direction') == 'rtl')
                            <i class="fas fa-phone-alt"></i>
                        @else
                            <i class="fas fa-phone"></i>
                        @endif
                        <p>+966 564317621 <br> (From 16:00 GMT)</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 text-lg-left linksFooter">
                <div class="copyright">
                    <h3 style="font-size: 1.4rem;">QUICK LINKS</h3>
                    <ul class="p-0">
                        <li><a href="{{ route('index') }}#aboutWriter">About The Writer</a></li>
                        <li><a href="{{ route('index') }}#testimonials">Non-Muslim Views</a></li>
                        {{-- <li><a href="#">Photos & Videos</a></li> --}}
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('index') }}#contact">Contact Us</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-3 text-lg-left linksFooter">
                <div class="copyright">
                    <h3 style="font-size: 1.4rem;">RELATED SITES</h3>
                    <ul class="p-0">
                        <li><a href="https://edialogue.org/" target="_blank">eDialogue</a></li>
                        <li><a href="https://isna.net/" target="_blank">ISNA</a></li>
                        <li><a href="https://www.discoverislam.com/" target="_blank">Discover Islam</a></li>
                        <li><a href="https://www.islamreligion.com" target="_blank">The Religion Of Islam</a></li>
                        <li><a href="https://ipc.org.kw/en/index.html" target="_blank">Islam Presentation Committee</a></li>
                        <li><a href="https://islamhouse.com/en" target="_blank">Islam House</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-3 text-lg-left">
                <div class="copyright">
                    <h3 style="font-size: 1.4rem;">HAVING INQUIRY?</h3>
                </div>
                <div class="credits inquiry">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input name="phonenumber" id="phonenumber" value="" placeholder="Phone Number"
                                class="validate['phone'] form-control A" title="" style=""
                                data-inputmask="'mask' : '+9(999)999-9999'" data-load-state="" data-tooltip=""
                                type="text">
                        </div>

                        <button type="submit"
                            style="width:100%; border-radius: 0;background: #00b3a4; border: 0; padding: 10px 24px; color: #fff;"
                            class="btn btn-primary" style="width: 100%;">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"
    style="background-color: #e8bd3d;"><i class="bi bi-arrow-up-short"></i></a>
