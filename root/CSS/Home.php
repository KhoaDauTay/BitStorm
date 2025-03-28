<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .header_home {
        background-image: url(../Image/homePage/Background.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        margin-top: 200px !important;
    }
    .main-img img{
        width: 700px;
        height: 500px;
    }

    .hr_home {
        border: none;
        width: 100px;
        height: 5px;
        /* Đặt chiều cao của hr */
        background-color: blueviolet;
        margin: 10px 0;
    }

    .animate-charcter {
        font-weight: bold;
        /* text-transform: uppercase; */
        background-image: linear-gradient(-225deg, #002661 0%, #130CB7 29%, #736EFE 67%, #52E5E7 100%);
        background-size: auto auto;
        background-clip: border-box;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        display: inline-block;
        font-size: 60px;
    }

    .card-wrapper__box {
        background-color: #00FFCB;

    }

    .a_home a {
        text-decoration: none;
    }

    .hr_homer {
        border: none;
        width: 100px;
        height: 5px;
        /* Đặt chiều cao của hr */
        background-color: blueviolet;
        margin: 10px 0;
    }

    @keyframes textclip {
        to {
            background-position: 200% center;
        }
    }

    .button_home {
        font-family: 'Nunito', sans-serif;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 1.3px;
        font-weight: 10px;
        color: #313133;
        background: #80D0C7;
        background: linear-gradient(90deg, rgba(129, 230, 217, 1) 0%, rgba(79, 209, 197, 1) 100%);
        border: none;
        border-radius: 1000px;
        box-shadow: 12px 12px 24px rgba(79, 209, 197, .64);
        transition: all 0.3s ease-in-out 0s;
        cursor: pointer;
        outline: none;
        position: relative;
        padding: 10px;
    }

    .button_home::before {
        content: '';
        border-radius: 1000px;
        min-width: calc(300px + 1px);
        min-height: calc(60px + 1px);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: all .3s ease-in-out 0s;
    }

    .button_home:hover,
    .button_home:focus {
        color: #313133;
        transform: translateY(-6px);
    }

    .button_home:hover::before,
    .button_home:focus::before {
        opacity: 1;
    }

    .button_home::after {
        content: '';
        width: 30px;
        height: 30px;
        border-radius: 100%;
        border: 6px solid #00FFCB;
        position: absolute;
        z-index: -1;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: ring 1.5s infinite;
    }

    .button_home:hover::after,
    .button_home:focus::after {
        animation: none;
        display: none;
    }

    @keyframes ring {
        0% {
            width: 30px;
            height: 30px;
            opacity: 1;
        }

        100% {
            width: 100px;
            height: 100px;
            opacity: 0;
        }
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    .slide-container {
        max-width: 1120px;
        width: 100%;
        padding: 40px 0;
        height: fit-content;
    }

    .slide-content {
        margin: 0 40px;
        overflow: hidden;
        border-radius: 25px;
    }

    .card {
        border-radius: 25px;
        background-color: #FFF;
        transition: 0.5s;
        cursor: pointer;
        transition: all .3s ease;

    }
    .card a{
        text-decoration: none;
    }

    .card:hover {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        transform: scale(1.05);
    }

    .image-content,
    .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px 14px;

    }

    .image-content {
        position: relative;
        row-gap: 5px;
        padding: 25px 0;
    }

    .main_text {
        margin-left: 150px;
    }

    .row {
        margin-top: 30px;
    }

    .name {
        font-size: 18px;
        font-weight: 500;
        color: #333;
    }

    /* .choise_middle{
     margin-top: -100px;
} */
    .history {
        gap: 150px;
    }

    .description {
        font-size: 14px;
        color: #707070;
        text-align: center;
    }

    /* .choise_bottom{
     margin-bottom:100px;
     margin-top: -80px;
} */

    .button {
        border: none;
        font-size: 16px;
        color: #FFF;
        padding: 8px 16px;
        background-color: #4070F4;
        border-radius: 6px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .button:hover {
        background: #265DF2;
    }

    .swiper-navBtn {
        color: #6E93f7;
        transition: color 0.3s ease;
    }

    .swiper-navBtn:hover {
        color: #4070F4;
    }

    .swiper-navBtn::before,
    .swiper-navBtn::after {
        font-size: 35px;
    }

    .swiper-button-next {
        right: 0;
    }

    .swiper-button-prev {
        left: 0;
    }

    .swiper-pagination-bullet {
        background-color: #6E93f7;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #4070F4;
    }

    @media screen and (max-width: 768px) {
        .slide-content {
            margin: 0 10px;
        }

        .swiper-navBtn {
            display: none;
        }
    }

    .podcast .p111 {
        text-align: center;
        color: #265DF2;
    }

    .wrappe1r a {
        margin-top: 10px;
        display: block;
        width: 200px;
        border-radius: 5px;
        height: 40px;
        line-height: 40px;
        font-size: 10px;
        font-family: sans-serif;
        text-decoration: none;
        /* color: #333; */
        /* border: 1px solid #333; */
        letter-spacing: 2px;
        text-align: center;
        position: relative;
        transition: all .35s;
    }

    .wrappe1r a span {
        position: relative;
        z-index: 2;
        text-align: center;
        justify-content: center;
    }

    .wrappe1r a:after {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: #4070F4;
        transition: all .35s;
    }

    .wrappe1r a:hover {
        color: #fff;
        border: none;
        border-radius: 5px;
    }

    .wrappe1r a:hover:after {
        width: 100%;
    }

    .choose {
        background-image: url(../Image/why\ choose\ us.png);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .card-img-top {
        object-fit: cover;
        height: 150px;
    }
</style>