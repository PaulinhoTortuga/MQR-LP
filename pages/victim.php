<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/sass/css/victim.min.css">
    <title>Victim</title>
</head>
<body>
    <div class="body_wrapper">
        <div class="body_wrapper">
            <section class="main" id="main">
                <div class="main_wrapper">
                    <header class="header">
                        <img src="images/logo/mqr-black-logo.svg" class="header_logo" alt="my-quick-refund-logo">
                        <nav class="header_nav">
                            <ul>
                                <li><a href="mane.html#main" class="header_nav_item">Home</a></li>
                                <li><a href="mane.html#about-link" class="header_nav_item">About us</a></li>
                                <li><a href="mane.html#services" class="header_nav_item">Services</a></li>
                                <li><a href="mane.html#cooperation-link" class="header_nav_item">Chargeback steps</a></li>
                                <li><a href="mane.html#faq" class="header_nav_item">F.A.Q.</a></li>
                                <li><a href="mane.html#contact" class="header_nav_item header_nav_btn">Contact us</a></li>
                            </ul>
                        </nav> 
                         <div class="burger_btn">
                             <span></span>
                             <span></span>
                             <span></span>
                         </div>
                    </header>
                    <div class="main_content">
                        <div class="main_content_section1">
                            <p class="main_content_section1_text">
                                Stop being a victim of <strong class="main_content_section1_text_strong" id="data1">Bitcoin & Cryptocurrency Scam</strong>
                            </p>
                            <p class="main_content_section1_text">
                                In case any online company hasn't fulfilled their obligations, you can always fight for justice!
                            </p>
                            <p class="main_content_section1_text">
                                <strong class="main_content_section1_text_strong">
                                    No one should just let things slide, making it normal for scammers to deceive more & more people!
                                </strong>
                            </p>
                            <p class="main_content_section1_text">
                                We provide high-quality recovery services to financially injured investors all over the world.
                            </p>
                            <picture>
                                <source srcset="/images/img/desktop/victim-img-desktop.webp" media="(min-width: 1025px)">
                                <source srcset="/images/img/tablet/victim-img-tablet.webp" media="(max-width: 1024px) and (min-width: 769px)">
                                <source srcset="/images/img/mobile/victim-img-mobile.webp" media="(max-width: 768px)">
                                <img src="/images/img/desktop/victim-img-desktop.webp" class="main_img" alt="main image">
                            </picture>
                        </div>
                        <div class="main_content_section2">
                            <span class="main_content_section2_subtitle">
                                File a claim for compensation from <span><?= $_POST['info']; ?></span> 
                            </span>
                            <h1 class="main_content_section2_title">
                                DON'T LET SCAMMERS TAKE POSSESSION OF YOUR MONEY!
                            </h1>
                            <form class="main_form" action='thanks.html'>
                                <div class="main_form_inputs">
                                    <input type="text" placeholder="Full Name" name="fullName" class="main_form_inputs_input" required>
                                    <input type="email" placeholder="E-mail" class="main_form_inputs_input" required>
                                    <input type="tel" placeholder="Phone" class="main_form_inputs_input" id="phone" required>
                                    <input type="text" placeholder="Country" name="country" class="main_form_inputs_input" required>
                                    <select name="deposit" id="deposit" class="main_form_inputs_input select" required>
                                        <option value="" disabled selected>Deposit Amount</option>
                                        <option value="1000">0 - 5000$</option>
                                        <option value="2000">5,000$ - 10,000$</option>
                                        <option value="3000">10,000$ - 50,000$</option>
                                        <option value="4000">50,000$+</option>
                                    </select>
                                    <input type="text" placeholder="Scam Company Name" class="main_form_inputs_input">
                                    <textarea placeholder="Description" name="description" class="main_form_inputs_input textarea"></textarea>
                                </div>
                                <div class="main_form_checkpoint">
                                    <input id="checkbox" type="checkbox" class="main_form_checkpoint_checkbox" checked>
                                    <label for="checkbox" class="main_form_checkpoint_text">I agree to receive mails from the MyQuickRefund company</label>
                                </div>
                                <button type="submit" href="#" class="main_form_btn fbtns">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="footer" id="footer">
                <div class="footer_wrapper">
                    <img src="/images/logo/mqr-white-logo.svg" alt="mqr-logo" class="footer_logo">
                    <div class="footer_content">
                        <p class="footer_content_text">
                            Disclaimer: My Quick Refund provides free consultations. My Quick Refund and other fund recovery programs contracted
                            thereafter are subject to retainers, fees and/or commissions depending on the individual case history and the type of
                            service selected. My Quick Refund does not offer any financial investments or advice.
                        </p>
                        <div class="footer_content_links">
                            <a href="terms.html" class="footer_content_links_link">Terms & Conditions </a>
                            <a href="privacy.html" class="footer_content_links_link">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </footer>        
        </div>
    </div>
<script src="/assets/js/index.js"></script>
</body>
</html>