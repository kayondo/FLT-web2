<?php get_header(); ?>
<!--slider-->
<section class="slider bg-pattern flex-wrap border-b border-gray-300" style="overflow-x: hidden">

    <div class="container md:relative items-center flex-wrap slide-item">
        <figure class="w-full md:absolute" style="right:-500px;">
            <img src="<?php echo get_template_directory_uri(); ?>/images/MSACCO-photo.jpg" alt="savingsplus laptop"
                 class="md:ml-16 w-full rounded-xl">
        </figure>
        <div class="w-full md:w-1/2 mt-10 md:mt-0">
            <h1 class="heading-1 text-brand-orange leading-tight">
                Convenient,
                Reliable & Cheapest
                Way to Grow Savings,
                Access Credit &
                make Payments</h1>
            <p class="mt-12 mb-10 flex">
                <a href="<?php echo get_site_url(); ?>/msacco"
                   class="rounded-full py-3 px-6 shadow-md hover:shadow-lg bg-brand-blue text-brand-yellow">More About
                    MSACCO</a>
            </p>
        </div>
    </div>

    <div class="container md:relative items-center flex-wrap slide-item">
        <figure class="w-full md:absolute" style="right:-500px;">
            <img src="<?php echo get_template_directory_uri(); ?>/images/savingsplus-laptop@2x.png" alt="savingsplus laptop" class="w-full">
        </figure>
        <div class="w-full md:w-1/2 mt-10 md:mt-0">
            <h1 class="heading-1 text-brand-blue leading-tight">
                Extraordinary
                Organisational
                Efficiency Improved
                Risk Management &
                additional income</h1>
            <p class="mt-12 mb-10 flex">
                <a href="<?php echo get_site_url(); ?>/savings-plus"
                   class="rounded-full py-3 px-6 shadow-md hover:shadow-lg bg-brand-yellow text-orange-800">More About
                    SavingsPlus</a>
            </p>
        </div>
    </div>

    <div class="container slide-controls absolute bottom-0 left-0">
        <ul class="w-full flex justify-end">
            <li class="control" data-index="0"></li>
            <li class="control" data-index="1"></li>
        </ul>
    </div>
</section>

<!--news and events-->
<section class="sections" id="newsEvents">
    <div class="container">
        <div class="flex justify-between items-end mb-2 mt-32">
            <h2 class="heading-2 text-gray-700">News & Events</h2>
            <a href="<?php echo get_site_url(); ?>/news" class="hidden md:inline-flex">more news...</a>
        </div>
        <div class="flex flex-wrap -mx-3">
        <?php

        $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                );

        $newsposts = new WP_Query($args);

        while ($newsposts->have_posts()){
            $newsposts->the_post();
        ?>
        <article class="w-full md:w-1/3 p-3 flex">
            <a href="<?php the_permalink(); ?>" class="rounded-xl shadow bg-white hover:shadow-lg flex flex-col flex-no-wrap">
                <figure class="h-64 w-full rounded-t-xl">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                                 alt="" width="291" class="w-full h-64 object-cover rounded-t-xl">
                </figure>
                <h5 class="font-medium text-lg leading-tight text-gray-800 p-5">
                    <?php the_title(); ?></h5>
                <p class="p-5 pt-0 text-gray-500 mt-auto"><?php the_time('F j, Y'); ?></p>
            </a>
        </article>
            
        <?php 
        }
        wp_reset_query(); ?>
        </div>
    </div>
</section>

<!--products-->
<section class="products" style="overflow-x: hidden" id="products">
    <div class="container mt-32">
        <div class="flex justify-between items-end mb-8 mt-10">
            <h2 class="heading-2 text-gray-700">Products</h2>
        </div>
    </div>
    <div class="container md:flex md:relative items-start flex-wrap">
        <figure class="hidden md:flex w-2/3 md:absolute" style="right:-200px;">
            <img src="<?php echo get_template_directory_uri(); ?>/images/workspace.svg" alt="savingsplus laptop" class="w-full">
        </figure>
        <div class="w-full md:w-1/2">
            <a href="<?php echo get_site_url(); ?>/savings-plus" class="mb-4 block">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/savingsplus-logo.svg" alt="savings plus logo" class="h-10 md:h-10">
                <h2 class="hidden">SAVINGS PLUS</h2>
            </a>
            <p class="mb-4 text-gray-700">For SACCOs and Microfinance Institutions, we provide a combination
                of extraordinary organisational efficiency, improved Risk Management & additional income through our
                hosted MSACCO Mobile Banking Switch and SAVINGS PLUS Core Banking system.</p>
            <p class="mb-4">Savings Plus© is a Core Banking software that manages banking operations for Savings and
                Credit
                Co-Operatives (SACCOS), Microfinance (MFIs), Village Banks, Wholesale Microfinance Institutions of any
                size.
            </p>
            <p class="mt-auto"><a href="<?php echo get_site_url(); ?>/savings-plus" class="chunky">more Details..</a></p>


            <a href="<?php echo get_site_url(); ?>/msacco" class="mb-4 block mt-12">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/m-sacco-logo.svg" alt="m-sacco logo" class="h-10 md:h-10">
                <h2 class="hidden">M-SACCO</h2>
            </a>
            <p class="mb-4 text-gray-700">For SACCOs and Microfinance Institutions, we provide a combination
                of extraordinary organisational efficiency, improved Risk Management & additional income through our
                hosted MSACCO Mobile Banking Switch and SAVINGS PLUS Core Banking system.</p>
            <p class="mb-4">MSACCO is the most convenient and effective solution for SACCOs and Microfinance to provide
                mobile
                financial services to its members and customers respectively. With MSACCO, members can make deposits and
                withdraw money from their respective accounts.</p>
            <p class="mt-auto"><a href="<?php echo get_site_url(); ?>/msacco" class="chunky">more Details..</a></p>
        </div>
    </div>
