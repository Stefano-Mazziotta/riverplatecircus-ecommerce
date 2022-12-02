import anime from '../../../../node_modules/animejs/lib/anime.es';

function getHeightAnswer($answerWrap){
    const $answerParaph = $answerWrap.childNodes[1];
    return $answerParaph.offsetHeight;
}

function handleClick(event){
    const $questionWrap = event.currentTarget;
    const $answerWrap = $questionWrap.nextElementSibling;
    const $statusExpand = $questionWrap.childNodes[1];

    const isCollapsed = $questionWrap.classList.contains('collapse');
    if(isCollapsed){
        $questionWrap.classList.remove('collapse');
        $statusExpand.innerHTML = '+';

        anime({
            targets: $answerWrap,
            height: '0px',
            duration: 300,
            easing: 'easeInOutQuad'
        });

        return;
    }

    $statusExpand.innerHTML = '-';
    $questionWrap.classList.add('collapse');

    const heightAnswer = getHeightAnswer($answerWrap);

    anime({
        targets: $answerWrap,
        height: heightAnswer + 'px',
        duration: 300,
        easing: 'easeInOutQuad'
    });
}

function applyClickEventToElements($elements){
    for (const key in $elements) {
        if (Object.hasOwnProperty.call($elements, key)) {
            let $element = $elements[key];
            $element.addEventListener('click', handleClick);
        }
    }
}

window.addEventListener('load', () => {
    const $expandsQuestionWrap = document.getElementsByClassName('question-wrap');
    applyClickEventToElements($expandsQuestionWrap);    
})

