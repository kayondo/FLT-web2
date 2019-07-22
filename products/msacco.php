<?php 
/**
 * Template Name: MSACCO
 * 
 */

get_header(); ?>

<!--introduction-->
<section class="section bg-white bg-pattern border-gray-300 border-b">
    <div class="container">
        <div class="flex w-full leading-normal flex-wrap">
            <div class="w-full md:w-2/5 pl-6 hidden md:block">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/m-sacco-phone.svg" alt="m-sacco phone" width="293">
            </div>
            <div class="w-full md:w-3/5 pr-6 flex items-center flex-wrap">
                <div>
                    <div class="w-full mb-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/svg/m-sacco-logo.svg" alt="m-sacco logo" width="160">
                        <h1 class="hidden">MSACCO</h1>
                    </div>

                    <p>MSACCO is the most convenient and effective solution for SACCOs and Microfinance to provide
                        mobile
                        financial services to its members and customers respectively.
                    </p>
                    <br>
                    <p>With MSACCO, members can make deposits and withdraw money from their respective accounts, make
                        payments to various SACCO products. Payments to the SACCO via MTN Mobile Money or Airtel Money
                        have
                        now been simplified. Members can also access their funds through INTERSWITCH ATMs and POS</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16">
    <!--Key features-->

    <div class="container mt-24">
        <h2 class="heading-2 w-full mb-6">Key Features</h2>
        <div class="flex flex-wrap -mx-2">
            <!--Deposit-->
            <article class="w-full md:w-1/2 p-2 flex mb-4">
                <div class="rounded-lg flex">
                    <div class="rounded-full h-12 w-12 bg-brand-blue flex items-center justify-center mr-4">
                        <span class="fe fe-arrow-up-left font-medium text-2xl text-brand-yellow"></span>
                    </div>
                    <div class="w-4/5">
                        <h4 class="font-semibold mb-1">Deposit</h4>
                        <p>members or non-members can make deposits onto their savings accounts.</p>
                    </div>
                </div>
            </article>
            <!--Withdrawal-->
            <article class="w-full md:w-1/2 p-2 flex mb-4">
                <div class="rounded-lg flex">
                    <div class="rounded-full h-12 w-12 bg-brand-blue flex items-center justify-center mr-4">
                        <span class="fe fe-arrow-down-right font-medium text-2xl text-brand-yellow"></span>
                    </div>
                    <div class="w-4/5">
                        <h4 class="font-semibold mb-1">Withdrawal</h4>
                        <p>Allows member to make withdrawals from their voluntary savings accounts.</p>
                    </div>
                </div>
            </article>
            <!--Loan Repayment-->
            <article class="w-full md:w-1/2 p-2 flex mb-4">
                <div class="rounded-lg flex">
                    <div class="rounded-full h-12 w-12 bg-brand-blue flex items-center justify-center mr-4">
                        <span class="fe fe-repeat font-medium text-2xl text-brand-yellow"></span>
                    </div>
                    <div class="w-4/5">
                        <h4 class="font-semibold mb-1">Loan Repayment</h4>
                        <p>This service allows members to repay their loans</p>
                    </div>
                </div>
            </article>
            <!--Mini-statements -->
            <article class="w-full md:w-1/2 p-2 flex mb-4">
                <div class="rounded-lg flex">
                    <div class="rounded-full h-12 w-12 bg-brand-blue flex items-center justify-center mr-4">
                        <span class="fe fe-file-text font-medium text-2xl text-brand-yellow"></span>
                    </div>
                    <div class="w-4/5">
                        <h4 class="font-semibold mb-1">Mini-statements</h4>
                        <p>Members can get a mini-statement for the last 5 transactions. </p>
                    </div>
                </div>
            </article>
            <!--SACCO Balance inquiry -->
            <article class="w-full md:w-1/2 p-2 flex mb-4">
                <div class="rounded-lg flex">
                    <div class="rounded-full h-12 w-12 bg-brand-blue flex items-center justify-center mr-4">
                        <span class="fe fe-pie-chart font-medium text-2xl text-brand-yellow"></span>
                    </div>
                    <div class="w-4/5">
                        <h4 class="font-semibold mb-1">SACCO Balance Inquiry</h4>
                        <p>Members can enquire their account balances for Deposits</p>
                    </div>
                </div>
            </article>
            <!--Transaction alerts -->
            <article class="w-full md:w-1/2 p-2 flex mb-4">
                <div class="rounded-lg flex">
                    <div class="rounded-full h-12 w-12 bg-brand-blue flex items-center justify-center mr-4">
                        <span class="fe fe-message-square font-medium text-2xl text-brand-yellow"></span>
                    </div>
                    <div class="w-4/5">
                        <h4 class="font-semibold mb-1">Transaction alerts</h4>
                        <p>Members receive SMS alerts for deposits, withdrawals, loan approvals, loan disbursement, loan
                            due installment</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <!--The Benefits of using MSACCO-->
    <div class="container mt-24">
        <h2 class="heading-2 ">The Benefits of using MSACCO</h2>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 md:pr-6">
                <h4 class="font-semibold text-gray-800 text-lg">To the SACCO Members</h4>
                <ul class="list-group mt-4">
                    <li class="list-item"> Convenience: You can transact from anywhere and at any time
                    </li>
                    <li class="list-item">Save Money and Time: Dont spend time and money traveling to the banking hall
                        any more
                    </li>
                    <li class="list-item">Accountability: Monitor the activities on you account. No surprises, keep
                        track of your money on
                        the phone
                    </li>
                    <li class="list-item">Achieve a better Credit Rating by transacting more often.</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 md:pl-6">
                <h4 class="font-semibold text-gray-800 text-lg">To the SACCO</h4>
                <ul class="list-group mt-4">
                    <li class="list-item">Customer Retention: Regardless of which town, village or country your members
                        shift to, keep
                        serving them through MSACCO
                    </li>
                    <li class="list-item">
                        Cheaper to do business: No need for setting up multiple banking halls any more. Members no
                        longer need to come to banking halls
                    </li>
                    <li class="list-item">Source of Revenue: Generate repetitive income from Mobile Banking Transactions
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--How to user MSACCO-->
<section class="section">
    <div class="container">
        <h2 class="heading-2 mb-10">How to use MSACCO</h2>

        <!--Making a deposit -->
        <div class="">
            <h4 class="font-semibold text-xl mb-6 text-gray-700">Making a deposit </h4>
            <div class="step">
                <div>
                    <div class="circle">1</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Load money to your <strong>MTN</strong> or <strong>AIRTEL</strong> Money account. </div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">2</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Dial <strong>*165#</strong> on MTN or AIRTEL. You can also dial <strong>*185#</strong> on AIRTEL.</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">3</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Choose <strong>financial</strong> services</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">4</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Choose <strong>Deposit</strong> and follow the prompts </div>
                </div>
            </div>
        </div>

        <!--Making a Withdrawal-->
        <div class="mt-6">
            <h4 class="font-semibold text-xl mb-6 text-gray-700">Making a Withdrawal</h4>
            <div class="step">
                <div>
                    <div class="circle">1</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Dial <strong>*165#</strong> on MTN or AIRTEL. You can also dial <strong>*185#</strong> on AIRTEL</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">2</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Choose <strong>financial services</strong></div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">3</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Choose <strong>M-SACCO</strong> on AIRTEL or <strong>SACCO</strong> on MTN</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">4</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Choose <strong>Withdraw</strong> and follow the prompts </div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">5</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter<strong> SACCO ID</strong> </div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">6</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter member <strong>account number</strong></div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">7</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter Amount to be drawn to Mobile Money wallet account from SACCO.</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">8</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter Mobile Money PIN.</div>
                </div>
            </div>
        </div>

        <!--Approving withdrawal-->
        <div class="mt-6">
            <h4 class="font-semibold text-xl mb-6 text-gray-700">Approving withdrawal</h4>
            <div class="step">
                <div>
                    <div class="circle">1</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Dial <strong>*288*66#</strong></div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">2</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter MTN SACCO ID</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">3</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter member number</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">4</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Choose approve withdraw</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">5</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Confirm Approve</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">6</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter SACCO PIN. </div>
                </div>
            </div>
        </div>

        <!--Checking Balance on MTN-->
        <div class="mt-6">
            <h4 class="font-semibold text-xl mb-6 text-gray-700">Check Balance on MTN</h4>
            <div class="step">
                <div>
                    <div class="circle">1</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Dial <strong>*288*66#</strong></div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">2</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter MTN SACCO ID</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">3</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter member number</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">4</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Choose Account Balance</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">5</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter SACCO PIN. </div>
                </div>
            </div>
        </div>

        <!--Checking Balance on Airtel-->
        <div class="mt-6">
            <h4 class="font-semibold text-xl mb-6 text-gray-700">Check Balance on Airtel</h4>
            <div class="step">
                <div>
                    <div class="circle">1</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Dial <strong>*185#</strong></div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">2</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Choose Financial Services (7)</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">3</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Choose check balance</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">4</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter SACCO ID</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">5</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter Account number</div>
                </div>
            </div>
            <div class="step">
                <div>
                    <div class="circle">6</div>
                    <div class="line"></div>
                </div>
                <div>
                    <div class="body">Enter PIN to confirm</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>