</section>

<!--services-->
<section class="sections" id="services">
    <div class="container">
        <div class="flex justify-between items-end mb-2 mt-24">
            <h2 class="heading-2 text-gray-700">Services</h2>
        </div>
        <figure id="sacco-admin">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sacco-administration.jpg"
                 alt="sacco administration"
                 class="w-full h-image object-cover rounded-xl">
        </figure>
        <div class="w-full md:w-3/5 mb-10">
            <h2 class="text-2xl text-brand-orange font-medium mt-4">SACCO Administration</h2>
            <p class="font-medium text-gray-700">For Employee based SACCOs and Investment Clubs, we provide improved
                efficiency, member accountability and
                reduced cost of administration by automating day-to-day business processes. Our member-based pricing
                model also ensures that the administration costs remain relatively low, leading to Profitability. </p>
            <br>
            <p>Our team of accountants and banking experts do not only ensure that all members of the SACCO are served
                efficiently, but also leverage technology to automate certain processes that members can now serve
                themselves over the internet without having to come to the banking hall.</p>
        </div>
        <figure class="mt-24" id="ict-solutions">
            <img src="<?php echo get_template_directory_uri(); ?>/images/it-support.jpg"
                 alt="sacco administration"
                 class="w-full h-image object-cover rounded-xl">
        </figure>
        <div class="w-full md:w-3/5">
            <h2 class="text-2xl text-brand-orange font-medium mt-4">ICT Solutions</h2>
            <p class="font-medium text-gray-700">For corporate organisations in Uganda, we provide Value For Money
                Technologies by timely and exclusively suppling genuine ICT products and services that have World-wide
                Manufacturer’s warranty and for which we offer after-sales support.
            </p>
            <br>
            <p>In order to offer holistic solutions, FLT has established partnerships with leading IT brands including
                the following;</p>
        </div>
        <div class="w-full flex flex-wrap items-center logos">
            <a href="https://www.dell.com/"
               target="_blank"
               class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/it-partners/Dell-Logo.png" class="h-10 md:h-12" alt="">
            </a>
            <a href="https://www8.hp.com/emea_africa/en/home.html"
               target="_blank"
               class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/it-partners/HP-Logo.png" class="h-10 md:h-12" alt="">
            </a>
            <a href="https://www.cisco.com/"
               target="_blank"
               class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/it-partners/Cisco-logo.png" class="h-10 md:h-12" alt="">
            </a>
            <a href="https://www.microsoft.com/"
               target="_blank"
               class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/it-partners/microsofts-logo.png" class="h-10 md:h-12" alt="">
            </a>
            <a href="https://www.vmware.com/"
               target="_blank"
               class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/it-partners/VMware.png" class="h-10 md:h-12" alt="">
            </a>
        </div>
    </div>
</section>


<div class="container mb-32">

    <div class="mt-32">
        <div class="w-full w-full md:w-2/5">
            <h2 class="heading-2 text-gray-700" id="partners">Our Partners</h2>
            <p>Our Financial Inclusion Partners</p>
        </div>
        <div class="w-full flex flex-wrap mt-2 items-center logos">
            <a href="http://fsduganda.or.ug"
               target="_blank"
               class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partners/fsdu-Logo.png" class="h-10 md:h-12" alt="">
            </a>
            <a href="https://www.mastercard.us/en-us.html"
               target="_blank"
               class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partners/master-card-fund-for-rural.png" class="h-10 md:h-12" alt="">
            </a>
            <a href="https://www.interswitchgroup.com/ug"
               target="_blank"
               class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partners/interswitch-logo.png" class="h-10 md:h-12" alt="">
            </a>
            <a href="https://www.mtn.co.ug/en/Pages/default.aspx"
               target="_blank"
               class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partners/mtn-logo.png" class="h-10 md:h-12" alt="">
            </a>
            <a href="https://www.mtn.co.ug/en/Pages/default.aspx"
               target="_blank"
               class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partners/airtel-logo.png" class="h-10 md:h-12" alt="">
            </a>
        </div>
    </div>
</div>


<!--footer-->
<?php get_footer(); ?>