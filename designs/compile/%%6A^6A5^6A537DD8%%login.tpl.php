<?php /* Smarty version 2.6.26, created on 2023-03-27 04:35:54
         compiled from login.tpl */ ?>
<?php echo '
    <!DOCTYPE html>
    <html>

    <head>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="User/assets/images/brand/favicon.ico">

    <!-- TITLE -->
    <title>Migrant Labours - Login</title>
        <style>
            @import url(\'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\');

            /* Set the background animation */
            body {
                font-family: \'Poppins\', sans-serif;
                overflow: hidden;
                font-size: 14px;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
                padding: 2.5em;
            }

            .bg {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: #221F2E;
            }

            .bg .dotWrapper {
                position: absolute;
            }

            .bg .dotWrapper-1 {
                top: 58%;
                left: 41%;
                -webkit-animation: flying 47s ease-in-out -3.1s infinite alternate;
                animation: flying 47s ease-in-out -3.1s infinite alternate;
            }

            .bg .dotWrapper-2 {
                top: 8%;
                left: 65%;
                -webkit-animation: flying 35s ease-in-out -8.6s infinite alternate;
                animation: flying 35s ease-in-out -8.6s infinite alternate;
            }

            .bg .dotWrapper-3 {
                top: 61%;
                left: 55%;
                -webkit-animation: flying 35s ease-in-out -0.9s infinite alternate;
                animation: flying 35s ease-in-out -0.9s infinite alternate;
            }

            .bg .dotWrapper-4 {
                top: 61%;
                left: 61%;
                -webkit-animation: flying 36s ease-in-out -3.7s infinite alternate;
                animation: flying 36s ease-in-out -3.7s infinite alternate;
            }

            .bg .dotWrapper-5 {
                top: 28%;
                left: 77%;
                -webkit-animation: flying 44s ease-in-out -2.2s infinite alternate;
                animation: flying 44s ease-in-out -2.2s infinite alternate;
            }

            .bg .dotWrapper-6 {
                top: 43%;
                left: 22%;
                -webkit-animation: flying 45s ease-in-out -6.9s infinite alternate;
                animation: flying 45s ease-in-out -6.9s infinite alternate;
            }

            .bg .dotWrapper-7 {
                top: 16%;
                left: 75%;
                -webkit-animation: flying 69s ease-in-out -0.2s infinite alternate;
                animation: flying 69s ease-in-out -0.2s infinite alternate;
            }

            .bg .dotWrapper-8 {
                top: 90%;
                left: 70%;
                -webkit-animation: flying 31s ease-in-out -6.4s infinite alternate;
                animation: flying 31s ease-in-out -6.4s infinite alternate;
            }

            .bg .dotWrapper-9 {
                top: 93%;
                left: 85%;
                -webkit-animation: flying 38s ease-in-out -1.7s infinite alternate;
                animation: flying 38s ease-in-out -1.7s infinite alternate;
            }

            .bg .dotWrapper-10 {
                top: 35%;
                left: 75%;
                -webkit-animation: flying 41s ease-in-out -9.4s infinite alternate;
                animation: flying 41s ease-in-out -9.4s infinite alternate;
            }

            .bg .dotWrapper-11 {
                top: 33%;
                left: 91%;
                -webkit-animation: flying 53s ease-in-out -3.3s infinite alternate;
                animation: flying 53s ease-in-out -3.3s infinite alternate;
            }

            .bg .dotWrapper-12 {
                top: 15%;
                left: 98%;
                -webkit-animation: flying 36s ease-in-out -5.8s infinite alternate;
                animation: flying 36s ease-in-out -5.8s infinite alternate;
            }

            .bg .dotWrapper-13 {
                top: 87%;
                left: 6%;
                -webkit-animation: flying 43s ease-in-out -3.1s infinite alternate;
                animation: flying 43s ease-in-out -3.1s infinite alternate;
            }

            .bg .dotWrapper-14 {
                top: 65%;
                left: 14%;
                -webkit-animation: flying 51s ease-in-out -9.7s infinite alternate;
                animation: flying 51s ease-in-out -9.7s infinite alternate;
            }

            .bg .dotWrapper-15 {
                top: 80%;
                left: 66%;
                -webkit-animation: flying 66s ease-in-out -5.7s infinite alternate;
                animation: flying 66s ease-in-out -5.7s infinite alternate;
            }

            .bg .dotWrapper-16 {
                top: 10%;
                left: 5%;
                -webkit-animation: flying 39s ease-in-out -0.8s infinite alternate;
                animation: flying 39s ease-in-out -0.8s infinite alternate;
            }

            .bg .dotWrapper-17 {
                top: 33%;
                left: 27%;
                -webkit-animation: flying 58s ease-in-out -6.1s infinite alternate;
                animation: flying 58s ease-in-out -6.1s infinite alternate;
            }

            .bg .dotWrapper-18 {
                top: 33%;
                left: 8%;
                -webkit-animation: flying 57s ease-in-out -2.9s infinite alternate;
                animation: flying 57s ease-in-out -2.9s infinite alternate;
            }

            .bg .dotWrapper-19 {
                top: 91%;
                left: 30%;
                -webkit-animation: flying 38s ease-in-out -9.2s infinite alternate;
                animation: flying 38s ease-in-out -9.2s infinite alternate;
            }

            .bg .dotWrapper-20 {
                top: 2%;
                left: 66%;
                -webkit-animation: flying 44s ease-in-out -1.2s infinite alternate;
                animation: flying 44s ease-in-out -1.2s infinite alternate;
            }

            .bg .dotWrapper-21 {
                top: 20%;
                left: 94%;
                -webkit-animation: flying 31s ease-in-out -5.2s infinite alternate;
                animation: flying 31s ease-in-out -5.2s infinite alternate;
            }

            .bg .dotWrapper-22 {
                top: 33%;
                left: 79%;
                -webkit-animation: flying 64s ease-in-out -9.4s infinite alternate;
                animation: flying 64s ease-in-out -9.4s infinite alternate;
            }

            .bg .dotWrapper-23 {
                top: 8%;
                left: 84%;
                -webkit-animation: flying 33s ease-in-out -1.8s infinite alternate;
                animation: flying 33s ease-in-out -1.8s infinite alternate;
            }

            .bg .dotWrapper-24 {
                top: 78%;
                left: 48%;
                -webkit-animation: flying 37s ease-in-out -5.2s infinite alternate;
                animation: flying 37s ease-in-out -5.2s infinite alternate;
            }

            .bg .dotWrapper-25 {
                top: 13%;
                left: 62%;
                -webkit-animation: flying 46s ease-in-out -7.2s infinite alternate;
                animation: flying 46s ease-in-out -7.2s infinite alternate;
            }

            .bg .dotWrapper-26 {
                top: 79%;
                left: 39%;
                -webkit-animation: flying 54s ease-in-out -0.7s infinite alternate;
                animation: flying 54s ease-in-out -0.7s infinite alternate;
            }

            .bg .dotWrapper-27 {
                top: 99%;
                left: 20%;
                -webkit-animation: flying 22s ease-in-out -3.4s infinite alternate;
                animation: flying 22s ease-in-out -3.4s infinite alternate;
            }

            .bg .dotWrapper-28 {
                top: 23%;
                left: 99%;
                -webkit-animation: flying 58s ease-in-out -9.2s infinite alternate;
                animation: flying 58s ease-in-out -9.2s infinite alternate;
            }

            .bg .dotWrapper-29 {
                top: 61%;
                left: 90%;
                -webkit-animation: flying 60s ease-in-out -5.4s infinite alternate;
                animation: flying 60s ease-in-out -5.4s infinite alternate;
            }

            .bg .dotWrapper-30 {
                top: 16%;
                left: 66%;
                -webkit-animation: flying 34s ease-in-out -2.3s infinite alternate;
                animation: flying 34s ease-in-out -2.3s infinite alternate;
            }

            .bg .dotWrapper-31 {
                top: 74%;
                left: 76%;
                -webkit-animation: flying 51s ease-in-out -4.2s infinite alternate;
                animation: flying 51s ease-in-out -4.2s infinite alternate;
            }

            .bg .dotWrapper-32 {
                top: 55%;
                left: 79%;
                -webkit-animation: flying 63s ease-in-out -4s infinite alternate;
                animation: flying 63s ease-in-out -4s infinite alternate;
            }

            .bg .dotWrapper-33 {
                top: 33%;
                left: 15%;
                -webkit-animation: flying 69s ease-in-out -7.4s infinite alternate;
                animation: flying 69s ease-in-out -7.4s infinite alternate;
            }

            .bg .dotWrapper-34 {
                top: 55%;
                left: 66%;
                -webkit-animation: flying 42s ease-in-out -5s infinite alternate;
                animation: flying 42s ease-in-out -5s infinite alternate;
            }

            .bg .dotWrapper-35 {
                top: 62%;
                left: 47%;
                -webkit-animation: flying 40s ease-in-out -2s infinite alternate;
                animation: flying 40s ease-in-out -2s infinite alternate;
            }

            .bg .dotWrapper-36 {
                top: 88%;
                left: 17%;
                -webkit-animation: flying 70s ease-in-out -6.6s infinite alternate;
                animation: flying 70s ease-in-out -6.6s infinite alternate;
            }

            .bg .dotWrapper-37 {
                top: 53%;
                left: 81%;
                -webkit-animation: flying 30s ease-in-out -4.9s infinite alternate;
                animation: flying 30s ease-in-out -4.9s infinite alternate;
            }

            .bg .dotWrapper-38 {
                top: 35%;
                left: 4%;
                -webkit-animation: flying 50s ease-in-out -7.1s infinite alternate;
                animation: flying 50s ease-in-out -7.1s infinite alternate;
            }

            .bg .dotWrapper-39 {
                top: 88%;
                left: 23%;
                -webkit-animation: flying 34s ease-in-out -0.2s infinite alternate;
                animation: flying 34s ease-in-out -0.2s infinite alternate;
            }

            .bg .dotWrapper-40 {
                top: 50%;
                left: 54%;
                -webkit-animation: flying 25s ease-in-out -3.7s infinite alternate;
                animation: flying 25s ease-in-out -3.7s infinite alternate;
            }

            .bg .dotWrapper-41 {
                top: 20%;
                left: 70%;
                -webkit-animation: flying 28s ease-in-out -5.8s infinite alternate;
                animation: flying 28s ease-in-out -5.8s infinite alternate;
            }

            .bg .dotWrapper-42 {
                top: 54%;
                left: 24%;
                -webkit-animation: flying 23s ease-in-out -6.6s infinite alternate;
                animation: flying 23s ease-in-out -6.6s infinite alternate;
            }

            .bg .dotWrapper-43 {
                top: 11%;
                left: 47%;
                -webkit-animation: flying 70s ease-in-out -8.6s infinite alternate;
                animation: flying 70s ease-in-out -8.6s infinite alternate;
            }

            .bg .dotWrapper-44 {
                top: 9%;
                left: 20%;
                -webkit-animation: flying 68s ease-in-out -5.6s infinite alternate;
                animation: flying 68s ease-in-out -5.6s infinite alternate;
            }

            .bg .dotWrapper-45 {
                top: 32%;
                left: 35%;
                -webkit-animation: flying 55s ease-in-out -6.1s infinite alternate;
                animation: flying 55s ease-in-out -6.1s infinite alternate;
            }

            .bg .dotWrapper-46 {
                top: 24%;
                left: 92%;
                -webkit-animation: flying 28s ease-in-out -1.2s infinite alternate;
                animation: flying 28s ease-in-out -1.2s infinite alternate;
            }

            .bg .dotWrapper-47 {
                top: 77%;
                left: 34%;
                -webkit-animation: flying 43s ease-in-out -7.2s infinite alternate;
                animation: flying 43s ease-in-out -7.2s infinite alternate;
            }

            .bg .dotWrapper-48 {
                top: 86%;
                left: 88%;
                -webkit-animation: flying 53s ease-in-out -9.9s infinite alternate;
                animation: flying 53s ease-in-out -9.9s infinite alternate;
            }

            .bg .dotWrapper-49 {
                top: 43%;
                left: 61%;
                -webkit-animation: flying 25s ease-in-out -8.5s infinite alternate;
                animation: flying 25s ease-in-out -8.5s infinite alternate;
            }

            .bg .dotWrapper-50 {
                top: 62%;
                left: 15%;
                -webkit-animation: flying 41s ease-in-out -7.2s infinite alternate;
                animation: flying 41s ease-in-out -7.2s infinite alternate;
            }

            .bg .dotWrapper-51 {
                top: 78%;
                left: 92%;
                -webkit-animation: flying 51s ease-in-out -5.5s infinite alternate;
                animation: flying 51s ease-in-out -5.5s infinite alternate;
            }

            .bg .dotWrapper-52 {
                top: 1%;
                left: 61%;
                -webkit-animation: flying 52s ease-in-out -2.2s infinite alternate;
                animation: flying 52s ease-in-out -2.2s infinite alternate;
            }

            .bg .dotWrapper-53 {
                top: 67%;
                left: 95%;
                -webkit-animation: flying 48s ease-in-out -9.4s infinite alternate;
                animation: flying 48s ease-in-out -9.4s infinite alternate;
            }

            .bg .dotWrapper-54 {
                top: 62%;
                left: 27%;
                -webkit-animation: flying 40s ease-in-out -8.9s infinite alternate;
                animation: flying 40s ease-in-out -8.9s infinite alternate;
            }

            .bg .dotWrapper-55 {
                top: 73%;
                left: 6%;
                -webkit-animation: flying 23s ease-in-out -1.1s infinite alternate;
                animation: flying 23s ease-in-out -1.1s infinite alternate;
            }

            .bg .dotWrapper-56 {
                top: 87%;
                left: 3%;
                -webkit-animation: flying 46s ease-in-out -9.5s infinite alternate;
                animation: flying 46s ease-in-out -9.5s infinite alternate;
            }

            .bg .dotWrapper-57 {
                top: 2%;
                left: 2%;
                -webkit-animation: flying 35s ease-in-out -5.9s infinite alternate;
                animation: flying 35s ease-in-out -5.9s infinite alternate;
            }

            .bg .dotWrapper-58 {
                top: 2%;
                left: 50%;
                -webkit-animation: flying 43s ease-in-out -8.4s infinite alternate;
                animation: flying 43s ease-in-out -8.4s infinite alternate;
            }

            .bg .dotWrapper-59 {
                top: 32%;
                left: 3%;
                -webkit-animation: flying 32s ease-in-out -6.7s infinite alternate;
                animation: flying 32s ease-in-out -6.7s infinite alternate;
            }

            .bg .dotWrapper-60 {
                top: 15%;
                left: 67%;
                -webkit-animation: flying 34s ease-in-out -0.2s infinite alternate;
                animation: flying 34s ease-in-out -0.2s infinite alternate;
            }

            .bg .dotWrapper-61 {
                top: 51%;
                left: 17%;
                -webkit-animation: flying 36s ease-in-out -10s infinite alternate;
                animation: flying 36s ease-in-out -10s infinite alternate;
            }

            .bg .dotWrapper-62 {
                top: 45%;
                left: 78%;
                -webkit-animation: flying 59s ease-in-out -4.2s infinite alternate;
                animation: flying 59s ease-in-out -4.2s infinite alternate;
            }

            .bg .dotWrapper-63 {
                top: 17%;
                left: 73%;
                -webkit-animation: flying 30s ease-in-out -8s infinite alternate;
                animation: flying 30s ease-in-out -8s infinite alternate;
            }

            .bg .dotWrapper-64 {
                top: 93%;
                left: 75%;
                -webkit-animation: flying 22s ease-in-out -2.8s infinite alternate;
                animation: flying 22s ease-in-out -2.8s infinite alternate;
            }

            .bg .dotWrapper-65 {
                top: 8%;
                left: 22%;
                -webkit-animation: flying 45s ease-in-out -8.4s infinite alternate;
                animation: flying 45s ease-in-out -8.4s infinite alternate;
            }

            .bg .dotWrapper-66 {
                top: 7%;
                left: 97%;
                -webkit-animation: flying 50s ease-in-out -8.5s infinite alternate;
                animation: flying 50s ease-in-out -8.5s infinite alternate;
            }

            .bg .dotWrapper-67 {
                top: 59%;
                left: 20%;
                -webkit-animation: flying 49s ease-in-out -4.9s infinite alternate;
                animation: flying 49s ease-in-out -4.9s infinite alternate;
            }

            .bg .dotWrapper-68 {
                top: 92%;
                left: 13%;
                -webkit-animation: flying 35s ease-in-out -8.8s infinite alternate;
                animation: flying 35s ease-in-out -8.8s infinite alternate;
            }

            .bg .dotWrapper-69 {
                top: 7%;
                left: 60%;
                -webkit-animation: flying 59s ease-in-out -3.5s infinite alternate;
                animation: flying 59s ease-in-out -3.5s infinite alternate;
            }

            .bg .dotWrapper-70 {
                top: 8%;
                left: 99%;
                -webkit-animation: flying 66s ease-in-out -4.5s infinite alternate;
                animation: flying 66s ease-in-out -4.5s infinite alternate;
            }

            .bg .dotWrapper-71 {
                top: 87%;
                left: 38%;
                -webkit-animation: flying 47s ease-in-out -3.9s infinite alternate;
                animation: flying 47s ease-in-out -3.9s infinite alternate;
            }

            .bg .dotWrapper-72 {
                top: 72%;
                left: 93%;
                -webkit-animation: flying 63s ease-in-out -4.5s infinite alternate;
                animation: flying 63s ease-in-out -4.5s infinite alternate;
            }

            .bg .dotWrapper-73 {
                top: 66%;
                left: 67%;
                -webkit-animation: flying 58s ease-in-out -0.3s infinite alternate;
                animation: flying 58s ease-in-out -0.3s infinite alternate;
            }

            .bg .dotWrapper-74 {
                top: 17%;
                left: 36%;
                -webkit-animation: flying 24s ease-in-out -0.5s infinite alternate;
                animation: flying 24s ease-in-out -0.5s infinite alternate;
            }

            .bg .dotWrapper-75 {
                top: 1%;
                left: 98%;
                -webkit-animation: flying 27s ease-in-out -5.2s infinite alternate;
                animation: flying 27s ease-in-out -5.2s infinite alternate;
            }

            .bg .dot {
                width: 4px;
                height: 4px;
                background: #FEA039;
                border-radius: 50%;
            }

            .bg .dot-1 {
                transform-origin: 13px 4px;
                -webkit-animation: rotating 24s ease-in-out -4.7s infinite;
                animation: rotating 24s ease-in-out -4.7s infinite;
            }

            .bg .dot-2 {
                transform-origin: -6px 6px;
                -webkit-animation: rotating 13s ease-in-out -4.5s infinite;
                animation: rotating 13s ease-in-out -4.5s infinite;
            }

            .bg .dot-3 {
                transform-origin: -9px 13px;
                -webkit-animation: rotating 26s ease-in-out -6.8s infinite;
                animation: rotating 26s ease-in-out -6.8s infinite;
            }

            .bg .dot-4 {
                transform-origin: -3px 2px;
                -webkit-animation: rotating 26s ease-in-out -8s infinite;
                animation: rotating 26s ease-in-out -8s infinite;
            }

            .bg .dot-5 {
                transform-origin: 12px 0px;
                -webkit-animation: rotating 26s ease-in-out -3.6s infinite;
                animation: rotating 26s ease-in-out -3.6s infinite;
            }

            .bg .dot-6 {
                transform-origin: -13px 0px;
                -webkit-animation: rotating 13s ease-in-out -2.9s infinite;
                animation: rotating 13s ease-in-out -2.9s infinite;
            }

            .bg .dot-7 {
                transform-origin: -9px -10px;
                -webkit-animation: rotating 14s ease-in-out -3.4s infinite;
                animation: rotating 14s ease-in-out -3.4s infinite;
            }

            .bg .dot-8 {
                transform-origin: 8px 13px;
                -webkit-animation: rotating 28s ease-in-out -8s infinite;
                animation: rotating 28s ease-in-out -8s infinite;
            }

            .bg .dot-9 {
                transform-origin: -1px 10px;
                -webkit-animation: rotating 23s ease-in-out -5.3s infinite;
                animation: rotating 23s ease-in-out -5.3s infinite;
            }

            .bg .dot-10 {
                transform-origin: 11px -7px;
                -webkit-animation: rotating 25s ease-in-out -5.9s infinite;
                animation: rotating 25s ease-in-out -5.9s infinite;
            }

            .bg .dot-11 {
                transform-origin: -1px 6px;
                -webkit-animation: rotating 25s ease-in-out -0.4s infinite;
                animation: rotating 25s ease-in-out -0.4s infinite;
            }

            .bg .dot-12 {
                transform-origin: -8px -14px;
                -webkit-animation: rotating 22s ease-in-out -7.5s infinite;
                animation: rotating 22s ease-in-out -7.5s infinite;
            }

            .bg .dot-13 {
                transform-origin: 2px 8px;
                -webkit-animation: rotating 19s ease-in-out -6.1s infinite;
                animation: rotating 19s ease-in-out -6.1s infinite;
            }

            .bg .dot-14 {
                transform-origin: 10px -2px;
                -webkit-animation: rotating 17s ease-in-out -4.3s infinite;
                animation: rotating 17s ease-in-out -4.3s infinite;
            }

            .bg .dot-15 {
                transform-origin: -4px 6px;
                -webkit-animation: rotating 11s ease-in-out -2.1s infinite;
                animation: rotating 11s ease-in-out -2.1s infinite;
            }

            .bg .dot-16 {
                transform-origin: 4px -5px;
                -webkit-animation: rotating 13s ease-in-out -1.5s infinite;
                animation: rotating 13s ease-in-out -1.5s infinite;
            }

            .bg .dot-17 {
                transform-origin: -4px 10px;
                -webkit-animation: rotating 14s ease-in-out -5.8s infinite;
                animation: rotating 14s ease-in-out -5.8s infinite;
            }

            .bg .dot-18 {
                transform-origin: 7px 7px;
                -webkit-animation: rotating 29s ease-in-out -6.4s infinite;
                animation: rotating 29s ease-in-out -6.4s infinite;
            }

            .bg .dot-19 {
                transform-origin: 2px 10px;
                -webkit-animation: rotating 18s ease-in-out -7.3s infinite;
                animation: rotating 18s ease-in-out -7.3s infinite;
            }

            .bg .dot-20 {
                transform-origin: -1px -2px;
                -webkit-animation: rotating 15s ease-in-out -2.1s infinite;
                animation: rotating 15s ease-in-out -2.1s infinite;
            }

            .bg .dot-21 {
                transform-origin: 8px 0px;
                -webkit-animation: rotating 14s ease-in-out -4.1s infinite;
                animation: rotating 14s ease-in-out -4.1s infinite;
            }

            .bg .dot-22 {
                transform-origin: 11px -5px;
                -webkit-animation: rotating 13s ease-in-out -6.6s infinite;
                animation: rotating 13s ease-in-out -6.6s infinite;
            }

            .bg .dot-23 {
                transform-origin: 14px -14px;
                -webkit-animation: rotating 25s ease-in-out -6.3s infinite;
                animation: rotating 25s ease-in-out -6.3s infinite;
            }

            .bg .dot-24 {
                transform-origin: -2px 8px;
                -webkit-animation: rotating 14s ease-in-out -4.9s infinite;
                animation: rotating 14s ease-in-out -4.9s infinite;
            }

            .bg .dot-25 {
                transform-origin: -9px 8px;
                -webkit-animation: rotating 16s ease-in-out -5.6s infinite;
                animation: rotating 16s ease-in-out -5.6s infinite;
            }

            .bg .dot-26 {
                transform-origin: 1px 12px;
                -webkit-animation: rotating 22s ease-in-out -8.9s infinite;
                animation: rotating 22s ease-in-out -8.9s infinite;
            }

            .bg .dot-27 {
                transform-origin: 11px 2px;
                -webkit-animation: rotating 24s ease-in-out -7s infinite;
                animation: rotating 24s ease-in-out -7s infinite;
            }

            .bg .dot-28 {
                transform-origin: 4px -14px;
                -webkit-animation: rotating 23s ease-in-out -9.7s infinite;
                animation: rotating 23s ease-in-out -9.7s infinite;
            }

            .bg .dot-29 {
                transform-origin: -4px -11px;
                -webkit-animation: rotating 25s ease-in-out -1.5s infinite;
                animation: rotating 25s ease-in-out -1.5s infinite;
            }

            .bg .dot-30 {
                transform-origin: -5px 9px;
                -webkit-animation: rotating 16s ease-in-out -9s infinite;
                animation: rotating 16s ease-in-out -9s infinite;
            }

            .bg .dot-31 {
                transform-origin: -7px -5px;
                -webkit-animation: rotating 22s ease-in-out -8s infinite;
                animation: rotating 22s ease-in-out -8s infinite;
            }

            .bg .dot-32 {
                transform-origin: 2px -6px;
                -webkit-animation: rotating 22s ease-in-out -2.1s infinite;
                animation: rotating 22s ease-in-out -2.1s infinite;
            }

            .bg .dot-33 {
                transform-origin: 2px 3px;
                -webkit-animation: rotating 22s ease-in-out -9.4s infinite;
                animation: rotating 22s ease-in-out -9.4s infinite;
            }

            .bg .dot-34 {
                transform-origin: 3px 4px;
                -webkit-animation: rotating 13s ease-in-out -2.2s infinite;
                animation: rotating 13s ease-in-out -2.2s infinite;
            }

            .bg .dot-35 {
                transform-origin: -5px 5px;
                -webkit-animation: rotating 28s ease-in-out -0.1s infinite;
                animation: rotating 28s ease-in-out -0.1s infinite;
            }

            .bg .dot-36 {
                transform-origin: 9px -2px;
                -webkit-animation: rotating 15s ease-in-out -6.8s infinite;
                animation: rotating 15s ease-in-out -6.8s infinite;
            }

            .bg .dot-37 {
                transform-origin: -5px -12px;
                -webkit-animation: rotating 20s ease-in-out -8.6s infinite;
                animation: rotating 20s ease-in-out -8.6s infinite;
            }

            .bg .dot-38 {
                transform-origin: 12px 11px;
                -webkit-animation: rotating 20s ease-in-out -2.4s infinite;
                animation: rotating 20s ease-in-out -2.4s infinite;
            }

            .bg .dot-39 {
                transform-origin: -14px -6px;
                -webkit-animation: rotating 26s ease-in-out -0.6s infinite;
                animation: rotating 26s ease-in-out -0.6s infinite;
            }

            .bg .dot-40 {
                transform-origin: -8px 0px;
                -webkit-animation: rotating 16s ease-in-out -7.7s infinite;
                animation: rotating 16s ease-in-out -7.7s infinite;
            }

            .bg .dot-41 {
                transform-origin: -9px 10px;
                -webkit-animation: rotating 16s ease-in-out -1.6s infinite;
                animation: rotating 16s ease-in-out -1.6s infinite;
            }

            .bg .dot-42 {
                transform-origin: 11px -13px;
                -webkit-animation: rotating 19s ease-in-out -6.7s infinite;
                animation: rotating 19s ease-in-out -6.7s infinite;
            }

            .bg .dot-43 {
                transform-origin: 9px 5px;
                -webkit-animation: rotating 29s ease-in-out -6.3s infinite;
                animation: rotating 29s ease-in-out -6.3s infinite;
            }

            .bg .dot-44 {
                transform-origin: 13px -4px;
                -webkit-animation: rotating 22s ease-in-out -9.4s infinite;
                animation: rotating 22s ease-in-out -9.4s infinite;
            }

            .bg .dot-45 {
                transform-origin: -9px -10px;
                -webkit-animation: rotating 28s ease-in-out -2.5s infinite;
                animation: rotating 28s ease-in-out -2.5s infinite;
            }

            .bg .dot-46 {
                transform-origin: 0px 5px;
                -webkit-animation: rotating 19s ease-in-out -8.4s infinite;
                animation: rotating 19s ease-in-out -8.4s infinite;
            }

            .bg .dot-47 {
                transform-origin: 10px 15px;
                -webkit-animation: rotating 15s ease-in-out -1.3s infinite;
                animation: rotating 15s ease-in-out -1.3s infinite;
            }

            .bg .dot-48 {
                transform-origin: -1px -3px;
                -webkit-animation: rotating 11s ease-in-out -7.1s infinite;
                animation: rotating 11s ease-in-out -7.1s infinite;
            }

            .bg .dot-49 {
                transform-origin: 9px -14px;
                -webkit-animation: rotating 24s ease-in-out -0.4s infinite;
                animation: rotating 24s ease-in-out -0.4s infinite;
            }

            .bg .dot-50 {
                transform-origin: -6px -10px;
                -webkit-animation: rotating 30s ease-in-out -5.6s infinite;
                animation: rotating 30s ease-in-out -5.6s infinite;
            }

            @-webkit-keyframes rotating {
                0% {
                    opacity: 0;
                    transform: rotate(0deg);
                }

                25%,
                75% {
                    opacity: 1;
                }

                50% {
                    opacity: 0;
                }

                100% {
                    opacity: 0;
                    transform: rotate(360deg);
                }
            }

            @keyframes rotating {
                0% {
                    opacity: 0;
                    transform: rotate(0deg);
                }

                25%,
                75% {
                    opacity: 1;
                }

                50% {
                    opacity: 0;
                }

                100% {
                    opacity: 0;
                    transform: rotate(360deg);
                }
            }

            @-webkit-keyframes flying {
                0% {
                    transform: translate(0, 0);
                }

                10% {
                    transform: translate(20px, 50px);
                }

                20% {
                    transform: translate(-30px, 10px);
                }

                30% {
                    transform: translate(10px, 60px);
                }

                40% {
                    transform: translate(50px, 0px);
                }

                50% {
                    transform: translate(-10px, -40px);
                }

                60% {
                    transform: translate(-40px, 20px);
                }

                70% {
                    transform: translate(30px, -30px);
                }

                80% {
                    transform: translate(0px, -60px);
                }

                90% {
                    transform: translate(40px, 10px);
                }

                100% {
                    transform: translate(0, 0);
                }
            }

            @keyframes flying {
                0% {
                    transform: translate(0, 0);
                }

                10% {
                    transform: translate(20px, 50px);
                }

                20% {
                    transform: translate(-30px, 10px);
                }

                30% {
                    transform: translate(10px, 60px);
                }

                40% {
                    transform: translate(50px, 0px);
                }

                50% {
                    transform: translate(-10px, -40px);
                }

                60% {
                    transform: translate(-40px, 20px);
                }

                70% {
                    transform: translate(30px, -30px);
                }

                80% {
                    transform: translate(0px, -60px);
                }

                90% {
                    transform: translate(40px, 10px);
                }

                100% {
                    transform: translate(0, 0);
                }
            }

            * {
                box-sizing: border-box;
            }

            h1 {
                font-size: 2.5em;
                color: #131125;
                font-weight: 700;
                margin: 0;
            }

            p {
                line-height: 180%;
            }

            .login-box {
                display: flex;
                width: 75em;
                height: 85vh;
                /* min-height: 60em; */
                border-radius: 20px;
                background-color: #ffffff;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.025);
            }

            .login-box-formbox,
            .login-box-quotebox {
                display: flex;
                flex-direction: column;
                justify-content: center;
                flex: 1 1 100%;
                padding: 4em 6em;
            }

            .login-box-quotebox {
                color: white;
                background-color: #fff0d9;
                background-image: url(\'Login/animation.gif\');
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: center left;
            }

            .login-box-signup a {
                color: #a0a4e3;
                font-weight: 600;
                text-decoration: inherit;
            }

            .login-box-signup a:hover,
            .login-box-signup a:focus {
                color: #0f1396;
            }

            .login-box-login {
                display: flex;
                flex-wrap: wrap;
                align-content: center;
                flex-grow: 1;
            }

            .login-box-login>* {
                width: 100%;
                flex-shrink: 0;
            }

            form>div {
                position: relative;
                padding: 1.5em 0;
            }

            form>div input {
                color: #bebebe;
                width: 100%;
                padding: 1.5em 2em;
                border: 1px solid #bebebe;
                border-radius: 5px;
            }

            form>div input.input-email,
            form>div input.input-password {
                background-repeat: no-repeat;
                background-position: right 1em top 1.25em;
            }

            form>div input.input-email {
                background-image: url(\'data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="lightgrey" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="4"></circle><path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path></svg>\');
            }

            form>div input.input-password {
                background-image: url(\'data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="lightgrey" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="5" y="11" width="14" height="10" rx="2"></rect><circle cx="12" cy="16" r="1"></circle><path d="M8 11v-4a4 4 0 0 1 8 0v4"></path></svg>\');
            }

            form>div input:focus {
                outline-color: #2028eb;
                border-color: #2028eb;
            }

            form>div label {
                font-size: 0.85em;
                position: absolute;
                top: 1.25em;
                left: 1.5em;
                background: #ffffff;
                padding: 0 0.5em;
            }

            form>div:focus-within label {
                color: #2028eb;
                font-weight: 600;
            }

            form>div .btn {
                color: #ffffff;
                font-size: 1em;
                letter-spacing: 1px;
                line-height: 1;
                background-color: #2028eb;
                border-color: #2028eb;
                cursor: pointer;
                transition: all 500ms ease;
            }

            form>div .btn:hover,
            form>div .btn:focus {
                background-color: #0f1396;
                border-color: #0f1396;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            }

            .alternate-text {
                display: flex;
                align-items: center;
                margin: 1.5em 0;
                text-align: center;
            }

            .alternate-text::before,
            .alternate-text::after {
                content: "";
                flex: 1;
                border-bottom: 1px solid #bebebe;
            }

            .alternate-text::before {
                margin-right: 1em;
            }

            .alternate-text::after {
                margin-left: 1em;
            }

            .alternate-boxes {
                display: flex;
                justify-content: space-between;
                gap: 1em;
                margin-top: 1.5em;
            }

            .alternate-box {
                color: #131125;
                text-align: center;
                width: 100%;
                padding: 1em 1em;
                border: 1px solid rgba(190, 190, 190, 0.5);
                border-radius: 5px;
                cursor: pointer;
                transition: all 500ms ease;
            }

            .alternate-box svg {
                transition: transform 500ms ease;
            }

            .alternate-box:hover {
                border-color: #bebebe;
                background-color: rgba(190, 190, 190, 0.25);
            }

            .alternate-box:hover svg {
                transform: scale(1.25);
            }

            .quote-container {
                padding: 1em 0;
                position: relative;
            }

            .quote {
                color: black;
                font-size: 7em;
                font-weight: 600;
                line-height: 1;
            }

            .quote-small {
                color: #ebeef7;
                line-height: 180%;
                padding: 2em 0 0 6em;
                position: relative;
            }
        </style>
    </head>

    <body>
        <div class="bg">
            <div class="dotWrapper dotWrapper-1">
                <div class="dot dot-1"></div>
            </div>
            <div class="dotWrapper dotWrapper-2">
                <div class="dot dot-2"></div>
            </div>
            <div class="dotWrapper dotWrapper-3">
                <div class="dot dot-3"></div>
            </div>
            <div class="dotWrapper dotWrapper-4">
                <div class="dot dot-4"></div>
            </div>
            <div class="dotWrapper dotWrapper-5">
                <div class="dot dot-5"></div>
            </div>
            <div class="dotWrapper dotWrapper-6">
                <div class="dot dot-6"></div>
            </div>
            <div class="dotWrapper dotWrapper-7">
                <div class="dot dot-7"></div>
            </div>
            <div class="dotWrapper dotWrapper-8">
                <div class="dot dot-8"></div>
            </div>
            <div class="dotWrapper dotWrapper-9">
                <div class="dot dot-9"></div>
            </div>
            <div class="dotWrapper dotWrapper-10">
                <div class="dot dot-10"></div>
            </div>
            <div class="dotWrapper dotWrapper-11">
                <div class="dot dot-11"></div>
            </div>
            <div class="dotWrapper dotWrapper-12">
                <div class="dot dot-12"></div>
            </div>
            <div class="dotWrapper dotWrapper-13">
                <div class="dot dot-13"></div>
            </div>
            <div class="dotWrapper dotWrapper-14">
                <div class="dot dot-14"></div>
            </div>
            <div class="dotWrapper dotWrapper-15">
                <div class="dot dot-15"></div>
            </div>
            <div class="dotWrapper dotWrapper-16">
                <div class="dot dot-16"></div>
            </div>
            <div class="dotWrapper dotWrapper-17">
                <div class="dot dot-17"></div>
            </div>
            <div class="dotWrapper dotWrapper-18">
                <div class="dot dot-18"></div>
            </div>
            <div class="dotWrapper dotWrapper-19">
                <div class="dot dot-19"></div>
            </div>
            <div class="dotWrapper dotWrapper-20">
                <div class="dot dot-20"></div>
            </div>
            <div class="dotWrapper dotWrapper-21">
                <div class="dot dot-21"></div>
            </div>
            <div class="dotWrapper dotWrapper-22">
                <div class="dot dot-22"></div>
            </div>
            <div class="dotWrapper dotWrapper-23">
                <div class="dot dot-23"></div>
            </div>
            <div class="dotWrapper dotWrapper-24">
                <div class="dot dot-24"></div>
            </div>
            <div class="dotWrapper dotWrapper-25">
                <div class="dot dot-25"></div>
            </div>
            <div class="dotWrapper dotWrapper-26">
                <div class="dot dot-26"></div>
            </div>
            <div class="dotWrapper dotWrapper-27">
                <div class="dot dot-27"></div>
            </div>
            <div class="dotWrapper dotWrapper-28">
                <div class="dot dot-28"></div>
            </div>
            <div class="dotWrapper dotWrapper-29">
                <div class="dot dot-29"></div>
            </div>
            <div class="dotWrapper dotWrapper-30">
                <div class="dot dot-30"></div>
            </div>
            <div class="dotWrapper dotWrapper-31">
                <div class="dot dot-31"></div>
            </div>
            <div class="dotWrapper dotWrapper-32">
                <div class="dot dot-32"></div>
            </div>
            <div class="dotWrapper dotWrapper-33">
                <div class="dot dot-33"></div>
            </div>
            <div class="dotWrapper dotWrapper-34">
                <div class="dot dot-34"></div>
            </div>
            <div class="dotWrapper dotWrapper-35">
                <div class="dot dot-35"></div>
            </div>
            <div class="dotWrapper dotWrapper-36">
                <div class="dot dot-36"></div>
            </div>
            <div class="dotWrapper dotWrapper-37">
                <div class="dot dot-37"></div>
            </div>
            <div class="dotWrapper dotWrapper-38">
                <div class="dot dot-38"></div>
            </div>
            <div class="dotWrapper dotWrapper-39">
                <div class="dot dot-39"></div>
            </div>
            <div class="dotWrapper dotWrapper-40">
                <div class="dot dot-40"></div>
            </div>
            <div class="dotWrapper dotWrapper-41">
                <div class="dot dot-41"></div>
            </div>
            <div class="dotWrapper dotWrapper-42">
                <div class="dot dot-42"></div>
            </div>
            <div class="dotWrapper dotWrapper-43">
                <div class="dot dot-43"></div>
            </div>
            <div class="dotWrapper dotWrapper-44">
                <div class="dot dot-44"></div>
            </div>
            <div class="dotWrapper dotWrapper-45">
                <div class="dot dot-45"></div>
            </div>
            <div class="dotWrapper dotWrapper-46">
                <div class="dot dot-46"></div>
            </div>
            <div class="dotWrapper dotWrapper-47">
                <div class="dot dot-47"></div>
            </div>
            <div class="dotWrapper dotWrapper-48">
                <div class="dot dot-48"></div>
            </div>
            <div class="dotWrapper dotWrapper-49">
                <div class="dot dot-49"></div>
            </div>
            <div class="dotWrapper dotWrapper-50">
                <div class="dot dot-50"></div>
            </div>
            <div class="dotWrapper dotWrapper-51">
                <div class="dot dot-51"></div>
            </div>
            <div class="dotWrapper dotWrapper-52">
                <div class="dot dot-52"></div>
            </div>
            <div class="dotWrapper dotWrapper-53">
                <div class="dot dot-53"></div>
            </div>
            <div class="dotWrapper dotWrapper-54">
                <div class="dot dot-54"></div>
            </div>
            <div class="dotWrapper dotWrapper-55">
                <div class="dot dot-55"></div>
            </div>
            <div class="dotWrapper dotWrapper-56">
                <div class="dot dot-56"></div>
            </div>
            <div class="dotWrapper dotWrapper-57">
                <div class="dot dot-57"></div>
            </div>
            <div class="dotWrapper dotWrapper-58">
                <div class="dot dot-58"></div>
            </div>
            <div class="dotWrapper dotWrapper-59">
                <div class="dot dot-59"></div>
            </div>
            <div class="dotWrapper dotWrapper-60">
                <div class="dot dot-60"></div>
            </div>
            <div class="dotWrapper dotWrapper-61">
                <div class="dot dot-61"></div>
            </div>
            <div class="dotWrapper dotWrapper-62">
                <div class="dot dot-62"></div>
            </div>
            <div class="dotWrapper dotWrapper-63">
                <div class="dot dot-63"></div>
            </div>
            <div class="dotWrapper dotWrapper-64">
                <div class="dot dot-64"></div>
            </div>
            <div class="dotWrapper dotWrapper-65">
                <div class="dot dot-65"></div>
            </div>
            <div class="dotWrapper dotWrapper-66">
                <div class="dot dot-66"></div>
            </div>
            <div class="dotWrapper dotWrapper-67">
                <div class="dot dot-67"></div>
            </div>
            <div class="dotWrapper dotWrapper-68">
                <div class="dot dot-68"></div>
            </div>
            <div class="dotWrapper dotWrapper-69">
                <div class="dot dot-69"></div>
            </div>
            <div class="dotWrapper dotWrapper-70">
                <div class="dot dot-70"></div>
            </div>
            <div class="dotWrapper dotWrapper-71">
                <div class="dot dot-71"></div>
            </div>
            <div class="dotWrapper dotWrapper-72">
                <div class="dot dot-72"></div>
            </div>
            <div class="dotWrapper dotWrapper-73">
                <div class="dot dot-73"></div>
            </div>
            <div class="dotWrapper dotWrapper-74">
                <div class="dot dot-74"></div>
            </div>
            <div class="dotWrapper dotWrapper-75">
                <div class="dot dot-75"></div>
            </div>
            <center style=" position: relative;
        top: 50%;
        transform: translateY(-50%);">
                <div class="login-box">
                    <div class="login-box-formbox">
                        <div class="login-box-signup">
                            Don\'t have an account? Go to <a href="index.php">Home</a> and Register
                    </div>
                    <div class="login-box-login">
                        <h1><img src=\'Login/logo.svg\' height="60px"><br>Migrant Labours</h1>
                            <p>
                                Please Login To Continue
                            </p>
                            <form method="post">
                                <input type="hidden" name="hide" value="h">
                                <div>
                                    <label for="email"> E-Mail</label>
                                    <input type="email" required name="email" class="input-email" />
                                </div>
                                <div>
                                    <label for="password"> Password</label>
                                    <input type="password" required name="password" class="input-password" />
                                </div>
                                <div>
                                    <input type="submit" value="Login to account" class="btn" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="login-box-quotebox">
                        <div class="quote-container">
                        </div>
                    </div>
            </center>
        </div>
        </div>
    </body>

    </html>
'; ?>