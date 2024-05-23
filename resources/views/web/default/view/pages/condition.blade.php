@extends(getTemplate().'.view.layout.layout')

@section('title')
    {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : '' }}
@endsection
@section('meta_description',get_option('site_meta_description'))
@section('meta_keyword',get_option('site_meta_keyword'))
@section('page')

    {{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
           integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">--}}

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-12">
                <h1 class="display-4 text-center p-4">Terms of Service </h1>
                <p class=" text-muted mb-0 leading-loose">
                    Greetings from Tutoring School <br>
                    These Terms & Condition govern your use of the Tutoring School website, which may be found at
                    tutoringschool.com
                    <br>
                    Our Privacy Policy also governs your use of our Service and explains how we collect, keep, and
                    distribute data acquired via our web pages.
                    <br>
                    Your agreement with us includes these Terms as well as our Privacy Policy. You acknowledge that you
                    have read, understood, and agreed to be bound by the Agreements.
                    <br>
                    You may not use the Service if you disagree with the Agreements; nevertheless, please contact us by
                    writing info@tutoringschool.com.com so that we can work out a solution. These Terms apply to all
                    visitors, users, and others who attempt to access or use the Service.
                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">

            <div class="col-lg-6 d-none d-lg-block">
                <h3 class="mt-5 mb-5">Email notification</h3>
                <p style="line-height: 30px">
                    If you use our Service, you consent to receive newsletters, marketing or promotional materials, and
                    other information from us. By clicking the unsubscribe link or sending an email to
                    info@tutoringschool.com.com, you can unsubscribe from any or all of these communications.
                </p>
                <h3 class="mt-5 mb-5">Buying and selling</h3>
                <p style="line-height: 30px">
                    If you desire to purchase any goods or Service made available through our Service, you may be
                    requested to supply certain information relevant to your Purchase, such as your credit or debit card
                    number, card expiration date, billing address, and shipping information.
                    You represent and warrant that:
                </p>
                <ul style="line-height: 30px;">
                    <li>(i) The information you submit to us is true, correct, and complete; and
                    </li>
                    <li>(ii) You have the legal right to use any card or other payment method in connection with any
                        Purchase.
                    </li>
                </ul>
                <p style="line-height: 30px">
                    We may employ third-party providers to facilitate payment and the completion of Purchases. By
                    entering your information, you agree to our Privacy Policy allowing us to share it with these third
                    parties. <br>
                    For a variety of reasons, including product or service availability, errors in the product or
                    service description or price, an error in your order, or other causes, we reserve the right to
                    refuse or cancel your order at any time. <br>
                    We have the right to refuse or cancel your order if we detect fraud or an illegal or criminal
                    transaction.
                </p>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('assets/default/images/terms-new.jpeg')}}" alt="" class="img-fluid">
            </div>

        </div>
    </div>

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">

            <div class="col-lg-6">
                <h3 class="mt-5 mb-5"> Contests, sweepstakes, and promotions</h3>
                <p style="line-height: 30px">
                    Contests, sweepstakes, and other promotions offered through the Service may be subject to rules that
                    are not included in these Terms of Service. Before participating in any Promotions, please read the
                    applicable regulations as well as our Privacy Policy. If the provisions of a Promotion conflict with
                    these Terms of Service, the Promotion rules will prevail.
                </p>

                <h3 class="mt-5 mb-5"> Provide information</h3>
                <p style="line-height: 30px">
                    Our Service allows you to publish, link to, save, share, and otherwise make information, text,
                    photos, videos, and other content available to the public. Any Content you submit on or through the
                    Service is solely your responsibility for its legality, reliability, and appropriateness.
                    <br> By posting Content on or through the Service, you represent and warrant that:
                </p>

                <ul style="line-height: 30px;">
                    <li>(i) The Content is yours (you own it) and that you have the right to use it and grant us the
                        rights and licenses set forth in these Terms;
                    </li>
                    <li>(ii) The posting of your Content on or through the Service does not infringe on any person's or
                        entity's privacy, publicity, copyrights, contract rights, or other rights; and
                    </li>
                    <li>(iii) You own all rights to any Content you submit, post, or display on or through the Service,
                        and you are solely responsible for protecting such rights.
                    </li>
                </ul>
                <p style="line-height: 30px">
                    We disclaim all responsibility for any Content you or a third party publish on or via the Service.
                    You grant us the right and permission to use, alter, publicly perform, publicly display, reproduce,
                    and distribute any Content you submit on or through the Service by doing so. You understand and
                    agree that this license includes the right for us to make your Content available to other Service
                    users who may use it in accordance with these Terms.
                    <br>
                    Tutoring School maintains the right, but not the obligation, to monitor and edit all User-Generated
                    Content.
                    <br>
                    In addition, any Content made accessible on or via this Service is either owned by Tutoring School
                    or utilized with authorization. You may not distribute, alter, transmit, reuse, download, repost,
                    copy, or use said Content, in whole or in part, for commercial or personal gain without our express
                    prior written approval.

                </p>

            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <h3 class="mt-5 mb-5"> Prohibited Applications</h3>
                <p style="line-height: 30px">
                    You may use the Service only for legal purposes and in accordance with the Terms. You agree not to
                    make the following uses of the Service:
                </p>
                <ul style="line-height: 30px;list-style: disc">
                    <li>(i) In any way, break any applicable national or international law or regulation.
                    </li>
                    <li>(ii) With the intent to abuse, harm, or attempt to exploit or injure minors in any way,
                        including by exposing them to inappropriate content.
                    </li>
                    <li>(iii) To send or arrange for the sending of any promotional or advertising material, such as
                        "junk mail," "chain letters," "spam," or any other similar solicitation.
                    </li>
                    <li>(iv) It is unlawful to impersonate or attempt to impersonate Company, a Company employee,
                        another user, or any other person or entity.
                    </li>
                    <li>(v) In any way that is unlawful, illegal, fraudulent, or damaging to others' rights, or in
                        conjunction with any unlawful, illegal, fraudulent, or harmful purpose or activity.
                    </li>
                    <li>(vi) Engage in any other behavior that restricts or inhibits anyone's use or enjoyment of the
                        Service, or that, in our opinion, may harm, offend, or expose Company or Service users to
                        liability.
                    </li>
                </ul>
                <h3 class="mt-5 mb-5">In addition, you agree not to:</h3>
                <ul style="line-height: 30px">
                    <li>(i) Use the Service in any way that could disable, overburden, damage, or impair it, or
                        interfere with any other party's capacity to engage in real-time activities through it.
                    </li>
                    <li>(ii) Use any robot, bot, or other automatic device, process, or means to access Service for any
                        reason, including monitoring or copying any of the content on Service.
                    </li>
                    <li>(iii) Use any manual procedure to monitor or copy any material on the Service or for any other
                        unlawful purpose without our prior written authorization.
                    </li>
                    <li>(iv) Use any device, program, or routine that interferes with the proper operation of Service is
                        prohibited.
                    </li>
                    <li>(v) Inject any malicious or technologically harmful content, such as viruses, trojan horses,
                        worms, logic bombs, or other malicious or technologically damaging material.
                    </li>
                    <li>(vi) In any way, attempt to gain unauthorized access to, interfere with, damage, or disrupt any
                        component of the Service, the server on which the Service is hosted, or any server, computer, or
                        database associated to the Service.
                    </li>
                    <li>(vii) Use any attack Service with a denial-of-service or distributed denial-of-service attack.
                    </li>
                    <li>(viii) Take any action that could negatively impact or falsify the Company's rating.
                    </li>
                    <li>(ix) Make any other attempt to obstruct Service's normal operation.
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-12">
                <h3 class="mt-4 mb-4">Analytical instruments </h3>
                <p class="text-justify leading-loose">
                    The usage of third-party service providers to monitor and assess how our Service is utilized is
                    possible. <br>
                    This product is not intended for use by minors. <br>
                    Only people above the age of thirteen (13) are allowed to access and use the Service. By accessing
                    or using the Service, you warrant and represent that you are at least thirteen (13) years old and
                    have the entire power, right, and capacity to engage into this agreement and abide by all of the
                    Terms' terms and conditions. If you are under the age of thirteen (13), you are not permitted to
                    access or use the Service.

                </p>

                <h3 class="mt-4 mb-4">
                    Accounts
                </h3>
                <p class="text-justify leading-loose">
                    You confirm that you are at least 13 years old and that the information you provide is accurate,
                    complete, and up to date at all times when you create an account with us. If you provide false,
                    incomplete, or obsolete information on the Service, your account may be immediately cancelled.
                    <br>
                    You are responsible for maintaining the confidentiality of your account and password, as well as
                    limiting access to your computer and account. You agree to accept responsibility for all activities
                    or acts that occur under your account or password, whether they occur with our Provider or a
                    third-party service. You must notify us promptly if you become aware of a security breach or
                    unauthorized use of your account. <br>
                    You may not use the name of another person or entity, a name or trademark that is subject to the
                    rights of another person or entity other than you, or a name or trademark that is not lawfully
                    available for use as a username without prior license. Any name that is offensive, vulgar, or
                    obscene is not permitted to be used as a username. <br>
                    In our sole discretion, we may refuse Service, terminate accounts, delete or modify content, or
                    cancel orders.

                </p>

                <h3 class="mt-4 mb-4">
                    Intellectual Property
                </h3>
                <p class="text-justify leading-loose">
                    It is a term that refers to the ownership of intellectual property <br>
                    The Service, as well as its original content (excluding Content uploaded by users), features, and
                    functionality, are owned and controlled by Tutoring School and its licensors. The Service is
                    protected by copyright, trademark, and other laws in the United States and other countries. Our
                    trademarks may not be used in combination with any product or service without the prior written
                    approval of Tutoring School.

                </p>

                <h3 class="mt-4 mb-4">Copyright Policy </h3>
                <p class="text-justify leading-loos">
                    Others' intellectual property rights are respected by us. Our policy is to react to any claim that
                    Content on the Service infringes on the copyright or other intellectual property rights of another
                    person or business. <br>
                    If you are a copyright owner or an authorized representative of one and believe that a copyrighted
                    work has been copied in a way that constitutes copyright infringement, please send your claim to
                    info@tutoringschool.com with the subject line "Copyright Infringement" and a detailed description of
                    the alleged violation. <br>
                    You may be held liable for damages (including expenses and attorneys' fees) if you misrepresent or
                    act in bad faith in relation to complaints of infringement of any Content found on or through the
                    Service on your copyright.
                </p>

                <h3 class="mt-4 mb-4">Error Reporting and Feedback </h3>
                <p class="text-justify leading-loos">
                    You may contact us directly at info@tutoringschool.com with information and comments concerning
                    errors, suggestions for improvements, ideas, concerns, complaints, and other matters connected to
                    our Service. You acknowledge and agree that:
                </p>
                <ul style="line-height: 30px">
                    <li>(i) Company may have developed ideas similar to the Feedback;
                    </li>
                    <li>(ii) Feedback will not contain confidential or proprietary information from you or any third
                        party, and any confidentiality obligations will not bind
                    </li>
                    <li>(iii) Company concerning the Feedback; and
                    </li>
                    <li>(iv) Company will not retain, acquire, or assert any intellectual property right or other right,
                        title, or interest in or to the Feedback.
                    </li>
                </ul>
                <p class="text-justify leading-loos">
                    You grant Company and its affiliates an exclusive, transferable, irrevocable, free-of-charge,
                    sub-licensable, unlimited, and perpetual right to use (including copy, modify, create derivative
                    works, publish, distribute, and commercialize) Feedback in any manner and for any purpose if you
                    grant them an exclusive, transferable, irrevocable, free-of-charge, sub-licensable, unlimited, and
                    perpetual right to use (including copy, modify, create derivative works, publish, distribute, and
                </p>

                <h3 class="mt-4 mb-4">Hyperlinks to Other Websites</h3>
                <p class="text-justify leading-loos">
                    Our Service may contain links to third-party websites or services that are not owned or controlled
                    by Tutoring School. <br>
                    Tutoring School has no control over third-party websites or services, including their content,
                    privacy policies, or practices, and assumes no responsibility for them. We offer no guarantees or
                    representations about these companies or individuals, or their websites.
                    We expect you to read the terms of service and privacy policies of any third-party websites or
                    services you visit.

                </p>

                <h3 class="mt-4 mb-4">Disclaimer of Warranties</h3>
                <p class="text-justify leading-loos">
                    These services are provided on an "as is" and "as available" basis by the company. The company makes
                    no representations or warranties, express or implied, about the use of its services or the
                    information, content, or materials contained therein. You agree to use these services, their
                    content, and any services or items obtained from us at your own risk. <br>
                    Neither the company nor anyone associated with it makes any warranty or representation about the
                    completeness, security, reliability, quality, accuracy, or availability of the services. Without
                    limiting the foregoing, neither the company nor anyone associated with it represents or warrants
                    that the services, their content, or any services or items obtained through the services will be
                    accurate, reliable, error-free, or uninterrupted, that defects will be corrected, or that the
                    services or the server that makes it will
                    All warranties, express or implied, statutory or otherwise, including but not limited to warranties
                    of merchantability, non-infringement, and fitness for a particular purpose, are disclaimed by the
                    company with this. <br>
                    The foregoing has no effect on any implied warranties that cannot be excluded or limited by law.


                </p>
                <h3 class="mt-4 mb-4">Limitation of Liability</h3>
                <p class="text-justify leading-loos">
                    You will hold us, except to the extent prohibited by law. Our officers, directors, employees, and
                    agents are not liable for any direct, indirect, punitive, special, incidental, or consequential
                    damages. If it arises (including attorneys' fees and all related costs and expenses of litigation),
                    the company's liability will be limited to the amount paid for the products and services, with no
                    consequential or punitive damages allowed under any circumstances, except where prohibited by law.
                    Some states do not allow the exclusion or limitation of punitive, incidental, or consequential
                    damages, so the above limitation or exclusion may not apply to you.

                </p>

                <h3 class="mt-4 mb-4">Departure</h3>
                <p class="text-justify leading-loos">
                    We may, without prior warning or liability, terminate or suspend your account and deny you access to
                    the Service for any reason and without restriction, including but not limited to a breach of the
                    Terms. <br>
                    If you want to close your account, you can cease using the Service. <br>
                    All provisions of the Terms that, by their nature, should survive termination, such as ownership
                    provisions, warranty disclaimers, indemnity, and liability limits, will do so.


                </p>
                <h3 class="mt-4 mb-4">The Law of the Land </h3>
                <p class="text-justify leading-loos">
                    These Terms will be governed by and construed in accordance with the laws of the United States of
                    America, which will apply regardless of any conflict of law provisions. <br>
                    We shall not be considered as waiving any of these Terms' rights or provisions if we fail to enforce
                    them. If any term of these Terms is found to be unconstitutional or unenforceable by a court, the
                    remaining provisions will remain in effect. These Terms represent our whole agreement with respect
                    to our Service, and they override and replace any previous agreements we may have had.


                </p>

                <h3 class="mt-4 mb-4">Changes in Service</h3>
                <p class="text-justify leading-loos">
                    We reserve the right to stop or amend our Service, as well as any service or material we provide
                    through it, at any time and without notice, at our sole discretion. If all or part of the Service is
                    unavailable at any time or for any amount of time for any reason, we will not be liable. From time
                    to time, we may limit access to any portions of the Service, or the entire Service, to users,
                    including registered users.

                </p>
                <h3 class="mt-4 mb-4">Modifications to the Terms </h3>
                <p class="text-justify leading-loos">
                    We retain the right to modify these Terms at any time by posting revised terms on this website. You
                    must review these Terms on a frequent basis. <br>
                    If you continue to use the Platform after the new Terms are posted, you acknowledge and consent to
                    the changes. You must return to this website frequently to keep up with any changes, as they are
                    legally binding on you. <br>
                    If you continue to access or use our Service after any changes take effect, you agree to be bound by
                    the amended terms. If you do not agree to the updated terms, you are no longer authorized to use the
                    Service.


                </p>

                <h3 class="mt-4 mb-4">Severability and Waiver </h3>
                <p class="text-justify leading-loos">
                    A waiver by Company of any term or condition outlined in Terms will not be construed as a further or
                    continuing waiver of that term or condition or any other term or condition, and a failure by Company
                    to assert a right or provision under Terms will not be construed as a waiver of that right or
                    provision <br>
                    Suppose a court or other body of competent jurisdiction finds any portion of the Terms to be
                    invalid, illegal, or unenforceable for any reason. That provision will be eliminated or limited to
                    the bare minimum in that event, leaving the remaining Terms in full force and effect.


                </p>
                <h3 class="mt-4 mb-4">Receipt  </h3>
                <p class="text-justify leading-loos">
                    By using service or other services provided by us, you acknowledge that you have read these terms of service and agree to be bound by them.
                </p>

                <h3 class="mt-4 mb-4">Make Contact  </h3>
                <p class="text-justify leading-loos">
                    Please give us your thoughts, criticisms, and requests for technical support.
                </p>

            </div>
        </div>
    </div>
@endsection
