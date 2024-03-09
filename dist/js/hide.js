function toggleText(index) {
    console.log(index);
    let num = index;
    var hiddenText = document.getElementsByClassName("hidden-text")[num - 1];
    var title = document.getElementsByClassName("articles__title")[num - 1];

    hide(title, hiddenText);
}
function hide(button, container) {

    default_position();
        button.onclick = () => {
        const box_height = container.scrollHeight
        if (!container.classList.contains('active')) {
            container.classList.add('active')
            button.classList.add('active')
            container.style.height = box_height + 'px'
        }
        else {
            container.classList.remove('active')
            button.classList.remove('active')
            container.style.height = '0px'
        }

    }

    function default_position() {
        const box_height = container.scrollHeight // определяет высоту контейнера
        container.style.transition = 'height 0.25s';  //определяет медленный переход изменение длину 
        container.style.overflow = 'hidden'; //  определяет выйдет за граню   

        if (container.classList.contains('active')) {
            button.classList.add('active')
            container.style.height = box_height + 'px'
        }
        else {
            button.classList.remove('active')
            container.style.height = '0px'
        }

    }

}