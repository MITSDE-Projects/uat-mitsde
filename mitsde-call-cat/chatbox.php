<html>
<head>
    <link rel="shortcut icon" type="image/ico" href="images/mitsde_favicon.ico">
<title>Admission Assistant</title>  
<script src="https://eequeuestorage.blob.core.windows.net/staticfiles/miscellaneous/emoji/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="https://eequeuestorage.blob.core.windows.net/staticfiles/miscellaneous/emoji/minified/emoji-react.css">
</head>
<body>
    
<script type="text/javascript">
function myFunction() {
        var cssId = '__chatBotCss';
if (!document.getElementById(cssId)) {
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = window.location.protocol + '//eechat-qa.extraaedge.com/css/mitsde/StyleSheet.css';
    link.type = 'text/css';
}
var head = document.getElementsByTagName('head')[0].appendChild(link);
var cssFilesArr = ["https://chatbotprod.blob.core.windows.net/web/mitaoecss/cmp/emoji.cmp.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"]

for (var x = 0; x < cssFilesArr.length; x++) {
    var fileref = document.createElement("link");
    fileref.setAttribute("rel", "stylesheet");
    fileref.setAttribute("type", "text/css");
    fileref.setAttribute("href", cssFilesArr[x]);
    head.appendChild(fileref);
}


var markUpscript = document.createElement('script');
markUpscript.type = 'text/javascript';
markUpscript.src = window.location.protocol + '//unpkg.com/markdown-it/dist/markdown-it.min.js';
head.appendChild(markUpscript);

var script = document.createElement('script');
script.type = 'text/javascript';
script.onload = function () {
      eeChatBot.init("mitsde", "04bfc404-87ed-4614-b730-6ce1d41cbb09",null,"","","",true);
}
//script.src = window.location.protocol + '//eechat.extraaedge.com/js/chatbot.min.js';
script.src = 'https://chatbotprod.blob.core.windows.net/web/minified/cmp/chatbot.win.cmp.js';
//script.src = 'https://chatbotprod.blob.core.windows.net/web/mitaoecss/cmp/chatbot.min.win.latest.js';
//script.src = 'https://chatbotprod.blob.core.windows.net/web/mitaoecss/cmp/chatbot.min.reconnect.js';

head.appendChild(script);

var jsFilesArr = [
    "https://chatbotprod.blob.core.windows.net/web/mitaoecss/cmp/config.cmp.js",
    "https://chatbotprod.blob.core.windows.net/web/mitaoecss/cmp/util.cmp.js",
    "https://chatbotprod.blob.core.windows.net/web/mitaoecss/cmp/jquery.emojiarea.cmp.js",
    "https://chatbotprod.blob.core.windows.net/web/mitaoecss/cmp/emoji-picker.cmp.js"]

for (var x = 0; x < jsFilesArr.length; x++) {
    var jsfileref = document.createElement('script');
    jsfileref.setAttribute("type", "text/javascript");
    jsfileref.setAttribute("src", jsFilesArr[x]);
    head.appendChild(jsfileref);
}


// LogD("Initialize chat sucessfully.");
// Initializes and creates emoji set from sprite sheet

// Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
// You may want to delay this step if you have dynamically created input fields that appear later in the loading process
// It can be called as many times as necessary; previously converted input fields will not be converted again
//window.emojiPicker.discover();
window.addEventListener('load', (event) => {
    //window.onload = function () {
    var eechatIconElement = document.getElementById('__eechatIcon');
    if (!!eechatIconElement && (sessionStorage.getItem('ee_autoOpenChatbot') !== 'true')) {
        setTimeout(function () {
            var cssProp = window.getComputedStyle(eechatIconElement, null).getPropertyValue("display");
            if (cssProp == "block") {
                eechatIconElement.click();
            }
        }, 3000)
        clearTimeout();
        sessionStorage.setItem('ee_autoOpenChatbot', 'true');
    }
    window.emojiPicker = new EmojiPicker({
        emojiable_selector: '[data-emojiable=true]',
        assetsPath: 'https://eequeuestorage.blob.core.windows.net/staticfiles/miscellaneous/emoji/img',

        popupButtonClasses: 'fa fa-smile-o'
    });
});

}
    </script>

</body>
</html>