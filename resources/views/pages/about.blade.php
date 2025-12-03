@extends('layouts.base')
@section('title', 'WHO WE ARE')
@section('content')


<!-- Image Text -->
<div class="image-text mt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="media-wrap" data-aos="zoom-in-up">
                    <img src="assets/img/7.jpg" width="992" height="863" loading="lazy" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="content section-headings">
                    <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                            fill="none">
                            <g clip-path="url(#clip0_9088_4143)">
                                <path
                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                    fill="CurrentColor" />
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="14" height="14" fill="CurrentColor" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>About Us</span>
                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                            fill="none">
                            <g clip-path="url(#clip0_9088_4143)">
                                <path
                                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                    fill="CurrentColor" />
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="14" height="14" fill="CurrentColor" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h2 class="heading text-50" data-aos="fade-up">
                        Who We Are
                    </h2>
                    <div class="text text-18" data-aos="fade-up">
                        The Rwanda Diabetes Association (RDA) is a national, non-profit organization dedicated to improving the lives of people living with diabetes across Rwanda.
                        Founded in 1997, we work to prevent diabetes complications, strengthen community awareness, and support individuals and families through quality education, screening, and care.
                    </div>
                    <div class="text text-18" data-aos="fade-up">
                        For more than two decades, we have partnered with local and international institutions to promote better health, reduce stigma, and ensure that reliable information and lifesaving support reach communities everywhere.
                    </div>
                    <div class="buttons" data-aos="fade-up">
                        <a href="{{ route('about') }}" class="button button--primary" aria-label="More About Us">
                            More About Us
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                        fill="CurrentColor" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our-services mt-100 ">
    <div class="row flex-row-reverse">
        <div class="col-lg-5 col-12">
            <div class="service-content-image height-100 aos-init aos-animate" data-aos="zoom-out" data-aos-delay="100">
                <img src="assets/img/8.jpg" width="1000" height="929" loading="lazy" alt="Service Image">
            </div>
        </div>
        <div class="col-lg-7 col-12">
            <div class="service-content-left">
                <div class="section-headings headings-width">
                    <div class="subheading text-20 subheading-bg aos-init aos-animate" data-aos="fade-up">
                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_9088_4143)">
                                <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"></path>
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="14" height="14" fill="CurrentColor"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Get to know</span>
                        <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_9088_4143)">
                                <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"></path>
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="14" height="14" fill="CurrentColor"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h2 class="heading text-50 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                        Get to know more about
                    </h2>
                    <div class="service-list">
                        <div class="row product-grid">
                            <div class="col-lg-6 col-12">
                                <div class="multicolumn-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card-icon">
                                        <svg viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="10" fill="white"></rect>
                                            <g clip-path="url(#clip0_9088_8914)">
                                                <path d="M39.4445 26.2037C39.5971 26.3562 39.797 26.4325 39.9969 26.4325C40.1969 26.4325 40.3969 26.3562 40.5494 26.2037C40.8544 25.8986 40.8544 25.4039 40.5494 25.0987L40.5388 25.0882C40.2337 24.7831 39.739 24.7831 39.4339 25.0882C39.1288 25.3933 39.1288 25.8879 39.4339 26.1931L39.4445 26.2037Z" fill="#6086C1"></path>
                                                <path d="M52.0481 33.5938L54.7712 30.8707C54.9946 30.6473 55.0614 30.3112 54.9405 30.0193C54.8195 29.7273 54.5347 29.537 54.2187 29.537H48.5741C47.8363 26.5167 46.2877 23.7646 44.0741 21.5509C40.8574 18.3341 36.5805 16.5625 32.0313 16.5625C27.482 16.5625 23.2051 18.3341 19.9884 21.5509C16.7716 24.7677 15 29.0445 15 33.5938C15 38.143 16.7716 42.4199 19.9884 45.6366C20.9449 46.5932 21.9958 47.4209 23.1191 48.1132L20.7655 52.2714C20.6286 52.5133 20.6305 52.8097 20.7705 53.0497C20.9104 53.2898 21.1673 53.4375 21.4453 53.4375H25.4688C25.7502 53.4375 26.01 53.2861 26.1487 53.0411L27.8129 50.1009C29.175 50.4464 30.5894 50.625 32.0313 50.625C33.4731 50.625 34.8875 50.4464 36.2496 50.1009L37.9138 53.0411C38.0525 53.2861 38.3123 53.4375 38.5938 53.4375H42.6172C42.8952 53.4375 43.1521 53.2898 43.2921 53.0498C43.4321 52.8097 43.434 52.5133 43.2971 52.2715L40.9434 48.1133C42.0668 47.4209 43.1177 46.5933 44.0742 45.6367C46.287 43.4239 47.8363 40.6706 48.5741 37.6505H54.2188C54.5347 37.6505 54.8196 37.4602 54.9406 37.1683C55.0615 36.8764 54.9946 36.5403 54.7713 36.3169L52.0481 33.5938ZM50.6196 32.8125H45.1673L46.8803 31.0995H52.3327L50.6196 32.8125ZM25.0132 51.875H22.7852L24.4857 48.8709C25.0693 49.1598 25.6684 49.4153 26.2814 49.6345L25.0132 51.875ZM41.2773 51.875H39.0493L37.7811 49.6345C38.3941 49.4153 38.9932 49.1598 39.5768 48.8709L41.2773 51.875ZM42.9693 44.5318C41.9373 45.5638 40.7846 46.4312 39.5438 47.1226C39.5285 47.13 39.5131 47.137 39.498 47.1455C39.4885 47.1509 39.4799 47.1571 39.4708 47.1628C38.519 47.6864 37.516 48.1068 36.4753 48.4173C36.4344 48.4254 36.3939 48.4374 36.354 48.4524C34.967 48.8538 33.5152 49.0625 32.0313 49.0625C30.5473 49.0625 29.0955 48.8538 27.7085 48.4525C27.6685 48.4375 27.628 48.4255 27.587 48.4173C26.5464 48.1069 25.5434 47.6865 24.5917 47.1629C24.5826 47.1572 24.574 47.151 24.5645 47.1456C24.5495 47.1371 24.5341 47.1301 24.5188 47.1227C23.278 46.4313 22.1253 45.5639 21.0933 44.5318C18.1716 41.6102 16.5625 37.7256 16.5625 33.5938C16.5625 29.4619 18.1716 25.5773 21.0932 22.6557C24.0148 19.7341 27.8994 18.125 32.0313 18.125C36.1631 18.125 40.0477 19.7341 42.9693 22.6557C44.8891 24.5755 46.2583 26.9404 46.9613 29.537H46.5568C46.3496 29.537 46.1509 29.6194 46.0044 29.7659L43.9309 31.8394C43.7216 30.419 43.2624 29.0379 42.569 27.7819C42.3605 27.4041 41.8852 27.2671 41.5074 27.4755C41.1297 27.6841 40.9926 28.1594 41.2011 28.5371C41.9427 29.8804 42.357 31.3409 42.4631 32.8126H39.0184C38.8445 31.2301 38.1452 29.7641 37.0031 28.622C35.6751 27.2939 33.9094 26.5625 32.0313 26.5625C30.1531 26.5625 28.3874 27.2939 27.0595 28.6219C25.7314 29.95 25 31.7156 25 33.5938C25 35.4719 25.7314 37.2376 27.0594 38.5655C28.3874 39.8936 30.1531 40.625 32.0313 40.625C33.9094 40.625 35.6751 39.8936 37.003 38.5656C38.1451 37.4236 38.8444 35.9576 39.0183 34.375H42.4596C42.2733 36.8172 41.2427 39.1872 39.4338 40.9963C37.4565 42.9736 34.8275 44.0625 32.0313 44.0625C29.235 44.0625 26.606 42.9736 24.6288 40.9963C22.6514 39.019 21.5625 36.3901 21.5625 33.5938C21.5625 30.7974 22.6514 28.1685 24.6288 26.1912C27.9086 22.9114 33.032 22.1847 37.088 24.424C37.4656 24.6324 37.9409 24.4954 38.1495 24.1177C38.358 23.7399 38.2209 23.2647 37.8432 23.0561C35.6053 21.8205 32.9702 21.3281 30.4236 21.6698C27.792 22.0228 25.406 23.2042 23.5239 25.0864C21.2515 27.3588 20 30.3801 20 33.5938C20 36.8074 21.2515 39.8288 23.5238 42.1011C25.7963 44.3735 28.8176 45.625 32.0313 45.625C35.2449 45.625 38.2663 44.3735 40.5386 42.1012C42.3851 40.2548 43.5565 37.9234 43.9336 35.351L46.0043 37.4217C46.1508 37.5682 46.3495 37.6505 46.5567 37.6505H46.9611C46.258 40.247 44.8883 42.6128 42.9693 44.5318ZM34.5828 32.1206C34.3671 31.7469 33.8893 31.6189 33.5156 31.8347L31.6406 32.9172C31.3989 33.0567 31.25 33.3146 31.25 33.5938C31.25 33.8729 31.3989 34.1308 31.6406 34.2703L33.5156 35.3528C33.6387 35.4238 33.773 35.4576 33.9055 35.4576C34.1755 35.4576 34.4381 35.3175 34.5828 35.0669C34.7096 34.8473 34.7169 34.5921 34.6262 34.375H37.4443C37.2788 35.5393 36.7446 36.6144 35.8982 37.4607C34.8653 38.4937 33.492 39.0625 32.0313 39.0625C30.5705 39.0625 29.1972 38.4937 28.1642 37.4607C27.1313 36.4278 26.5625 35.0545 26.5625 33.5938C26.5625 32.133 27.1313 30.7597 28.1643 29.7267C29.1972 28.6938 30.5705 28.125 32.0313 28.125C33.492 28.125 34.8653 28.6938 35.8983 29.7268C36.7446 30.5731 37.2788 31.6482 37.4444 32.8125H34.6263C34.7169 32.5953 34.7096 32.3402 34.5828 32.1206ZM46.8803 36.088L45.1673 34.375H50.6196L52.3327 36.088H46.8803Z" fill="#6086C1"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_9088_8914">
                                                    <rect width="40" height="40" fill="white" transform="translate(15 15)"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h2 class="heading text-24">Our Mission</h2>
                                    <div class="text text-16">To enhance the well-being of people living with diabetes in Rwanda through education, early detection, advocacy, and accessible care.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="multicolumn-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card-icon">
                                        <svg viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="10" fill="white"></rect>
                                            <g clip-path="url(#clip0_9088_8924)">
                                                <path d="M35 27.0312C30.606 27.0312 27.0312 30.606 27.0312 35C27.0312 39.394 30.606 42.9688 35 42.9688C39.394 42.9688 42.9688 39.394 42.9688 35C42.9688 30.606 39.394 27.0312 35 27.0312ZM35 41.4062C31.4676 41.4062 28.5938 38.5324 28.5938 35C28.5938 31.4676 31.4676 28.5938 35 28.5938C38.5324 28.5938 41.4062 31.4676 41.4062 35C41.4062 38.5324 38.5324 41.4062 35 41.4062Z" fill="#6086C1"></path>
                                                <path d="M34.9998 34.2784C34.4895 34.2784 34.0742 33.9339 34.0742 33.5105C34.0742 33.0872 34.4895 32.7427 34.9998 32.7427C35.5102 32.7427 35.9255 33.0872 35.9255 33.5105C35.9255 33.942 36.2753 34.2918 36.7067 34.2918C37.1381 34.2918 37.488 33.942 37.488 33.5105C37.488 32.4812 36.7714 31.6062 35.7811 31.2986V31.2578C35.7811 30.8263 35.4313 30.4766 34.9998 30.4766C34.5684 30.4766 34.2186 30.8263 34.2186 31.2578V31.2986C33.2284 31.6062 32.5117 32.4812 32.5117 33.5105C32.5117 34.7955 33.6279 35.8409 34.9998 35.8409C35.5102 35.8409 35.9255 36.1853 35.9255 36.6087C35.9255 37.032 35.5103 37.3765 34.9998 37.3765C34.4894 37.3765 34.0742 37.032 34.0742 36.6087C34.0742 36.1772 33.7244 35.8274 33.293 35.8274C32.8616 35.8274 32.5117 36.1772 32.5117 36.6087C32.5117 37.6384 33.2287 38.5136 34.2195 38.8209C34.2296 39.2436 34.5748 39.5833 34.9998 39.5833C35.4249 39.5833 35.77 39.2436 35.7802 38.8209C36.7709 38.5136 37.488 37.6384 37.488 36.6087C37.488 35.3237 36.3718 34.2784 34.9998 34.2784Z" fill="#6086C1"></path>
                                                <path d="M50.1774 21.7288L50.1619 21.7132C49.8567 21.4081 49.3622 21.4081 49.0569 21.7132C48.7519 22.0183 48.7519 22.5129 49.0569 22.8181L49.0726 22.8337C49.2251 22.9863 49.4251 23.0626 49.625 23.0626C49.8249 23.0626 50.0248 22.9863 50.1774 22.8337C50.4825 22.5287 50.4825 22.034 50.1774 21.7288Z" fill="#6086C1"></path>
                                                <path d="M20.2593 46.4008C20.1141 46.2554 19.9125 46.1719 19.707 46.1719C19.5016 46.1719 19.3 46.2555 19.1547 46.4008C19.0094 46.5461 18.9258 46.7477 18.9258 46.9531C18.9258 47.1586 19.0093 47.3602 19.1547 47.5055C19.3001 47.6508 19.5016 47.7344 19.707 47.7344C19.9125 47.7344 20.1141 47.6508 20.2593 47.5055C20.4046 47.3602 20.4883 47.1586 20.4883 46.9531C20.4883 46.7477 20.4047 46.5461 20.2593 46.4008Z" fill="#6086C1"></path>
                                                <path d="M54.9973 34.8982C54.9752 31.2386 53.9524 27.6184 52.0317 24.5065C51.8052 24.1393 51.3238 24.0253 50.9566 24.252C50.5894 24.4786 50.4755 24.9599 50.702 25.3271C52.0945 27.5834 52.9512 30.0347 53.2916 32.5243C52.997 32.1788 52.6552 31.7909 52.2684 31.372C50.785 29.7656 48.4005 27.4532 45.4647 25.5604C45.1936 25.3856 44.8552 25.4 44.6039 25.5696L43.1139 26.4299C41.7634 25.1499 40.1406 24.2121 38.364 23.6852V21.9129C38.364 21.4814 38.0141 21.1316 37.5827 21.1316H32.4172C31.9858 21.1316 31.6359 21.4814 31.6359 21.9129V23.6852C29.8593 24.212 28.2366 25.1498 26.886 26.4299L25.4788 25.6174C25.2237 25.3892 24.8388 25.3479 24.5366 25.5419C21.5888 27.4337 19.2089 29.7383 17.7315 31.3385C17.3441 31.7581 17.0035 32.1452 16.7109 32.4893C17.2448 28.6068 19.0252 24.8991 21.9627 21.9617C28.0354 15.889 37.3733 14.7928 44.6706 19.2961C45.0377 19.5226 45.5191 19.4087 45.7458 19.0415C45.9724 18.6743 45.8584 18.193 45.4912 17.9663C41.7249 15.6422 37.2141 14.6313 32.7907 15.1205C30.5803 15.3648 28.4446 15.9689 26.443 16.9161C24.3718 17.8962 22.4927 19.222 20.858 20.8567C17.781 23.9337 15.8268 27.8301 15.2064 32.1248C15.074 33.0413 15.007 33.9661 15.0037 34.8906C15.0001 34.927 15 34.9616 15 34.9988C15 35.0414 15.0001 35.0796 15.0047 35.1195C15.0291 38.3063 15.8087 41.4812 17.2852 44.2934C17.4249 44.5595 17.6966 44.7116 17.9776 44.7116C18.0999 44.7116 18.2241 44.6827 18.3401 44.6219C18.7221 44.4213 18.8691 43.949 18.6686 43.567C17.6452 41.618 16.998 39.5584 16.7116 37.477C17.0055 37.8216 17.3463 38.2084 17.7316 38.6257C19.215 40.2322 21.5995 42.5445 24.5353 44.4374C24.6663 44.5218 24.813 44.5621 24.9579 44.562C25.1048 44.562 25.2492 44.5194 25.3745 44.4406L26.8861 43.5678C28.2366 44.8479 29.8594 45.7856 31.636 46.3125V48.0848C31.636 48.5163 31.9859 48.866 32.4173 48.866H37.5828C38.0142 48.866 38.3641 48.5163 38.3641 48.0848V46.3125C40.1407 45.7856 41.7634 44.8479 43.114 43.5678L44.5187 44.3788C44.6638 44.5098 44.8514 44.5799 45.0422 44.5799C45.1866 44.5799 45.3328 44.5398 45.4634 44.456C48.4113 42.5642 50.7912 40.2596 52.2685 38.6593C52.6559 38.2397 52.9965 37.8526 53.2891 37.5085C52.7549 41.382 50.9807 45.0925 48.0372 48.0359C42.2243 53.8488 33.1612 55.1066 25.9976 51.0945C25.6213 50.8839 25.1452 51.018 24.9342 51.3945C24.7234 51.7709 24.8577 52.247 25.2341 52.4578C28.209 54.1239 31.6112 54.9964 35.0288 54.9964C35.892 54.9964 36.7563 54.9407 37.6149 54.8281C42.0122 54.2513 45.9983 52.2847 49.1422 49.1409C50.777 47.506 52.1028 45.6269 53.0829 43.5556C54.0301 41.5538 54.6341 39.4181 54.8784 37.2076C54.9565 36.5011 54.9959 35.7924 54.9982 35.0849C55 35.0564 55 35.0284 55 34.9988C55 34.9634 54.9999 34.931 54.9973 34.8982ZM16.7149 34.9893C17.4036 34.033 19.4798 31.4644 22.4433 29.0134L21.6993 30.302C21.5957 30.4814 21.5676 30.6946 21.6213 30.8948C21.6749 31.0949 21.8058 31.2656 21.9852 31.3692L23.5205 32.2556C23.307 33.1516 23.199 34.0716 23.199 34.9988C23.199 35.926 23.307 36.846 23.5205 37.7421L21.9852 38.6285C21.8058 38.7321 21.6748 38.9027 21.6213 39.1029C21.5676 39.3031 21.5957 39.5163 21.6993 39.6957L22.4101 40.9269C19.5066 38.5061 17.4269 35.9595 16.7149 34.9893ZM44.7553 42.7113L43.3766 41.9152C43.0644 41.7349 42.6688 41.792 42.42 42.0534C41.0534 43.4903 39.3176 44.4932 37.4003 44.9538C37.0491 45.0381 36.8016 45.3523 36.8016 45.7134V47.3035H33.1984V45.7134C33.1984 45.3523 32.9509 45.0381 32.5997 44.9538C30.6824 44.4932 28.9466 43.4904 27.58 42.0534C27.3312 41.792 26.9358 41.7348 26.6233 41.9152L25.2446 42.7113L23.443 39.5909L24.8198 38.7961C25.1323 38.6157 25.2805 38.2448 25.1786 37.8987C24.9018 36.9596 24.7615 35.984 24.7615 34.9988C24.7615 34.0137 24.9018 33.038 25.1786 32.099C25.2806 31.7529 25.1323 31.382 24.8198 31.2016L23.443 30.4067L25.2446 27.2864L26.6233 28.0824C26.9358 28.2629 27.3313 28.2058 27.58 27.9442C28.9466 26.5074 30.6824 25.5045 32.5997 25.0439C32.9509 24.9595 33.1984 24.6454 33.1984 24.2842V22.6941H36.8015V24.2842C36.8015 24.6454 37.0491 24.9595 37.4002 25.0439C39.3175 25.5045 41.0533 26.5073 42.4199 27.9442C42.6688 28.2057 43.0641 28.2629 43.3766 28.0824L44.7553 27.2864L46.5569 30.4067L45.1801 31.2016C44.8676 31.382 44.7194 31.7529 44.8213 32.099C45.0981 33.0381 45.2384 34.0137 45.2384 34.9988C45.2384 35.984 45.0981 36.9597 44.8213 37.8987C44.7193 38.2448 44.8676 38.6157 45.1801 38.7961L46.5569 39.5909L44.7553 42.7113ZM47.5565 40.9847L48.3007 39.6956C48.4043 39.5162 48.4324 39.303 48.3787 39.1028C48.3251 38.9027 48.1942 38.732 48.0148 38.6284L46.4795 37.742C46.693 36.8459 46.801 35.9259 46.801 34.9988C46.801 34.0716 46.693 33.1516 46.4795 32.2555L48.0148 31.3691C48.1942 31.2655 48.3252 31.0949 48.3787 30.8947C48.4324 30.6945 48.4043 30.4813 48.3007 30.3019L47.5899 29.0708C50.4934 31.4915 52.5731 34.0381 53.2852 35.0083C52.5964 35.9647 50.5202 38.5335 47.5565 40.9847Z" fill="#6086C1"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_9088_8924">
                                                    <rect width="40" height="40" fill="white" transform="translate(15 15)"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h2 class="heading text-24">Our Vision</h2>
                                    <div class="text text-16">
                                        A Rwanda where no one dies or suffers complications from diabetes.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-12">
                                <div class="multicolumn-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-icon">
                                        <svg viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="10" fill="white"></rect>
                                            <g clip-path="url(#clip0_9088_8945)">
                                                <path d="M24.8815 28.0246C24.8815 27.5897 25.2341 27.237 25.6691 27.237C26.1041 27.237 26.4567 27.5896 26.4567 28.0246C26.4567 28.4596 26.1041 28.8122 25.6691 28.8122C25.2341 28.8122 24.8815 28.4595 24.8815 28.0246ZM49.1647 38.5557L40.3842 37.7579L37.9433 44.6052H42.2836C42.7185 44.6052 43.0711 44.9578 43.0711 45.3927V47.7551H44.6461C45.0809 47.7551 45.4336 48.1078 45.4336 48.5426V53.4251H45.8273C46.2622 53.4251 46.6148 53.7777 46.6148 54.2126C46.6148 54.6474 46.2622 55.0001 45.8273 55.0001H24.565C24.1302 55.0001 23.7775 54.6474 23.7775 54.2126C23.7775 53.7777 24.1302 53.4251 24.565 53.4251H24.9588V48.5426C24.9588 48.1078 25.3114 47.7551 25.7463 47.7551H27.3212V45.3927C27.3212 44.9578 27.6739 44.6052 28.1087 44.6052H32.6204L29.6215 35.4017L20.4558 31.7982C19.9565 31.6522 19.7029 30.8291 20.3306 30.3949L22.2395 29.216C22.2403 29.216 22.2411 29.216 22.2411 29.2151C23.1182 28.6749 23.9442 30.016 23.0671 30.5562L22.4971 30.9082L30.5437 34.0717C30.7626 34.1583 30.9311 34.3362 31.0043 34.5607L34.2773 44.6052H36.2716L39.1052 36.6538C39.225 36.3183 39.5628 36.1017 39.9187 36.134L47.755 36.8459L43.3191 29.5222C43.1947 29.3167 43.1719 29.06 43.2569 28.8348L46.362 20.6574L38.2295 22.9231C37.987 22.9901 37.7169 22.9342 37.5216 22.7751L30.865 17.3602L30.3499 25.6675C30.3342 25.9226 30.1956 26.1549 29.9782 26.2889L29.0977 26.833C28.2048 27.3844 27.3772 26.044 28.2701 25.4926L28.8032 25.1635L29.3876 15.734C29.4347 15.1529 30.1435 14.7566 30.6704 15.1718L38.1996 21.2961L47.44 18.7226C48.1288 18.5747 48.6165 19.1843 48.3874 19.7612L44.8657 29.0347L49.9096 37.364C50.2779 37.8709 49.8207 38.6024 49.1647 38.5557ZM29.8412 49.3301H26.5337V53.4251H29.8412V49.3301ZM38.9761 49.3301H31.4162V53.4251H38.9761V49.3301ZM40.5511 49.3301V53.4251H43.8586V49.3301H40.5511ZM41.4961 46.1802H28.8962V47.7551H41.4961V46.1802Z" fill="#6086C1"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_9088_8945">
                                                    <rect width="40" height="40" fill="white" transform="translate(15 15)"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h2 class="heading text-24">Our Objectives</h2>
                                    <div class="text text-16">
                                        Prevent and treat diabetes and its complications.

                                        Educate and mobilize citizens to understand and manage diabetes.

                                        Support families and empower communities with reliable health information.

                                        Promote research and data to improve national diabetes care.

                                        Advocate for stronger policies and collaborate with partners nationwide and internationally.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('impact') }}" class="button button--secondary aos-init aos-animate" aria-label="hero button" data-aos="fade-up" data-aos-delay="300">
                        Our Impact
                        <span class="svg-wrapper">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-image-sticky mt-100">
    <div class="container">
        <div class="section-headings section-headings-horizontal align-items-start overflow-hidden">
            <div class="section-headings-left">
                <h2 class="heading text-50 aos-init aos-animate" data-aos="fade-right">
                    Get to know about Diabetes, Awareness, Support
                </h2>
            </div>
            <div class="section-headings-right text text-18 aos-init aos-animate" data-aos="fade-left">
                Through mobile clinics, outreach events, and health facility partnerships, we help communities access early screening—critical for reducing complications and saving lives.
            </div>
        </div>
        <div class="section-content">
            @foreach( $programs as $program)
            <div class="image-text-card radius18">
                <div class="row align-items-center product-grid">
                    <div class="col-lg-6 col-12">
                        <div class="content section-headings">
                            <div class="subheading text-20 subheading-bg aos-init aos-animate" data-aos="fade-up">
                                <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_9088_4143)">
                                        <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"></path>
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="14" height="14" fill="CurrentColor"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Awareness</span>
                                <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_9088_4143)">
                                        <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"></path>
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="14" height="14" fill="CurrentColor"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h2 class="heading text-50 aos-init aos-animate" data-aos="fade-up">
                                {{ $program->title }}
                            </h2>
                            <div class="text text-18 aos-init aos-animate" data-aos="fade-up">
                                {{ $program->short_description }}.
                            </div>
                            <div class="buttons aos-init aos-animate" data-aos="fade-up">
                                <a href="{{ route('programs.show', $program->slug) }}" class="button button--primary" aria-label="More About Us">
                                    Learn More
                                    <span class="svg-wrapper">
                                        <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="CurrentColor"></path>
                                        </svg>
                                    </span>
                                    <span class="visually-hidden">To learn more about diabetes & awareness, click this
                                        button.</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="media-wrap radius18 aos-init aos-animate" data-aos="zoom-in-up">
                            <img src="assets/img/image.png" width="1000" height="707" loading="lazy" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="text-banner mt-100">
    <div class="container-fluid">
        <div class="text-banner-inner radius18">
            <div class="section-headings">
                <div class="subheading text-20 subheading-bg aos-init aos-animate" data-aos="fade-up">
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_9088_4143)">
                            <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="14" height="14" fill="CurrentColor"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Get to know</span>
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_9088_4143)">
                            <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="14" height="14" fill="CurrentColor"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <h2 class="heading text-80 aos-init aos-animate" data-aos="fade-up">
                    Our Commitment
                </h2>
                <p class="text text-24 aos-init aos-animate" data-aos="fade-up">
                    We believe that every Rwandan deserves access to accurate information, quality care, and a supportive community.
                    Through strong partnerships and community-driven programs, we remain committed to building a healthier future—one free from preventable diabetes complications.
                </p>
                <div class="buttons aos-init aos-animate" data-aos="fade-up">
                    <a href="{{ route('partner_with_us')}}" class="button button--secondary" aria-label="See More Services">
                        Partner with Us
                        <span class="svg-wrapper">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="CurrentColor"></path>
                            </svg>
                        </span>
                        <span class="visually-hidden">To learn more about the partnership, click this button.</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ -->
