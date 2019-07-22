<?php 
/**
 * Template Name: About Us
 */


get_header(); ?>

<!--About us-->
<section class="section bg-pattern border-b border-gray-300">
    <div class="container">
        <div class="w-full md:w-1/2 xl:w-3/5">
            <h1 class="heading-1 text-brand-orange">About Us</h1>
            <p class="mb-10 text-lg ">FutureLink Technologies (FLT) is a Financial Technology
                and ICT Solutions Company, providing banking systems for SACCOs and Microfinance Institutions. Through
                our SAVINGS PLUS Core Banking system and MSACCO Mobile Banking switch, we enable SACCOS and MFIs serve
                thousands of clients anytime and anywhere, leading to membership and customer retention. They are able
                to recruit and serve more customers, mobilise more savings, and make additional income from Transaction
                revenues. Our shared managed Network infrastructure enables our clients to save 90% of Inter-branch
                connectivity costs contributing to profitability.</p>
            <p>
                <a href="<?php echo get_site_url(); ?>/contact-us"
                   class="shadow-lg text-lg rounded-full px-6 py-3 bg-orange-400 text-red-900">Contact Us</a>
            </p>
        </div>
    </div>
</section>

<!--The Team-->
<section class="py-16">
    <div class="container">
        <h2 class="heading-2 ">The Team</h2>
        <figure class="w-full h-auto rounded-xl shadow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/team_photo.jpg"
                 width="1024"
                 height="528"
                 alt="Futurelink Technologies Team"
                 class="w-full h-auto object-cover rounded-xl">
        </figure>
    </div>
</section>

<!--Vision & Mission-->
<section class="section flex-wrap">
    <div class="w-full">
        <div class="container flex flex-wrap">
            <div class="w-full md:w-1/2 md:pr-6 flex flex-col flex-no-wrap">
                <div class="rounded-full h-24 w-24 mb-4 flex items-center orange-gradient justify-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/icons/manager.svg" alt="manager icon" width="60" class="w-12">
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-700 text-xl mb-4">Our Vision</h4>
                    <p>To be the Technology Champion of the Socio-Economic prosperity of the People in the Developing
                        World.
                        .</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 md:pl-6 flex flex-col flex-no-wrap">
                <div class="rounded-full h-24 w-24 mb-4 flex items-center orange-gradient justify-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/icons/repair-tools-cross.svg" alt="manager icon" width="60" class="w-12">
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-700 text-xl mb-4">Our Mission</h4>
                    <p>To Innovate, Supply and Support Genuine ICT solutions while serving an All-Inclusive Market.</p>
                </div>
            </div>
        </div>

        <div class="container mt-16">
            <h4 class="font-semibold text-gray-700 text-xl mb-4">Our Core Values</h4>
            <div class="flex w-full mb-6">
                <div class="rounded-full h-12 w-12 mb-4 flex items-center blue-gradient justify-center mr-4">
                    <span class="fe fe-users text-xl font-semibold text-white"></span>
                </div>
                <div class="w-2/3">
                    <h4 class="font-semibold">Customer Focus:</h4>
                    <p>Success for us is a measure of how satisfied we make our clients.</p>
                </div>
            </div>
            <div class="flex w-full mb-6">
                <div class="rounded-full h-12 w-12 mb-4 flex items-center blue-gradient justify-center mr-4">
                    <span class="fe fe-box text-xl font-semibold text-white"></span>
                </div>
                <div class="w-2/3">
                    <h4 class="font-semibold">Innovation:</h4>
                    <p>If we are not helping our clients achieve consistent growth through
                        constant innovation in our services to them, we too are not growing.</p>
                </div>
            </div>
            <div class="flex w-full mb-6">
                <div class="rounded-full h-12 w-12 mb-4 flex items-center blue-gradient justify-center mr-4">
                    <span class="fe fe-git-pull-request text-xl font-semibold text-white"></span>
                </div>
                <div class="w-2/3">
                    <h4 class="font-semibold">Integrity:</h4>
                    <p>Our credibility lies in the consistency with which we live our values.</p>

                </div>
            </div>
            <div class="flex w-full mb-6">
                <div class="rounded-full h-12 w-12 mb-4 flex items-center blue-gradient justify-center mr-4">
                    <span class="fe fe-user text-xl font-semibold text-white"></span>
                </div>
                <div class="w-2/3">
                    <h4 class="font-semibold">We Value People:</h4>
                    <p>We regard people as created and important to us. We give priority to helping
                        our employees to be the best they can be through a consistent and ever improving Staff
                        Development
                        Program.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>