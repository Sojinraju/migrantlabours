<!DOCTYPE html>
<html>

<head>
    <script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    {literal}
        <style>
            .body {
                display: flex;
                height: 90vh;
                margin: 0;
                align-items: center;
                justify-content: center;
                padding: 0 50px;
                font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            }

            video {
                max-width: calc(50% - 100px);
                margin: 0 50px;
                box-sizing: border-box;
                border-radius: 2px;
                padding: 0;
                box-shadow: rgba(156, 172, 172, 0.2) 0px 2px 2px, rgba(156, 172, 172, 0.2) 0px 4px 4px, rgba(156, 172, 172, 0.2) 0px 8px 8px, rgba(156, 172, 172, 0.2) 0px 16px 16px, rgba(156, 172, 172, 0.2) 0px 32px 32px, rgba(156, 172, 172, 0.2) 0px 64px 64px;
            }

            .copy {
                position: fixed;
                top: 10px;
                left: 50%;
                transform: translateX(-50%);
                font-size: 16px;
                color: rgba(255, 0, 0, 0.5);
            }

            .cancel-button {
                background-color: #dc3545;
                /* Red background color */
                color: #fff;
                /* White text color */
                padding: 12px 16px;
                /* Add padding */
                border: none;
                /* Remove borders */
                border-radius: 4px;
                /* Rounded corners */
                cursor: pointer;
                /* Add cursor on hover */
                font-family: -apple-system, BlinkMacSystemFont, sans-serif;
                text-decoration: none;

            }

            .cancel-button:hover {
                background-color: #c82333;
                /* Darker red on hover */
            }
    </style>{/literal}
</head>

<body>
    <div class="body">
        {if $data==null}
            <div class="copy">Video Conferencing Ended or Not Available</div><br>
        {else}
            <div class="copy">Please end call when conferencing is complete</div><br>
            <!-- <a href="makevideocall.php?g={$view}&&v={$view1}">Make Video Call</a> -->
            <video id="localVideo" autoplay muted></video>
            <video id="remoteVideo" autoplay></video>

            <script src="script.js"></script>
        </div>
        <center><a href="agencyEndVideoCall.php?worker_loginId={$view1}" class="cancel-button">End Call</a></center>
    {/if}
</body>

</html>