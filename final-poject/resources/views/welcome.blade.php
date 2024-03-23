<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" />
    <!-- Font Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <!-- Font Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Icon Tab -->
    <link rel="shortcut icon" href="./img/logo-tab.png" type="image/x-icon" />
    <title>Mahitala Web Page</title>
</head>

<body>
    <!-- Header Section -->
    <header class="navbar-container">
        <!-- Logo  -->
        <div class="logo">
            <img src="./img/logo-with-text.png" alt="logo-mahitala" />
        </div>
        <!-- List Navigasi -->
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#tahapan">Steps</a></li>
                <li><a href="#target">Target</a></li>
            </ul>
        </nav>
        <!-- Container Button -->
        <div class="login-register">
            <a href="{{route('login')}}" id="loginButton">Sign Up</a>
            <a href="{{route('register')}}" id="registerButton">Register</a>
        </div>
        <!-- Button Navigation For Mobile-->
        <div id="menuButton" class="button-navigation">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="32" height="32">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
        <!-- Navigation For Mobile -->
        <nav id="listNavigation" class="navigation-mobile hidden">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#tahapan">Steps</a></li>
                <li><a href="#target">Target</a></li>
            </ul>
            <div class="button-mobile">
                <a href="/login" id="loginButton">Sign Up</a>
                <a href="/register" id="registerButton">Register</a>
            </div>
        </nav>
    </header>
    <!-- Main Section -->
    <main>
        <!-- Section 1 'Hero Section' -->
        <section id="home">
            <div class="container-hero">
                <article class="container-description">
                    <h1>Satu Pengaduan, <br />Satu Langkah Perubahan</h1>
                    <p>
                        Ayo lakukan pengaduan, berperan andil dalam menciptakan indonesia
                        generasi emas 2045
                    </p>
                    <div class="container-store">
                        <a href="#"><img src="./img/play-store-logo.png" alt="logo-playstore" /></a>
                        <a href="#"><img src="./img/app-store-logo.png" alt="logo-playstore" /></a>
                    </div>
                </article>
                <figure>
                    <img src="./img/mockup-brand.png" alt="mockup-brand-mahitala" />
                </figure>
            </div>
            <div class="container-sub-hero">
                <article class="card-article">
                    <div class="icon">
                        <svg width="65" height="53" viewBox="0 0 65 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M43.3333 10.7439C43.3333 13.5322 42.192 16.2063 40.1603 18.1779C38.1287 20.1495 35.3732 21.2571 32.5 21.2571C29.6268 21.2571 26.8713 20.1495 24.8397 18.1779C22.808 16.2063 21.6667 13.5322 21.6667 10.7439C21.6667 7.95564 22.808 5.28157 24.8397 3.30996C26.8713 1.33835 29.6268 0.230713 32.5 0.230713C35.3732 0.230713 38.1287 1.33835 40.1603 3.30996C42.192 5.28157 43.3333 7.95564 43.3333 10.7439ZM61.3889 17.7527C61.3889 19.6116 60.628 21.3943 59.2735 22.7087C57.9191 24.0231 56.0821 24.7615 54.1667 24.7615C52.2512 24.7615 50.4142 24.0231 49.0598 22.7087C47.7054 21.3943 46.9444 19.6116 46.9444 17.7527C46.9444 15.8939 47.7054 14.1112 49.0598 12.7968C50.4142 11.4823 52.2512 10.7439 54.1667 10.7439C56.0821 10.7439 57.9191 11.4823 59.2735 12.7968C60.628 14.1112 61.3889 15.8939 61.3889 17.7527ZM46.9444 42.2835C46.9444 38.5658 45.4226 35.0004 42.7138 32.3716C40.0049 29.7428 36.3309 28.2659 32.5 28.2659C28.6691 28.2659 24.9951 29.7428 22.2862 32.3716C19.5774 35.0004 18.0556 38.5658 18.0556 42.2835V52.7967H46.9444V42.2835ZM18.0556 17.7527C18.0556 19.6116 17.2946 21.3943 15.9402 22.7087C14.5858 24.0231 12.7488 24.7615 10.8333 24.7615C8.91788 24.7615 7.08088 24.0231 5.72645 22.7087C4.37202 21.3943 3.61111 19.6116 3.61111 17.7527C3.61111 15.8939 4.37202 14.1112 5.72645 12.7968C7.08088 11.4823 8.91788 10.7439 10.8333 10.7439C12.7488 10.7439 14.5858 11.4823 15.9402 12.7968C17.2946 14.1112 18.0556 15.8939 18.0556 17.7527ZM54.1667 52.7967V42.2835C54.1719 38.7206 53.2397 35.2153 51.4583 32.0997C53.0593 31.7021 54.7327 31.6647 56.3509 31.9901C57.9691 32.3156 59.4893 32.9954 60.7955 33.9778C62.1018 34.9601 63.1596 36.219 63.8882 37.6585C64.6169 39.0979 64.9971 40.6798 65 42.2835V52.7967H54.1667ZM13.5417 32.0997C11.7605 35.2153 10.8283 38.7206 10.8333 42.2835V52.7967H9.59545e-07V42.2835C-0.000695023 40.6787 0.377229 39.0949 1.10481 37.6537C1.83239 36.2125 2.89031 34.9521 4.1975 33.969C5.50468 32.986 7.02643 32.3064 8.64612 31.9824C10.2658 31.6584 11.9404 31.6985 13.5417 32.0997Z" fill="#1A331C" />
                        </svg>
                    </div>
                    <div class="description">
                        <h3>5k+</h3>
                        <p>Pengguna Aktif</p>
                    </div>
                </article>
                <article class="card-article">
                    <div class="icon">
                        <svg width="65" height="73" viewBox="0 0 65 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 68.0534C0 66.8584 0.489157 65.7124 1.35986 64.8674C2.23057 64.0225 3.41149 63.5478 4.64286 63.5478H60.3571C61.5885 63.5478 62.7694 64.0225 63.6401 64.8674C64.5108 65.7124 65 66.8584 65 68.0534C65 69.2484 64.5108 70.3944 63.6401 71.2394C62.7694 72.0844 61.5885 72.5591 60.3571 72.5591H4.64286C3.41149 72.5591 2.23057 72.0844 1.35986 71.2394C0.489157 70.3944 0 69.2484 0 68.0534ZM15.2889 33.3283C16.1596 32.4836 17.3403 32.0091 18.5714 32.0091C19.8025 32.0091 20.9833 32.4836 21.8539 33.3283L27.8571 39.1541V4.97417C27.8571 3.77919 28.3463 2.63316 29.217 1.78818C30.0877 0.943208 31.2686 0.468506 32.5 0.468506C33.7314 0.468506 34.9123 0.943208 35.783 1.78818C36.6537 2.63316 37.1429 3.77919 37.1429 4.97417V39.1541L43.1461 33.3283C43.5744 32.898 44.0867 32.5547 44.6531 32.3186C45.2196 32.0824 45.8288 31.9581 46.4453 31.9529C47.0618 31.9477 47.6731 32.0617 48.2437 32.2883C48.8143 32.5148 49.3327 32.8494 49.7686 33.2724C50.2045 33.6955 50.5493 34.1986 50.7827 34.7523C51.0162 35.306 51.1337 35.8993 51.1283 36.4976C51.123 37.0958 50.9949 37.6871 50.7515 38.2368C50.5082 38.7865 50.1545 39.2837 49.7111 39.6993L35.7825 53.2163C34.9118 54.061 33.7311 54.5355 32.5 54.5355C31.2689 54.5355 30.0882 54.061 29.2175 53.2163L15.2889 39.6993C14.4185 38.8544 13.9296 37.7085 13.9296 36.5138C13.9296 35.319 14.4185 34.1732 15.2889 33.3283Z" fill="#1A331C" />
                        </svg>
                    </div>
                    <div class="description">
                        <h3>5k+</h3>
                        <p>Kali Download</p>
                    </div>
                </article>
                <article class="card-article">
                    <div class="icon">
                        <svg width="73" height="71" viewBox="0 0 73 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5776 35.5136L32.8592 42.58L47.4224 28.4472M21.3361 9.71056C23.9476 9.50828 26.4269 8.51174 28.4211 6.86279C30.6744 4.9982 33.5387 3.974 36.5 3.974C39.4613 3.974 42.3256 4.9982 44.5789 6.86279C46.5731 8.51174 49.0524 9.50828 51.6639 9.71056C54.6157 9.93845 57.3872 11.1798 59.481 13.2117C61.5748 15.2436 62.8539 17.9332 63.0888 20.7978C63.2972 23.3322 64.3241 25.7382 66.0232 27.6734C67.9446 29.8602 69 32.6399 69 35.5136C69 38.3874 67.9446 41.1671 66.0232 43.3538C64.3241 45.289 63.2972 47.6951 63.0888 50.2295C62.8539 53.094 61.5748 55.7836 59.481 57.8155C57.3872 59.8475 54.6157 61.0888 51.6639 61.3167C49.0524 61.519 46.5731 62.5155 44.5789 64.1645C42.3256 66.029 39.4613 67.0532 36.5 67.0532C33.5387 67.0532 30.6744 66.029 28.4211 64.1645C26.4269 62.5155 23.9476 61.519 21.3361 61.3167C18.3843 61.0888 15.6128 59.8475 13.519 57.8155C11.4252 55.7836 10.1461 53.094 9.91124 50.2295C9.7028 47.6951 8.67592 45.289 6.97675 43.3538C5.05539 41.1671 4 38.3874 4 35.5136C4 32.6399 5.05539 29.8602 6.97675 27.6734C8.67592 25.7382 9.7028 23.3322 9.91124 20.7978C10.1461 17.9332 11.4252 15.2436 13.519 13.2117C15.6128 11.1798 18.3843 9.93845 21.3361 9.71056Z" stroke="#1A331C" stroke-width="7.06643" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="description">
                        <h3>10+</h3>
                        <p>Lembaga Nasional</p>
                    </div>
                </article>
            </div>
        </section>
        <!-- Section 2 -->
        <section id="service">
            <article class="title-section-2">
                <h2>Jenis Pengaduan</h2>
                <p>
                    Terdapat berbagai macam jenis masalah dan pengaduan yang dapat
                    dilaporkan melalui fitur pelaporan masalah dan pengaduan di website
                    layanan publik
                </p>
            </article>
            <div class="container-pengaduan">
                <article class="card-pengaduan">
                    <div class="title">
                        <div class="icon">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M52.7087 58.6931V9.80423C52.7087 8.18346 52.0649 6.62907 50.9188 5.48302C49.7728 4.33696 48.2184 3.69312 46.5976 3.69312H16.042C14.4213 3.69312 12.8669 4.33696 11.7208 5.48302C10.5748 6.62907 9.93094 8.18346 9.93094 9.80423V58.6931M52.7087 58.6931H58.8198M52.7087 58.6931H37.4309M9.93094 58.6931H3.81982M9.93094 58.6931H25.2087M37.4309 58.6931V43.4153C37.4309 42.605 37.109 41.8278 36.536 41.2547C35.963 40.6817 35.1858 40.3598 34.3754 40.3598H28.2643C27.4539 40.3598 26.6767 40.6817 26.1037 41.2547C25.5306 41.8278 25.2087 42.605 25.2087 43.4153V58.6931M37.4309 58.6931H25.2087M22.1532 15.9153H25.2087M22.1532 28.1376H25.2087M37.4309 15.9153H40.4865M37.4309 28.1376H40.4865" stroke="#334934" stroke-width="6.11111" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3>Masalah Infrastruktur.</h3>
                    </div>
                    <p>
                        Kerusakan jalan, trotoar, atau jembatan, Kebocoran pipa air atau
                        saluran pembuangan, Pohon tumbang atau bahaya lainnya di jalan
                        umum.
                    </p>
                </article>
                <article class="card-pengaduan">
                    <div class="title">
                        <div class="icon">
                            <svg width="60" height="66" viewBox="0 0 60 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.7097 16.9286L34.274 56.355C34.601 57.5786 34.4856 58.8782 33.9482 60.0251C33.4109 61.1719 32.486 62.0923 31.3366 62.6241C30.1872 63.1559 28.887 63.265 27.6651 62.9321C26.4431 62.5993 25.3778 61.8459 24.6569 60.8047L13.4562 44.3508M13.4562 44.3508C10.6655 43.9569 8.09751 42.6139 6.1852 40.5437C4.27288 38.4735 3.13453 35.8062 2.96279 32.9931C2.79104 30.1801 3.59645 27.3941 5.24272 25.1066C6.88899 22.8192 9.275 21.1707 11.997 20.4403L17.4042 18.9914C29.5054 15.7489 38.9336 9.31894 42.0912 2.88625L53.1632 44.2076C47.2123 40.2155 35.8352 39.3603 23.731 42.6036L18.3238 44.0525C16.7384 44.4798 15.0822 44.5793 13.4562 44.3508ZM49.9998 32.4015C52.3481 31.7723 54.3504 30.2359 55.566 28.1304C56.7816 26.0249 57.111 23.5227 56.4818 21.1743C55.8525 18.826 54.3161 16.8237 52.2106 15.6081C50.1051 14.3925 47.603 14.0631 45.2546 14.6923" stroke="#334934" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3>Pelayanan Publik.</h3>
                    </div>
                    <p>
                        Pelayanan yang lambat atau tidak efisien di kantor pemerintah.
                        Keluhan terkait pelayanan kesehatan atau pendidikan. Kualitas
                        layanan transportasi umum
                    </p>
                </article>
                <article class="card-pengaduan">
                    <div class="title">
                        <div class="icon">
                            <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.9718 2.78724V4.52058C32.9718 5.54076 33.425 6.50823 34.2087 7.16134L37.4739 9.88234C38.8235 11.007 39.1079 12.9682 38.1334 14.4299L36.572 16.7721C35.7239 18.0442 34.4761 18.9973 33.0257 19.4807L32.5911 19.6256C30.4746 20.3311 29.6082 22.856 30.8458 24.7124C31.9747 26.4057 31.364 28.7054 29.5437 29.6155L21.5135 33.6306L22.8072 36.8649C23.3713 38.2751 22.7603 39.8822 21.4018 40.5615C20.1394 41.1927 18.6063 40.8307 17.7595 39.7017L15.684 36.9344C14.1508 34.8901 11.0022 35.174 9.85944 37.4596L7.76351 41.6514L5.89362 42.1189M32.9718 2.78724C32.2162 2.7249 31.4519 2.69312 30.6802 2.69312C15.4923 2.69312 3.18018 15.0053 3.18018 30.1931C3.18018 34.466 4.1547 38.5114 5.89362 42.1189M32.9718 2.78724C47.0874 3.95176 58.1802 15.777 58.1802 30.1931C58.1802 35.9351 56.4203 41.2661 53.4106 45.6761M53.4106 45.6761L52.8722 44.0607C51.9364 41.2534 49.3092 39.3598 46.35 39.3598H44.4302L43.439 38.3686C42.6063 37.5359 41.4769 37.0681 40.2993 37.0681C38.6175 37.0681 37.0801 38.0183 36.328 39.5226L36.2164 39.7456C35.6092 40.96 34.5202 41.8638 33.2147 42.2368L30.1936 43.1C28.5126 43.5803 27.4598 45.2458 27.7472 46.9704L27.9702 48.308C28.2116 49.7565 29.4648 50.8181 30.9332 50.8181C33.5192 50.8181 35.8151 52.4729 36.6329 54.9262L37.2888 56.8939M53.4106 45.6761C49.6536 51.181 43.9491 55.2509 37.2888 56.8939M37.2888 56.8939C35.1718 57.4161 32.9584 57.6931 30.6802 57.6931C19.7653 57.6931 10.3356 51.3342 5.89362 42.1189M42.1378 21.0264C42.1378 23.7643 40.9375 26.2218 39.0345 27.9014" stroke="#334934" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3>Kebersihan & Lingkungan.</h3>
                    </div>
                    <p>
                        Sampah yang menumpuk di tempat umum, kualitas udara atau air yang
                        buruk, pelanggaran terhadap aturan lingkungan hidup.
                    </p>
                </article>
                <article class="card-pengaduan">
                    <div class="title">
                        <div class="icon">
                            <svg width="61" height="61" viewBox="0 0 48 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.8462 26.1417V15.5648C36.8462 8.55504 31.1636 2.8725 24.1538 2.8725C17.1441 2.8725 11.4615 8.55504 11.4615 15.5648V26.1417M9.34615 57.8725H38.9615C42.4664 57.8725 45.3077 55.0312 45.3077 51.5263V32.4879C45.3077 28.983 42.4664 26.1417 38.9615 26.1417H9.34615C5.84127 26.1417 3 28.983 3 32.4879V51.5263C3 55.0312 5.84127 57.8725 9.34615 57.8725Z" stroke="#334934" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3>Keamanan & Ketertiban.</h3>
                    </div>
                    <p>
                        Tindakan kriminal atau kejahatan seperti pencurian atau
                        perampokan, gangguan ketertiban umum seperti kerusuhan, perilaku
                        mengganggu dari tetangga atau pihak lain.
                    </p>
                </article>
                <article class="card-pengaduan">
                    <div class="title">
                        <div class="icon">
                            <svg width="60" height="60" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.1698 31.6357L36.5317 44.9976C38.9048 47.3707 42.7524 47.3707 45.1255 44.9976C47.4986 42.6245 47.4986 38.7769 45.1255 36.4038L31.658 22.9364M23.1698 31.6357L28.8901 24.6896C29.6143 23.8102 30.583 23.257 31.658 22.9364M23.1698 31.6357L12.5021 44.5894C11.393 45.9362 9.73979 46.7163 7.99518 46.7163C4.7707 46.7163 2.15674 44.1024 2.15674 40.8779C2.15674 39.1333 2.93692 37.4801 4.28364 36.371L19.9507 23.4688M31.658 22.9364C32.917 22.5609 34.3221 22.5044 35.6515 22.6168C35.9416 22.6413 36.2352 22.6538 36.5317 22.6538C42.2272 22.6538 46.8442 18.0368 46.8442 12.3413C46.8442 10.8282 46.5184 9.39122 45.933 8.09669L38.425 15.6046C35.8683 15.0177 33.8557 13.0051 33.2688 10.4483L40.7768 2.94032C39.4822 2.35479 38.045 2.02884 36.5317 2.02884C30.8363 2.02884 26.2192 6.6459 26.2192 12.3413C26.2192 12.6378 26.2318 12.9314 26.2563 13.2216C26.4646 15.6862 26.0927 18.4106 24.1834 19.9829L23.9495 20.1756M19.9507 23.4688L10.542 14.0601H7.31299L2.15674 5.46634L5.59424 2.02884L14.188 7.18509V10.4141L23.9495 20.1756M19.9507 23.4688L23.9495 20.1756M39.1099 38.982L33.0942 32.9663M8.15457 40.7008H8.17175V40.718H8.15457V40.7008Z" stroke="#334934" stroke-width="3.4375" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3>Pelayanan Teknis & Tech.</h3>
                    </div>
                    <p>
                        Masalah dengan layanan internet atau telepon, perangkat
                        infrastruktur teknologi yang tidak berfungsi dengan baik,
                        Kesulitan dalam menggunakan aplikasi atau sistem pemerintah.
                    </p>
                </article>
                <article class="card-pengaduan">
                    <div class="title">
                        <div class="icon">
                            <svg width="60" height="60" viewBox="0 0 47 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5 10.9261C18.5 8.64789 16.6532 6.80107 14.375 6.80107C12.0968 6.80107 10.25 8.64789 10.25 10.9261L10.25 18.7832M18.5 10.9261L18.5 6.9975C18.5 4.71932 20.3469 2.8725 22.625 2.8725C24.9032 2.8725 26.75 4.71932 26.75 6.9975L26.7501 10.9261M18.5 10.9261L18.6964 26.4439M26.7501 28.4082V10.9261M26.7501 10.9261C26.7501 8.64789 28.5969 6.80107 30.8751 6.80107C33.1532 6.80107 35.0001 8.64789 35.0001 10.9261V38.2296M10.25 18.7832C10.25 16.505 8.40317 14.6582 6.125 14.6582C3.84683 14.6582 2 16.505 2 18.7832V40.1939C2 49.9575 9.91497 57.8725 19.6786 57.8725H24.9635C28.6102 57.8725 32.1076 56.4238 34.6862 53.8452L39.2227 49.3087C41.8013 46.7301 43.25 43.2327 43.25 39.586L43.258 34.2853C43.2619 33.832 43.4336 33.3931 43.7757 33.051C45.3866 31.4401 45.3866 28.8283 43.7757 27.2173C42.1648 25.6064 39.553 25.6064 37.9421 27.2173C35.9992 29.1602 35.0203 31.7111 35.008 34.2525M10.25 18.7832V30.3725M26.6714 41.6816C27.6925 40.6605 28.8544 39.8659 30.0945 39.2979C31.6478 38.5864 33.3239 38.2304 35.0001 38.2296M35.0051 38.2296H35.0001" stroke="#334934" stroke-width="3.92857" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3>Kesejahteraan Sosial.</h3>
                    </div>
                    <p>
                        Masalah kesejahteraan sosial seperti tunawisma atau kelaparan,
                        kekerasan dalam rumah tangga atau pelecehan anak, kesulitan dalam
                        mengakses layanan kesehatan atau sosial.
                    </p>
                </article>
            </div>
        </section>
        <!-- Section 3 -->
        <section id="tahapan">
            <h2 class="title-section-3">Tahapan Pengaduan</h2>
            <div class="container-section-3">
                <figure>
                    <img src="./img/tutorial.png" alt="gambar-tutorial" />
                </figure>
                <div class="description">
                    <p>
                        Tahapan atau langkah-langkah melalui website mahitala.com yaitu
                        sebagai berikut :
                    </p>
                    <div class="container-tutorial">
                        <article class="card-tutorial">
                            <div class="icon">
                                <svg width="29" height="29" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5 5.05545C12.2885 3.07612 9.36814 1.87256 6.16667 1.87256C4.70569 1.87256 3.30325 2.1232 2 2.58383V22.3755C3.30325 21.9149 4.70569 21.6642 6.16667 21.6642C9.36814 21.6642 12.2885 22.8678 14.5 24.8471M14.5 5.05545C16.7115 3.07612 19.6319 1.87256 22.8333 1.87256C24.2943 1.87256 25.6968 2.1232 27 2.58383V22.3755C25.6968 21.9149 24.2943 21.6642 22.8333 21.6642C19.6319 21.6642 16.7115 22.8678 14.5 24.8471M14.5 5.05545V24.8471" stroke="#334934" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>Pilih opsi atau jenis pelaporan yang hendak dilaporkan</p>
                        </article>
                        <article class="card-tutorial">
                            <div class="icon">
                                <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.4822 4.82933L21.7322 2.57934C22.7085 1.60303 24.2915 1.60303 25.2678 2.57934C26.2441 3.55565 26.2441 5.13856 25.2678 6.11487L11.1096 20.2731C10.4047 20.978 9.53525 21.4961 8.57985 21.7807L5 22.8471L6.06637 19.2673C6.35097 18.3119 6.86913 17.4424 7.57403 16.7375L19.4822 4.82933ZM19.4822 4.82933L23 8.3471M21 17.5138V23.8471C21 25.5039 19.6569 26.8471 18 26.8471H4C2.34315 26.8471 1 25.5039 1 23.8471V9.84709C1 8.19024 2.34315 6.8471 4 6.8471H10.3333" stroke="#334934" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>Isilah formulir pengaduan yang tersedia</p>
                        </article>
                        <article class="card-tutorial">
                            <div class="icon">
                                <svg width="29" height="29" viewBox="0 0 29 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 11.8471H5.75C3.67893 11.8471 2 13.526 2 15.5971V28.0971C2 30.1682 3.67893 31.8471 5.75 31.8471H18.25C20.3211 31.8471 22 30.1682 22 28.0971V15.5971C22 13.526 20.3211 11.8471 18.25 11.8471H17M17 6.84711L12 1.84711M12 1.84711L7 6.84711M12 1.84711L12 20.5971M22 16.8471H23.25C25.3211 16.8471 27 18.526 27 20.5971V33.0971C27 35.1682 25.3211 36.8471 23.25 36.8471H10.75C8.67893 36.8471 7 35.1682 7 33.0971V31.8471" stroke="#334934" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>
                                Unggah bukti atau dokumentasi yang mendukung pengaduan,
                                seperti foto, video, atau dokumen terkait
                            </p>
                        </article>
                        <article class="card-tutorial">
                            <div class="icon">
                                <svg width="29" height="29" viewBox="0 0 27 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5144 4.25043C12.4164 4.56835 12.3636 4.90611 12.3636 5.2562C12.3636 5.88379 12.8724 6.39256 13.5 6.39256H20.3182C20.9458 6.39256 21.4545 5.88379 21.4545 5.2562C21.4545 4.90611 21.4018 4.56835 21.3038 4.25043M12.5144 4.25043C12.9436 2.85857 14.24 1.84711 15.7727 1.84711H18.0455C19.5782 1.84711 20.8746 2.85857 21.3038 4.25043M12.5144 4.25043C11.9452 4.28435 11.3778 4.32482 10.8122 4.37176C9.09847 4.51401 7.81818 5.97323 7.81818 7.6929V10.938M21.3038 4.25043C21.8729 4.28435 22.4404 4.32482 23.0059 4.37176C24.7197 4.51401 26 5.97322 26 7.69289V23.438C26 25.3208 24.4737 26.8471 22.5909 26.8471H19.1818M7.81818 10.938H2.70455C1.76315 10.938 1 11.7012 1 12.6426V29.688C1 30.6294 1.76315 31.3926 2.70455 31.3926H17.4773C18.4187 31.3926 19.1818 30.6294 19.1818 29.688V26.8471M7.81818 10.938H17.4773C18.4187 10.938 19.1818 11.7012 19.1818 12.6426V26.8471M6.68182 22.3017L8.95455 24.5744L13.5 18.8926" stroke="#334934" stroke-width="1.92308" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>
                                Periksa kembali informasi yang telah diisi untuk memastikan
                                keakuratan dan kelengkapan data
                            </p>
                        </article>
                        <article class="card-tutorial">
                            <div class="icon">
                                <svg width="29" height="29" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5356 26.3926L13.7865 19.865M13.7865 19.865L10.5564 22.7294L11.2881 10.5398L18.0165 20.7305L13.7865 19.865ZM4.11038 19.5212C-0.036794 15.374 -0.036794 8.65013 4.11038 4.50296C8.25756 0.355784 14.9815 0.355784 19.1286 4.50296C21.2022 6.5765 22.239 9.29419 22.239 12.0119M6.84097 16.7906C4.20186 14.1515 4.20186 9.87266 6.84097 7.23355C9.48008 4.59444 13.7589 4.59444 16.398 7.23355C17.7176 8.55309 18.3774 10.2825 18.3774 12.012" stroke="#334934" stroke-width="1.93082" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>
                                Kirimkan pengaduan Anda melalui tombol atau opsi yang tersedia
                                di website.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 4 -->
        <section id="target" class="container-section-4">
            <h2 class="title-section-4">Target Pencapain</h2>
            <div class="progress-bar" role="progressbar" aria-valuenow="74%" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-score">
                    <p>74%</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="48">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                    </svg>
                </div>
                <p>Response Pengguna</p>
            </div>
            <article class="description">
                <p>
                    Salah satu target utama adalah menyelesaikan masalah atau pengaduan
                    yang dilaporkan oleh masyarakat dengan memberikan solusi atau
                    tindakan yang tepat dan efektif.
                </p>
                <p>
                    Sehingga harapannya dapat menjadi sarana untuk memberdayakan
                    masyarakat dalam memantau dan memperbaiki layanan publik
                </p>
            </article>
        </section>
        <!-- Section 5 -->
        <section class="container-section-5">
            <article class="description">
                <h3>So, Tunggu Apalagi</h3>
                <p>
                    Ayo lakukan pengaduan, berperan andil dalam menciptakan indonesia
                    generasi emas 2045
                </p>
                <button>Adukan Sekarang!</button>
            </article>
            <figure class="image">
                <img src="./img/mockup-brand-2.png" alt="gambar-mockup-hp-mahitala" />
            </figure>
            <figure class="image-mobile"></figure>
        </section>
        <!-- Aside -->
        <aside>
            <div class="container">
                <header>
                    <figure>
                        <img src="./img/logo.png" alt="logo-mahitala" />
                    </figure>
                    <figcaption>
                        <h4>MAHITALA</h4>
                        <p>Satu Pengaduan <br />Satu Langkah Perubahan</p>
                    </figcaption>
                </header>
                <article>
                    <table>
                        <tr>
                            <th>Source Logo</th>
                            <td>:</td>
                            <td class="right">copilot.microsoft</td>
                        </tr>
                        <tr>
                            <th>Font</th>
                            <td>:</td>
                            <td class="right" id="fontRaleway">Raleway (title)</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="right" id="fontMontserrat">
                                Montserrat (main)
                            </td>
                        </tr>
                        <tr>
                            <th>Color Pallete</th>
                            <td>:</td>
                            <td class="right color">
                                <span>#001C03</span> <span>#FEFDF9</span>
                            </td>
                        </tr>
                    </table>
                </article>
            </div>
            <img src="./img/side-logo.png" alt="side-logo" class="sideLogo kiri" />
            <img src="./img/side-logo.png" alt="side-logo" class="sideLogo kanan" />
        </aside>
    </main>
    <!-- Footer Section -->
    <footer>
        <div class="logo">
            <figure>
                <img src="./img/logo-with-text.png" alt="" />
            </figure>
            <figcaption>
                <p>
                    Satu Pengaduan <br />
                    Satu Langkah Perubahan
                </p>
            </figcaption>
        </div>
        <p class="foot-note">
            &copy; Rahmang | Dasar Pemograman Web Dicoding 2024
        </p>
    </footer>
    <script src="./js/script.js"></script>
</body>

</html>