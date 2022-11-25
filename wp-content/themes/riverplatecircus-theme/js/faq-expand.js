window.addEventListener('load', () => {
    const $expandsQuestionWrap = document.getElementsByClassName('question-wrap');

    for (const key in $expandsQuestionWrap) {
        if (Object.hasOwnProperty.call($expandsQuestionWrap, key)) {
            let $element = $expandsQuestionWrap[key];
            $element.addEventListener('click', handleClick);
        }
    }
    
})

function handleClick(event){
    const $questionWrap = event.currentTarget;
    const $answer = $questionWrap.nextElementSibling;
    const $statusExpand = $questionWrap.childNodes[1];

    const isCollapsed = $answer.classList.contains('collapse');
    if(isCollapsed){
        $answer.classList.remove('collapse');
        $questionWrap.classList.remove('collapse');
        $answer.classList.add('remove');
        $statusExpand.innerHTML = '+';
        return;
    }
    
    const existRemove = $answer.classList.contains('remove');
    if(existRemove){
        $answer.classList.remove('remove')
    }
    
    $statusExpand.innerHTML = '-';
    $questionWrap.classList.add('collapse');
    $answer.classList.add('collapse');


}