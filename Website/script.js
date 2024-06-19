var urls = ["https://www.google.com", "https://getbootstrap.com/docs/3.3/css/#less","https://app.diagrams.net","https://www.apple.com"];

function downloadResume(){
    var index = Math.floor(Math.random() * 4);
    window.location.href = urls[index];
}