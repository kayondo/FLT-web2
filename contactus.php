<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>

<!--banner-->
<section class="banner contact-us">
    <div class="container flex flex-wrap py-16 md:py-0">
        <div class="w-full md:w-1/2 animated pulse md:pr-6">
            <h1 class="heading-1 mb-10 mt-16 md:mt-0 text-brand-orange">Contact Us</h1>
            <div class="flex text-blue-100">
                <span class="fe fe-map-pin mr-4 text-xl"></span>
                <p>FutureLink Technologies <br>
                    Plot 97, Bukoto street <br>
                    P.O. Box 75408 Kampala, Uganda.</p>
            </div>
            <div class="flex text-blue-100 mt-6">
                <span class="fe fe-phone mr-4 text-xl"></span>
                <p>+256-393- 238 278 <br>
                    +256-774- 638 790
                </p>
            </div>
            <div class="flex text-blue-100 mt-6">
                <span class="fe fe-mail mr-4 text-xl"></span>
                <p>info@fltug.com <br>
                    support@savingsplus.info
                </p>
            </div>
        </div>
        <div class="w-full md:w-1/2 animated pulse md:pl-6 mt-10 md:mt-0">
            <div class="rounded-xl shadow p-8 bg-white h-full">
                <input type="text" name="email" id="email" placeholder="Email Address"
                       class="p-2 border-2 border-gray-400 w-full rounded-lg focus:outline-none">
                <input type="text" name="name" id="name" placeholder="Name"
                       class="mt-4 p-2 border-2 border-gray-400 w-full rounded-lg focus:outline-none">
                <textarea name="message" id="message" rows="5" placeholder="message"
                          class="mt-4 p-2 border-2 border-gray-400 w-full rounded-lg focus:outline-none"></textarea>
                <button class="w-full bg-brand-yellow text-brand-blue py-2 rounded-full mt-2">Send Message</button>
            </div>
        </div>
    </div>
</section>

<!--products-->
<section class=" section">
    <div class="container">
        <h2 class="heading-2 text-brand-orange mb-6">Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7470688931003!2d32.59177101540433!3d0.34241956407741775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbbb1c5bcc7db%3A0x4eeb9b037f6efb57!2sFutureLink+Technologies+(FLT)+Ltd!5e0!3m2!1sen!2sug!4v1560506310888!5m2!1sen!2sug"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>

<?php get_footer(); ?>