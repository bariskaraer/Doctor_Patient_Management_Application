
							
                            <section class="m-t-40">
                                <div class="sttabs tabs-style-linebox">
                                    <nav>
                                        <ul>
                                            <li><a href="#section-linebox-1"><span>Pazartesi</span></a></li>
                                            <li><a href="#section-linebox-2"><span>Salı</span></a></li>
                                            <li><a href="#section-linebox-3"><span>Çarşamba</span></a></li>
                                            <li><a href="#section-linebox-4"><span>Perşembe</span></a></li>
                                            <li><a href="#section-linebox-5"><span>Cuma</span></a></li>
                                            <li><a href="#section-linebox-6"><span>Cumartesi</span></a></li>
                                            <li><a href="#section-linebox-7"><span>Pazar</span></a></li>
                                        </ul>
                                    </nav>
                                    <div class="content-wrap text-center">
                                        <section id="section-linebox-1">
                                            <?php require 'listAttributes/monday.php'; ?>
                                        </section>
                                        <section id="section-linebox-2">
                                            <?php require 'listAttributes/tuesday.php'; ?>
                                        </section>
                                        <section id="section-linebox-3">
                                            <?php require 'listAttributes/wednesday.php'; ?>
                                        </section>
                                        <section id="section-linebox-4">
                                            <?php require 'listAttributes/thursday.php'; ?>
                                        </section>
                                        <section id="section-linebox-5">
                                            <?php require 'listAttributes/friday.php'; ?>
                                        </section>
                                        <section id="section-linebox-6">
                                            <?php require 'listAttributes/saturday.php'; ?>
                                        </section>

                                        <section id="section-linebox-7">
                                            <?php require 'listAttributes/sunday.php'; ?>
                                        </section>
                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs -->
                            </section>


<script type="text/javascript">
    (function() {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
    </script>