<div class="faq mt-100">
    <div class="container">
        <div class="row faq-row">

            <!-- Left Side -->
            <div class="col-lg-6 col-12">
                <div class="section-headings">

                    <div class="subheading text-20 subheading-bg">
                        <span>Questions</span>
                    </div>

                    <h2 class="heading text-50">
                        Have any questions? Here are some answers
                    </h2>

                    <div class="text text-18">
                        Here are some of the questions we often receive from our community.
                    </div>

                    <div class="buttons mt-3">
                        <button class="button button--primary" data-bs-toggle="modal" data-bs-target="#askQuestionModal">
                            Ask Your Question
                        </button>
                    </div>

                    <div class="image-absolute">
                        <img src="{{ asset('assets/img/faq/question.png') }}" width="104" height="180" alt="Question">
                    </div>
                </div>
            </div>

            <!-- Right Side - Dynamic FAQ -->
            <div class="col-lg-6 col-12">
                <faq-accordion>
                    <div class="accordion-list">

                        @foreach($faqs as $faq)
                        <div class="accordion-block">
                            <div class="accordion-opener heading text-22">
                                {{ $faq->question }}
                                <div class="svg-wrapper">
                                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M12.7083 15.7044C12.5208 15.8919..." fill="CurrentColor" />
                                    </svg>
                                </div>
                            </div>

                            <div class="accordion-content">
                                <div class="accordion-content-inner text text-18">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </faq-accordion>
            </div>

        </div>
    </div>
</div>


<!-- MODAL: Ask Question -->
<div class="modal fade" id="askQuestionModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">

            <div class="modal-header">
                <h5 class="modal-title">Ask a Question</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('questions.store') }}" method="POST">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label>Your Question *</label>
                        <textarea required name="question" rows="4" class="form-control"></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Submit Question</button>
                </div>

            </form>

        </div>
    </div>
</div>


@endsection