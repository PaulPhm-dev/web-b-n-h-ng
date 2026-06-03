function showFullText(element){
    var fullText = element.innerText;
    var textBox =document.getElementById('displayBox');
    textBox.innerText = fullText;
    textBox.style.display ='block';
    setTimeout(() => {
        document.addEventListener('click', function hiddenBox(event) {
            if (!textBox.contains(event.target) && event.target !== element) {
                textBox.style.display = 'none';
                document.removeEventListener('click', hiddenBox);
            }
        });
    });
}