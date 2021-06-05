<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script>var chatbot_id=7178;!function(){var t,e,a=document,s="smatbot-chatbot";a.getElementById(s)||(t=a.createElement("script"),t.id=s,t.type="text/javascript",t.src="https://smatbot.s3.amazonaws.com/files/smatbot_plugin.js.gz",e=a.getElementsByTagName("script")[0],e.parentNode.insertBefore(t,e))}();</script><script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/1.5.1/fingerprint2.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
        <link href="css/chat.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="js/chatbot.js"></script>
        <title>Chat Widget</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
    
    
    </style>
    <body>
        <div><iframe class="m-w-100" src="https://www.smatbot.com/kya_backend/share?code=Tutor_home_7178" style="border:0;" width="400" height="500"></iframe></div>
        <div style="display: none" class="form-box " id="myDIV">
            <h2 class="login-header"><i class="far fa-comment-dots icon"></i>Information Required</h2>
            <div class="test">
                <form class="formInput">
                    <div>
                        <input type="text" required id="test">
                        <label class="inputLabel">Name</label>
                    </div>

                    <div>
                        <input type="text" id="numberText" required>
                        <label class="inputLabel">Mobile No.</label>
                    </div>
                    <div>
                        <input type="text"  required>
                        <label class="inputLabel">Subject</label>
                    </div>
                    <div>
                        <input type="file" id="inputFile" required><label id="labelFile" for="inputFile">
                    <i class="far fa-file-image" id="iconPhoto"></i>Choose a file</label>
                </div>
            </div>
            <p id="legal">By submitting you agree to receive text messages
            at the number provided. Message/data rates apply</p>
            <input type="submit" value="Start Chat" id="submitButt" class="active">
        </form>
        <div class="footer"></div>
        </div>
        <div class="button">
            <div class="icons">
                <button class="floating-btn" onclick="myFunction()">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
    </body>
</html>